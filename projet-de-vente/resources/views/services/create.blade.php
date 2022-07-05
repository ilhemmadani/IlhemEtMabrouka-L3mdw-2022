@extends('services.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Service</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('services.index') }}"> retour</a>
</div>
</div>
</div>

<form action="{{ route('services.store') }}" method="POST">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">

                                        <strong>nomservice:</strong>
                                        <input type="text" name="nomservice"
                                            class="form-control @error('nomservice')btn-danger is-invalid @enderror"
                                            placeholder="enter le nom de service" pattern="[a-zA-Z]+$+[ \t\n]">

                                        @error('nomservice')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>image:</strong>
                                        <input type="file" name="image"  placeholder="enter le service" accept=".jpg, .jpeg, .png, .mp3, .mp4" class="form-control @error('image')btn-danger is-invalid @enderror">
                                  
                                @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                
                                        </div>
                                </div>
                                <style>
                                input:invalid {
                                    border: red solid 3px;
                                }

                                select:invalid {
                                    border: red solid 3px;
                                }
                                .invalid-feedback{color:red;}
                                </style>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>
@endsection
