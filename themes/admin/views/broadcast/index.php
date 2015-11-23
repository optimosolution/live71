<?php
/* @var $this BroadcastController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Broadcasts',
);

$this->menu=array(
	array('label'=>'Create Broadcast','url'=>array('create')),
	array('label'=>'Manage Broadcast','url'=>array('admin')),
);
?>

<h1>Broadcasts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>