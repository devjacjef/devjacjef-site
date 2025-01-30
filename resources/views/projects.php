<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Home page!";

require_once 'components/header.php';

// TODO Create a cleaner solution.
require_once __DIR__ . '/../../app/Core/Database.php';

use App\Core\Database;

$message = '';

$projects = Database::select("SELECT * FROM projects");

if (sizeof($projects) === 0) {
    $message = "Currently there are no projects...";
}
?>

<h1>Projects</h1>
<h2><?php echo $message ?></h2>

<?php
require_once 'components/footer.php';
?>