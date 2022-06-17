<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Invoices;
use App\Http\Traits\InvoiceTrait;

//use App\Helper;
class WaveappController extends Controller {
    use InvoiceTrait;
    public function WaveGetBusinesses(Request $request) {

        $waveapp = new \Subbe\WaveApp\WaveApp();
        $countries = $waveapp->businesses();

        return $countries;  
    }
    public function WaveCustomerSyn(Request $request) {

        $waveapp = new \Subbe\WaveApp\WaveApp();
            $all_customers=callcurl('clients','GET', $parameter = "");
            $all_customers= json_decode($all_customers,true);
	
            foreach($all_customers as $customer_item){
                $cust = DB::table('customers')->where('Cust_UISP_ID', $customer_item['id'])->first();
	
                if(!isset($cust->idcustomers)){
                    $customer = new Customer;
                    $customer->Cust_FullName = $customer_item['companyName'] .' - ( '.$customer_item['firstName'].' '.$customer_item['lastName'].' )';
                    $customer->Cust_UISP_ID = $customer_item['id'];
                    $customer->save();
                
                if($customer->Cust_IsSync == 0){		 
                    $customer_info = [
                            "input" => [
                            "businessId" => env('WAVE_BUSINESS_ID'),
                            "name" => $customer_item['firstName'].' '.$customer_item['lastName'],
                            "firstName" => $customer_item['firstName'],
                            "lastName" => $customer_item['lastName'],
                            "displayId" => $customer_item['firstName'],
                            "email" => $customer_item['contacts'][0]['email'],
                            "mobile" => $customer_item['contacts'][0]['phone'],
                            "phone" => $customer_item['contacts'][0]['phone'],
                            "fax" => "",
                            "tollFree" => "",
                            "website" => "",
                            "internalNotes" => "",
                            "currency" => $customer_item['currencyCode'],
                            "address" => [
                                "addressLine1" => $customer_item['street1'],
                                "addressLine2" => $customer_item['street2'],
                                "city" => $customer_item['city'],
                                "postalCode" => $customer_item['zipCode'],
                                "countryCode" => 'US',
                            ],
                            "shippingDetails" => [
                                "name" => $customer_item['firstName'].' '.$customer_item['lastName'],
                                "phone" => $customer_item['contacts'][0]['phone'],
                                "address" => [
                                "addressLine1" => $customer_item['street1'],
                                "addressLine2" => $customer_item['street2'],
                                "city" => $customer_item['city'],
                                "postalCode" => $customer_item['zipCode'],
                                "countryCode" =>'US'
                                ],
                            ],
                        ],
                    ];
		      $newCustomer= $waveapp->customerCreate($customer_info, "CustomerCreateInput");
			  $customer_info='';
                         // Update DB Value Sync to 1
                        Customer::where('Cust_UISP_ID',$customer_item['id'])->update(['Cust_IsSync'=>1,'CUST_WAVE_ID'=>$newCustomer['data']['customerCreate']['customer']['id']]);
			  
			 }
			 }

        }
    }
	
	
    public function WaveProductSyn(Request $request) {
        $waveapp = new \Subbe\WaveApp\WaveApp();
             $all_products=callcurl('products','GET', $parameter = "");
                $all_products= json_decode($all_products,true);
	        $created_products=array();
                foreach($all_products as $product_item){
                $product = DB::table('products')->where('Prod_Type','product')->where('Prod_UISP_ID', $product_item['id'])->first();

                if(!isset($product->idproducts)){
                    $product = new Product;
                    $product->Prod_Name = $product_item['name'];
                    $product->Prod_Type = 'product';
                    $product->Prod_UISP_ID = $product_item['id'];
                    $product->save();
                }
                
                if($product->Prod_IsSync == 0){
                    $product = [
                    "input" => [
                        "businessId" => env('WAVE_BUSINESS_ID'),
                        "name" => @$product_item['name'],
                        "description" => @$product_item['invoiceLabel'],
                        "unitPrice" => @$product_item['price'],
                        "incomeAccountId" =>env('INCOME_ACCOUNT_ID')  
                                    ],     
                        ];

                         $newProduct= $waveapp->productCreate($product, "ProductCreateInput");
                         $product='';
                         $created_products[]=$newProduct;
                         
                         // Update DB Value Sync to 1
                        // DB::update("UPDATE products SET Prod_IsSync = 1 , Prod_WAVE_ID = '". $newProduct['data']['productCreate']['product']['id'] ."' WHERE Prod_UISP_ID = ".$product_item['id']." AND Prod_Type = 'product'");
                        Product::where(['Prod_UISP_ID'=>$product_item['id'],'Prod_Type'=>'product'])->update(['Prod_IsSync'=>1,'Prod_WAVE_ID'=>$newProduct['data']['productCreate']['product']['id']]);

                        

                }        
		
            }
	return $created_products;
    }
    
