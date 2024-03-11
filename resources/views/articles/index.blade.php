@extends('layouts.app')

@section('content')
  @foreach ($articles as $article)
    <article>
      <div>{{ $article->title }}</div>
      <div>{{ $article->body }}</div>
    </article>
    @endforeach
    <a href="{{ route('articles.create') }}">記事を書く(articles.create)</a>
@endsection
