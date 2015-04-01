<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \biz\master\components\Helper;

/**
 * @var yii\web\View $this
 * @var biz\models\searchs\Product $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="product-search box box-warning">


    <div class="box-header" style="padding-bottom: 0px;">
        <i class="fa fa-laptop"></i>
        <h3 class="box-title">Manajemen RBAC</h3>
        <div class="box-tools pull-right">
            <?= Html::a('', ['/admin/assignment'], ['class' => 'btn btn-success btn-sm fa fa-users', 'title' => 'Data User']) ?>
            <?= Html::a('', ['/admin/role'], ['class' => 'btn btn-success btn-sm fa fa-random', 'title' => 'Manajemen Roles']) ?>
            <?= Html::a('', ['/admin/route'], ['class' => 'btn btn-success btn-sm fa fa-anchor', 'title' => 'Manajemen Routes']) ?>
            <?= Html::a('', ['/admin/menu'], ['class' => 'btn btn-success btn-sm fa fa-bell-o', 'title' => 'Manajemen menu']) ?>
            <?= Html::a('', '#', ['class' => 'btn btn-danger btn-sm fa fa-times', 'title' => 'Min/Maximize', 'id' => 'tutup', 'data-widget' => 'remove']) ?>
        </div>
    </div>


</div>
