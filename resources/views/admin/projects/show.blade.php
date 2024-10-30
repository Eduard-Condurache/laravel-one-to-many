@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Title: {{ $project->title }}
                    </h5>
                    <p>
                        Description: {{ $project->description }}
                    </p>
                    <img src="{{ $project->image }}" alt="{{ $project->title }}">
                </div>
            </div>
        </div>
    </div>
@endsection