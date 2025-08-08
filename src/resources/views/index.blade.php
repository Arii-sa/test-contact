@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('link')
<form class="form" action="{{ route('logout') }}" method="post">
    @csrf
    <input class="header__link" type="submit" value="logout">
</form>
@endsection

