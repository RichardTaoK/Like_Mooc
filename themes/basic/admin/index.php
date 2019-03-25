<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MoocCourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mooc Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mooc-course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mooc Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fid',
            'tid',
            'did',
            'title',
            //'view_count',
            //'description',
            //'pic',
            //'teacher_id',
            //'teacher_tip',
            //'create_time',
            //'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
