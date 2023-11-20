<?php
    session_start();
    if (!isset($_SESSION["username"])){
        $un = $_SESSION["username"];
        header("location:index.php");
    }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link rel="stylesheet"  href="main.css" >
    </head>

    <body>
    <div class="span" id="header">
            <div id="menu">
                <span>Menu</span>
                <div class="dropdown-options">
                    <ul>
                        <a href="main.php"> 
                            <li>Main</li>
                        </a>
                        <a href="CV.php">
                            <li>CV</li>   
                        </a>
                        <a href="gallery.php">
                            <li>Gallery</li>   
                        </a>
                        <a href="contactus.php">
                            <li>ContactUs</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="welcome" style="float: right;">
                <div class="text" style="display: inline-block;"> 
                    <?php
                        echo '<p>';
                        echo "Welcome ";
                        echo $_SESSION["username"];
                        echo '</p>';
                    ?>
                </div>
                <button class="logout-button" style="display: inline-block;" id="button" onclick="logout()">Logout</button>
            </div>

        </div>
        <style>
            #header {
    background: #3498db;
    height: 55px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

#menu {
    cursor: pointer;
    color: #fff;
    font-size: large;
}

.dropdown-options {
    display: none;
    position: absolute;
    background-color: #3498db;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 10px;
    z-index: 1;
}

#menu:hover .dropdown-options {
    display: block;
}

#menu ul {
    list-style-type: none;
    padding: 0;
}

#menu li {
    color: #fff;
    padding: 8px 0;
}

.welcome {
    display: flex;
    align-items: center;
}

.text {
    margin-right: 10px;
    color: #fff;
}

.logout-button {
    background-color: transparent;
    color: #fff;
    border: 1px solid #fff;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
}


.intro {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
}

.intro-content {
    text-align: center;
    margin-top: 20px;
}

.intro-content p {
    margin: 0;
}

.mypic {
    width: 200px; 
    height: 200px; 
    overflow: hidden;
    border-radius: 50%;
    margin-top: 20px;
}

.mypic img {
    max-width: 100%;
    height: auto;
    object-fit: cover; 
}






        </style>


        <div class="intro">
            
            <div class="intro-content">
                <p >
                Hey! I am Sandra, Welcome to My Portfolio!
                <br><br><br>


                Disclaimer: This will reveal a lot about me!
                <br><br><br>


                I hope it creates a cute impression
                </p> 
            </div>

            <div class="mypic">
                <img src="me.jpg" alt="Oups you could't see my picture :(" />
            </div>

        </div>

        <script>
            function logout () {
                location.href = "index.php";
            }
        </script>
        
        

    </body>

</html>