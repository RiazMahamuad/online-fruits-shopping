<?php
include 'databaseCon.php';
if (isset($_POST['additem'])) {
    $file= $_FILES['image'];
    $iname = $_POST['iname'];
    $iprice = $_POST['iprice'];
    
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

   if($fileerror==0)
 { 
  
    $destfile = 'Upload/'.$filename;
    
     move_uploaded_file($filepath, $destfile);
     
     $insertQuery= " insert into onlinefruits (image,name,price)
     values('$destfile','$iname','$iprice')";
     $query= mysqli_query($con,$insertQuery);
     if($query)
     {
      
        echo "successFull"; 
     }
     else{
        echo " No successFull";
     }
 }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
</head>
<body style=" background-image: linear-gradient(to right top, #d127a2, #b321a8, #9023ad, #6428b1, #152cb1);">
<div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#Fruits">Fruits</a>
        <a href="#Cart">Card</a>
        <a href="#about">Contact</a>
        <a href="#about">About</a>
    </div>
    <br><br>
    <!--  add item -->
    <br><br>
   
    <div class="buybtn">
     <button id="additem">Add Item +</button>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Please fill up the form</p>
                <form method="POST" enctype="multipart/form-data">
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
    
   
       <!--  <?php
            include 'databaseCon.php';
            $selectQuery = "select * from test2";
            $query = mysqli_query($con, $selectQuery);
            //$resul= mysqli_fetch_array($query);
            while ($resul = mysqli_fetch_array($query)) {
            ?>



           <?php
            }
            ?> -->


<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Select quantity</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Number</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
          <!--   <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr class="active-row">
           <td>Melissa</td>
            <td>5150</td>
          
        </tr> -->
        <?php
            include 'databaseCon.php';
            $selectQuery = "select * from test2";
            $query = mysqli_query($con, $selectQuery);
            //$resul= mysqli_fetch_array($query);
            while ($resul = mysqli_fetch_array($query)) {
            ?>

                    <tr>
                    <td><?php echo $resul['fname']; ?></td>
                    <td><?php echo $resul['quantity']; ?></td>
                    <td><?php echo $resul['Name']; ?></td>
                    <td><?php echo $resul['Email']; ?></td>
                    <td><?php echo $resul['Address']; ?></td>
                    <td><?php echo $resul['Phone_Name']; ?></td>
                   
                </tr>

           <?php
            }
            ?>
    </tbody>
</table>

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