


<?php

session_start();
$root = "/chefcost";


if(isset($_SESSION['username'])){
    echo ('<div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="'.$root.'"><span>ChefCost</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="'.$root.'">Home</a>
              </li>
              <li>
                <a href="#">Ingredienti</a>
              </li>
                <li>
                <a href="#">Ricette</a>
              </li>
                <li>
                <a href="areautente.php">Area utente</a>
              </li>
              <li>
                <a href="'.$root.'/script/php/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container" id="contenitore">');
}
else {
    echo ('<div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="'.$root.'"><span>ChefCost</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="'.$root.'">Home</a>
              </li>
              <li>
                <a href="#">Ingredienti</a>
              </li>
                <li>
                <a href="#">Ricette</a>
              </li>
                <li>
                <a href="'.$root.'/register">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container" id="contenitore">');
}

?>
