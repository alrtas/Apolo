<?
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('Views','header.php' )));
    setHeaders('Home');
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('Views','navbar.php' )));
?>
    <div class="h-100 d-flex justify-content-center">
        <div class="col-md-7 col-sm-9 my-auto">
            <div class="jumbotron text-center text-white rounded" style = "background-color: #2A2A2A"> 
                <h1 class="display-4">Olá, Thiago!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <a class="btn btn-dark btn-lg bg-dark" href="#" role="button">Institucional</a>
            </div>
        </div>
    </div>




<?
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('Views','footer.php' )));
?>