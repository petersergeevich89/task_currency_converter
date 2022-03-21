@extends('layouts.app')

@section('title-block')Курсы@endsection

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

    <?php
    if(isset($retArr))
    {
        foreach ($retArr as $key=>$value)
        {
            ?>
            <label><?php echo $key; ?></label>
            <input name="<?php echo $key; ?>" value="<?php echo $value; ?>" placeholder="<?php echo $key; ?>" class="form-control"><br>
            <?php
        }
    }
    ?>

{{--@if(isset($_GET['retArr']['byn']))--}}
{{--    <label>byn</label><br>--}}
{{--    <label class="input-group-text"><?php echo $_GET['retArr']['byn']; ?></label><br>--}}
{{--    <label>usd</label><br>--}}
{{--    <label class="input-group-text"><?php echo $_GET['retArr']['usd']; ?></label><br>--}}
{{--    <label>eur</label><br>--}}
{{--    <label class="input-group-text"><?php echo $_GET['retArr']['eur']; ?></label><br>--}}
{{--    <label>rus</label><br>--}}
{{--    <label class="input-group-text"> <?php echo $_GET['retArr']['rus']; ?></label><br>--}}
{{--@endif--}}


@endsection
