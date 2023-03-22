<div class="mb-3">
    <label for="picture" class="form-label">{{ $title }}</label>
    <input class="form-control" type="file" id="picture" name="picture" onchange="displayImage()" accept="image/*">

    @error("picture")
      <div>{{ $message }}</div>
    @enderror
</div>

<img id="imageDisplay" src="{{ $value }}" class="img-fluid rounded-top" alt="">

@push('footer-scripts')
<script>
    function displayImage() {
      var input = document.getElementById("picture");
      var imageDisplay = document.getElementById("imageDisplay");
      imageDisplay.src = URL.createObjectURL(input.files[0]);
    }
</script>
@endpush