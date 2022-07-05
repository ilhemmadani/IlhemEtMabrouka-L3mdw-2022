@extends('services.layout')


@section('content')
@extends('admin.dashboard')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style="margin-left:8rem;">
            <h1>LISTE SERVICES</h2></br></br>
            </div>
<div class="pull-right"style="margin-top:6rem">
<a class="btn btn-success" href="{{ route('services.create') }}"> Create New Service</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success"style="margin-left:6rem;">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered"style="margin-left:6rem;">
<tr>

<th>nomservice</th>
<th>image</th>
<th width="280px">Action</th>
</tr>
@foreach ($services as $service)
<tr>

<td>{{ $service->nomservice }}</td>
<td><img class="card-img-top" src="{{asset ('/imagesservice/'.$service->image)}}" alt="Avatar" width="80px" height="80px"></td>
<td>
<form action="{{ route('services.destroy',$service->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
<form action="/delete/{{ $service->id }}" method="post">
                                            <button class="btn btn-danger"
                                                onclick="return confirm('voulez vous vraiment supprimer cette service??');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
</form>
</td>
</tr>
@endforeach
</table>
<div class="row" style="margin-top: 5rem;">
{!! $services->links() !!}
@endsection
