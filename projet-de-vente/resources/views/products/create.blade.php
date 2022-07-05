@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Ajouter nouveau produit</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> retour</a>
</div>
</div>
</div>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>nomproduit:</strong>
                                        <input type="text" name="nomproduit"
                                            class="form-control @error('nomproduit')btn-danger is-invalid @enderror"
                                            placeholder="enter le nom de produit" pattern="[a-zA-Z]+$+[ \t\n]">

                                        @error('nomproduit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>quantite:</strong>
                                        <input type="number" name="quantite" id="quantite"
                                            class="form-control @error('quantite')btn-danger is-invalid @enderror"
                                            placeholder="nombre de quantite">

                                        @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>designiation:</strong>
                                        <input type="text" name="designiation"
                                            class="form-control @error('designiation')btn-danger is-invalid @enderror"
                                            placeholder="enter la designiation de produit">

                                        @error('designiation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>pourcentage:</strong>
                                        <input type="text" name="pourcentageprod"
                                            class="form-control @error('pourcentageprod')btn-danger is-invalid @enderror"
                                            placeholder="pourcentage de chaque produit">

                                        @error('pourcentageprod')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>prixUT:</strong>
                                        <input type="number" name="prixUT" id="prixUT"
                                            class="form-control @error('prixUT')btn-danger is-invalid @enderror"
                                            placeholder="prix de produit">

                                        @error('prixUT')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>image:</strong>
                                        <input type="file" name="image" id="image"
                                            class="form-control  @error('image')btn-danger is-invalid @enderror"
                                            placeholder="selectionner une image" accept=".jpg, .jpeg, .png">

                                        @error('image')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class=" col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>type:</strong>
                                            <select name="type" class="form-control  @error('type')btn-danger is-invalid @enderror"
                                                id="myselect">
                                                <option selected disabled class="form-control  @error('choisir type')alert-danger is-invalid @enderror" >choisir type</option>
                                                <option value="informatique"class="form-control  @error('informatique')alert-danger is-invalid @enderror" >informatique</option>
                                                <option value="videosurvaillance"class="form-control  @error('videosurvaillance')alert-danger is-invalid @enderror">videosurvaillance</option>
                                                <option value="alarme"class="form-control  @error('alarme')alert-danger is-invalid @enderror">alarme</option>
                                            </select>

                                            @error('type')
                                            <span  class="invalid-feedback" role="alert">
                                                <strong style="color:red">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>




                        

                                <style>
                                svg {
                                    width: 5px;
                                }

                                .invalid-feedback {
                                    border-color: red;
                                    color: red;

                                }

                                input:required:invalid {
                                    border-color: #c00000;
                                }
                                </style>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>
@endsection