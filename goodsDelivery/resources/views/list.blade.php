<h1>Delivery List</h1>


<table border=1>
    <tr>
        <td>product_id</td>
        <td>product_name</td>
        <td>customer_id</td>
        <td>id</td>
        <td>quatity</td>
    </tr>
    @foreach($delivery as $delivery)
    <tr>
        <td>product_id</td>
        <td>product_name</td>
        <td>customer_id</td>
        <td>id</td>
        <td>quatity</td>
    </tr>
    @endforeach
</table>