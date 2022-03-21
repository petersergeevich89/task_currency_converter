@extends('layouts.app')

@section('title-block')История@endsection

@section('content')
    <p><label>Имя пользователя: </label>
    {{$info['user']->name}}</p>
    <p><label>Почта: </label>
    {{$info['user']->email}}</p>


    @foreach($info['history'] as $history)
        <p>Валюта поиска {{$history->cur_enter}}.<br>
            byn: {{$history->byn}},<br>
            usd: {{$history->usd}},<br>
            eur: {{$history->eur}},<br>
            rus: {{$history->rus}} <br>
            дата: {{$history->created_at}}<br>

            <a href="{{ route('form-cur-delete',['id'=>$history->id ])}}">Удалить</a></p>
    @endforeach

@endsection


