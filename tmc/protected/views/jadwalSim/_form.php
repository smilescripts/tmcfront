<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwal-sim-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'dari_tanggal'); ?>
	 <?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
             'name'=>"JadwalSim[dari_tanggal]",
			'value'=>$model->dari_tanggal,
			
            'options'=>array(
                 'showAnim'=>'fade',
                 'dateFormat'=>'yy-mm-dd',
                 'changeMonth'=> 'true',
				 'changeYear'=> 'true',
            

			),
        ));

         ?>
		<?php echo $form->error($model,'dari_tanggal'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'sampai_tanggal'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'name'=>"JadwalSim[sampai_tanggal]",
			'value'=>$model->sampai_tanggal,
			 
            'options'=>array(
                'showAnim'=>'fade',
                'dateFormat'=>'yy-mm-dd',
                'changeMonth'=> 'true',
				'changeYear'=> 'true',
            

			),
        ));

         ?>
		<?php echo $form->error($model,'sampai_tanggal'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'dari_jam'); ?>
		<?php echo $form->textField($model,'dari_jam'); ?>
		<?php echo $form->error($model,'dari_jam'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'sampai_jam'); ?>
		<?php echo $form->textField($model,'sampai_jam'); ?>
		<?php echo $form->error($model,'sampai_jam'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'lokasi_tempat'); ?>
		<?php echo $form->textArea($model,'lokasi_tempat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lokasi_tempat'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row" style="margin-left:1px">
	
		<?php echo $form->hiddenField($model,'oleh_petugas',array('size'=>20,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<br/>
	<div class="btn btn-info">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>
	<div  class="btn btn-danger" >
		<a href="index.php?r=JadwalSim/admin" style="color:white" >Batal Simpan</a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->