<?php
/* @var $this OrderdetailController */
/* @var $model Orderdetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orderdetail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php Yii::t('yii', 'require_field');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orderId'); ?>
		<?php echo $form->textField($model,'orderId'); ?>
		<?php echo $form->error($model,'orderId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rockId'); ?>
		<?php echo $form->textField($model,'rockId'); ?>
		<?php echo $form->error($model,'rockId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('yii', 'create') : Yii::t('yii', 'save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->