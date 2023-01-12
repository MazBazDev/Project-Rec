@extends('layouts.admin')

@section('title', "Créer Staff / Partenaire")

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.staff.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @include('admin.staff._form')

            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Créer</button>
        </form>
    </div>
</div>
@endsection