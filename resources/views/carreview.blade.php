<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
</head>
<body>
    
    <h1>Car Id:{{$car->id}}</h1>
    <p><b>Model: {{$car->model}}</b></p>
    <p>Make: {{$car->make}}</p>
    <p>Produced: {{$car->produced_on}}</p>
    <p>Created At: {{$car->updated_at}}</p>
</body>
</html>