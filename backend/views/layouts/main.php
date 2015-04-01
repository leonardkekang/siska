<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="skin-blue fixed">

    <?php $this->beginBody() ?>

    <div class="wrapper">

        <?= $this->render('header') ?>

        <?= $this->render('sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><?= isset($this->title) ? $this->title : '' ?></h1>
                <?=
                Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]);
                ?>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-primary">
                            <div class="box-body">

                                <?= $content ?>

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                    </div><!-- /.col -->
                </div><!-- /.row -->

            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2015 <a href="http://stmikbumigora.ac.id">STMIK Bumigora</a></strong> - All rights reserved
        </footer>

    </div><!-- ./wrapper -->

    <?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
