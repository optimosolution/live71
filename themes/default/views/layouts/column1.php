<?php $this->beginContent('/layouts/main'); ?>
<?php
$array = Yii::app()->db->createCommand()
        ->select('*')
        ->from('{{banner}}')
        ->where('published=1 AND catid=1')
        ->order('ordering ASC')
        ->limit(10)
        ->queryAll();
?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i = 1;
        foreach ($array as $key => $values) {
            if ($i == 1) {
                $active = "active";
            } else {
                $active = "";
            }
            echo '<li data-target="#myCarousel" data-slide-to="' . $i . '" class="' . $active . '"></li>';
            $i++;
        }
        ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $j = 1;
        foreach ($array as $key => $values) {
            if ($j == 1) {
                $active = "active";
            } else {
                $active = "";
            }
            echo '<div class="item ' . $active . '">';
            echo '<div class="fill" style="background-image:url(\'http://www.live71.tv/uploads/banners/' . $values['banner'] . '\');"></div>';
            echo '<div class="carousel-caption">';
            echo '<h2>' . $values['name'] . '</h2>';
            echo '</div>';
            echo '</div>';
            $j++;
        }
        ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<!-- Page Content -->        
<div class="container">
    <?php echo $content; ?>
    <hr />
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->params['copyrightName']; ?>. All rights reserved. Website designed and developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></p>                         
            </div>
        </div>
    </footer>
</div>
<!-- /.container -->
<?php $this->endContent(); ?>