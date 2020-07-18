<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
</head>
<body>
    {{-- {{$reviews}} --}}

<ol>
@foreach ($reviews ?? '' as $review)
    <li>{{$review->review}}</li>
@endforeach
</ol>

</body>
</html>