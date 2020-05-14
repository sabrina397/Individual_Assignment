<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bus</title>
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
    <form action="/system/buses/add" method="POST">
        @csrf
        <div class="row">
            <span class="label">
                Name
            </span>
            <input type="text" name="name">
        </div>
        <div class="row">
            <span class="label">
                Operator
            </span>
            <input type="text" name="operator">
        </div>
        <div class="row">
            <span class="label">
                Seat Row
            </span>
            <input type="text" name="seat_row">
        </div>
                <div class="row">
            <span class="label">
                Seat Column
            </span>
            <input type="text" name="seat_column">
        </div>
        <div class="row">
            <span class="label">
                Route
            </span>
            <input type="text" name="route">
        </div>
        <div class="row">
            <span class="label">
                Fare
            </span>
            <input type="text" name="fare">
        </div>
        <div class="row">
            <span class="label">
                Departure
            </span>
            <input type="text" name="departure">
        </div>
        <div class="row">
            <span class="label">
                Arrival
            </span>
            <input type="text" name="arrival">
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
