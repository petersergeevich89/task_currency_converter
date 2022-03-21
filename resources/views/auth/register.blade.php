
@extends('layouts.app')

@section('title-block')Регистрация пользователя @endsection

@section('content')

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
        <div>
            <label>Имя</label>
            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div>
            <label> Email</label>

            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div >
            <label>Пароль</label>

            <input id="password" class="form-control"
                   type="password"
                   name="password"
                   required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div >
            <label>Пароль еще раз</label>

            <input id="password_confirmation" class="form-control"
                   type="password"
                   name="password_confirmation" required />
        </div>

        <div >

            <button class="btn btn-success mt-4">
                {{ __('Регистрация') }}
            </button>
        </div>
    </form>

@endsection
