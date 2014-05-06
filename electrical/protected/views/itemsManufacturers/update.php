<?php
/* @var $this ItemsManufacturersController */
/* @var $model ItemsManufacturers */

$this->breadcrumbs=array(
	'Items Manufacturers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemsManufacturers', 'url'=>array('index')),
	array('label'=>'Create ItemsManufacturers', 'url'=>array('create')),
	array('label'=>'View ItemsManufacturers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemsManufacturers', 'url'=>array('admin')),
);
?>

<h1>Update ItemsManufacturers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>