<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>
</head>

<body>
    <style>
        .row {
            padding: 10px;
        }
        
        .label {
            font-weight: bold;
            margin: 5px;
        }
        
        .error {
            color: red
        }
    </style>
    <form action="/system/supportstaff/add" method="POST">
        @csrf
        <div class="row">
            <span class="label">
                Name
            </span>
            <input type="text" name="name">
        </div>
        <div class="row">
            <span class="label">
                Email
            </span>
            <input type="email" name="email">
        </div>
        <div class="row">
            <span class="label">
                Password
            </span>
            <input type="password" name="password">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <input type="submit">
        </div>
    </form>
</body>

</html>