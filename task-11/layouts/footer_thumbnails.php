<?php
$imgs = include_once  './../data/thumbnail_img.php';

?>

<h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
<div class="row">


    <?php foreach($imgs as $img) : ?>

        <div class="col-xs-6">
            <a href="#" class="thumbnail">
                <img src="<?php echo $imgs['img']; ?>" alt="<?php echo $imgs['title']; ?>" height="80px" width="110px">
            </a>
        </div>
        
        <?php endforeach; ?>
</div>