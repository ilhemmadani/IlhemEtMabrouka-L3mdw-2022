
@foreach ($orders as $order)

  <table width="700px" ><tr><th height="40px"><img align="left"margin-bottom="5px"src ="assets/img/logo.png"height="70px"width="120px"></th>
<th margin-bottom="10px"align="left" >Date:     {{$order->created_at}}</th></tr>
<tr><th></th><th></th></tr>
<tr><th align="left" >EI SUN SERVICE </th><th align="left">Client :</th></tr>
<tr><th align="left">RUE 20 MARS TAOURIT HOUMT ESSOUK DJERBA </th><th align="left">{{ $order->Nometprenomclient=Auth::user()->name }}</th></tr>
<tr><th align="left" align="top">4180 Djerba</th><th align="left" >Tunisie </th></tr>
<tr><th align="left" align="top">1725689H/B/M/000</th><th > </th></tr>
<tr><th align="left" align="top">543337807</th><th > </th></tr>

 








</table>
</br></br>

<h1  margin-top="100px"align="center">FACTURE N° FC00000{{$order->id}}</h1>
 
<hr>

@endforeach





<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">                        
<table class="b"width="700px" height="400px" >
                                <tr>

                               
                                   
                                    <td align="center">REF</td>
                                    <td align="center"width="400px" >DESIGNIATION</td>
                                    <td align="center"width="50px">QTE</td>
                                    <td align="center" width="70px">PU HT</td>
                                   
                                   
                                   
                                </tr>
                               
                         
                                @foreach (Cart::content() as $product)
                             
                                <tr>
                                   
                                    <td >{{$product->model->nomproduit}} </td>
                                    <td >{{$product->model->designiation}} </td>
                                    <td align="center">  {{ $product->qty }}
                                                </td>  
                                    <td align="center">{{$product->model->prixUT *1.000}} </td> 
                                      

  
  
</tr>@endforeach
                                    </table>   
                              
                               
                                <table  align="center"class="bordered"width="300px">


                                @foreach ($orders as $order)
                              <tr>
                             <th  colsapn="3">TOTAL HT</th>   <td>{{  $order->Subtotal =  Cart::subtotal() *1.000}}DT</td></tr>
                           <tr>  <th colsapn="3">TOTAL TVA</th>   <td>{{  $order->TVa = Cart::tax()  *1.000 }}DT</td></tr>
                           <tr>  <th colsapn="3">NET A PAYER</th> <td>{{ $order->Total = Cart::total()  *1.000}}DT</td></tr>
                         
                           
                      
                                @endforeach
                            </table>
</div>
<style>

.bordered{margin-top:50px;
  border: 1px solid black; 

  border-collapse: collapse;}
  .b,td{margin-top:5;
  border: 1px solid black; 
  

  border-collapse: collapse;}
  img{margin-bottom:20px;}

    </style>
