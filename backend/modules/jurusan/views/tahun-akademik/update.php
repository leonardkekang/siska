<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\jurusan\models\TahunAkademik */

$this->title = 'Update Tahun Akademik';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Akademik', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_tahun_akademik, 'url' => ['view', 'id' => $model->kode_tahun_akademik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-akademik-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
