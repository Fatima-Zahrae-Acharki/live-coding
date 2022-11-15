
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/edit.css">
    <title>Document</title>
</head>
<body>
    <br><br>
@foreach($promotion as $row)
<form action="{{url('update')}}/{{$row->id}}" method="POST">
        @csrf
        <input id="inp" type="text" name="name" value="{{$row->name}}" >
        <button id="inpbtn">submit</button>
    </form>
    <br><br>
    
    <a href="{{url('addStudent')}}/{{$row->id}}"><button  id="add">Add student</button></a>
    
@endforeach
<br><br>

<div>

        
         <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($student as $row)
            <tbody>


                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->first_name}}</td>
                    <td>{{$row->last_name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <a href="{{url ('edt_S/')}}/{{$row->id}}" id="btn1">Edit</a>
                        <a href="{{('delete')}}/{{$row->id}}" id="btn2">Delete</a>
                    </td>
                </tr>


            </tbody>
            @endforeach
         </table>
         

        <img src="img/display.png" id="image" >
         

</body>
</html>