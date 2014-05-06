<?php
/* @var $this ItemsManufacturersController */
/* @var $model ItemsManufacturers */

$this->breadcrumbs=array(
	'Items Manufacturers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemsManufacturers', 'url'=>array('index')),
	array('label'=>'Manage ItemsManufacturers', 'url'=>array('admin')),
);
?>

<h1>Create ItemsManufacturers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>