<?php
 include("../php-closure.php");
 
 $c = new PhpClosure();
 $c->add("js/animation.js")
   ->add("js/color.js")
   ->advancedMode()
   ->useClosureLibrary()
   // TODO : Change or make sure path exists and is writable.
   ->cacheDir("/tmp/js-cache/")
   ->write();

?>