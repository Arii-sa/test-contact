@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('link')
<a class="header__link" href="/register">register</a>
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form__title">Login</h2>
    <div class="login-form__content">
        <form class="login-form__form" action="/login" method="post">
            @csrf

            <div class="login-form__group">
                <label class="login-form__label" for="email">メールアドレス</label>
                <input class="login-form__input" type="email" name="email" id="email" placeholder="例: test@example.com">
            </div>

            <div class="login-form__group">
                <label class="login-form__label" for="password">パスワード</label>
                <input class="login-form__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
            </div>

            <input class="login-form__send" type="submit" value="ログイン">
        </form>
    </div>
</div>
@endsection('content')