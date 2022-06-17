<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Invoices;

trait invoiceTrait {

    function saveinvoice($invoices){

            $waveapp = new \Subbe\WaveApp\WaveApp();
            $item_data_all = [];
            $customer = DB::table('customers')->where('Cust_UISP_ID', $invoices['clientId'])->first();
    
            //---save data in invoice table---------
            $invoicessave = new Invoices;
            $invoicessave->Inv_UISP_ID = $invoices['id'];
            $invoicessave->save(); 
    
            //-----Create Item array -----------
            foreach($invoices['items'] as $iitem){
                if($iitem['type'] == 'product')
                {
                    $product = DB::table('products')->where('Prod_UISP_ID', $iitem['productId'])->where('Prod_Type',$iitem['type'])->first();
                }else{
                    $product = DB::table('products')->where('Prod_UISP_ID', $iitem['serviceId'])->where('Prod_Type',$iitem['type'])->first();
                }
                     if(isset($product->idproducts))
                    {
                        array_push($item_data_all,["productId"=> $product->Prod_WAVE_ID, 'description'=>$iitem["label"]]);
                    }else{
                            $product = new Product;
                            $product->Prod_Name = $iitem['label'];
                            $product->Prod_Type = $iitem['type'];
                            $product->Prod_UISP_ID = 0;
                            $product->save(); 
                        
                            $product_add = [
                            "input" => [
                                "businessId" => env('WAVE_BUSINESS_ID'),
                                "name" => $iitem['label'],
                                "description" => $iitem['label'],
                                "unitPrice" => $iitem['price'],
                                "incomeAccountId" => env('INCOME_ACCOUNT_ID') 
                                            ],     
                                ];
                                $created_products = [];
                                $newProduct= $waveapp->productCreate($product_add, "ProductCreateInput");
    
                                $created_products[]=$newProduct;
    
                                // Update DB Value Sync to 1
                                DB::update("UPDATE products SET Prod_IsSync = 1 , Prod_WAVE_ID = '". $newProduct['data']['productCreate']['product']['id'] ."' WHERE idproducts = ".$product->idproducts);
    
                                array_push($item_data_all,["productId"=> $newProduct['data']['productCreate']['product']['id'], 'description'=>$iitem["label"]]);
                        
                    }
                
            }
    
            $product = DB::table('products')->where('idproducts',$product->idproducts)->first();            
                $invoice = [
                        "input" => [
                            "businessId"=> env('WAVE_BUSINESS_ID'),
                            "customerId"=> $customer->CUST_WAVE_ID,
                           "items"=> $item_data_all
                            // "items"=> [ 
                            //     [
                            //         "productId"=> $product->Prod_WAVE_ID,
                            //     ],[
                            //         "productId"=> "QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTUyNzk=",
                            //     ]
                            //     ]
                            ]
                          ];
                
        	    $newinvoice = $waveapp->invoiceCreate($invoice, "InvoiceCreateInput");
                
                //---Update Invoice table----------
    
                 Invoices::where('idinvoices',$invoicessave->idinvoices)->update(['Inv_IsSync'=>1,'Inv_WAVE_ID'=>$newinvoice['data']['invoiceCreate']['invoice']['id']]);
                return $newinvoice;
        }
    

}