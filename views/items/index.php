<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?php //if (!Yii::$app->user->isGuest)  echo(Html::a('Create Items', ['create'], ['class' => 'btn btn-success']));  ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'label' => 'Ссылка',
                'format' => 'raw',
                'value' => function($data)
                {
                    return Html::a(
                                    'Перейти', 'index.php?r=items%2Fview&id=' . $data->id //решение неверное, но работает красивей, чем с кнопкой просмотра
                    );
                }
            ],
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
