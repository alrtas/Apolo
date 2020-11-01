<?
    $page = 'Treinamentos';
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
        setHeaders($page);
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','jumbotron.php' )));
        setJumbotron('Criar '.$page);
?>

<div class="h-100 d-flex justify-content-center">
        <div class="col-md-7 col-sm-9 my-auto">
            <div class="jumbotron  text-white rounded" style = "background-color: #2A2A2A"> 
                <form>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Nome:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Treinamento de tratamento ao cliente">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Criador:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="th052070">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Conteudo:</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Objetivo:</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 w-100 justify-content-center my-5">
                        <button type="button" class="btn btn-outline-success w-100">SALVAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="h-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style = "background-color: #2A2A2A"> 
            <h1 class="display-4 text-center"></h1>
        </div>
    </div>
<?
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','footer.php' )));
?>