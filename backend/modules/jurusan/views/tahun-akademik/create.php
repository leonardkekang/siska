<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\jurusan\models\TahunAkademik */

$this->title = 'Create Tahun Akademik';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Akademik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-akademik-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
