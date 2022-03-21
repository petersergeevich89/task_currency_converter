
@extends('layouts.app')

@section('title-block')Войти @endsection

@section('content')

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                 <label >Еmail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <label>Пароль</label>

                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>



            <div>

                <button class="btn btn-success mt-4"">
                    {{ __('Войти') }}
                </button>
            </div>
        </form>

@endsection
