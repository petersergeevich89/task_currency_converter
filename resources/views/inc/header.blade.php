<div id='myheader' class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

        <span class="fs-4">@yield('title-block')</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        @if(Auth::user())
            <a class="me-3 py-2 text-dark text-decoration-none" href=" {{ route('form-cur') }}">Курсы валют</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('form-edit') }}">Информация</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('form-update') }}">Редактирова</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('logout')  }}">Выход</a>
        @else
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login')  }}">Войти</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('register') }}">Регистрация</a>
        @endif

    </nav>
</div>
