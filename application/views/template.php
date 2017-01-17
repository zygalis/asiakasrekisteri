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
        
        <div class="container">
        <h1>Asiakasrekisteri</h1>
        <?php
            $this->load->view($main_content);
        ?>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
