@extends('services.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Modifier Service</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('services.index') }}"> retour</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger"style="margin-left:6rem;">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('services.update',$service->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>nomservice:</strong>
                                            <input type="text" name="nomservice" value="{{ $service->nomservice }}"
                                                class="form-control"  placeholder="enter le nom de service" pattern="[a-zA-Z]+$+[ \t\n]">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>image:</strong>
                                            <input type="file" name="image" class="form-control"  value="{{ $service->image }}"
                                            placeholder="enter le service" accept=".jpg, .jpeg, .png">
                                        </div>
                                    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>
@endsection
