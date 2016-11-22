function animate() {
 
    // Read more about requestAnimationFrame at http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
    requestAnimationFrame(animate);

   if(renderer != undefined){
       // Render the scene.
       renderer.render(scene, camera);
       controls.update();
   }
}