<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hello Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= $message?>
		<?= Html::encode($message) ?>
		<?php echo Yii::getVersion();?> 
    </p>

    <code><?= __FILE__ ?></code>
</div>
