@extends('services.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Details Service</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('services.index') }}"> retour</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nomservice:</strong>
{{ $service->nomservice }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>image:</strong>
<img class="card-img-top" src="{{asset ('/imagesservice/'.$service->image)}}" alt="Avatar" width="80px" height="80px">
</div>
</div>
</div>
@endsection
