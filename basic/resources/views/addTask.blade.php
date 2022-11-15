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
<h2>Add Task</h2><br><br>
    <form action='/addtask'method="POST">
        @csrf
        <input type="text" name="tName" placeholder=" Task name " id="inp">
        <input type="date" name="start_date" placeholder=" Start date " id="inp">
        <input type="date" name="end_date" placeholder=" End date " id="inp">
        <input type="text" name="description" placeholder=" Task description " id="inp">
        <input type="hidden" value="{{$id}}" name="id_briefs">
        <input type="submit" value="ADD" id="inpbtn">
    </form>
    <br>

</body>
</html>