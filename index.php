<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id");
    $row = mysqli_fetch_assoc($result);

}
else{
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <header>
        <nav class="navigation">
            <div class="logo">Mi-Kishan</div>
            <div class="right">
                <ul>
                    <li><a href="#">Services</a> </li>
                    <li><a href="#">About Us</a> </li>
                    <li><a href="#">Contact</a> </li>
                </ul>
            </div>
            <div class="dropdown">
            <a class="sign_btn" href="#">Sign Up</a>
            <div class="dropdown-menu">
            <a href="logout.php" class="dropdown-item">Logout</a>
            <a href="registration.php" class="dropdown-item">Sign Up</a>
            
        </div>
    </div>
            

        </nav>
        
        <img src="images/building.jfif" class="img1" alt="building">
        <div class="serch_title">
            <h2>A Creative <br>Company That's More</h2>

        </div>
        <div class="serch"><input type="text" placeholder="www.gmail.com">
            <i class="fa fa-search serch_icon" aria-hidden="true"></i>
        </div>
        <img src="images/building.jfif" class="img2" alt="building">

        <div class="about">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla animi et debitis hic sapiente optio dicta
            blanditiis consequatur voluptate praesentium tempore rem iure minus amet, id cum sunt magnam architecto,
            ratione ducimus magni quisquam? Illum velit repellendus accusamus odio magni?
            <div class="f-s">
                by Founder
            </div>
            <div class="f-red">
                Majarul Islam

            </div>
        </div>

        <div class="last">
            <img src="images/building.jfif" class="img3" alt="...">
            <div class="side_content">
                <h3>
                    Correct decision <br>is the main purpose <br>of this agency.

                </h3>
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsa odit similique suscipit? Aliquid,
                    placeat minus similique illo odit id tempora ratione a voluptatum
                </div>
            </div>


        </div>

    </header>
    <div class="box-item">
        <div class="box">
            <p>01</p>
            <div>Planning</div>
        </div>
        <div class="box">
            <p>02</p>
            <div>Experiment</div>
        </div>
        <div class="box">
            <p>02</p>
            <div>Project</div>
        </div>
    </div>

    <main>
        <div class="cases">
            <div>
                <h4>Here goes a titel about the <br> cases datdash has on <br> here </h4>
            </div>
            <div>
                <p style="font-size: .7rem;padding: 1rem 0 0 0;">check out of our cases <i class="fa fa-arrow-right"
                        style="font-size: .6rem; padding-left: 2rem;" aria-hidden="true"></i></p>
            </div>

        </div>
        <figure class="fig-1">
            <img class="f-1" src="images/w1.jfif" alt="w1">
            <figcaption class="same">
                <h5>Check out of our cases</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, provident nam esse numquam ratione
                    quis veniam dicta ex illum? Maiores!</p>
            </figcaption>
        </figure>
        <figure class="fig-2">
            <img class="f-2" src="images/th.jfif" alt="w1">
            <figcaption class="same">
                <h5>Check out of our cases</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, provident nam esse numquam ratione
                    quis veniam dicta ex illum? Maiores!</p>
            </figcaption>
        </figure>
        <figure class="fig-3">
            <img class="f-3" src="images/w3.jfif" alt="w1">
            <figcaption class="same">
                <h5>Check out of our cases</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, provident nam esse numquam ratione
                    quis veniam dicta ex illum? Maiores!</p>
            </figcaption>
        </figure>
    </main>
    <section>
        <h2>All you need to do is follow <br>our steps</h2>
        <div class="bx">
            <div class="b-1 heading">
                <p class="step">01</p>
                <h5>Check out of our casess</h5>
                <p class="heading-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci expedita doloremque quod magnam
                    exercitationem eligendi, corporis aut non voluptatum cum.</p>
            </div>
            <div class="b-2 heading">
                <p class="step">02</p>
                <h5>Check out of our casess</h5>
                <p class="heading-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci expedita doloremque quod magnam
                    exercitationem eligendi, corporis aut non voluptatum cum.</p>
            </div>
            <div class="b-3 heading">
                <p class="step">03</p>
                <h5>Check out of our casess</h5>
                <p class="heading-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci expedita doloremque quod magnam
                    exercitationem eligendi, corporis aut non voluptatum cum.</p>
            </div>
        </div>
        <div class="concept">
            <h2 class="concept-heading">Concept</h2>
            <p class="concept-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, reprehenderit! Sit perspiciatis saepe,
                provident at dicta, qui maxime doloribus nemo et quibusdam deserunt ipsa quaerat quae ut odit minima.
                Eum eaque </p>
        </div>

    </section>
     
    <footer class="footer-s">
        <div class="grid-container">
            <div class="grid-item">

                <p style="color: black;">Product</p>
            <div>
                <p>Icon Design</p>
                <p>Logo Design</p>
                <p>UI/UX Design</p>
            </div>
            </div>
            <div class="grid-item">
                <p style="color: black;">Resources</p>
                <div>
                <p>Blog</p>
                <p>Support</p>
                <p>Newseletter</p>
            </div>
            </div>
            <div class="grid-item">
                <p style="color: black;">Community</p>
                <div>
                <p>Twitter</p>
                <p>Instagram</p>
                <p>Slak</p>
                <p>Dribble</p>
            </div>
            </div>  
            <div class="grid-item">
                <p style="color: black;">Support</p>
            <div>
                <p>My Account</p>
                <p>Help & Support</p>
                <p>Contact Us</p>
            </div>
            </div>
            <div class="grid-item">
                <p style="color: black;">Company</p>
            <div>
                <p>Privacy Policy</p>
                <p>Terms of Services</p>
                <p>Code of conduct</p>
            </div>
            </div>
            
        </div>
        <p class="end">Made Remotely By TanahAir Studio. Copyright 2020</p>
        
    </footer>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>