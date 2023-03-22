@extends('layouts.app')

@section('content')
<h1>Créer une affiche</h1>

<form action="{{ route("dashboard.posters.store") }}" method="POST" enctype="multipart/form-data">
    @csrf

    @include("app.poster._form")

    <div class="d-grid">
        <button type="submit" class="btn btn-success">Créer l'affiche</button>
    </div>
</form>
@endsection