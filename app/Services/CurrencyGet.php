<?php


namespace App\Services;


class CurrencyGet
{
    public $decode;
    public $json;

    public function __construct()
    {
//        $uri = 'http://test/rate.json';
        $uri = 'https://www.nbrb.by/api/exrates/rates?periodicity=0';
        $path = __DIR__ . '\..\..\rates.json';


        $file_headers = @get_headers($uri);

//dd($file_headers);die();
        if($file_headers){
            $this->json = file_get_contents( $uri );

            if(date('Y-m-d H:i', filemtime($path)) !== date('Y-m-d H:i')){
                file_put_contents($path, $this->json);
            }
        }else{
            $this->json = file_get_contents( $path );
        }
    }

    public function getCurrency()
    {
        $this->decode = json_decode($this->json, true);
        return $this->decode;
    }
}
