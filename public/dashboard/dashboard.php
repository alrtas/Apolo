

<?
    $card = '
            <div class="col-md-4 col-sm-6">
                <div class="card bg-secondary mx-3 my-5">
                    <div class="card-header text-center bg-dark text-warning"><b>Treinamento</b></div>
                    <div class="card-body">
                        <p class="card-text"><b>Data do treinamento:</b> 2020-09-17 até 2020-09-25</p>
                        <p class="card-text"><b>Horário do treinamento:</b>  08:00:00 até 17:30:00</p>
                        <p class="card-text"><b>Instrutor:</b> Pedro Henrique</p>
                        <p class="card-text"><b>Carga horária:</b>  85:30 Horas</p>
                        <p class="card-text"><b>Participantes:</b> 4</p>
                        <p class="card-text"><b>Confirmados:</b> 2</p>
                        <p class="card-text"><b>Status:</b> Alguns participantes ainda não confirmaram</p>
                        <button type="button" class="btn btn-outline-light w-100">SENIOR</button>
                    </div>
                </div>
            </div>
        ';

    $page = 'Dashboards';
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
        setHeaders($page);
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','jumbotron.php' )));
        setJumbotron($page);
?>

<div class="row justify-content-center my-5">
    <div class="container text-white">
        <div class="col-md-8 col-sm-10">
            <div class="card bg-secondary mx-3 my-5">
                <div class="card-header text-center bg-dark"><b>FILTROS</b></div>
                <div class="card-body">
                <form>
                    <div class="form-group row  mt-5">
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Registro:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="20">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Instrutor:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="th052070">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Data inicial:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="15/10/2020">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Data Final:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="17/10/2020">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Filial:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="SC">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Unidade:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="REDES">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Treinamento</label>
                        </div>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="POO com PHP">
                        </div>
                    </div>
                    <div class="col-md-12 w-100 justify-content-center">
                        <button type="button" class="btn btn-outline-primary w-100">BUSCAR</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
        <?echo $card?>
    </div>
</div>

<div class="h-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style= "background-color: #2A2A2A"> 
        </div>
</div>

<?
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','footer.php' )));
?>

