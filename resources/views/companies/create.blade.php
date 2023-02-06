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
                <form action="{{ route('create-test') }}" method="post">
                    @csrf
                    
                    <input type="text" name="name" placeholder="Enter Company Name">
                    @error('name')
                        <span>{{$message}}</span>
                    @enderror

                    
                    <input type="email" name="email" placeholder="Enter Company Email">
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror

                  
                    <input type="text" name="address" placeholder="Enter Company Address">
                    @error('address')
                        <span>{{$message}}</span>
                    @enderror

                    
                    <input type="date" name="created_at" placeholder="Enter Company Name">
                    @error('created_at')
                         <span>{{$message}}</span>
                    @enderror

                   
                    <input type="date" name="updated_at" placeholder="Enter Company Name">
                    @error('updated_at')
                        <span>{{$message}}</span>
                    @enderror
                    <input type="submit">
                </form>
        </div>

    </body>
</html>