<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tahun Akademik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-akademik-index">

    <p class="pull-right">
        <?= Html::a('Create Tahun Akademik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun_akademik',
            'semester',
            'status',
            'tanggal_mulai',
            'tanggal_berakhir',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
