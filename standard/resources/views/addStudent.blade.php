<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/addStudent.css">
    <title>Document</title>
</head>
<body>
<h2>Add Apprenticies</h2><br><br>
    <form action="{{url('insert_student')}}" method="POST">
        @csrf
        <input type="text" name="first_name" placeholder=" First name " id="inp">
        <input type="text" name="last_name" placeholder=" Last name " id="inp">
        <input type="text" name="email" placeholder=" Email " id="inp">
        <input type="hidden" value="{{$id}}" name="promoid">
        <input type="submit" value="ADD" id="inpbtn">
    </form>
    <br>

    <br>
     
    <input type="text" id="searchApprentice" placeholder="Search apprentice" >


    <script src="/apprentices.js"></script>

</body>
</html>