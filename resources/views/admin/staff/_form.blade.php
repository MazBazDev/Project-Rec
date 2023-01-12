<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="cate" class="form-label">Catégorie</label>
            <select class="form-control" name="cate" id="cate">
                <option value="1" @selected(old("cate", $staff->cate ?? "") == 1)>Staff</option>
                <option value="2" @selected(old("cate", $staff->cate ?? "") == 2)>Partenaire</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Nom / Prénom | Marque</label>
            <input type="text" class="form-control" id="name" name="name" {{ old("name", $staff->name ?? "") }} required>
            @error('name')
                <small class="text-danger" role="alert"><strong>{{ $message }}</strong></small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ old("role", $staff->role ?? "") }}">
            @error('role')
                <small class="text-danger" role="alert"><strong>{{ $message }}</strong></small>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="desc">Description</label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="5">{{ old("desc", $staff->desc ?? "") }}</textarea>
            @error('desc')
                <small class="text-danger" role="alert"><strong>{{ $message }}</strong></small>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Liens</label>
            @include('admin.elements.list-input', ['name' => 'links', 'values' => old("links", $staff->link ?? []), 'placeholder1' => "Titre", "placeholder2" => "Lien"])
        </div>
    </div>
    <div class="col-md-12">
        <label for="imageInput" class="form-label">Image</label>
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" onchange="loadFile(event); displayImage(this);" id="imageInput" accept="image/*" name="image">
              <label class="custom-file-label" id="imageLabel">Choose file</label>
            </div>
            @error('image')
                <small class="text-danger" role="alert"><strong>{{ $message }}</strong></small>
            @enderror
        </div>
        <img src="{{ isset($staff)  ? $staff->getUrlAttribute() : '' }}" id="outputImg" class="img-fluid rounded" style="max-height:400px;" alt="">
        <hr>
    </div>
</div>

@push('scripts')
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('outputImg');
            image.src = URL.createObjectURL(event.target.files[0]);
            console.log("qsdqsd" + event.target.files[0].name)
            document.getElementById('imageLabel').innerHTML = event.target.files[0].name;
            document.getElementById("imageContainer").hidden = false;
        };
    </script>
@endpush

