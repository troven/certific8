<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs = array(
    'Hr Teams' => array('admin'),
    'Create',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrTeam</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>



