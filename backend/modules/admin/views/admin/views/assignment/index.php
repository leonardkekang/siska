<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */

$this->title = Yii::t('rbac-admin', 'Assignments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-index">

    <div class="col-lg-5" style="float: right;">
        <?php echo $this->render('_search'); ?>
    </div>
    <div class="col-lg-12">
        <?php //Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?>
        <div class="box box-primary">
            <div class="box-body no-padding">
                <?php
                Pjax::begin([
                    'enablePushState' => false,
                ]);
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => '{items}',
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'class' => 'yii\grid\DataColumn',
                            'attribute' => $usernameField,
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{view}',
                            'headerOptions' => ['width' => '40px'],
                            'buttons' => [
                                'view' => function ($url) {
                            return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
                                        'title' => Yii::t('yii', 'View'),
                                        'data-pjax' => '0',
                            ]);
                        }
                            ]
                        ],
                    ],
                ]);
                Pjax::end();
                ?>

            </div>
        </div>

        <div class="box-footer">
            <?php
// display pagination
            echo LinkPager::widget([
                'pagination' => $dataProvider->pagination,
                'options' => ['class' => 'pagination pagination-sm  no-margin']
            ]);
            ?>
        </div>

        <?php //Pjax::end();  ?>
    </div>
</div>

<?php
$js = "\$('#kecilin').click();";
$this->registerJs($js);

