<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register asset</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


    <div class="container mt-5">

    <?php

    include('message.php');

    ?>

       <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Asset register
                            <a href="index.php" class="btn btn-danger float-end">BACK</a> 
                        </h4>
                    </div>
                

                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>asset name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>model</label>
                            <input type="text" name="model" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>serial number</label>
                            <input type="text" name="serialNumber" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>MAC address</label>
                            <input type="text" name="macAddress" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_asset"  class="btn btn-primary">save asset</button>


                        </div>
</div>
                    </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>+




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>