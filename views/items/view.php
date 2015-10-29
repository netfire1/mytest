<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Items */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        // echo(Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])); 
//         echo(Html::a('Delete', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ])); 
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'info:ntext',
        //'name',
        ],
    ])
    ?>


    <?=
    GridView::widget([
        'dataProvider' => $dataProviderComments,
        'summary' => '',
        'emptyText' => 'Нет комментариев.',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'comment',
            'rating',
            'post_date',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

    <p>
<?= Html::a('Добавить комментарий', [Yii::$app->user->isGuest ? 'site/login' : 'comments/create', 'id_item' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>


<?php //var_dump($data);  ?>
</div>
