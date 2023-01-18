<?php
$imgs= include_once  './../data/thumbnail_img.php';

?>

<h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
<div class="row">

    <!-- <php foreach($imgs as $img): ?> -->

    <div class="col-xs-6">
        <a href="#" class="thumbnail">
            <img src="<?php echo $imgs[0]['img']; ?>" alt="<?php echo $imgs[0]['title']; ?>" height="80px" width="110px">
        </a>
    </div>

    <div class="col-xs-6">
        <a href="#" class="thumbnail">
            <img src="<?php echo $imgs[1]['img']; ?>" alt="<?php echo $imgs[1]['title']; ?>" height="80px" width="110px">
        </a>
    </div>
    
    <div class="col-xs-6">
        <a href="#" class="thumbnail">
            <img src="<?php echo $imgs[2]['img']; ?>" alt="<?php echo $imgs[3]['title']; ?>" height="80px" width="110px">
        </a>
    </div>
    
    <div class="col-xs-6">
        <a href="#" class="thumbnail">
            <img src="<?php echo $imgs[3]['img']; ?>" alt="<?php echo $imgs[3]['title']; ?>" height="80px" width="110px">
        </a>
    </div>
    
    <!-- <php endforeach; ?> -->
</div>