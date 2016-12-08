<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="Stylesheet" type="text/css" href="style.css" />
<title>Logowanie</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >Logowanie</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="serwis_ogl.php">Strona Główna <span class="sr-only">(current)</span></a></li>              
      </ul> 
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="Register.php">Sign in</a></li>
        <li class="dropdown">
          <a href="login.php">Logowanie </a>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
<form class="form-inline , ramka" method="POST" action="log.php" align="center">
</br></br>
  <div class="form-group">
    <label class="sr-only" for="login">Login</label>
    <input type="text" class="form-control" name="login" placeholder="Login">
  </div></br></br>
  <div class="form-group">
    <label class="sr-only" for="haslo1">Hasło</label>
    <input type="password" class="form-control" name="haslo1" placeholder="Password">
  </div>  </br></br>
  <input type="submit" class="btn btn-default" name="loguj" value="Zaloguj">
  </br></br>
</form>
</body>
</html>