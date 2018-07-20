<?php
/* @var $this ThicknessController */
/* @var $model Thickness */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thickness-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php Yii::t('yii', 'require_field');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('yii', 'create') : Yii::t('yii', 'save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->