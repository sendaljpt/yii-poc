<?php
/**
 * Created by PhpStorm.
 * User: fajrinimamarif
 * Date: 5/31/18
 * Time: 8:42 AM
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>

