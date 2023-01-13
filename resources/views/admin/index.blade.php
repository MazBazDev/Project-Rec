@extends('layouts.admin')

@section('title', "Accueil")


@section('content')
<div class="row">
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title mb-0">Utilisateurs</h5>
                    </div>

                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">{{ $users }}</h1>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title mb-0">Court-métrages</h5>
                    </div>

                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="fas fa-video"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">{{ $court }}</h1>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title mb-0">Réservations</h5>
                    </div>

                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">{{ $booking }}</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush

@push('footer-scripts')

@endpush

@push('styles')
<style>
    .stat {
        align-items: center;
        background: #d3e2f7;
        border-radius: 50%;
        display: flex;
        height: 40px;
        justify-content: center;
        width: 40px;
    }
</style>
@endpush

