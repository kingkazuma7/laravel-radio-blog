@extends('layouts.app')

@section('content')
  @foreach ($articles as $article)
    <article>
      <div>{{ $article->title }}</div>
      <div>{{ $article->body }}</div>
    </article>
  @endforeach
@endsection
