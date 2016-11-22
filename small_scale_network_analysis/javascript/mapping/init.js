 function init(){
                
    scene = new THREE.Scene();
    var WIDTH = window.innerWidth/1.2, 
        HEIGHT = window.innerHeight/1.5;

    renderer = new THREE.WebGLRenderer({antialias:true});
    renderer.setSize(WIDTH, HEIGHT);
    //document.body.appendChild(renderer.domElement);

    camera = new THREE.PerspectiveCamera(45, WIDTH / HEIGHT, 0.1, 20000);
    camera.position.set(0,6000,0);
    scene.add(camera);

     window.addEventListener('resize', function() {
      var WIDTH = window.innerWidth/1.2,
          HEIGHT = window.innerHeight/1.5;
      renderer.setSize(WIDTH, HEIGHT);
      camera.aspect = WIDTH / HEIGHT;
      camera.updateProjectionMatrix();
    });
     
    // Create a light, set its position, and add it to the scene.
    var light = new THREE.PointLight(0xffffff);
    light.position.set(-100,200,100);
    scene.add(light);

    //create a cube and add to scene
    var geometry = new THREE.BoxGeometry(700, 700, 700, 10, 10, 10);
    var material = new THREE.MeshBasicMaterial({color: 0xfffff, wireframe: true});
    var cube = new THREE.Mesh(geometry, material);
    scene.add(cube);

    // Add OrbitControls so that we can pan around with the mouse.
    controls = new THREE.OrbitControls(camera, renderer.domElement);

     var scene_container = document.getElementById("container");
     renderer.domElement.className = "centered_items";
     document.body.appendChild(scene_container);
     scene_container.appendChild( renderer.domElement );
}