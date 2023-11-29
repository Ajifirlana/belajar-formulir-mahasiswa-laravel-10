
<?php 
 $tgl_sekarang = date("Y");
 $tgl_exp ="2023";
 $bulan = date("m");
 $bulan_exp = 12;
if ($tgl_sekarang >=$tgl_exp && $bulan >= $bulan_exp) {
}else{?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="kotak_login">
        <form action="{{route('aksi_login')}}" method="POST" class="login-email">
        @csrf
         <p class="tulisan_login" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <label>Username</label>
                <input type="text" placeholder="Username" class="form_login" name="username" required>
            </div>
            <div class="input-group">
            <label>Password</label>
                <input type="password" placeholder="Password" class="form_login"name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="tombol_login">Login</button>
            
    @if($errors->has('login'))
                 {{$errors->first('login')}}
                
                @endif
            </div>
        </form>
    </div>
</body>
</html>
<?php }?>