@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h3>{{ $project->type->name }}</h3>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <img class="w-50" src="{{ $project->image }}" alt="{{ $project->title }}">
        <p>{!! $project->description !!}</p>

        @if ($project->tags && count($project->tags) > 0)
            <div>
                <h3>Tag del progetto:</h3>
                @foreach ($project->tags as $tag)
                    <a href="#" class="badge text-bg-light">{{ $tag->title }}</a>
                @endforeach
            </div>
        @endif

    </div>
@endsection
