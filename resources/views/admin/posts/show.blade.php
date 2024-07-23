@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-2">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-6">
                            <a class="back-arrow" href="{{ route('admin.projects.index') }}">&lt;-Go back</a>
                            <h2>{{ $project->title }}</h2>
                            <h5>{{ $project->description }}</h5>
                            <p>Creato il: {{ $project->created_at }}</p>
                        </div>
                        <div class="image col">
                            <img src="{{ $project->image }}" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-success" href="{{ route('admin.projects.edit', $project) }}">Modify
                            Post</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete Post</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
