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
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                    <div class="d-flex">
                      <a href="{{ route("admin.users.edit", $item) }}" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a>
                      @if($item->id !== Auth::user()->id)
                        <form action="{{ route('admin.users.destroy', $item) }}" method="post" class="mx-1" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cela ? Vous ne pourrez pas revenir en arrière !');">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      @endif
                    </div>
                  </td>
                </tr>
              @empty
                <td colspan="4">Aucun utilisateur</td>
              @endforelse
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

