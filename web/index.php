<?php

header("Access-Control-Allow-Origin: *");

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/config.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => DATABASE_OPTIONS,
));

$app->register(new Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider, array(
    'orm.em.options' => array(
        'mappings' => ORM_MAPPINGS,
    ),
));

$app['repository_movies'] = function ($app) {
    return $em = $app['orm.em']->getRepository('Movies\Domain\Movie');
};

$app->get('/movies/list/{length}', function ($length) use ($app) {
    $movies = $app['repository_movies']->getList($length);

    return $app->json([$movies]);
})->value('length', 3);

$app->get('/movies/{id}', function ($id) use ($app) {
    $movie = $app['repository_movies']->getMovie($id);

    if (empty($movie)) {
        return $app->json(['error' => 'Movie not found']);
    }

    return $app->json($movie);
});

$app->run();