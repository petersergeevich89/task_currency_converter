<?php

namespace App\Services;

class CurrencyConvertor
{
    public $curriencies;

    public function __construct()
    {
       $curGet = new \App\Services\CurrencyGet();
       $this->curriencies = $curGet->getCurrency();
    }


    public function convertCurriencies($amount, $value)
    {
        $retArr = [
            'rus'=>0,
            'eur'=>0,
            'usd'=>0,
            'byn'=>0,
        ];
//dd($this->curriencies);die();
        if(isset($amount)){
            switch ($value){
                case 'byn':
                    $byn = $amount ?? "Нет";
                    $usd = (1/$this->curriencies[5]['Cur_OfficialRate']) * $amount ?? "Нет";
                    $eur = (1/$this->curriencies[6]['Cur_OfficialRate']) * $amount ?? "Нет";
                    $rus = (1/$this->curriencies[17]['Cur_OfficialRate']) * $amount * 100 ?? "Нет";
                    $retArr = [
                        'byn'=>$byn,
                        'usd'=>round($usd,3),
                        'eur'=>round($eur,3),
                        'rus'=>round($rus,3),
                    ];
                    break;
                case 'usd':
                    $byn = $this->curriencies[5]['Cur_OfficialRate'] * $amount;
                    $usd = $amount ?? "Нет";
                    $eur = ($this->curriencies[5]['Cur_OfficialRate']/$this->curriencies[6]['Cur_OfficialRate']) * $amount ?? "Нет";
                    $rus = ($this->curriencies[5]['Cur_OfficialRate']/$this->curriencies[17]['Cur_OfficialRate']) * $amount * 100 ?? "Нет";
                    $retArr = [
                        'usd'=>$usd,
                        'byn'=>round($byn,3),
                        'eur'=>round($eur,3),
                        'rus'=>round($rus,3),
                    ];
                    break;
                case 'eur':
                    $byn = $this->curriencies[6]['Cur_OfficialRate'] * $amount ?? "Нет";
                    $usd = ($this->curriencies[6]['Cur_OfficialRate']/$this->curriencies[5]['Cur_OfficialRate']) * $amount ?? "Нет";
                    $eur = $amount ?? "Нет";
                    $rus = ($this->curriencies[6]['Cur_OfficialRate']/$this->curriencies[17]['Cur_OfficialRate']) * $amount * 100 ?? "Нет";
                    $retArr = [
                        'eur'=>$eur,
                        'usd'=>round($usd,3),
                        'byn'=>round($byn,3),
                        'rus'=>round($rus,3),
                    ];
                    break;
                case 'rus':
                    $byn = ($this->curriencies[17]['Cur_OfficialRate'] * $amount) / 100;
                    $usd = ($this->curriencies[17]['Cur_OfficialRate'] / ($this->curriencies[5]['Cur_OfficialRate'] * 100) ) * $amount;
                    $eur = ($this->curriencies[17]['Cur_OfficialRate'] / ($this->curriencies[6]['Cur_OfficialRate'] * 100) ) * $amount;
                    $rus = $amount ?? "Нет";
                    $retArr = [
                        'rus'=>round($rus,3),
                        'eur'=>round($eur,3),
                        'usd'=>round($usd,3),
                        'byn'=>round($byn,3),
                    ];
                    break;
            }
        }
        return $retArr;
    }
}
