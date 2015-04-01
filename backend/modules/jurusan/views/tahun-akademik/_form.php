<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\jurusan\models\TahunAkademik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahun-akademik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun_akademik')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'semester')->dropDownList([ 1 => 'Ganjil', 0 => 'Genap', ], []) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'N' => 'Tidak Aktif', 'A' => 'Aktif', ], []) ?>

    <?= $form->field($model, 'tanggal_mulai')->textInput() ?>

    <?= $form->field($model, 'tanggal_berakhir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
