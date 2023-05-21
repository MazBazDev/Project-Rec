<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ old("name", $poster->name ?? "") }}">
          @error("name")
            <div>{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Content</label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10">{{ old("desc", $poster->desc ?? "") }}</textarea>
            
            @error("desc")
			    <div>{{ $message }}</div>
			@enderror  
        </div>
          
    </div>
    <div class="col-md-6">
        @include('components.img-input', ['title' => "Affiche", 'name' => 'team', 'value' => old("team", isSet($poster) ? $poster->imgUrl() : "")])
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="" class="form-label">Membres de l'équipe</label>
            
            @include('components.list-input', ['name' => 'team', 'values' => old("team", $poster->team ?? [])])
        </div>
    </div>
</div>