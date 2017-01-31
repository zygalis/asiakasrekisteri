<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Asiakasrekisteri</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php print base_url() . 'css/style.css';?>" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Asiakasrekisteri</a>
        </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <?php if($this->session->has_userdata('kayttaja')){ ?>
                    <li class=""><a href="<?php print site_url() . 'kayttaja/kirjaudu_ulos';?>">Kirjaudu ulos <span class="glyphicon glyphicon-log-out"></span></a></li>
                <?php } ?>
                
            </ul>
        </div>
    </nav>
        <div class="container">
               
                <?php
                    $this->load->view($main_content);
                ?>
        </div>
         
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/asiakas.js"></script>
    </body>
</html>
