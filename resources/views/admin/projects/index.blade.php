@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <header>
        <h1>Projects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Ultima modifica</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.projects.show', $project) }}" class="btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn">
                                    <i class="fas fa-pencil me-2"></i>
                                </a>

                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit">
                                        <i class="fas fa-trash me-2"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6">
                            <h3>Non ci sono post</h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </header>
@endsection
@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection
