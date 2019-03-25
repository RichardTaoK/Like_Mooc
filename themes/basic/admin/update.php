<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MoocCourse */

$this->title = 'Update Mooc Course: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mooc Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mooc-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
