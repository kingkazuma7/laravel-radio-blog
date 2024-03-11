@extends('layouts.app')

@section('content')
  <h2>記事の投稿</h2>
  <form action="{{ route('articles.store') }}" method="post">
    @csrf
    <div>
      <label for="title">タイトル:</label>
      <input type="text" id="title" name="title" required>
    </div>
    <div>
      <label for="body">本文:</label>
      <textarea id="body" name="body" required></textarea>
    </div>
    <div>
      <button type="submit">投稿する</button>
      <a href="{{ route('articles.index') }}">キャンセル</a>
    </div>
  </form>
@endsection
