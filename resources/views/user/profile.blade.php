<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
        <h4>Profile</h4>
    </center>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>

                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

                <td>
                    <a href="/system/profile/{{$user->id}}/edit">Edit</a>

                </td>
            </tr>

        </tbody>
    </table>
</body>

</html>
