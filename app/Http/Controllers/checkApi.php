<?php
namespace App\Http\Controllers;

trait checkApi{
    use apiResponseTrait;
     public function checkRequest($data){
    $msg="The Page is not Found";
       if($data){
        return $this->apiResponce($data,"ok",200); 
       }
       
        return $this->apiResponce(null,[$msg],404);
     }
}