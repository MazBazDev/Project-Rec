@extends('layouts.admin')

@section('title', "Modifier l'utilisateur")


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route("admin.users.update", $user) }}" method="post">
            @csrf
            @method("PATCH")
            <div class="custom-control custom-switch mb-3">
                <input class="custom-control-input" type="checkbox" id="admin" name="admin" @checked(old("admin", $user->admin))>
                <label class="custom-control-label" for="admin">Administrateur</label>
            </div>
            <img src="{{ $user->profile_photo_url }}" class="rounded mb-3" alt="">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old("name", $user->name) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old("email", $user->email) }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Sauvegarder</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush

@push('footer-scripts')

@endpush

@push('styles')

@endpush

