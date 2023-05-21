@extends('layouts.guest')

@section('title', $poster->name)

@section('content')
<section style="padding-top: 180px;">
    <div class="row">
        <div class="col-md-6">
            <div class="container ">
                <div class="d-block">
                    <img id="poster" class="img-fluid " src="{{ $poster->imgUrl() }}" alt="">
                    <h2 class="members-title">Membres</h2>
                    <div class="member-container">
                        @foreach ($poster->team as $item)
                        <p class="member">{{ $item }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="d-block" style="width: 100%">
                    <h1>{{ $poster->name }}</h1>
                    <hr>
                    {!! $poster->desc !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    #poster {
        border-radius: 18px!important;
    }
    .members-title {
        font-size: 1.9rem;
        margin-top: 20px
    }
    .member-container {
        width: 100%;
        display: inline-flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 30px
    }
    .member {
        padding: 1rem;
        margin: 10px;
        border: 1px solid #ffffff;
        border-radius: 15px
    }
</style>
@endpush
