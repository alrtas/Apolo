<?
    $page = 'Treinamentos';
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
        setHeaders($page);
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','jumbotron.php' )));
        setJumbotron('Criar '.$page);
?>

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Filtrar</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Conteudo</th>
                        <th scope="col">Objetivo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>IPv4</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>IPv6</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Harper</td>
                        <td>API</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Evelyn</td>
                        <td>SQL and NoSQL</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jackson</td>
                        <td>POO with PHP</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Avery</td>
                        <td>TDD in PHP</td>
                        <td>Ver detalhes</td>
                        <td>Ver detalhes</td>
                    </tr>
                </tbody>
        </table>
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