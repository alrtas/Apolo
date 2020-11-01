<?
    $page = 'Turmas';
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
                            <label for="exampleFormControlInput1">Instrutor:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="th052070">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Treinamento:</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Redes               </option>
                                <option>Comunicação         </option>
                                <option>Segurança           </option>
                                <option>Controle de acesso  </option>
                                <option>Energia             </option>
                                <option>Corporativo         </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-light w-100">Editar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="example-datetime-local-input">Inicio:</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="datetime-local" value="2020-10-28T15:12:00" id="example-datetime-local-input">   
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="example-datetime-local-input">Fim:</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="datetime-local" value="2020-10-30T13:45:00" id="example-datetime-local-input">   
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1">Participantes:</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Redes               </option>
                                <option>Comunicação         </option>
                                <option>Segurança           </option>
                                <option>Controle de acesso  </option>
                                <option>Energia             </option>
                                <option>Corporativo         </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-light w-100">Listar</button>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-5">
                        <div class="col-md-3 w-100">
                            </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label ml-5" for="defaultCheck1">
                                    Thiago Alberto da Silva
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label ml-5" for="defaultCheck2">
                                    Ana Caroline da Silva e Sá
                                </label>
                            </div>
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