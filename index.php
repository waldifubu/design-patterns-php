<?php

/**
 * Created by PhpStorm.
 * User: Waldi
 * Date: 25.06.2017
 * Time: 22:05
 */
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Patterns with PHP</title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>

<style>
    .num {
        float: left;
        color: gray;
        font-size: 16px;
        font-family: monospace;
        text-align: right;
        margin-right: 6pt;
        padding-right: 6pt;
        border-right: 1px solid gray;
    }

    td {
        vertical-align: top;
    }

    code {
        white-space: nowrap;
    }

    .list-pattern-entry {
        width: 300px;
    }

    .syntax-highlight-line {
        color: #000000;
        font-size: 15px;
        float: left;
        font-family: 'Source Code Pro', monospace;
        padding-right: 5px;
    }

    .syntax-highlight-code {
        padding-left: 30px;
        font-family: 'Source Code Pro', monospace;
        border-bottom: 1px solid #EEEEEE;
    }
</style>

<div class="container">
    <h1>Design Patterns in PHP</h1>
    <?php
    require 'vendor/autoload.php';

    $files = [];
    $dir = 'src/';
    $dh = opendir($dir);
    $chosen = false;
    echo '<ul>';
    while (false !== ($filename = readdir($dh))) {
        $desc = '';
        if ($filename !== '.' && $filename !== '..') {
            $files[] = $filename;
            echo '<div class="row">                                       
                    <div class="col-md-4">
                     <a class="list-group-item list-group-item-action" href="?pattern=' . $filename . '"">
                    <span class="list-pattern-entry btn btn-primary">' . $filename . '</span></a>
                    </div>';

            echo '<div class="col-md-8 list-group-item">';
            if (file_exists($dir . $filename . '/readme.md')) {
                $desc = file_get_contents($dir . $filename . '/readme.md');
                echo ' <span class="text-muted">' . $desc . '</span>';
            }
            echo '</div>               
               </div>';
        }
    }
    echo '</ul>';

    echo '<span class="badge badge-pill badge-info">' . count($files)
        . ' patterns found </span>';

    if (array_key_exists('pattern', $_GET) && !empty($namespace = $_GET['pattern'])) {
        echo '<br><div class="card"><h4>Output</h4>';
        $fullClass = 'Patterns\\' . $namespace . '\\Index';
        $pattern = new $fullClass;
        $pattern->start();
        echo '</div><br>';
        $chosen = true;
    }

    function highlight_num($filename)
    {
        $content = highlight_file($filename, true);
        $file = explode('<br />', $content);
        $i = 1;
        echo '<div class="card">' . $filename;
        echo '<div class="card-body">';
        foreach ($file as $line) {
            if (empty($line)) {
                $line = '&nbsp;';
            }
            echo '<div class="syntax-highlight-line">' . str_pad(
                    (string)$i,
                    3,
                    '0',
                    STR_PAD_LEFT
                )
                . '</div> <div class="syntax-highlight-code">' . $line
                . '</div>';
            $i++;
        }
        echo '</div>';
        echo '</div>';
    }

    $listFiles = [];
    if ($chosen) {
        foreach (glob('src/' . $namespace . '/*.php') as $filename) {
            //echo "$filename - Größe: ".filesize($filename)."\n";
            if (stripos($filename, 'Index.php') !== false) {
                array_unshift($listFiles, $filename);
                continue;
            }

            $listFiles[] = $filename;
        }

        foreach ($listFiles as $filename) {
            highlight_num($filename);
        }
    }
    ?>
</div>

</body>
</html>