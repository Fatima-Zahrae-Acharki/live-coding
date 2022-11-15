<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<h2>edit task</h2><br><br>

    @foreach($myTask as $ass)
    <form action="/updateTask/{{$ass->id}}" method="POST">
        @csrf
        <input type="text" name="tName" placeholder=" Task name " value="{{$ass->name}}" id="inp">
        <input type="date" name="start_date" placeholder=" Start date " value="{{$ass->start_date}}" id="inp">
        <input type="date" name="end_date" placeholder=" End date " value="{{$ass->end_date}}" id="inp">
        <input type="text" name="description" placeholder=" Task description " value="{{$ass->description}}" id="inp">
        <input type="hidden" value="{{$row->id_briefs}}" name="id_briefs">
        <br><br>
        <input type="submit" id="inpbtn">
    </form>
    @endforeach
    <br>

    <br>
     
    <input type="text" id="searchtask" placeholder="Search task">


    <script src=""></script>

</body>
</html>