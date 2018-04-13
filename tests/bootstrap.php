<?php

$loader = require __DIR__ . "/../vendor/autoload.php";
\Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation', __DIR__ . '/../vendor/jms/serializer/src'
);

$loader->addPsr4('Linker\\', __DIR__.'/unit/Linker');
$loader->addPsr4('Linker\\', __DIR__.'/integration/Linker');

date_default_timezone_set('UTC');
