<!doctype html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>MariaDB</h1>
        <p>MariaDB is a community-developed, commercially supported fork of the MySQL relational database management system (RDBMS), 
            intended to remain free and open-source software under the GNU General Public License. 
            Development is led by some of the original developers of MySQL, who forked it due to concerns over its acquisition 
            by Oracle Corporation in 2009.
        </p>
        <p>
            MariaDB is intended to maintain high compatibility with MySQL, with exact matching with MySQL APIs and commands, 
            allowing it in many cases to function as drop-in replacement for MySQL. However, new features are diverging. 
            It includes new storage engines like Aria, ColumnStore, and MyRocks.
        </p>
        <p>
            <small><em>Last updated: <?= date("Y-m-d H:i:s.", filemtime("aboutphp.php")) ?></em></small>
        </p>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>