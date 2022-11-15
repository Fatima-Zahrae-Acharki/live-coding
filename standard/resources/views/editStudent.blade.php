<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($promotion as $row)
<form action="{{url('update')}}/{{$row->id}}" method="POST">
        @csrf
        <input type="text" name="first_name" value="{{$row->first_name}}" >
        <input type="text" name="last_name" value="{{$row->last_name}}" >
        <input type="text" name="email" value="{{$row->email}}" >
        <button>submit</button>
    </form>
@endforeach


<br><br>

</body>
</html>