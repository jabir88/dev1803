<table>
    <thead>
    <tr>
        <th>product_name</th>
        <th>product_price</th>
        <th>product_quantity</th>
        <th>product_description</th>

        <!-- <th>LINK</th> -->
        <!-- <th>Photo</th> -->
    </tr>
    </thead>
    <tbody>
    @foreach($members as $memberList)
        <tr>

            <td>{{$memberList->product_name}}</td>
            <td>{{$memberList->product_price}}</td>
            <td>{{$memberList->product_quantity}}</td>
            <td>{{$memberList->product_description}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
