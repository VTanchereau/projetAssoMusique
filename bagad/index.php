<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 11/04/2017
 * Time: 14:56
 */

/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \Foo\Bar\Baz\Qux class
 * from /path/to/project/src/Baz/Qux.php:
 *
 *      new \Foo\Bar\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'bagadlag';

    // base directory for the namespace prefix
    $base_dir = __DIR__;

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

if (isset($_GET['page']) && $_GET['page'] != ''){
    $page = $_GET['page'];
    $module = "";
    if (isset($_GET['module']) && $_GET['module'] != ''){
        $module = $_GET['module'];
    }
    $controllerClass = "bagadlag\\controller\\".ucfirst($page)."Controller";
    $controller = new $controllerClass();
    $controller->show();  // J'ai rajouté ça pour aller direct dans la fonction show()   BON ?? pas BON ?????
    if ($module != ""){
        $controller->$module();
    }
}else{
    $controller = new \bagadlag\controller\HomeController();
    $controller->show();
}