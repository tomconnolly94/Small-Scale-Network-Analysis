 function init(data){
     
     console.log(data[0].hostname);
                
     scene = new THREE.Scene();
     var WIDTH = window.innerWidth/1.2, 
         HEIGHT = window.innerHeight/1.5;

     renderer = new THREE.WebGLRenderer({antialias:true});
     renderer.setSize(WIDTH, HEIGHT);

     camera = new THREE.PerspectiveCamera(45, WIDTH / HEIGHT, 0.1, 20000);
     camera.position.set(0,700,0);
     scene.add(camera);

     window.addEventListener('resize', function() {
        var WIDTH = window.innerWidth/1.2,
            HEIGHT = window.innerHeight/1.5;
        renderer.setSize(WIDTH, HEIGHT);
        camera.aspect = WIDTH / HEIGHT;
        camera.updateProjectionMatrix();
     });
     
      // Add OrbitControls so that we can pan around with the mouse.
     controls = new THREE.OrbitControls(camera, renderer.domElement);
     
     // Create a light, set its position, and add it to the scene.
     var light = new THREE.PointLight(0xffffff);
     light.position.set(-100,200,100);
     scene.add(light);

     var xVal = -150;
     
     for(var i = 0; i < data.length; i++){
         
          //create a cube and add to scene
         var geometry = new THREE.BoxGeometry(50,50,50);
         var material = new THREE.MeshBasicMaterial({color: 0xfffff, wireframe: false});
         var cube = new THREE.Mesh(geometry, material);
         scene.add(cube);
         cube.position.set(xVal, 0,0);
         xVal += 150;
         var sprite = makeTextSprite(data[i].hostname);
         cube.add(sprite);
     }
        
     var scene_container = document.getElementById("container");
     renderer.domElement.className = "centered_items";
     document.body.appendChild(scene_container);
     scene_container.appendChild( renderer.domElement );
}