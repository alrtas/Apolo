<?php
    function setJumbotron($name){
        echo ('
                <div class="h-40 d-flex justify-content-center">
                    <div class="jumbotron text-white mt-5" style= "background-color: #2A2A2A"> 
                        <h1 class="display-4 text-center">'.$name.'</h1>
                    </div>
                </div>
            ');
    }