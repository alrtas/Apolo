<?php 

function setHeaders($title){
    echo ('
                <!doctype html>
                <html lang="pt-BR">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                        <link rel="icon" type="image/png" href="/favicon.png"/>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
                        
                        <style type="text/css">

                            html {
                                position: relative;
                                min-height: 100%;
                            }
                            body {
                                height: 100%;
                                background-color: #2A2A2A;
                            }
                            ::-webkit-scrollbar {
                                width: 0px;
                            }
                            .footer {
                                position: absolute;
                                bottom: 0;
                                width: 100%;
                              }
                              
                              .footer .container-fluid {
                                height: 0px;
                              }
                              
                              .footer .container {
                                padding-top: 0px;
                              }
                              th {text-align:center}
                              td {text-align:center}
  
                        </style> 
                        <title>'.$title.'</title>
                    </head>
                    <body>
                    '
            );
}

