<!DOCTYPE html>
<?php include("Includes/config.php");  ?>
<html lang="sv">
    <head >
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <script src ="js/java.js"></script>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <title><?= $site_title. $divider. $titelsida ?></title>
    </head>
    <body>
            <header id="mainheader">
                <h1><?=$titelsida ?> </h1>

                <?php  include("Includes/meny.php"); ?>
            </header>

