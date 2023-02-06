<!doctype html>
<html>
    <head>
        <title>Application</title>
        <style>
                #main-div{
                    margin:auto;
                    height:250px;
                    width:800px;
                    background-color:skyblue;
                }
        </style>
    </head>
    <body>

    <h1>Hello</h1>

        <div id="main-div">
                <form action="{{ route('update', $company->id)}}" method="post">
                    @csrf
                    <input type="text" name="name" value="{{$company->name}}">
                    <input type="email" name="email" value="{{$company->email}}">
                    <input type="text" name="address" value="{{$company->address}}">
                    <input type="date" name="created_at" value="{{$company->created_at}}">
                    <input type="date" name="updated_at" value="{{$company->updated_at}}">
                    <button type="submit">update</button>
                </form>
        </div>

    </body>
</html>