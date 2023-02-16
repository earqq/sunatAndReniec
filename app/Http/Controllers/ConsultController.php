<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultController extends Controller
{
    /**
     * Get user data from Sibi reniec
     * @param String Number of dni of the user
     * @return Object object with all user data
     */
    public function getPersonData(String $dni){
        if(strlen($dni) != 8){
            $response = array(
                'status' => 0,
                'message' => 'The dni number length is incorrect'
            );
            return json_encode($response);
        }
        $personData = $this->getDataFromSibi($dni);
        return $personData;
    }
    /**
    * Get company Data from Sibi Sunat
    * @param String Number of ruc of the company
    * @return Object object with all company data
    */
    public function getCompanyData(String $ruc){
        if(strlen($ruc) != 11){
            $response = array(
                'status' => 0,
                'message' => 'The ruc number length is incorrect'
            );
            return json_encode($response);
        }
        $personData = $this->getDataFromSibi($ruc);
        return $personData;
    }
    /**
     * Get user and company data from an app called Sibi
     * @param String Document of identity for person or company
     * @return Object return object with response
     */
    private function getDataFromSibi(String $doc){
        $url = "https://api.sibi.pe/tools/consult/identification/".$doc;
        $ch=curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
        ));                       
        $result = curl_exec($ch);         
        curl_close($ch);
        return $result;
    }
}
