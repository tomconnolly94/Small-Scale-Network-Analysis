<html>

    <head>
        <title>Network Mapping</title>
        <script src="../../dependencies/three.min.js"></script>
        <script src="../../dependencies/controls_lib/OrbitControls.js"></script>
        <script src="../../javascript/mapping/init.js"></script>
        <script src="../../javascript/mapping/animate.js"></script>
        <script src="../../javascript/mapping/data_request.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../../css/mapping.css">
    </head>

    
    <body>
    
        <script>
            //create globals for 3js scene
            var scene, camera, renderer, scene_container;
            
            var result = showUser("nope");
            
            console.log(result);
            
            //call methods to run the 3js scene
            //init();
            //animate();
        </script>
        
        <div id="container"> </div>
        <div id="txtHint"> </div>
        
    </body>


</html>