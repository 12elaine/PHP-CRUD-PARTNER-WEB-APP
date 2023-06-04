<?php
include('connection.php');
session_start();

// Check if the submit button is clicked
if (isset($_POST['submit'])) {
  $FirstName  = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];
  $Number = $_POST['Number'];

  $sql = "INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `Number`)
          VALUES ('$FirstName', '$LastName', '$Email', '$Number')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: add.php');
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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand black-bold" href="index.php">
                <img src="logo.png" alt="Logo" width="100" height="80" class="d-inline-block align-text-top">
                COLOURS PRINT AND TRADING WEB DESIGN
            </a>
        </div>
    </nav>
  
  <div class="center">
    <img src="logo.png" class="logo" />
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-4 m-auto">
        <h3> The List of Users</h3>
        </div>
      </div>
      </body>
      <a href="create.php" class="btn btn-primary my-5">Add User</a>
      <table class="table table-light table-striped table-bordered border-primary">
        <thead>

          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = mysqli_query($con, "SELECT * FROM `user`");
          if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $FirstName  = $row['FirstName'];
              $LastName = $row['LastName'];
              $Email = $row['Email'];
              $Number = $row['Number'];
              echo '<tr>
              <th scope="row">' . $id . '</th>
              <td>' . $FirstName . '</td>
              <td>' . $LastName . '</td> 
              <td>' .$Email . '</td>
              <td>' .$Number . '</td>
              <td>
              <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
              class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"
              class="text-light">Delete</a></button>

              </td>
              </tr>';
            }
          } else {
            echo '<tr><td colspan="5">No user found</td></tr>';
          }
          ?>
        </tbody>
      </table>

      <div class="container">
        <button class="btn btn-primary" type="button" id="productButton" onclick="document.location='index.php'">Back</button>
        <button class="btn btn-primary" type="button" id="productButton" onclick="document.location='product.php'">Go to Product</button>
        </div> 
    <br>
    <?php include('inc/footer.php'); ?>
      </div>
    </div>
  </div> 
</body>
</html>
