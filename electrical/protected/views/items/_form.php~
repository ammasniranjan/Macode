<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">
<?php echo CHtml::link('create Items', "",  // the link for open the dialog
    array(
        'style'=>'cursor: pointer; text-decoration: underline;',
        'onclick'=>"{addItem(); $('#dialogItem').dialog('open');}"));?>
 
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogClassroom',
    'options'=>array(
        'title'=>'create Items',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>550,
        'height'=>470,
    ),
));?>
<div class="divForForm"></div>
 
<?php $this->endWidget();?>
 
<script type="text/javascript">
// here is the magic
function addItem()
{
    <?php echo CHtml::ajax(array(
            'url'=>array('items/create'),
            'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#dialogItem div.divForForm').html(data.div);
                          // Here is the trick: on submit-> once again this function!
                    $('#dialogItem div.divForForm form').submit(addaItem);
                }
                else
                {
                    $('#dialogItem  div.divForForm').html(data.div);
                    setTimeout(\"$('#dialogItem').dialog('close') \",3000);
                }
 
            } ",
            ))?>;
    return false; 
 
}
 
</script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_category'); ?>
		<?php echo $form->textField($model,'item_category',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'item_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_desc'); ?>
		<?php echo $form->textField($model,'item_desc',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'item_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reorder_point'); ?>
		<?php echo $form->textField($model,'reorder_point'); ?>
		<?php echo $form->error($model,'reorder_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
