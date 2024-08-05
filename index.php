<?php
    $phpReleaseDate = new DateTime("1995-06-08");
    $phpAge = $phpReleaseDate->diff(new DateTime());            //new Datetime() object - current date and time
                                                                // diff - calculates difference between x and y

    $daysPassed = $phpAge->days;

    ?>


<!doctype html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>Learning PHP</h1>
        <p>Welcome to the <strong>Learning PHP</strong> home page!</p>
        <p>Select a link above to start learning about a language with <?= $phpAge->y ?> years of heritage!</p>

        <p>  in days: <?= $daysPassed ?> </p>    
    </>
    
    <?php include 'includes/footer.php' ?>
</body>

</html>