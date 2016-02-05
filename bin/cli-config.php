<?php
/**
 * Created by PhpStorm.
 * User: ericlinberg
 * Date: 2/4/16
 * Time: 2:11 PM
 */

<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once './vendor/symfony/polyfill-php55/bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);