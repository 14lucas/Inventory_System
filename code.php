<?php


session_start();
require 'dbcon.php';



if(isset($_POST['delete_asset']))
{
    echo '<script>alert("do you want to delete this asset?")</script>';
   
    $asset_id =  mysqli_real_escape_string($con, $_POST['delete_asset']);

    

    $query = "DELETE FROM asset WHERE id='$asset_id'";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset deleted successfully";
        header("location: index.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not deleted";
        header("location: index.php");
        exit(0);

    }

}



if(isset($_POST['update_asset']))
{
    $asset_id =  mysqli_real_escape_string($con, $_POST['asset_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $serialNumber = mysqli_real_escape_string($con, $_POST['serialNumber']);
    $macAddress = mysqli_real_escape_string($con, $_POST['macAddress']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);

    $query = "UPDATE asset  SET name='$name', model='$model', serialNumber='$serialNumber',macAddress='$macAddress',Location='$location' WHERE id='$asset_id'";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset updated successfully";
        header("location: index.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not update";
        header("location: index.php");
        exit(0);

    }

}


if(isset($_POST['save_asset']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $serialNumber = mysqli_real_escape_string($con, $_POST['serialNumber']);
    $macAddress = mysqli_real_escape_string($con, $_POST['macAddress']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    //$name = mysqli_real_escape_string($con, $_POST['name']);

    $query = "INSERT INTO asset (name,model,serialNumber,macAddress,Location) VALUES('$name',' $model','$serialNumber',' $macAddress','$location')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Asset registered successfully";
        header("location: asset_create.php");
        exit(0);
    }

    else
    {
        $_SESSION['message'] = "Asset not registered";
        header("location: asset_create.php");
        exit(0);

    }

}

?>