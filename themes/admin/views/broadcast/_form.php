<?php
/* @var $this BroadcastController */
/* @var $model Broadcast */
/* @var $form TbActiveForm */
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'broadcast-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldControlGroup($model, 'title', array('span' => 5, 'maxlength' => 250)); ?>
<?php echo $form->textAreaControlGroup($model, 'description', array('rows' => 3, 'span' => 5)); ?>
<?php echo $form->textFieldControlGroup($model, 'youtube_id', array('span' => 5, 'maxlength' => 50)); ?>
<div class="row-fluid">
    <div class="span5">
        <?php echo $form->labelEx($model, 'publish'); ?>
        <?php
        echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'language' => 'en',
            'model' => $model, // Model object
            'attribute' => 'publish',
            'options' => array(
                'mode' => 'date',
                'changeYear' => true,
                'changeMonth' => true,
                'yearRange' => '1900:2200',
                'dateFormat' => 'yy-mm-dd',
                'timeFormat' => '',
                'showTimepicker' => false,
            ),
            'htmlOptions' => array(
                'placeholder' => 'Publish',
                'class' => 'span12',
            ),
                ), true);
        ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span5">
        <?php echo $form->labelEx($model, 'expiry'); ?>
        <?php
        echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
            'language' => 'en',
            'model' => $model, // Model object
            'attribute' => 'expiry',
            'options' => array(
                'mode' => 'date',
                'changeYear' => true,
                'changeMonth' => true,
                'yearRange' => '1900:2200',
                'dateFormat' => 'yy-mm-dd',
                'timeFormat' => '',
                'showTimepicker' => false,
            ),
            'htmlOptions' => array(
                'placeholder' => 'Expiry',
                'class' => 'span12',
            ),
                ), true);
        ?>
    </div>
</div>
<?php echo $form->dropDownListControlGroup($model, 'status', array('1' => 'Active', '0' => 'Inactive'), array('class' => 'span5')); ?>
<div class="form-actions">
    <?php
    echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
        'color' => TbHtml::BUTTON_COLOR_PRIMARY,
        'size' => TbHtml::BUTTON_SIZE_LARGE,
    ));
    ?>
</div>
<?php $this->endWidget(); ?>