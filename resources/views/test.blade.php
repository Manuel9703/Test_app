<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER INTERFACE</title>

</head>
<body>
<div class="container d-flex justify-content-center align-items-center">

    <h1 style="margin-top: 3rem; margin-bottom: 3rem;font-size:3rem">CORSI DISPONIBILI UNIVESRSITA' PAVIA</h1>

</div>


@foreach($pictures as $picture)
    <img src="data:;base64,{{$picture}}"/>
@endforeach


</body>
</html>
