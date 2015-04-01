<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\jurusan\models\TahunAkademik */

$this->title = 'Update Tahun Akademik: ' . ' ' . $model->kode_tahun_akademik;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Akademiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_tahun_akademik, 'url' => ['view', 'id' => $model->kode_tahun_akademik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-akademik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
