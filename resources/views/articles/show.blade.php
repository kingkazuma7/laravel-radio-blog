@extends('layouts.app')

@section('content')
    <h1>記事の詳細ページ</h2>
    <article>
      <h2>{{ $article->title }}</h2>
      <div>{{ $article->created_at }}</div>
      <div>{!! nl2br(e($article->body)) !!}</div>
      <div><a href="{{ route('articles.edit', $article) }}">編集(articles.edit)</a></div>
      <form onsubmit="return confirm('本当に削除しますか?')" action="{{ route('articles.destroy', $article) }}" method="post">
      @csrf
      @method('delete')
      <button type="submit">削除(articles.destroy)</button>
    </form>
    </article>
    @include('commons.links')
@endsection
