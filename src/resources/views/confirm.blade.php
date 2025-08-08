@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">{{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }}</td>
                    <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}" >
                    <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        @if($contacts['gender'] == 1)
                        男性
                        @elseif($contacts['gender'] == 2)
                        女性
                        @else
                        その他
                        @endif
                    </td>
                    <input type="hidden" name="gender" value="{{ $contacts['gender'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        {{ $contacts['email'] }}
                    </td>
                    <input type="hidden" name="email" value="{{ $contacts['email'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        {{ $contacts['tell'] }}
                    </td>
                    <input type="hidden" name="tell" value="{{ $contacts['tell'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        {{ $contacts['address'] }}
                    </td>
                    <input type="hidden" name="address" value="{{ $contacts['address'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        {{ $contacts['building'] }}
                    </td>
                    <input type="hidden" name="building" value="{{ $contacts['building'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        {{ $category->content }}
                    </td>
                    <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}" >
                </tr>

                <tr class="confirm-table__raw">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        {{ $contacts['detail'] }}
                    </td>
                    <input type="hidden" name="detail" value="{{ $contacts['detail'] }}" >
                </tr>

            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a class="form__button-back" href="/contact">修正</a>
        </div>
    </form>
</div>
@endsection