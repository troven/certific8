<?php
/* @var $this TrainerController */
/* @var $model Trainer */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'trainer-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'org_id'); ?>
                    <?php echo $form->textField($model,'org_id'); ?>
                    <?php echo $form->error($model,'org_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'membership_id'); ?>
                    <?php echo $form->textField($model,'membership_id'); ?>
                    <?php echo $form->error($model,'membership_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'is_registered'); ?>
                    <?php echo $form->textField($model,'is_registered'); ?>
                    <?php echo $form->error($model,'is_registered'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'is_paid'); ?>
                    <?php echo $form->textField($model,'is_paid'); ?>
                    <?php echo $form->error($model,'is_paid'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'first_joined'); ?>
                    <?php echo $form->textField($model,'first_joined'); ?>
                    <?php echo $form->error($model,'first_joined'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_seen'); ?>
                    <?php echo $form->textField($model,'last_seen'); ?>
                    <?php echo $form->error($model,'last_seen'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'last_valdiated'); ?>
                    <?php echo $form->textField($model,'last_valdiated'); ?>
                    <?php echo $form->error($model,'last_valdiated'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>