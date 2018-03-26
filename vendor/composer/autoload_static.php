<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdba551438ebc458ea3fea91de45ee94f
{
    public static $classMap = array (
        'BMW' => __DIR__ . '/../..' . '/cars/BMW.php',
        'Car' => __DIR__ . '/../..' . '/cars/cars.php',
        'Honda' => __DIR__ . '/../..' . '/cars/honda.php',
        'Inventory' => __DIR__ . '/../..' . '/cars/inventory.php',
        'Story' => __DIR__ . '/../..' . '/abstractCars.php',
        'useStatic' => __DIR__ . '/../..' . '/static_var_func.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdba551438ebc458ea3fea91de45ee94f::$classMap;

        }, null, ClassLoader::class);
    }
}