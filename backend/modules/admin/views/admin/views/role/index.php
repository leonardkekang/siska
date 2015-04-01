<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var mdm\admin\models\AuthItemSearch $searchModel
 */
$this->title = Yii::t('rbac-admin', 'Roles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-index">

    <div class="col-lg-12">
        <?php //Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?>
        <div class="box box-primary">
            <div class="box-header" style="cursor: move;">
                <div class="box-title"><?= $this->title ?></div>
                <div class="box-tools pull-right">
                    <?= Html::a(Yii::t('rbac-admin', ''), ['create'], ['class' => 'btn btn-success btn-sm fa fa-plus']) ?>
                </div>
            </div>
            <div class="box-body no-padding">
                <?php
                Pjax::begin([
                    'enablePushState' => false,
                ]);
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'layout'=>'{items}',
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'name',
                            'label' => Yii::t('rbac-admin', 'Name'),
                        ],
                        [
                            'attribute' => 'description',
                            'label' => Yii::t('rbac-admin', 'Description'),
                        ],
                        ['class' => 'yii\grid\ActionColumn',],
                    ],
                ]);
                Pjax::end();
                ?>

            </div>
        </div>

        <?php //Pjax::end();  ?>
    </div>
</div>