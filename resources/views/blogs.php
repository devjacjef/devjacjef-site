<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Jack's Blogs";

require_once 'components/header.php';

use Framework\Database\Database;

$message = '';

$blogs = Database::select("SELECT * FROM blogs");

if (sizeof($blogs) === 0) {
    $message = "Currently there are no blogs...";
}
?>

<section class="content">
    <h1>Blogs</h1>
    <h2><?php echo $message ?></h2>
</section>


<?php
require_once 'components/footer.php';
?>