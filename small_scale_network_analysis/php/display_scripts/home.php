<?php
include("../fragments/check_logged_in.php");
?>

<html>

    <head>
        <title>Home</title>
        <!-- include references made available to all pages -->
        <?php include("../fragments/generic_head.php"); ?>
        <link rel="stylesheet" type="text/css" href="../../css/home.css">
    </head>

    <body>
        <div id="top_bar">
            <div id="logo_area">
                <img alt="project_logo" src="../../images/network_icon.ico">
                <h3>Analysis Centre</h3>
            </div>
            
            <div id="user_welcome">
                <p style="width:auto;height:auto;display:table">Welcome <a href=""><?php echo $_SESSION["name"]; ?></a></p>
            </div>
        </div>
    
        <div class="centered_items" style="width:60%">
            <ol>
                <a href=""><li style="background-image:url(../../images/network-img.png)">Network Mapping</li></a>
                <a href=""><li style="background-image:url(../../images/attack.jpg)">Attacks</li></a>
                <a href=""><li style="background-image:url(../../images/terminal.jpg)">Terminal access</li></a>
                <a href=""><li>Settings</li></a>
            </ol>
        </div>
        
        <?php include("../fragments/footer.php"); ?>
        
    </body>

</html>