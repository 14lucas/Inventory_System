<?php

require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>view asset</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


    <div class="container mt-5">

    <?php




    ?>

       <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>view asset details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a> 
                        </h4>
                    </div>
                

                <div class="card-body">

                <?php
                if(isset($_GET['id']))
                {
                    $asset_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM asset WHERE id='$asset_id'";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $asset = mysqli_fetch_array($query_run);
                        ?>
                       

                        <div class="mb-3">
                            <label>ID</label>
                                <p class="" >
                                    <?=$asset['id'] ?>

                                </p>
                        </div>

                        <div class="mb-3">
                            <label>asset name: </label>
                                <p class="" >
                                    <?=$asset['name'] ?>

                                </p>
                        </div>

                        <div class="mb-3">
                            <label>model: </label>
                                <p class="" >
                                    <?=$asset['model'] ?>

                                </p>
                        </div>


                        <div class="mb-3">
                            <label>serial number: </label>
                                <p class="" >
                                    <?=$asset['serialNumber'] ?>

                                </p>
                        </div>


                        <div class="mb-3">
                            <label>MAC address: </label>
                                <p class="" >
                                    <?=$asset['macAddress'] ?>

                                </p>
                        </div>

   
                    <?php
                
                }

                else
                {
                    echo "<h4>No such id Found</h4>";
                }
            }

                ?>

                    </div>
                 </div>
            </div>
        </div>
    </div>+




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>