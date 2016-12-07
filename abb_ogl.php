<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="Stylesheet" type="text/css" href="style.css" />
<title>Dodaj ogłoszenie do serwisu</title>
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
      <a class="navbar-brand" >Formularz dodawania ogłoszenia</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Basic.php">Strona Główna <span class="sr-only">(current)</span></a></li>
        <li><a href="abb_ogl.php">Dodaj ogłoszenie</a></li>        
      </ul> 
	  <ul class="nav navbar-nav navbar-right"> 
        <li class="dropdown">
          <a href="wylogowanie.php">Wyloguj</a>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</br></br></br></br></br>
<form class="form-inline, ramka" method="POST" action="dod.php" align="center">
</br></br>
  <div class="form-group">
    <label class="sr-only" for="nazwa_prod">Nazwa produktu</label>
    <input type="text" class="form-control" name="nazwa_prod" placeholder="Nazwa produktu" >
  </div>
  <div class="form-group">
    <label class="sr-only" for="opis_prod">Opis Produktu</label>
    <textarea rows="3" cols="22" class="form-control" name="opis_prod" placeholder="Opis produktu"></textarea>
  </div>   
  <div class="form-group">
    <label class="sr-only" for="telefon">Telefon</label>
    <input type="number" class="form-control" name="telefon" placeholder="Numer telefonu" >
  </div>
  <div>
	<select class="form-control" name="kategoria">
    <option value="1">Motoryzacja</option>
    <option value="2">Sport</option>
    </select>
  </div></br>
  <input type="submit" class="btn btn-default" name="dodaj" value="Dodaj ogłoszenie">
  </br></br>
</form>
</body>
</html>
