@extends('layouts.admin')

@section('title', "Staff / Partenaires")


@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route("admin.staff.create") }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Créer</a>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-3">
            <div class="card-body">
                <h4>Staff</h4>
                <div class="table-responsive">
                    <table class="table mb-3">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Rôle</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($staff as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route("admin.staff.edit", $item) }}" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('admin.staff.destroy', $item) }}" method="post" class="mx-1" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cela ? Vous ne pourrez pas revenir en arrière !');">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="4" class="text-center">Aucun staff.</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $staff->links() }}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-3">
            <div class="card-body">
                <h4>Partenaires</h4>
                <div class="table-responsive">
                    <table class="table mb-3">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($partners as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route("admin.staff.edit", $item) }}" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('admin.staff.destroy', $item) }}" method="post" class="mx-1" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cela ? Vous ne pourrez pas revenir en arrière !');">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3" class="text-center">Aucun Partenaire.</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $partners->links() }}
            </div>
        </div>
    </div>
</div>
@endsection