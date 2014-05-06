<?php
/* @var $this ItemsManufacturersController */
/* @var $model ItemsManufacturers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-manufacturers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer_id'); ?>
		<?php echo $form->textField($model,'manufacturer_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'manufacturer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_cost'); ?>
		<?php echo $form->textField($model,'unit_cost',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'unit_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vendor_id'); ?>
		<?php echo $form->textField($model,'vendor_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vendor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->