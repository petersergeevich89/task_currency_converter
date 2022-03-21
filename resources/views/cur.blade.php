@extends('layouts.app')

@section('title-block')Курсы валют@endsection

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>

    @endif

    <form action="{{ route('form-cur') }}" method="post">
        @csrf
        <label >Ввод</label>
        <input name="count"  placeholder="Ввод" class="form-control" >

        <select name="cur" class="btn btn-outline-success dropdown-toggle" >
            <option value="byn">byn</option>
            <option value="usd">usd</option>
            <option value="eur">eur</option>
            <option value="rus">rus</option>
        </select>


        <button type="submit" class="btn btn-success m-4"style="width:145px;">Курс</button>
    </form>


    @if(isset($retArr))
        @foreach ($retArr as $key=>$value)

            <label> {{ $key }} </label>
            <input name="{{ $key }}" value="{{ $value }}" class="form-control"><br>

        @endforeach
    @endif

@endsection


