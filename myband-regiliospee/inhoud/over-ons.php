<?php 
include 'header.php';
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="modaal.css">
    
        <h1>MA-Klimaat | Over ons</h1>
    <div class="wrapper">
		<?php

        foreach ( $inhoud as $item ):?>
        <div class="cover">
        <!-- <img id="ma-klimaat" src="<//?php echo $plantje['overons-maklimaat'] ?>"> -->
        <img src="<?php echo $item['image'] ?>" width="300" height="250"/>
        <p id="paragraaf-overons"><?php echo $item['inhoud'] ?></p>
        <br><br><br><br><br>
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

