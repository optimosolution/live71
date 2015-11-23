<?php $this->beginContent('/layouts/main'); ?>

<!-- Page Content -->        
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Guitar/Chords</h1>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
                'tagName' => 'ol',
                'htmlOptions' => array('class' => 'breadcrumb'),
            ));
            ?><!-- breadcrumbs -->
        </div>
    </div>
    <!-- /.row -->
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