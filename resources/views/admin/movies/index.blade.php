@extends('layouts.admin')

@section('title', "Utilisateurs")


@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Par</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>TestFilm</td>
                <td>MazBaz</td>
                <td><a href="{{ route("admin.movies.edit", 1) }}" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger mx-1"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection

@push('scripts')

@endpush

@push('footer-scripts')

@endpush

@push('styles')

@endpush

