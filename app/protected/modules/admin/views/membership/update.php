<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Update Membership <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    
    </div>
</div>


