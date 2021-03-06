<?php
/* @var $this ActividadesController */
/* @var $model Actividades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actividades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php 
			echo $form->dropDownList($model,'id_tipo',
		  		CHtml::listData($modelTipoA,'id_tipo','tipo'),
		  		array('empty'=>'Selecciona un tipo...','class'=>'form-control')
		  		);
  		?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'id_evento'); ?>
		<?php 
			echo $form->dropDownList($model,'id_evento',
		  		CHtml::listData($modelEventos,'id_evento','nombre'),
		  		array('empty'=>'Selecciona un tipo...','class'=>'form-control')
		  		);
  		?>
		<?php echo $form->error($model,'id_evento'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php 
			echo $this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha_inicio',
						'language'=>'es',
						'options'=>array(
							'dateFormat'=>'yy-mm-dd',  // save format
                    		'altFormat'=>'dd-mm-yy',  // show format
						),
						'htmlOptions'=>array(
							'class'=>'form-control'
						)
					)
				,true);				

		 ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php 
			echo $this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha_fin',
						'language'=>'es',
						'options'=>array(
							'dateFormat'=>'yy-mm-dd',  // save format
                    		'altFormat'=>'dd-mm-yy',  // show format
						),
						'htmlOptions'=>array(
							'class'=>'form-control'
						)
					)
				,true);				

		 ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->