<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="include/bootstrap.min.css">
        <link rel="stylesheet" href="include/styles.css">
        <title>Mon site PWS en PHP!</title>
    </head>
    <body>
        <?php include("./include/header.php"); ?>
        
        <?php include("./include/menus.php"); ?>
        
        <div style="padding-top: 30px" class="main">
            <div class="col-md-12">
                <?php
                $tab = array("StarWars" => array("Lucas", 1977, "USA"),
                    array("Alien" => array("Scott", 1979, "USA")),
                    array("Blade Runner" => array("Scott", 1982, "USA")));
                
                echo "<pre>";
                print_r($tab);
                echo "</pre>";
                ?>
            </div>
        </div>

        <?php include("./include/footer.php"); ?>
    </body>
</html>