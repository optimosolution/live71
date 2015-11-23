<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
$this->breadcrumbs = array(
    $model->title,
);
?>
<!-- Intro Content -->
<div class="row">
    <div class="col-md-12">
        <h2><?php echo $model->title; ?></h2>
        <?php echo $model->introtext; ?>
    </div>
</div>
<!-- /.row -->
