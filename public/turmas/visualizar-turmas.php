<?
    $page = 'Turmas';
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','header.php' )));
        setHeaders($page);
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','navbar.php' )));
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','jumbotron.php' )));
        setJumbotron($page);
?>

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <table class="table table-striped table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Filtrar</th>
                        <th scope="col">Instrutor</th>
                        <th scope="col">Treinamento</th>
                        <th scope="col">Carga horária</th>
                        <th scope="col">Participantes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>IPv4</td>
                        <td>9:30:00</td>
                        <td>8 Participantes</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>IPv6</td>
                        <td>9:30:00</td>
                        <td>1 Participantes</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Harper</td>
                        <td>API</td>
                        <td>9:30:00</td>
                        <td>15 Participantes</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Evelyn</td>
                        <td>SQL and NoSQL</td>
                        <td>9:30:00</td>
                        <td>7 Participantes</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Jackson</td>
                        <td>POO with PHP</td>
                        <td>9:30:00</td>>
                        <td>3 Participantes</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Avery</td>
                        <td>TDD in PHP</td>
                        <td>9:30:00</td>
                        <td>4 Participantes</td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

<div class="h-100 d-flex justify-content-center">
        <div class="jumbotron text-white" style = "background-color: #2A2A2A"> 
    
        </div>
</div>

<?
    include(dirname(__DIR__, 2).DIRECTORY_SEPARATOR.join(DIRECTORY_SEPARATOR, array('views','footer.php' )));
?>