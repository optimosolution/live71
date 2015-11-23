<?php
/* @var $this BroadcastController */
/* @var $model Broadcast */
?>

<?php
$this->breadcrumbs=array(
	'Broadcasts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Broadcast', 'url'=>array('index')),
	array('label'=>'Create Broadcast', 'url'=>array('create')),
	array('label'=>'Update Broadcast', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Broadcast', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Broadcast', 'url'=>array('admin')),
);
?>

<h1>View Broadcast #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'title',
		'description',
		'youtube_id',
		'publish',
		'expiry',
		'status',
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
	),
)); ?>