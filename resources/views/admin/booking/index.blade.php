@extends('layouts.admin')

@section('title', "Réservations")


@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Num.</th>
                <th scope="col">Email</th>
                <th scope="col">Personnes</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pg7fqk8pYQB</td>
                <td>mrlog42@gmail.com</td>
                <td>3</td>
                <td><a href="" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a><a href="" class="btn btn-danger mx-1"><i class="fas fa-trash-alt"></i></a></td>
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

