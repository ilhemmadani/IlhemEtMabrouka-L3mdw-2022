@extends('commande.layouts')
@section('content')
@extends('admin.dashboard')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style="margin-left:6rem,margin-top:6rem;">
            <h1>LISTE COMMANDES</h2></br></br>
            </div>

</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">                        
<table class="table table-bordered"width="1000px">
                                <tr>

                                    <th>num facture</th>
                                    <th >Nometprenomclient</th>
                                    <th>PU HT</th>
                                    <th>Tva</th>
                                    <th width="20px">products</th>
                                    <th>NET A PAYER</th>
                                 
                                    <th >Date commande</th>
                                 
                                </tr>
                             
                                @foreach ($orders as $order)
                                <tr>

                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->Nometprenomclient}}</td>
                                    <td>{{ $order->Subtotal *1.000}}</td>
                                    <td>{{ $order->Tva*1.000}}</td>
                                    <td  width="20px"height="30px">{{ $order->products}}</td>
                                    <td>{{ $order->Total*1.000}}</td>
                                  
                                    <td>{{ $order->created_at }}</td>
                               
                                        
                             


                                  
                                </tr>
                                @endforeach
                            </table>
</div>
</div>
                           
                            {!! $orders->links() !!}
</div>

                           
     @endsection                   
