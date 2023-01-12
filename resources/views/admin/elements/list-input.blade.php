@push('footer-scripts')
    <script>
        let i = {{ count($values ?? []) }};

        const addListener = function(el) {
            el.addEventListener('click', function () {
                const element = el.parentNode;
                i--
                element.parentNode.removeChild(element);
            });
        }

        document.querySelectorAll('.{{ $name }}-remove').forEach(function (el) {
            addListener(el);
        });

        document.getElementById('{{ $name }}-add-button').addEventListener('click', function () {
            i++
            let input = ''
            input += '<div class="d-flex mb-2">';
                input += '<input type="text" placeholder="{{ $placeholder1 }}" name="{{ $name }}['+i+'][]" class="form-control mr-1">'
                input += '<input type="text" placeholder="{{ $placeholder2 }}" name="{{ $name }}['+i+'][]" class="form-control mr-1">';
                input += '<button class="btn btn-danger {{ $name }}-remove" type="button"><i class="fa fa-times"></i></button>';
            input += '</div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addListener(newElement.querySelector('.{{ $name }}-remove'));

            document.getElementById('{{ $name }}-input').appendChild(newElement);
            i++;
        });
    </script>
@endpush

<div id="{{ $name }}-input">
    @forelse($values ?? [] as $index => $group)
        <div class="d-flex mb-2">
            <input type="text" placeholder="{{ $placeholder1 }}" class="form-control mr-1" name="{{ $name }}[{{ $index }}][]" value="{{ $group[0] }}">
            <input type="text" placeholder="{{ $placeholder2 }}" class="form-control mr-1" name="{{ $name }}[{{ $index }}][]" value="{{ $group[1] }}">
            <button class="btn btn-danger {{ $name }}-remove" type="button">
                <i class="fa fa-times"></i>
            </button>
        </div>
    @empty
        <div class="d-flex mb-2">
            <input type="text" placeholder="{{ $placeholder1 }}" class="form-control mr-1" name="{{ $name }}[0][]" placeholder="{{ $placeholder ?? '' }}">
            <input type="text" placeholder="{{ $placeholder2 }}" class="form-control mr-1" name="{{ $name }}[0][]" placeholder="{{ $placeholder ?? '' }}">
            <button class="btn btn-danger {{ $name }}-remove" type="button">
                <i class="fa fa-times"></i>
            </button>
        </div>
    @endforelse
</div>
<div class="my-1">
    <button type="button" id="{{ $name }}-add-button" class="btn btn-sm btn-primary">
        <i class="fa fa-plus"></i> Ajouter
    </button>
</div>
