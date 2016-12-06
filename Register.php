<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title> Rejestracja </title>
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
      <a class="navbar-brand" >Rejestracja</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="serwis_ogl.php">Strona Główna <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
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
<form class="form-horizontal, ramka" method="POST" action="rej.php">
</br></br>
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="haslo1" class="col-sm-2 control-label">Hasło</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="haslo1">
    </div>
  </div></br></br>
 <div class="form-group">
    <label for="haslo2" class="col-sm-2 control-label">Powtórz Hasło</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="haslo2">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="imie" class="col-sm-2 control-label">Imię</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="imie">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="nazwisko" class="col-sm-2 control-label">Nazwisko</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nazwisko">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="telefon" class="col-sm-2 control-label">Telefon</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="telefon">
    </div>
  </div></br></br>
  <div class="form-group">
    <label for="data_ur" class="col-sm-2 control-label">Data Urodzenia</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="data_ur">
    </div>
  </div></br></br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value="Zarejestruj mnie" name="Rejestruj">
    </div>
  </div>
</form>
</body>
</html>