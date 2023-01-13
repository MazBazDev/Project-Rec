@extends('layouts.admin')

@section('title', "Modifier TestFilm")


@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom du court-métrage</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="TestFilm">
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <img src="https://static.posters.cz/image/750webp/1288.webp" alt="">
            </div>
            <div class="col-md-6">
                <h3>Synopsis</h3>
                <textarea name="" id="" class="form-control" rows="15"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt aspernatur nam? Eos, laboriosam ad, quo maiores explicabo aliquam repellendus neque enim excepturi quae exercitationem fuga ratione voluptas voluptates perferendis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In accusamus perspiciatis blanditiis harum quis at tempora et, inventore nihil eaque mollitia ipsam ipsa repellendus itaque eum veniam, iure, velit illum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum modi consequuntur voluptatibus sapiente similique iure, error praesentium cumque explicabo fugiat cum doloremque accusantium, vitae veniam amet nulla facere quibusdam reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, incidunt unde repellendus modi rerum recusandae nemo obcaecati aliquid, provident est quaerat reprehenderit ratione error quod pariatur placeat alias similique ad.</textarea>
                <hr>
                <h3>Equipe</h3>
                <ul>
                    <li>Test1 | role1 </li>
                    <li>Test2 | role2</li>
                    <li>Test3 | role3</li>
                    <li>Test4 | role4</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <video controls >
                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"type="video/mp4">
            </video>
        </div>
       
    </div>
</div>
@endsection

@push('scripts')

@endpush

@push('footer-scripts')

@endpush

@push('styles')

@endpush

