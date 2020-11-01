<?
    $page = 'Colaboradores';
    include(dirname(__DIR__,2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
        setHeaders($page);
    include(dirname(__DIR__,2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','jumbotron.php' )));
        setJumbotron('Criar '.$page);
?>

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <table class="table table-striped table-responsive-md table-dark">
                <thead>
                    <tr>
                        <th scope="col">Filtar</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Nível de acesso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>ma041222</td>
                        <td>mark@intelbras.com.br</td>
                        <td>Redes</td>
                        <td>Treinador</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>ja042182</td>
                        <td>jacob@intelbras.com.br</td>
                        <td>Segurança</td>
                        <td>Treinador</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>la044123</td>
                        <td>larry@intelbras.com.br</td>
                        <td>Comunicação</td>
                        <td>Participante</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Kyle</td>
                        <td>ky045821</td>
                        <td>kyle@intelbras.com.br</td>
                        <td>Segurança</td>
                        <td>Participante</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Damian</td>
                        <td>da046098</td>
                        <td>damian@intelbras.com.br</td>
                        <td>Controle de Acesso</td>
                        <td>Participante</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Reece</td>
                        <td>re047430</td>
                        <td>reece@intelbras.com.br</td>
                        <td>Energia</td>
                        <td>Auditor</td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

<div class="h-100 w-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style = "background-color: #2A2A2A"> 
            <h1 class="display-4 text-center"></h1>
        </div>
</div>
<?
    include(dirname(__DIR__,2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','footer.php' )));
?>