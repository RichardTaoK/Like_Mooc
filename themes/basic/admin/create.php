<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MoocCourse */

$this->title = 'Create Mooc Course';
$this->params['breadcrumbs'][] = ['label' => 'Mooc Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mooc-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
