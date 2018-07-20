<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php Yii::t('yii', 'require_field');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orderDetailID'); ?>
		<?php echo $form->textField($model,'orderDetailID'); ?>
		<?php echo $form->error($model,'orderDetailID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactID'); ?>
		<?php echo $form->textField($model,'contactID'); ?>
		<?php echo $form->error($model,'contactID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('yii', 'create') : Yii::t('yii', 'save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->