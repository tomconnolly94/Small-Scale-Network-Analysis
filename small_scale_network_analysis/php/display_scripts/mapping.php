<html>

    <head>
        <title>Network Mapping</title>
        <!-- javascript references -->
        <script src="../../dependencies/pixi.min.js"></script>
        <script src="../../dependencies/jquery-3.1.1.min.js"></script>
        <script src="../../javascript/3js/mapping/init.js"></script>
        <script src="../../javascript/3js/mapping/animate.js"></script>
        <script src="../../javascript/3js/mapping/data_request.js"></script>
        <script src="../../javascript/3js/general_purpose_funcs.js"></script>
        <!--css references -->
        <link rel="stylesheet" type="text/css" href="../../css/mapping.css">
        <!-- include references made available to all pages -->
        <?php include("../fragments/generic_head_refs.php"); ?>
    </head>

    
    <body>
        <!--include fragment scripts -->
        <?php
            include("../fragments/check_logged_in.php");
        ?>
        <?php
            include("../fragments/generic_page_header.php");
        ?>

        <!-- main body of content -->
        
        
        <div id="container">
            <h3 id="title" class="centered_items"> Network Mapping </h3>
            <div id="txtHint"> </div>
        </div>
        
        <div id="javascript">
            <script>
                /* 3js init and run
                //create globals for 3js scene
                var scene, camera, renderer;
                this.master_data;

                get_data();
                
                document.onload = animate();
                */ 
                
                //Create the renderer
                var renderer = PIXI.autoDetectRenderer(256, 256);
                //Add the canvas to the HTML document
                document.body.appendChild(renderer.view);
                //Create a container object called the `stage`
                var stage = new PIXI.Container();

                
                PIXI.loader
                  .add("../../images/attack.jpg")
                  .load(setup);

                function setup() {
                  var sprite = new PIXI.Sprite(
                    PIXI.loader.resources["../../images/attack.jpg"].texture
                  );
                    
                    stage.addChild(sprite);
                
                
                    //Tell the `renderer` to `render` the `stage`
                    renderer.render(stage);
                    }
                
                
                
            </script>
        </div>
        
        <!--include footer -->
        <?php include("../fragments/footer.php"); ?>
        
    </body>


</html>