<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Verification Code';
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, $field)->passwordInput()->label('Enter Verification Code') ?>

<div class="form-group">
    <?= Html::submitButton('Verify', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
</div>
<?php ActiveForm::end(); ?>
