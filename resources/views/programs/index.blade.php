@extends('layouts.app')

@section('content')
    <h1>番組一覧</h1>
    @if($programs->count() > 0)
        @foreach ($programs as $program)
            <h2>{{ $program->name }}</h2>
            <p>{{ $program->description }}</p>
            @foreach ($program->episodes as $episode)
                <h3>{{ $episode->title }}</h3>
                <p>{{ $episode->description }}</p>
                <p>放送日時: {{ $episode->broadcasted_at }}</p>
                @foreach ($episode->transcripts as $transcript)
                    <p>{{ $transcript->content }}</p>
                @endforeach
            @endforeach
        @endforeach
    @else
        <p>番組データがありません。</p>
    @endif
@endsection
