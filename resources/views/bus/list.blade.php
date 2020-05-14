<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus List</title>
</head>

<body>
    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }
        
        tr,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
    <center>
        <h4>Bus List</h4>
    </center>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Route</th>
                <th>Fare</th>
                <th>Departure</th>
                <th>Arraival</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($buses as $bus)
            <tr>
                <td>{{$bus->name}}</td>
                <td>{{$bus->route}}</td>
                <td>{{$bus->fare}}</td>
                <td>{{$bus->departure}}</td>
                <td>{{$bus->arrival}}</td>
                <td>
                    <a href="/system/busesshedule/{{$bus->id}}/edit">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="/system/busesshedule/{{$bus->id}}/delete">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>