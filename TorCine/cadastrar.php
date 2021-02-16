<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
    <title>TorCine</title>
    </head>
    <body>
    
    <nav class="nav-extended purple lighten-3" >
    <div class="nav-wrapper">
     <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
        
      </ul>
      </div>
   
      <div class="nav-header center">
           <h1>TorCine</h1>
        </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a  class="active" href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos(a)</a></li>
        <li class="tab "><a href="#test3">Favoritos</a></li>
        
      </ul>
    </div>
  </nav>
   <!--input do título-->
  <div class="row">
    <div class="col s6 offset-s3"> 
      <div class="card ">
          <div class="card-content ">
              <span class="card-title">Cadastrar Filme</span>
              <div class="row">
                    
              <div class="input-field col s12">
                    <input   id="título" type="text" class="validate required">
                <label for="título">Título do Filme</label>
                    </div>
                    
                     
          </div>
          <!--input do sinopse-->
          <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sinopse" class="materialize-textarea"></textarea>
          <label for="sinopse">Sinopse</label>
        </div>
      </div>
    </form>
  </div>
    
    <!--input da nota-->
        <div class="row">
    <form class="input-field col s4">
      <input id="titulo" type="number" step=".1" min=0 max=10 class="validate" required>
      <label for="titulo" > Título do Filme </label>
         
        </div>
      </div>

      <!--Input da capa do filme-->
       
      <div class="file-field input-field">
      <div class="btn purple lighten-2 black-text" >
        <span>Capa</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>




          <div class="card-action">
              <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
              <a href="#" class="waves-effect waves-light btn purple">Confirmar</a>
          </div>
      </div>

    </div>
  </div>