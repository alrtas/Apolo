<?
    $path =join(DIRECTORY_SEPARATOR, array('views','header.php' ));
    include(dirname(__DIR__).DIRECTORY_SEPARATOR.$path);

    setHeaders('Login');
?>


  <body>
    <div class="h-100 d-flex justify-content-center">
        <div class="col-md-7 col-sm-9 my-auto">
            <div class="card text-center">
                <div class="card-header">
                    Apolo | Login
                </div>
                <div class="card-body align-middle">
                    <form>
                        <div class="form-inline justify-content-center mt-3">
                            <label for="exampleInputEmail1">E-mail: </label>
                            <input type="email" class="form-control ml-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="alrrtas@gmail.com">
                        </div>
                        <div class="form-inline justify-content-center mt-2">
                            <label for="exampleInputPassword1">Senha: </label>
                            <input type="password" class="form-control ml-3" id="exampleInputPassword1" placeholder="*********">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Entrar</button>
                        <button type="submit" class="btn btn-success mt-4">Criar conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
