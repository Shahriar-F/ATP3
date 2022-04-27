<div class = "container bg-light">

@extends ('layout.app')
@section('content')


<h1>Delivery List</h1>

<table border=2>
 <tr>
     <td>id</td>
     <td>product_id</td>
     <td>customer_id</td>
     <td>quantity</td>
     <td>status</td>
</tr>

@foreach($deliverylists as $deliverylist)
<tr>
     <td>{{$deliverylist['id']}}</td>
     <td>{{$deliverylist['product_id']}}</td>
     <td>{{$deliverylist['customer_id']}}</td>
     <td>{{$deliverylist['quantity']}}</td>
     <td>{{$deliverylist['status']}}</td>
</tr>
@endforeach

</table>

<br><br>