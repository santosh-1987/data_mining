<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>PHP CRUD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/crud_style.css">

    </head>
    <body >
        <?php
        include '__dbconf__.php';
        $priv = __fcc_priv8_string();
        ?>  

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>