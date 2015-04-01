<?php
  use yii\widgets\Breadcrumbs;
?>
        <!-- Content Header (Page header) -->
    <div class="content-wrapper" style="min-height: 647px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <?= $content ?>
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div>