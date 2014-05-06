<?php
$this->breadcrumbs=array(
     'joint',
);
$this->menu=array(
 array('label'=>'Create ItemsManufacturers', 'url'=>array('create')),
    array('label'=>'Manage ItemsManufacturers', 'url'=>array('admin')),
);
 ?>
<h1>List Items and Manufacturers </h1>
 
?><?php
    $this->widget('zii.widgets.CListView', array(
    'dataprovider'=>$dataProvider,
    'itemView'=>'_jointview'
        
        
        
    
)); ?> 

