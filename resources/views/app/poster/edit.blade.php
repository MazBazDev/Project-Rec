@extends('layouts.app')

@section('content')
<h1>Modifier l'affiche : {{ $poster->name }}</h1>

<form action="{{ route("dashboard.posters.update", $poster) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("patch")
    
    @include("app.poster._form")

    <div class="d-grid">
        <button type="submit" class="btn btn-success">Modifier l'affiche</button>
    </div>
</form>
@endsection