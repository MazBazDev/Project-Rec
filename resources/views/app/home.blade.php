@extends('layouts.app')

@section('content')
<form action="{{ route("dashboard.updateSettings") }}" method="post">
    @csrf
    <div class="d-grid my-3">
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Modal</h3>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="modalEnable" name="modalEnable" @checked(old("modalEnable", setting('modal.enable', true)))>
                                <label class="form-check-label" for="modalEnable">Activer le modal</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="modalTitle" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="modalTitle" name="modalTitle" value="{{ old("modalTitle", setting('modal.title')) }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalContent" class="form-label">Content</label>
                            <textarea name="modalContent" id="modalContent">{{ old("modalContent", setting('modal.content')) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">La selection</h3>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="sec2Enable" name="sec2Enable" @checked(old("sec2Enable", setting('sec2.enable')))>
                                <label class="form-check-label" for="sec2Enable">Activer la section</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sec2Title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="sec2Title" name="sec2Title" value="{{ old("sec2Title", setting('sec2.title')) }}">
                        </div>  
                        <hr>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="sec2Link1Title" class="form-label">Titre du bouton</label>
                                <input type="text" class="form-control" id="sec2Link1Title" name="sec2Link1Title" value="{{ old("sec2LInk1Title", setting('sec2.link1.title')) }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn btn-success"><i class="bi bi-sliders"></i> Gerer la selection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Accueil</h3>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sec1Enable" name="sec1Enable" @checked(old("sec1Enable", setting('sec1.enable')))>
                            <label class="form-check-label" for="sec1Enable">Activer la section</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sec1Title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="sec1Title" name="sec1Title" value="{{ old("sec1Title", setting('sec1.title')) }}">
                    </div>  
                    <hr>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="sec1Link1Title" class="form-label">Titre du bouton 1</label>
                            <input type="text" class="form-control" id="sec1Link1Title" name="sec1Link1Title" value="{{ old("sec1LInk1Title", setting('sec1.link1.title')) }}">
                        </div>  
                        <label for="sec1Link1Url" class="form-label">Lien 1</label>
                        <input type="url" class="form-control" id="sec1Link1Url" name="sec1Link1Url" value="{{ old("sec1LInk1Url", setting('sec1.link1.url')) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="sec1Link2Title" class="form-label">Titre du bouton 2</label>
                            <input type="text" class="form-control" id="sec1Link2Title" name="sec1Link2Title" value="{{ old("sec1LInk2Title", setting('sec1.link2.title')) }}">
                        </div>  
                        <label for="sec1Link2Url" class="form-label">Lien 2</label>
                        <input type="url" class="form-control" id="sec1Link2Url" name="sec1Link2Url" value="{{ old("sec1LInk2Url", setting('sec1.link2.url')) }}">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="sec1Content" class="form-label">Content</label>
                        <textarea name="sec1Content" id="sec1Content">{{ old("sec1Content", setting('sec1.content')) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Nous soutenir</h3>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="sec3Enable" name="sec3Enable" @selected(old("sec3Enable", setting('sec3.enable', false)))>
                                <label class="form-check-label" for="sec3Enable">Activer la section</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sec3Title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="sec3Title" name="sec3Title" value="{{ old("sec3Title", setting('sec3.title')) }}">
                        </div>  
                        <hr>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="sec3Link1Title" class="form-label">Titre du bouton</label>
                                <input type="text" class="form-control" id="sec3Link1Title" name="sec3Link1Title" value="{{ old("sec3Link1Title", setting('sec3.link1.title')) }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="sec3ApiId" class="form-label">Id Ullule</label>
                                <input type="text" class="form-control" id="sec3ApiId" name="sec3ApiId" value="{{ old("sec3ApiId", setting("sec3.api.id")) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Partenaires</h3>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="sec5Enable" name="sec5Enable" @checked(old("sec5Enable", setting("sec5.enable", true) ))>
                                <label class="form-check-label" for="sec5Enable">Activer la section</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sec5Title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="sec5Title" name="sec5Title" value="{{ old("sec5Title", setting("sec5.title")) }}">
                        </div>  
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="sec3Link1Title" class="form-label">Titre du bouton</label>
                                <input type="text" class="form-control" id="sec5Link1Title" name="sec5Link1Title" value="{{ old("sec5Link1Title", setting('sec5.link1.title')) }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn btn-success"><i class="bi bi-sliders"></i> Gerer les partenaires</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Le festival</h3>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sec4Enable" name="sec4Enable" @checked(old("sec5Enable", setting("sec4.enable", true)))>
                            <label class="form-check-label" for="sec4Enable">Activer la section</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sec4Title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="sec4Title" name="sec4Title" value="{{ old("sec4title", setting("sec4.title")) }}">
                    </div>  
                    <div class="mb-3">
                        <label for="sec4Content" class="form-label">Content</label>
                        <textarea name="sec4Content" id="" cols="30" rows="10">{{ old("sec4Content", setting("sec4.content")) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="sec4YtbLink" class="form-label">Lien vidéo youtube</label>
                        <input type="text" class="form-control" id="sec4YtbLink" name="sec4YtbLink" value="{{ old("sec4YtbLink", setting("sec4.youtube.link")) }}">
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid my-3">
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </div>
</form>
@endsection