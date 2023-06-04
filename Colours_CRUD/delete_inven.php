<?php
    include "connection.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE from `inven` where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted Successfully";
            header('location: inventory.php');
        } else{
            die(mysqli_error($con));
        }
    }
?>
<?php include('inc/footer.php'); ?>