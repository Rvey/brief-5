
<?php
spl_autoload_register(function ($classname) {

    $full_path = '../Models/' . $classname . '.class.php';

    include_once $full_path;

});