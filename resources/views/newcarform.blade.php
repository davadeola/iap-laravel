
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new car</title>
</head>
<body>
    <h2>Add new car</h2>

    <form action="/car" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        car make <input type="text"  name="make" id="make"> <br>
        car model <input type="text"  name="model" id="model"> <br>
        produced on <input type="date"  name="produced_on" id="produced_on" value=""> <br>
        <input type="submit" value="Save" name="submit_btn">
    </form>

    @if (count($errors))
        @foreach ($errors->all() as $error)
<li>{{$error}}</li>
        @endforeach
    @endif
</body>
</html>