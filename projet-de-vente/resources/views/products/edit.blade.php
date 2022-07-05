@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Modifier produit</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> retour</a>
</div>
</div>
</div>
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>attention!</strong> il y a des probleme liée a l'input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('products.update',$product->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>nomproduit:</strong>
                                            <input type="text" name="nomproduit" value="{{ $product->nomproduit }}"
                                                class="form-control" placeholder="enter le nom de produit"
                                                placeholder="nomclient" pattern="[a-zA-Z]+$+[ \t\n]">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>designiation:</strong>
                                            <input type="text" name="designiation" value="{{ $product->designiation }}"
                                                class="form-control" placeholder="enter la designiation de produit">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>quantite:</strong>
                                            <input type="number" name="quantite" value="{{ $product->quantite }}"
                                                class="form-control" placeholder="enter la quantite de produit">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>pourcentage:</strong>
                                            <input type="number" name="pourcentageprod"
                                                value="{{ $product->pourcentageprod }}" class="form-control"
                                                placeholder="taper la pourcentage de remise">
                                        </div>
                                    </div>

                                
 
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>image:</strong>
                                            <input type="file" name="image" class="form-control"  value="{{ $product->image }}"
                                            placeholder="enter le product" accept=".jpg, .jpeg, .png">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>prixUT:</strong>
                                            <input type="number" name="prixUT" value="{{ $product->prixUT }}"
                                                class="form-control" placeholder="enter le prix de produit">
                                        </div>
                                    </div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>type:</strong>
                    
                    <select name="type" id="pet-select" class="form-control">

    <option value="informatique">informatique</option>
    <option value="videosurvaillance">videosurvaillance</option>
    <option value="alarme">alarme</option>
</select>
                </div>
            </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>
@endsection
