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
                @foreach ($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}} </td>
                    <td>{{$value->start_date}} </td>
                    <td>{{$value->end_date}} </td>
                    <td>{{$value->description}} </td>

                    <td>
                        <button class="btn1"><a href="editTask/{{$value->id}}" class="btn1">Edit</a></button>
                        <button class="btn2"><a href="showBrief/{{$value->id}}" class="btn2">Delete</a></button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <br>

    <input type="text" id="searchTasks" placeholder="Search task">


    <script src="/tasks.js"></script>

</body>

</html>