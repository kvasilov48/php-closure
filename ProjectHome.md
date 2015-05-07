 Since Google Code is shutting down, this is now hosted at https://github.com/dpup/php-closure/ 

A PHP class for optimizing and serving JavaScript sources using Google's  [Closure Compiler web service](http://code.google.com/closure/compiler/docs/gettingstarted_api.html).  The sources will be compiled on demand and cached locally for performance.

Example usage:

```

include("libs/php-closure.php");

$c = new PhpClosure();
$c->add("my-app.js")
  ->add("popup.js")
  ->advancedMode()
  ->useClosureLibrary()
  ->cacheDir("/tmp/js-cache/")
  ->write();
```

This was put together pretty quickly for use on [my website](http://pupius.co.uk).  Patches and improvements welcome!

[Check out the source](http://code.google.com/p/php-closure/source/browse/trunk/php-closure.php) to get started.