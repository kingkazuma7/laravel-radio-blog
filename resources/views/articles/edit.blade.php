@extends('layouts.app')

@section('content')
@include('commons.errors')
  <h2>記事の編集</h2>
  <form action="{{ route('articles.update', $article) }}" method="post">
    @method('patch')
    @include('articles.form')
    <div>
      <button type="submit">更新する</button>
      <a href="{{ route('articles.show', $article) }}">キャンセル</a>
    </div>
  </form>
@endsection
