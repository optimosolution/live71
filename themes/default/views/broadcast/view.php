<?php
/* @var $this BroadcastController */
/* @var $model Broadcast */
$this->pageTitle = $model->title;
$this->breadcrumbs = array(
    'Broadcast' => array('index'),
    $model->title,
);
?>
<!-- Intro Content -->    
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?php echo $model->title; ?></h2>
    </div>
    <div class="col-md-12">
        <div class="thumbnail">
            <?php
            if (isset($model->youtube_id))
                $this->widget('ext.Yiitube', array('v' => $model->youtube_id, 'size' => 'live71'));
            ?><!-- youtoube -->
        </div>
    </div>
</div>
<!-- /.row -->