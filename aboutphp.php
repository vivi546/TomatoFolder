<!doctype html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>PHP</h1>
        <p>
            PHP is a general-purpose scripting language geared towards web development.
            It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.
            The PHP reference implementation is now produced by the PHP Group.
            PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism
            PHP: Hypertext Preprocessor. 
        </p>
        <p>
            <small><em>Last updated: <?= date("Y-m-d H:i:s.", filemtime("aboutphp.php")) ?></em></small>
        </p>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>