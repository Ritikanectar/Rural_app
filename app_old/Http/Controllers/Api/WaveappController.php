<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Helper;
class WaveappController extends Controller {

    public function WaveGetBusinesses(Request $request) {

        $queryword = 'businesses';
        $response = getGraphQlData($queryword);

        return $response;
    }

    public function WaveGetCustomers(Request $request) {

        $variables = '
        {
        "businessId": "QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNl",
        "page": 1,
        "pageSize": 5
        }';
        $queryword = 'customers';
        $response = getGraphQlData($queryword,$variables);

        return $response;
    }

    public function WaveCustomerCreate(Request $request) {
      
        $customer = [
            "input" => [
                "businessId" => "QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNl",
                "name" => "Genevieve Heidenreich",
                "firstName" => "Anil01",
                "lastName" => "Pal",
                "displayId" => "Anil",
                "email" => "anil01.pal2006@gmail.com",
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

        $queryword = 'customerCreate';
        $inputword = 'CustomerCreateInput';
        $response = WavegraphQlMutation($queryword,$inputword,$customer);
        return $response;
    }

}