<html>

    <head>
        <title>Home</title>
        <!-- include references made available to all pages -->
        <?php include("../fragments/generic_head.php"); ?>
        <link rel="stylesheet" type="text/css" href="../../css/home.css">
    </head>

    <body>
      <?php
        include("../fragments/check_logged_in.php");
      ?>
        <div id="top_bar">
            <div id="logo_area">
                <img alt="project_logo" src="../../images/network_icon.ico">
                <h3>Analysis Centre</h3>
            </div>

            <div id="user_welcome">
                <p style="width:auto;height:auto;display:table">Welcome <a href=""><?php if(!isset($_SESSION["name"])){
    $_SESSION["logged_in"]=0;
    echo "yo";
    header("Locaton:  login.php");
}else{ echo $_SESSION["name"]; }?></a></p>
            </div>
        </div>

        <div class="centered_items" style="width:70%">
            <ol>
                <a href=""><li style="background-image:url(../../images/network-img.png)"><div class="button">Network Mapping</div></li></a>
                <a href=""><li style="background-image:url(../../images/attack.jpg)"><div class="button">Attacks</div></li></a>
                <a href=""><li style="background-image:url(../../images/terminal.jpg)"><div class="button">Terminal access</div></li></a>
                <a href=""><li style="background-image:url(../../images/Vulnerability.png)"><div class="button">Vulnerabilities</div></li></a>
            </ol>
        </div>
        <?php include("../fragments/footer.php"); ?>
    </body>
</html>