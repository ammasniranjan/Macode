<?php
/* @var $this ItemsManufacturersController */
/* @var $model ItemsManufacturers */

$this->breadcrumbs=array(
	'Items Manufacturers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ItemsManufacturers', 'url'=>array('index')),
	array('label'=>'Create ItemsManufacturers', 'url'=>array('create')),
	array('label'=>'Update ItemsManufacturers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemsManufacturers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemsManufacturers', 'url'=>array('admin')),
);
?>

<h1>View ItemsManufacturers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'manufacturer_id',
		'unit_cost',
		'vendor_id',
	),
)); ?>
