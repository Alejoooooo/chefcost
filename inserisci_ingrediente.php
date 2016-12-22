<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
    
  <body>
<?php
    require 'script/template_menu.php';
?>
    <form class="form-horizontal" role="form">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="inputEmail3" class="control-label">Nome ingrediente</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ingrediente" name="ingrediente" placeholder="Ingrediente"> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="inputEmail3" class="control-label">Prezzo</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prezzo" name="prezzo" placeholder="Ingrediente"> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="inputEmail3" class="control-label text-nowrap">Unità di misura</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" size="35" class="form-control" id="quantita" name="quantita" placeholder="Quantità"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary" type="submit">Salva ingrediente</button>
        </div>
    </form>
    </div>
    </body>

    </html>