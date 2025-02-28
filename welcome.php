<?php
// Retrieve the username from the URL parameter
$username = $_GET["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-group  a.btn-secondary:hover {
             background-color: #3084d8; /* Change the background color on hover */
         }
         .btn-group a.btn-secondary.active {
             background-color: #0cd4ba; /* Change the background color for the active button */
         }
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<?php include "header.php"; ?>
    <center>
        <div class="wrapper">
            <h2>Welcome, <?php echo $username; ?>!</h2>
            <p>You have successfully signed up.</p>
            <a href="welcome1.php"><h4>Next</h4></a> 
        </div>
    </center>
</body>
</html>