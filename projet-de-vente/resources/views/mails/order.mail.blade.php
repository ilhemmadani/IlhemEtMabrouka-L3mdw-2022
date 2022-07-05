<html>
    <head>


    <title> Order Confirmation</title>
    </head><body>


<p>hi {{$order-> firstname}} {{$order-> lastname}}</p>
<p>your order has been successefully placed.</p>
<br/>

<table style="width:600px; text-align:right">

<thead>
    <tr>
        <th>  image            </th>
        <th>  name            </th>
        <th>  quantitè            </th>
        <th>  prix           </th>
</tr>

</thead>

<tbody>
   
        @foreach($order->orderItems as $item)
<tr>

<td><img src="{{asset ('/imagesproduit}}/{{$item->product->image)}}" alt="Avatar"  width="150px" height="20px"></td>
<td>{{$item->product->nomproduit)}}</td>
<td>{{$item->quantite)}}</td>
<td>{{$item->prixUT}}</td>
<td>${{$item->prixUT*$item->quantite}}</td>
</td></tr>

        @endforeach
       
        <tr>
        <td colspan="3" style="border-top:10px solid #ccc">  </td>
        <td style="font-size:15px;font-weight:bold;border-top:10px solid #ccc">Subtotal : ${{$order->subtotal}}</td>
        </tr>
        <tr>
        <td colspan="3">  </td>
        <td style="font-size:15px;font-weight:bold">Tax : ${{$order->tax}}</td>
        </tr>
        <tr>
        <td colspan="3">  </td>
        <td style="font-size:15px;font-weight:bold">free shipping</td>
        </tr>
        <tr>
        <td colspan="3">  </td>
        <td style="font-size:22px;font-weight:bold">Total : ${{$order->total}}</td>
        </tr>

</td>
    

</tbody>

</table>

</body>
</html>
