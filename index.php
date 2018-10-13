<!DOCTYPE HTML>
<html>
	<head>
		<title>MetHotels 1720</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	</head>
<body>
<div class="jumbotron jumbotron-fluid primary white">
    <div class="container text-center">
        <h1 class="display-4">
            Methotels
        </h1>
    </div>
</div>

<div class="container">
    <div style="text-align: right">
        <p style="color: #ff6538">*Ako nemate nalog morate se registrovati</p>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form id="login-form" action="loginscr.php" method="POST">
                <h4>Login</h4>
                <div class="form-group ">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-login" value="LogIn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <h4>Register</h4>
            <form id="register-form" action="register.php" method="post" role="form" >
                <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="assets/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
</body> 
</html>


