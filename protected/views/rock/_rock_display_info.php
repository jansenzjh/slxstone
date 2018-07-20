<div class="rock_display_info">
    <?php $this->renderPartial('_rock_image', array('data'=>$data)); ?>
    <br>
    <?php echo CHtml::encode($data->description); ?>
</div>

