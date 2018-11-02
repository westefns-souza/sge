<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Flordelis */

$this->title = $model->secao_idsecao;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flordelis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flordelis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->secao_idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->secao_idsecao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'secao_idsecao',
            'nome',
        ],
    ]) ?>

</div>