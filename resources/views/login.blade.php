<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        

    <form method="POST" action="/login">
        @csrf
        
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>   
        @endforeach
    <div>
        <div>
            <p>email</p>
            <input type="email" name="email" >
        </div>
        <div>
            <p>password</p>
            <input name="password" type="password">
        </div>
        <div>
            
            <button type="submit">submit</button>

        </div>
       
    </div>
    <a href="/signup">dont have an account?</a>



    </form>

</body>
</html>