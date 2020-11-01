<?
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
    setHeaders('Inicio');
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
?>

<div class="h-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style = "background-color: #2A2A2A"> 
    
        </div>
</div>
    <div class="h-100 d-flex justify-content-center">
        <div class="col-md-7 col-sm-9 my-auto">
            <div class="jumbotron text-center text-white rounded" style = "background-color: #2A2A2A"> 
                <h1 class="display-4">Olá, Thiago!</h1>
                <p class="lead">Boa tarde, seja bem vindo! Seu nível de acesso é: <b>TREINADOR</b>.</p>
                <hr class="my-4">
                <a class="btn btn-dark btn-lg bg-dark" href="#" role="button">Institucional</a>
            </div>
        </div>
    </div>



<div class="h-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style = "background-color: #2A2A2A"> 
    
        </div>
</div>
<?
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','footer.php' )));
?>