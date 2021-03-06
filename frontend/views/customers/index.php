<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
             [
                'attribute'=>'pic',
                'format'=>'html',
                'value'=>function($model){
                    return html::img('img/'.$model->pic,['class'=>'thumbnail-responsive',
                            'style'=>'width: 100px;']);
                }
            ],
            'name',
            'addr',
            [
                'attribute'=>'c',                
                'value'=> 'chwt.name',
            ],  
            [
                'attribute'=>'c',                
                'value'=>  'ampur.name',
            ],
            [
                'attribute'=>'c',                
                'value'=> 'tmbon.name',
            ],
                
//            'a',
//             'c',
//             'p',
             'tel',
             'depart.name',
             'interest',
             //'email:email',
             //'pic',
             //'createdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
