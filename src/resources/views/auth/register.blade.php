@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('link')
<a class="header__link" href="/login">login</a>
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__title">Register</h2>
    <div class="register-form__content">
        <form class="register-form__form" action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">お名前<//label>
                <input class="register-form__input" type="text" name="name" id="name" placeholder="例：山田 太郎">
            </div>

            <div class="register-form__group">
                <label class="register-form__label" for="email">メールアドレス</label>
                <input class="register-form__input" type="email" name="email" id="email" placeholder="例：test@example.com">
            </div>

            <div class="register-form__group">
                <label class="register-form__label" for="password">パスワード</label>
                <input class="register-form__input" type="password" name="password" id="password" placeholder="例：coachtech1106">
            </div>

            <input class="register-form__send" type="submit" value="登録">
        </form>
    </div>
</div>
@endsection('content')