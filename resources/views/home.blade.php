<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huzaifa title</title>
</head>
<body>
    <!-- <h2>huzaifa Khan , {{date('d-m-y')}}</h2> -->
    <h2>huzaifa , {{$name??'guest'}}</h2>

    <h2>{{$demo}}</h2>

    <h2>{!!$demo!!}</h2>

    <!-- @if($name != "")
    {{"Name is not empty"}}

    @elseif($name == "huzaifa")
    {{"Name is correct"}}

    @else
    {{"Name is empty"}}

    @endif -->

    @unless($name == "laravel")
    The name is not laravel
    @endunless
</body>
</html>