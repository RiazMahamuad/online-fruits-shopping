<?php
include 'databaseCon.php';
if (isset($_POST['additem'])) {
    $type = $_POST['type'];
    $type2 = $_POST['type2'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phNumber= $_POST['phNumber'];



    $insertQuery = " insert into test2 (fname,quantity,Name,Email,Address,Phone_Name)
   values('$type', '$type2',' $name',' $email','$address','$phNumber')";
    $query = mysqli_query($con, $insertQuery);
    if ($query) {

        /* echo "successFull"; */
    } else {
        echo " No successFull";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminsite2.css">
   
    <title>Document</title>
</head>

<body>
    <!-- <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#Fruits">Fruits</a>
        <a href="#Cart">Card</a>
        <a href="#about">Contact</a>
        <a href="#about">About</a>
        <a href="index.php">LogOut</a>
    </div>
    <br><br><br> -->
    <br><br>
    <div class="buybtn">
     <button id="additem">Add Item +</button>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Please fill up the form</p>
                <form method="POST">
                <div class="details">
                    <label>item image</label>
                    <input type="file" name="image" required><br>
                    <label>item Name</label>
                    <input type="text" name="iname" required><br>
                    <label>item Price kg</label>
                    <input type="text" name="iprice" required><br>
                    <button id="sbtn" name="additem">submit</button>
                </div>
                </form>
            </div>
    </div>
    <script>

        /* model open */
var modal = document.getElementById("myModal");


var btn = document.getElementById("additem");



var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

    </script>
</body>

</html>