@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')
    <div class="row">
        <div class="col">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.projects.update', ['project' => $project ->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label 
                                for="title" 
                                class="form-label">
                                <span class="text-danger">*</span>
                                Titolo</label>
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="title" name="title"
                                value="{{ old('title', $project->title) }}"
                                minlength="3"
                                maxlength="64"
                                placeholder="Inserisci il titolo..." 
                                required>
                          </div>
        
                          <div class="mb-3">
                            <label 
                                for="description" 
                                class="form-label">
                                <span class="text-danger">*</span>
                                Descrizione</label>
                            <input 
                                type="text" 
                                class="form-control @error('description') is-invalid @enderror" 
                                id="description" 
                                name="description"
                                value="{{ old('description', $project->description) }}"
                                minlength="3"
                                maxlength="4096"
                                placeholder="Inserisci la descrizone" 
                                required>
                          </div>
        
                          <div class="mb-3">
                            <label 
                                for="image" 
                                class="form-label">Immagine</label>
                            <input 
                                type="text" 
                                class="form-control @error('image') is-invalid @enderror" 
                                id="image" 
                                name="image"
                                value="{{ old('image', $project->image) }}"
                                minlength="5"
                                maxlength="2048" 
                                placeholder="Inserisci il link del immagine">
                          </div>
        
                          <div class="mb-3">
                            <label 
                                for="category" 
                                class="form-label">
                                <span class="text-danger">*</span>
                                Categoria</label>
                            <input 
                                type="text" 
                                class="form-control @error('category') is-invalid @enderror" 
                                id="category" 
                                name="category"
                                value="{{ old('category', $project->category) }}"
                                minlength="2"
                                maxlength="64" 
                                placeholder="Inserisci il link del immagine">
                          </div>
        
                          <div>
                            <button type="submit" class="btn btn-success">
                                Modifica
                            </button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection