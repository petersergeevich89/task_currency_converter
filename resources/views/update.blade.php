
@extends('layouts.app')

@section('title-block')Редкатировать @endsection

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


    <form action="{{ route('form-update-add') }}" method="post">
        @csrf
        <label >Имя пользователя</label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control">
        <label>Почта</label>
        <input type="text" name="email" value="{{$user->email}}" class="form-control">

        <br>
        <button type="submit" class="btn btn-success">Обновить</button>

    </form>

@endsection
