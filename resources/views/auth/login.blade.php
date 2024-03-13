@extends('layouts.app')

@section('content')
@include('commons.errors')
  <h1>ログイン</h2>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <dl class="form-list">
      <dt>メールアドレス</dt>
      <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
      <dt>パスワード</dt>
      <dd><input type="password" name="password"></dd>
    </dl>
    <button type="submit">ログイン</button>
    <a href="/">キャンセル</a>
  </form>
  @include('commons.links')
@endsection
