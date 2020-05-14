<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bus</title>
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
    <form action="/system/busesshedule/{{$bus->id}}/edit" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <span class="label">
                Name
            </span>
            <input value="{{$bus->name}}" type="text" name="name">
        </div>
        <div class="row">
            <span class="label">
                Operator
            </span>
            <input value="{{$bus->operator}}" type="text" name="operator">
        </div>
        <div class="row">
            <span class="label">
                Seat Row
            </span>
            <input value="{{$bus->seat_row}}" type="text" name="seat_row">
        </div>
                <div class="row">
            <span class="label">
                Seat Column
            </span>
            <input value="{{$bus->seat_column}}" type="text" name="seat_column">
        </div>
        <div class="row">
            <span class="label">
                Route
            </span>
            <input value="{{$bus->route}}" type="text" name="route">
        </div>
        <div class="row">
            <span class="label">
                Fare
            </span>
            <input value="{{$bus->fare}}" type="text" name="fare">
        </div>
        <div class="row">
            <span class="label">
                Departure
            </span>
            <input value="{{$bus->departure}}" type="text" name="departure">
        </div>
        <div class="row">
            <span class="label">
                Arrival
            </span>
            <input value="{{$bus->arrival}}" type="text" name="arrival">
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
