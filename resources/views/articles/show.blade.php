@extends('layouts.app')

@section('content')
    <h1>記事の詳細ページ</h2>
    <article>
      <h2>{{ $article->title }}</h2>
      <div>{{ $article->created_at }}</div>
      <div>{!! nl2br(e($article->body)) !!}</div>
      <div><a href="{{ route('articles.edit', $article) }}">編集(articles.edit)</a></div>
    </article>
    @include('commons.links')
@endsection
