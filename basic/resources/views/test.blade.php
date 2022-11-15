<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/test.css">
    <title>Document</title>
</head>
<body>
    <br>
    <h2>Add promotions</h2>
    <form action="{{'insert'}}" method="POST" >
        @csrf
        <input id="inp" type="text" name="name" placeholder=" Enter a promotion ">
        <input id="inpbtn" type="submit" value="ADD">
    </form>
    <br>
    
    <!-- <div>
        @foreach($data as $value)
            <div class="">
                <h3 class="card-title">{{$value->name}}</h3>
            </div>
        @endforeach
        
    </div> -->
    <h2>promotions</h2>
    <div id="paragraph" >
    <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td  >{{$value->name}} </td>
                    <td>
                        <button class="btn1"><a href="{{url ('edit')}}/{{$value->id}}" class="btn1">Edit</a></button>
                        <button class="btn2"><a href="{{('delete')}}/{{$value->id}}" class="btn2">Delete</a></button>
                    </td>

                </tr>
            @endforeach
                
            </tbody>
    </table>
    </div>
    <br>
    <input type="text" id="search" placeholder="Search">
    <img src="img/search.png" id="image" >
    
    <br><br>
    <script src="/promotion.js"></script>

</body>
</html>