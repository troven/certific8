<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs = array(
    'Profile' => array('profile/admin'),
    'Create',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProfileSkill</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>



