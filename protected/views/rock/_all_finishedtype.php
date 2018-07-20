<div class="all_finishedtype">
<?php $all_finishedtype = Finishedtype::model()->findAll(); ?>
    <div class ="row">
        <?php
            foreach ($all_finishedtype as $ft){
                echo printf("<div class=\'span2\'>%s</div>",$ft->description);
                
            }
        ?>
        
    </div>
</div>
