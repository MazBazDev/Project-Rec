@extends('layouts.admin')

@section('title', "Paramètres")


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route("admin.settings.store") }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="custom-control custom-switch">
                        <input @checked(old("maintenance", setting("settings.maintenance", false))) type="checkbox" name="maintenance" class="custom-control-input" id="maintenance">
                        <label class="custom-control-label" for="maintenance">Activer la maintenance</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input @checked(old("registrations", setting("settings.registrations", false))) type="checkbox" name="registrations" class="custom-control-input" id="registrations">
                        <label class="custom-control-label" for="registrations">Activer les incriptions</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="site.name">Nom du site</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" value="{{ old('site.name', setting('settings.site.name')) }}">
                    </div>
                </div>
            </div>  
            <button type="submit" class="btn btn-success">Mettre à jour</button>
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

