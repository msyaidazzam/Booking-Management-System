<!DOCTYPE html>
<html>
	<head>
		<title>Sistem Booking Bengkel </title>
        <link rel="stylesheet" href="Style.css">
	</head>
    <body>
        <div class="wrapper">
            <h1 class = "login-sign">Booking Management System</h1>
        <form class="form-login" action="CekLogin.php" method="POST">
            Username :
            <input type = "text" onfocus = "this.value=''" name = "username" value = "Username"/>
            <br>
            Password :
            <input type = "password" onfocus = "this.value=''" name = "password" value = "Password"/>
            <br>
            <input class="tombol" value="LOGIN" type="submit" id="bt" />
        </form>
</div>
    </body>
</html>

