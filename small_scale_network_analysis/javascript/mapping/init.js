 function init(){
                
    scene = new THREE.Scene();
    var WIDTH = 5000, 
        HEIGHT = 5000;

    renderer = new THREE.WebGLRenderer({antialias:true});
    renderer.setSize(WIDTH, HEIGHT);
    //document.body.appendChild(renderer.domElement);

    camera = new THREE.PerspectiveCamera(45, WIDTH / HEIGHT, 0.1, 20000);
    camera.position.set(0,6000,0);
    scene.add(camera);

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

     scene_container = document.getElementById("container");
     //document.body.appendChild(scene_container);
     scene_container.appendChild( renderer.domElement );
}