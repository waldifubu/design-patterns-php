<?php
/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 25.06.2017
 * Time: 22:05
 */

declare(strict_types=1);

require 'vendor/autoload.php';
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Design Patterns in PHP</h1>
<?php

$dir = 'src/';
$dh = opendir($dir);
echo '<div class="list-group">';
while (false !== ($filename = readdir($dh))) {

    if ($filename != '.' && $filename != '..' ) {
        $files[] = $filename;
        echo '<a class="list-group-item" href="?pattern='.$filename.'"">'.$filename.' &mdash; ';

        $desc = file_get_contents($dir.$filename.'/readme.md');

        echo '<span class="label label-primary">'.$desc.'</span></a>';
    }
}
echo '</div>';

$namespace = $_GET['pattern'];
$fullClass = 'Patterns\\'.$namespace.'\\Index';


$pattern = new $fullClass;
$pattern->start();


?>
</div>

</body>
</html>