<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($myTask as $row)
<form action="{{url('updateTask')}}/{{$row->id}}" method="POST">
        @csrf
        <input type="text" name="tName" placeholder=" task name " value="{{$row->name}}" id="inp">
        <input type="date" name="start_date" placeholder=" Start date " value="{{$row->start_date}}" id="inp">
        <input type="date" name="end_date" placeholder=" End date " value="{{$row->end_date}}" id="inp">
        <input type="text" name="description" placeholder=" task description " value="{{$row->description}}" id="inp">
        <input type="hidden" value="{{$row->id_briefs}}" name="id_briefs">
        <button>submit</button>
</form>
@endforeach


<br><br>

</body>
</html>