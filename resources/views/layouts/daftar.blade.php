<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form action="buat_akun.php" method="post" class="login-email">
                <label>nik</label><br>
                <input type="text" name="nik"><br>
                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Username</label><br>
                <input type="text" name="usn"><br>
                <label>Password</label><br>
                <input type="password" name="pasw"><br>
                <label>no.telp</label><br>
                <input type="text" name="telp"><br>
                <button type="submit">Log in</button>
                <p>sudah punya akun?silahkan<a href="{{('login')}}">login</a></p>
            </form>
        </div>     
    </body>
</html