<?php
    include "connection.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE from `employee` where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted Successfully";
            header('location: employee.php');
        } else{
            die(mysqli_error($con));
        }
    }
?>
<?php include('inc/footer.php'); ?>