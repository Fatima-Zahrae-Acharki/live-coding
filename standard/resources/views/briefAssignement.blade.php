<link rel="stylesheet" href="">
<link rel="stylesheet" href="">
<link rel="stylesheet" href="">




<div id="">
    <br>
    <h2>Assign a brief</h2>
    <br>

<table class=""id="apprenant">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Action</th>               
        </tr>

    </thead>
    <tbody id ="contentStudent">
        @foreach ($data as $value) 

        <tr>
            <td >{{$value->first_name}}</td>
            <td >{{$value->last_name}}</td>
            <td>
                <button class=""><a href="{{$briefId}}/Attach/{{$value->id}}">Attach</a></button>
                <button class=""><a href="{{$briefId}}/Detach/{{$value->id}}">Detach</a></button>
            </td>
        </tr>
        


        @endforeach  
         
    </tbody>
    

</table>
</div>
<button class=""><a href="{{$briefId}}/AttachClass/">Attach to class</a></button>
