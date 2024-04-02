<?php
namespace Configs;


use DI\ContainerBuilder;



$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/../configs/container_bindings.php');
return $containerBuilder->build();
