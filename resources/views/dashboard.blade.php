<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Rifky Alfarez</title>
</head>
<body>
    <div class="kotak_login">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">          
    @csrf            
    <p class="tulisan_login" style="font-size: 2rem; font-weight: 800;">{{$record->username}}</p>
    <p class="tulisan_login" style="font-size: 2rem; font-weight: 500;">{{$record->nim}}</p>
    
    <div class="input-group">
        <button name="submit" class="tombol_login">Logout</button>
            
    </div>         
                            </form>
    </div>
</body>
</html>