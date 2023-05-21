@extends('layouts.app')

@section('content')
<h1>Affiches</h1>

<div class="d-flex justify-content-end">
    <a href="{{ route("dashboard.posters.create") }}" class="btn btn-success">Ajouter une affiche</a>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posters as $item)
                <tr class="">
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td class="d-flex gap-3">
                        <a href="{{ route("posters.show", $item) }}" class="btn btn-info text-white"><i class="bi bi-eye"></i></a>
                        <a href="{{ route("dashboard.posters.edit", $item) }}" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i></a>
                        <form onsubmit="return confirm('Do you really want to delete this poster ?');" action="{{ route("dashboard.posters.destroy", $item) }}" method="post">
                            @csrf

                            @method("DELETE")
                            
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr class="">
                <td colspan="3" scope="row" class="text-center">Aucune affiche</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection