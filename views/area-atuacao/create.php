<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */

$this->title = Yii::t('app', 'Create Area Atuacao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-atuacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
