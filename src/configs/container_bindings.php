<?php
declare(strict_types=1);

use App\Config;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Symfony\Bridge\Twig\Extension\AssetExtension;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;
use Symfony\WebpackEncoreBundle\Asset\EntrypointLookup;
use Symfony\WebpackEncoreBundle\Asset\TagRenderer;
use Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension;
use Twig\Extra\Intl\IntlExtension;


use function DI\create;

return [
  App::class =>function (ContainerInterface $container){
    AppFactory::setContainer($container);

    //create the main app 
   $app = AppFactory::create();
   return $app;
  },
  Config::class => create(Config::class)->constructor($_ENV),
  Twig::class => function(Config $config,ContainerInterface $container){
    $twig=Twig::create(VIEW_PATH, 
    ['cache' => STORAGE_PATH."/cache",
    'auto_reload'=> $config->environment === 'development'
  ]);
   


    $twig->addExtension(new IntlExtension());
    $twig->addExtension(new EntryFilesTwigExtension($container));
    $twig->addExtension(new AssetExtension($container->get('webpack_encore.packages')));

    return $twig;
  },
  'webpack_encore.packages' => fn()=> new Packages(
    new Package(new JsonManifestVersionStrategy(BUILD_PATH.'/manifest.json'))
  ),
  'webpack_encore.tag_renderer' => fn(ContainerInterface $container) =>new TagRenderer(
    new EntrypointLookup(BUILD_PATH.'/entrypoints.json'),
    $container->get('webpack_encore.packages') 
  ),
  EntityManager::class =>function (Config $config){
        $connection = DriverManager::getConnection($config->db);
        $entityManager = new EntityManager($connection,
            \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration(
                [__DIR__.'/../app/Entities']
            ));
        return $entityManager;

  },
  ResponseFactoryInterface::class => fn(App $app)=>$app->getResponseFactory()
  ];