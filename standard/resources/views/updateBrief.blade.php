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
    <h2>edit Brief</h2><br><br>

    @foreach($brief as $ass)
    <form action="{{$ass->id}}/updateBrief" method="POST">
        @csrf
        <input type="text" name="bName" placeholder=" Brief name " value="{{$ass->name}}" id="inp">
        <input type="date" name="start_date" placeholder=" Start date " value="{{$ass->start_date}}" id="inp">
        <input type="date" name="end_date" placeholder=" End date " value="{{$ass->end_date}}" id="inp">
        <input type="text" name="description" placeholder=" Brief description " value="{{$ass->description}}" id="inp">
        <br><br>
        <input type="submit" id="inpbtn">
    </form>
    <br><br>
    <a href="/addTask/{{$ass->id}}"><button id="add">Add task</button></a>
    @endforeach
    <br>
    <br><br>
    <h2>Show Tasks</h2><br><br>
    <br>
    <h2>tasks</h2>
    <div id="paragraph">

        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>start date</th>
                <th>end date</th>
                <th>description</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($tasks as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}} </td>
                    <td>{{$value->start_date}} </td>
                    <td>{{$value->end_date}} </td>
                    <td>{{$value->description}} </td>

                    <td>
                        <button class="btn1"><a href="/editTask/{{$value->id}}" class="btn1">Edit</a></button>
                        <button class="btn2"><a href="/deleteTask/{{$value->id}}" class="btn2">Delete</a></button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        
    </div>
    <br>

    <br>

    <input type="text" id="searchbrief" placeholder="Search brief">


    <script src=""></script>

</body>

</html>