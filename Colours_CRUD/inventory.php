<?php
include('connection.php');
session_start();

// Check if the submit button is clicked
if (isset($_POST['submit'])) {
  $product  = $_POST['product '];
  $quantity = $_POST['quantity'];

  $sql = "INSERT INTO `inven` (`product `, `quantity`)
          VALUES ('$product ', '$quantity')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: inventory.php');
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
  </style>
</head>
<body>
  <div class="center">
      <img src="logo.png" class="logo" />
    <div class="container my-5">
    <div class="col-lg-4 m-auto">
          <h3>Shown Checklist Product</h3>
        </div>
</body>
<a href="add_inven.php" class="btn btn-primary my-5"> Manage Product</a>
<table class="table table-light table-striped table-bordered border-primary">
        <thead>
          <th scope="col">Id</th>
          <th scope="col">Product</th>
          <th scope="col">Quantity</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query($con, "SELECT * FROM `inven`");
        if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product  = $row['product'];
            $quantity = $row['quantity'];
            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $product . '</td>
            <td>' . $quantity . '</td> 
            <td>
            <button class="btn btn-primary"><a href="update_inven.php?updateid='.$id.'""
            class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete_inven.php?deleteid='.$id.'""
            class="text-light">Delete</a></button>

            </td>
            </tr>';
          }
        } else {
          echo '<tr><td colspan="5">No product found</td></tr>';
        }
        ?>
      </tbody>
    </table>
    <div class="container">
        <button class="btn btn-primary" type="button" id="BackButton" onclick="document.location='add.php'">Back</button>
        <button class="btn btn-primary" type="button" id="productButton" onclick="document.location='index.php'">Go to Home</button>
    </div> 
    <br>
    <?php include('inc/footer.php'); ?>
      </div>
    </div>
  </div> 
</body>
</html>
<script>
  document.getElementById("productButton").addEventListener("click", function() {
    // Create a connection and redirect to the product page
    window.location.href = "index.php";
  });
</script>
