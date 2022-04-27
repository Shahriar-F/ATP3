<body>
    <div class = "container bg-light">
</body>

@extends ('layout.app')
@section('content')

<h3>Delivery List </h3>
<table border=1>
    <tr>
        <td>product_id</td>
        <td>product_name</td>
        <td>customer_id</td>
        <td>id</td>
        <td>quatity</td>
    </tr>
   @foreach
    <tr>
        <td>{{['Delivery']}}</td>
        <td>{{['Delivery']}}</td>
        <td>{{['Delivery']}}</td>
        <td>{{['Delivery']}}</td>
        <td>{{['Delivery']}}</td>
    </tr>
   @endforeach
</table>
@endsection