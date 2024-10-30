@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <h2>
                Progetto
            </h2>
            <div class="card">
                <div class="card-body">

                    <h4>
                        Titolo: {{ $project->title }}
                    </h4>

                    <ul>
                        <li>
                            Descrizione: {{ $project->description }}
                        </li>
                        <li>
                            Tipo di progetto collegato: {{ $project->type->name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection