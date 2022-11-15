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
<h2>edit Apprenticies</h2><br><br>

    @foreach($students as $ass)
    <form action="{{url('updateS')}}/{{$ass->id}}" method="POST">
        @csrf
        <input type="text" name="first_name" value="{{$ass->first_name}}" placeholder=" First name " id="inp">
        <input type="text" name="last_name" value="{{$ass->last_name}}" placeholder=" Last name " id="inp">
        <input type="text" name="email" value="{{$ass->email}}" placeholder=" Email " id="inp">
        <br><br>
        <input type="submit" id="inpbtn">
    </form>
    @endforeach
    <br>

    <br>
     
    <input type="text" id="searchApprentice" placeholder="Search apprentice">


    <script src="/apprentices.js"></script>

</body>
</html>