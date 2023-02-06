<!doctype html>
<html>
    <head>
        <title>Application</title>
        <style>
                #main-div{
                    margin:auto;
                    height:800px;
                    width:800px;
                    background-color:skyblue;
                }
                a{
                    color: white;
                    background-color: #0e0e0e;
                    padding: 6px 12px;
                    text-decoration: none;
                }

        </style>
    </head>
    <body>

    <h1>Hello</h1>

        <div id="main-div">
                <a href ="{{ route('create-data')}}">create</a>         
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach($Data as $comp)
                        <tr>
                            <td>{{ $comp->id }}</td>
                            <td>{{ $comp->name }}</td>
                            <td>{{ $comp->email }}</td>
                            <td>{{ $comp->address }}</td>
                            <td><a href="{{ route('edit', $comp->id) }}">Edit</a></td>
                            <td><a href="{{ route('delete', $comp->id) }}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>         
        </div>

    </body>
</html>