    public function WaveServiceSyn(Request $request) {
        $waveapp = new \Subbe\WaveApp\WaveApp();
            $all_products=callcurl('clients/services','GET', $parameter = "");
            
            $all_products= json_decode($all_products,true);
	        $created_products=array();
                foreach($all_products as $product_item){
                $product = DB::table('products')->where('Prod_Type','=','service')->where('Prod_UISP_ID','=', $product_item["id"])->first();

                if(!isset($product->idproducts)){
                    $product = new Product;
                    $product->Prod_Name = $product_item['name'];
                    $product->Prod_Type = 'service';
                    $product->Prod_UISP_ID = $product_item['id'];
                    $product->save();
                }
                
                if($product->Prod_IsSync == 0){
                    $product = [
                    "input" => [
                        "businessId" => env('WAVE_BUSINESS_ID'),
                        "name" => @$product_item['name'],
                        "description" => @$product_item['invoiceLabel'],
                        "unitPrice" => @$product_item['price'],
                        "incomeAccountId" => env('INCOME_ACCOUNT_ID')  
                                    ],     
                        ];

                         $newProduct= $waveapp->productCreate($product, "ProductCreateInput");
                         $product='';
                         $created_products[]=$newProduct;
                         
                        Product::where(['Prod_UISP_ID'=>$product_item['id'],'Prod_Type'=>'service'])->update(['Prod_IsSync'=>1,'Prod_WAVE_ID'=>$newProduct['data']['productCreate']['product']['id']]);
                }    
		
            }
	return $created_products;
    }
    
    public function WaveInvoiceSyn(Request $request) {
        
        $waveapp = new \Subbe\WaveApp\WaveApp();
            $all_invoices = callcurl('invoices','GET', $parameter = "");
            $all_invoices = json_decode($all_invoices,true);
            $created_invoices=array();

            foreach($all_invoices as $invoices)
            {
                //---Check invoice in DB-------
                $checkinvoice = DB::table('invoices')->where('Inv_UISP_ID',$invoices['id'])->first();
                if(empty($checkinvoice))
                {
                        //---Create Invoice in Wave--------
                        $newinvoice = $this->saveinvoice($invoices);
                        //----Save all invoice in array----
                        $invoice='';
                        $created_invoices[]=$newinvoice;
                }else{
                    if($checkinvoice->Inv_IsSync == 0){
                        //-----Delete invoice--------

                        //---Create Invoice in Wave--------
                        $newinvoice = $this->saveinvoice($invoices);
                        //----Save all invoice in array----
                        $invoice='';
                        $created_invoices[]=$newinvoice;
                   }
                }   
		    }
           // print_r($created_invoices);
    } 

    public function WaveGetCustomers(Request $request) {

        $waveapp = new \Subbe\WaveApp\WaveApp();
        $variables = '
        {
        "businessId": '.env('WAVE_BUSINESS_ID').',
        "page": 1,
        "pageSize": 10
        }';
        $customers = $waveapp->customers($variables);

        return $customers;
    }

    public function WaveCustomerCreate(Request $request) {
        $waveapp = new \Subbe\WaveApp\WaveApp();
        $customer = [
            "input" => [
                "businessId" => env('WAVE_BUSINESS_ID'),
				'id'=>'',
                "name" => "Genevieve Heidenreich",
                "firstName" => "Anil",
                "lastName" => "Pal",
                "displayId" => "Anil",
                "email" => "anil.pal2006@gmail.com",
                "mobile" => "011 8795",
                "phone" => "330 8738",
                "fax" => "566 5965",
                "tollFree" => "266 5698",
                "website" => "",
                "internalNotes" => "",
                "currency" => "USD",
                "address" => [
                    "addressLine1" => "167 Iva Run",
                    "addressLine2" => "Parker Mews, Monahanstad, 40778-7100",
                    "city" => "West Tyrique",
                    "postalCode" => "99546",
                    "countryCode" => "US",
                ],
                "shippingDetails" => [
                    "name" => "Genevieve",
                    "phone" => "011 8795",
                    "address" => [
                        "addressLine1" => "167 Iva Run",
                        "addressLine2" => "Parker Mews, Monahanstad, 40778-7100",
                        "city" => "West Tyrique",
                        "postalCode" => "99546",
                        "countryCode" => "US",
                    ],
                ],
            ],
        ];

        $newCustomer = $waveapp->customerCreate($customer, "CustomerCreateInput");
        return $newCustomer;
    }

}