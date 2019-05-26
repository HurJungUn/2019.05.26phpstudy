<?php

namespace Gondr\Controller;
use Jenssegers\Blade\Blade;

class Controller {
    public function render($page, $data = []){
        extract($data);

        $blade = new Blade('views', 'cache');
        echo $blade->make($page, $data);

        // require( __ROOT . "/views/layout/header.php");
        // require( __ROOT . "/views/" . $page . ".php");
        // require( __ROOT . "/views/layout/footer.php");
    }
}