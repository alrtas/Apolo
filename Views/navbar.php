<?
 $path = join(DIRECTORY_SEPARATOR, array('Public','favicon.png' ));
 $iamgePath = dirname(__DIR__).DIRECTORY_SEPARATOR.$path;

?>

<nav class="navbar navbar-light navbar-static-top navbar-expand-sm" style="background-color: #cd422b;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand text-white" href="#">Apolo Project</a>
        </div>
        <form class="form-inline text-white">
            <button class="btn btn-sm btn-outline-light ml-2" type="button"><b>COLABORADORES</b></button>
            <button class="btn btn-sm btn-outline-light ml-2" type="button"><b>TREINAMENTOS</b></button>
            <button class="btn btn-sm btn-outline-light ml-2" type="button"><b>TURMAS</b></button>
            <button class="btn btn-sm btn-outline-light mx-2" type="button"><b>DASHBOARDS</b></button>
            <button class="btn btn-sm btn-outline-dark ml-5" type="button"><b>SAIR</b></button>
        </form>
    </div>


</nav>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>