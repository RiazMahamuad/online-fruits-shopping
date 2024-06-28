<?php
include 'databaseCon.php';
if (isset($_POST['sbtn'])) {
    $type = $_POST['type'];
    $type2 = $_POST['type2'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phNumber = $_POST['phNumber'];



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
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#Fruits">Fruits</a>
        <a href="#Cart">Card</a>
        <a href="#about">Contact</a>
        <a href="#about">About</a>
        <a href="index.php">LogOut</a>
    </div>
    <br><br><br>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="slifdeImage/aaa.jpg" style="width:100%">
            <div class="text">Hello, fruit.</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="slifdeImage/bb.jpg" style="width:100%">
            <div class="text">Well Come to Fresh Fruits</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="slifdeImage/cc.jpg" style="width:100%">
            <div class="text">Hello, fruit.</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <br>
    <h1 id="title">FRESH FRUITS </h1>
    <div class="container">
        <?php
        include 'databaseCon.php';
        $selectQuery = "select *from onlinefruits";
        $query = mysqli_query($con, $selectQuery);

        while ($resul = mysqli_fetch_array($query)) {
        ?>

            <div class="card">
                <img src="<?php echo $resul['image']; ?>" width="100%" height="70%" />
                <h1>name: <?php echo $resul['name']; ?></h1>
                <h3>Price:<?php echo $resul['price']; ?></h3>
                <div class="buybtn">
                    <button id="buybtn">Buy Now</button>
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
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <br>
    <br>
    
    <footer id="about">
        <div class="footerDetails">
            <h1>Online Fruits</h1>
            <h4 id="cm">Contract me</h4>
        </div>

        <div class="contractDetails">
            <i class="fa fa-facebook"></i></a>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-github"></i>
        </div>

    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000);
        }

        /* model open */
      
        
        var modal = document.getElementById("myModal");


        var btn = document.getElementById("buybtn");



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