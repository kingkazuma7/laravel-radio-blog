@extends('layouts.app')

@section('content')
  <h1>記事の一覧ページ</h2>
  @foreach ($articles as $article)
    <article>
      <div><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></div>
      <div>{{ $article->body }}</div>
    </article>
    @endforeach
    @include('commons.links')
@endsection
