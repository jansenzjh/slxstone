<?php
/* @var $this RockController */
/* @var $model Rock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rock-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note"><?php Yii::t('yii', 'require_field');?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'modelId'); ?>
		<?php echo $form->textField($model,'modelId',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'modelId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finishedType'); ?>
                <?php $list = CHtml::listData(Finishedtype::model()->findAll(), 'id', 'description'); ?>
                <?php echo $form->dropDownList($model, 'finishedType', $list , array('empty' => '(Select a finishedType)')) ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'thickness'); ?>
                <?php $list = CHtml::listData(Thickness::model()->findAll(), 'id', 'description'); ?>
                <?php echo $form->dropDownList($model, 'thickness', $list , array('empty' => '(Select a thickness)')) ?>
                <?php echo $form->error($model,'thickness'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'series'); ?>
                <?php $list = CHtml::listData(Series::model()->findAll(), 'id', 'description'); ?>
                <?php echo $form->dropDownList($model, 'series', $list , array('empty' => '(Select a series)')) ?>
		<?php echo $form->error($model,'series'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'color'); ?>
                <?php $list = CHtml::listData(Color::model()->findAll(), 'id', 'description'); ?>
                <?php echo $form->dropDownList($model, 'color', $list , array('empty' => '(Select a color)')) ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'image2'); ?>
		<?php echo $form->fileField($model,'image2'); ?>
		<?php echo $form->error($model,'image2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('yii', 'create') : Yii::t('yii', 'save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->