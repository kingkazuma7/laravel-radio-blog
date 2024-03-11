@extends('layouts.app')

@section('content')
  <h2>記事の投稿</h2>
  <form action="{{ route('articles.store') }}" method="post">
    @csrf
    @include('articles.form')
    <div>
      <button type="submit">投稿する</button>
      <a href="{{ route('articles.index') }}">キャンセル</a>
    </div>
  </form>
@endsection
