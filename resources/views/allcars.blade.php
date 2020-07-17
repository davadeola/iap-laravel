
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Car</title>
</head>
<body>
    <table>
        <th>CarId</th>
        <th>Make</th>
        <th>Model</th>

        @foreach ($cars as $car)
        <tr>
        <td> {{$car->id}}</td>
        <td> {{$car->make}}</td>
        <td> {{$car->model}}</td>
    </tr>
        @endforeach

    </table>

    {{-- <h1>Car {{$car->id}}</h1>
    <ul>
        <li>Make: {{$car->make}}</li>
        <li>Model: {{$car->model}}</li>
        <li>Produced on:  {{$car->produced}}</li>
    </ul> --}}

</body>
</html>