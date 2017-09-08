<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/config.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => DATABASE_OPTIONS
));

$app->register(new Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider, array(
    'orm.em.options' => array(
        'mappings' => ORM_MAPPINGS
    ),
));

return ConsoleRunner::createHelperSet($app['orm.em']);