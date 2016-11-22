<?php
echo '<div id="top_bar">
            <div id="logo_area">
                <img id="header_logo" alt="project_logo" src="../../images/network_icon.ico">
                <h3 id="header_title">Analysis Centre</h3>
            </div>
            <div id="user_welcome">
                <p style="width:auto;height:auto;display:table">Welcome 
                    <a href=""><?php 
                                if(!isset($_SESSION["name"])){
                                    $_SESSION["logged_in"]=0;
                                    echo "yo";
                                    header("Locaton:  login.php");
                                }else{ 
                                    echo $_SESSION["name"]; 
                                }?>
                    </a>
                </p>
            </div>
        </div>';
?>