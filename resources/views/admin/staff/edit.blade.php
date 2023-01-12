@extends('layouts.admin')

@section('title', "Editer " . $staff->name)

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.staff.update', $staff) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            @include('admin.staff._form')

            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Créer</button>
        </form>
    </div>
</div>
@endsection