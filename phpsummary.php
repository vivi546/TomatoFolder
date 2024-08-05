<!doctype html>
    <html lang="en">
    <?php include 'includes/head.php' ?>

    <body>
        <?php include 'includes/menu.php' ?>

        <div class="container">
            <h1>Php Summary</h1>

            <?php
                printf('<p> U are running Php %s </p>' , phpversion());

                echo '<h4>Loaded Extensions:</h4>';
                $text = get_loaded_extensions();
                var_dump($text);

                echo '<h4>Server Environment</h4>';
                var_dump($_SERVER);
            ?>


        </div>

        <?php include 'includes/footer.php' ?>
    </body>

</html>