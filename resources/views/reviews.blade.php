<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
</head>
<body>
    
<form action="/review" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    Car id: <input type="text"  name="car" id="car" value=""> <br>
        <input type="submit" value="Save" name="submit_btn">
</form>

<ol>
@foreach ($reviews ?? '' as $review)
    <li>{{$review->review}}</li>
@endforeach
</ol>

</body>
</html>