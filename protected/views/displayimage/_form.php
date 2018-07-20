<?php
/* @var $this DisplayimageController */
/* @var $model Displayimage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'displayimage-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note"><?php Yii::t('yii', 'require_field');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->fileField($model,'path'); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('yii', 'create') : Yii::t('yii', 'save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->