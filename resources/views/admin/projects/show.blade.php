@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <header>
        <h1 class="my-5">{{ $project->title }}</h1>
    </header>
    <hr>
    <main>
        <div class="clearfix">
            @if ($project->image)
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="me-2 float-start">
            @endif
            <p>{{ $project->description }}</p>
            <div>
                <strong>Creato il:</strong>{{ $project->created_at }}
                <strong>Ultima modifica:</strong>{{ $project->uptaded_at }}
            </div>
        </div>
    </main>

    <footer class="d-flex justify-content-between align-items-center my-3">

        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna indietro</a>

    </footer>

@endsection
