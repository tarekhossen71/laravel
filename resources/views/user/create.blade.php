<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($name == "tarek")
        {{$name." is a wordpress developer"}}

        @elseif( $name == 'akash' )
            {{$name. ' is a web developer'}}
        @else
            {{$name.' do something else'}}
    @endif
    
</body>
</html>