<?php
/* @var $this HrCandidateController */
/* @var $model HrCandidate */

$this->breadcrumbs=array(
        'Hr Shortlist'=>array('hrShortlist/admin'),
	'Hr Candidates'=>array('admin','id'=>$model->hr_shortlist_id),
	$model->id,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View HrCandidate #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'hr_shortlist_id',
                array(
                    'label'=>'Profile',
                    'name'=>'profile.full_name',
                ),
        ),
)); ?>
    </div>
</div>