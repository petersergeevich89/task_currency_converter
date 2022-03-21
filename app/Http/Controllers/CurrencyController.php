<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CurRequest;

class CurrencyController extends Controller
{
//public $retArr = [];

//    public function __construct(Request $req)
//    {
//        $amount = $req->input('count');
//        $value = $req->input('cur');
//
//        $curConv = new \App\Services\CurrencyConvertor();
//        $this->retArr = $curConv->convertCurriencies($amount, $value);
//    }

    public function curShow()
    {
        return view('cur');
    }

    public function addHistory(CurRequest $req)
    {

        $amount = $req->input('count');
        $value = $req->input('cur');

        $curConv = new \App\Services\CurrencyConvertor();
        $retArr = $curConv->convertCurriencies($amount, $value);

        $history = new History();
        $history->cur_enter = array_key_first($retArr);
        $history->byn = $retArr['byn'];
        $history->usd = $retArr['usd'];
        $history->eur = $retArr['eur'];
        $history->rus = $retArr['rus'];
        $history->id_user = Auth::id();

        $history->save();

         //return view('form-work', ['retArr'=>$retArr]);
         //return redirect()->route('form-work', ['retArr'=>$retArr]);
        return view('cur', ['retArr'=>$retArr]);
    }

    public function curDelete( Request $req  )
    {
        History::find($req->input('id'))->delete();

        return redirect()->route('form-edit');

    }
}


