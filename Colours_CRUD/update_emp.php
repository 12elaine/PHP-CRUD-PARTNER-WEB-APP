<?php
include('connection.php');
$id = $_GET['updateid'];
$sql = "SELECT * FROM `employee` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$Name = $row['Name'];
$Salary = $row['Salary'];
$Possition_Job = $row['Possition_Job'];

// Check if the submit button is clicked
if (isset($_POST['update'])) {
  $Name = $_POST['Name'];
  $Salary = $_POST['Salary'];
  $Possition_Job = $_POST['Possition_Job'];

  $sql = "UPDATE `employee` SET Name='$Name', Salary='$Salary', Possition_Job='$Possition_Job' WHERE id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: employee.php');
    exit;
  } else {
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('amp.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 400px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            margin-top: 50px; /* Add margin-top value as desired */
        }

        .black-bold {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand black-bold" href="index.php">
                <img src="logo.png" alt="Logo" width="100" height="80" class="d-inline-block align-text-top">
                COLOURS PRINT AND TRADING WEB DESIGN
            </a>
        </div>
        </nav>
    <div class="center">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <h3 style="color:black;">Update the provided info. if needed</h3>
        </div>
      </div>
      </body> 
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <form method="post">
          <div class="form-group">
            <label>Id</label>
            <input type="text" class="form-control" placeholder="Enter your id" name="id" value="<?php echo $id; ?>" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="Name" value="<?php echo $Name; ?>" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" placeholder="Enter your Salary" name="Salary" value="<?php echo $Salary; ?>" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>Possition Job</label>
            <input type="text" class="form-control" placeholder="Enter your Possition_Job" name="Possition_Job" value="<?php echo $Possition_Job; ?>" autocomplete="off" readonly>
          </div>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          </form>
        <br>
    <?php include('inc/footer.php'); ?>
      </div>
    </div>
  </div> 
</body>
</html>
