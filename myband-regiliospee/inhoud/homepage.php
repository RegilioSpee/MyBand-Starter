<?php 
include 'header.php';
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="modaal.css">
    
        <h1>MA-Klimaat | Homepagina</h1>
    <div class="wrapper">
		<?php

        foreach ( $statement as $plantje ):?>
        <div class="cover">
        <img class="modaal-knop" src="<?php echo $plantje['image'] ?>" width="300" height="250"/>
        <h2><?php echo $plantje['titel'] ?></h2>
        </div>
            <div class="album modaalContent">
            <img src="<?php echo $plantje['image']?>" alt="<?php echo $plantje['titel'] ?>" style="width="300" height="250">
    <article>
            <span class="item-<?php echo $i?>">
                <h2 class="title"><?php echo $plantje['titel'] ?></h2>
         <p><?php echo $plantje['beschrijving']?></p>
         <br><hr id="tussenlijn"><br>
         <p><em><?php echo $plantje['keywords']?></em></p>
                <p>
                    Geplaatst op <?php echo $plantje['datum'] ?>  <br> door <?php echo $plantje['auteur'] ?> <br/>

                </p>
            </span>
                </article>
            </div>
        <?php endforeach; ?>
</div>
</div>
<script src="modaal.js"></script>
<?php 
include 'footer.php';
?>
</body>
</html>

