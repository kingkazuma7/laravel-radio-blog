@extends('layouts.app')

@section('content')
    <h1>記事の詳細ページ</h2>
    <article>
      <h2>{{ $article->title }}</h2>
      <div>{{ $article->created_at }}</div>
      <div>{!! nl2br(e($article->body)) !!}</div>
      <div><a href="{{ route('articles.edit', $article) }}">編集(articles.edit)</a></div>
    </article>
    <p><a href="{{ route('articles.index') }}">一覧(articles.index)</a></p>
    <p><a href="{{ route('articles.create') }}">記事を書く(articles.create)</a></p>
@endsection
