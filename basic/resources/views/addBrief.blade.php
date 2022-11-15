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
<h2>Add Brief</h2><br><br>
    <form action="{{'addBrief'}}" method="POST">
        @csrf
        <input type="text" name="bName" placeholder=" Brief name " id="inp">
        <input type="date" name="start_date" placeholder=" Start date " id="inp">
        <input type="date" name="end_date" placeholder=" End date " id="inp">
        <input type="text" name="description" placeholder=" Brief description " id="inp">
        <input type="submit" value="ADD" id="inpbtn">
    </form>
    <br>

</body>
</html>