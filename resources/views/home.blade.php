@extends('layouts.app')

@section('content')
@include('commons.errors')
  <h1>マイページ</h2>
  <p>ようこそ、 {{ Auth::user()->name }}さん</p>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
  </form>
  @include('commons.links')
@endsection
