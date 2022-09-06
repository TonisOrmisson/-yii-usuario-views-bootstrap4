<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\bootstrap4\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/**
 * @var $this           yii\web\View
 * @var $model          Da\User\Model\Assignment
 * @var $availableItems string[]
 */

?>

<?php if ($model->updated): ?>

    <?= Alert::widget(
        [
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => Yii::t('usuario', 'Assignments have been updated'),
        ]
    ) ?>

<?php endif ?>

<?php $form = ActiveForm::begin(
    [
        'enableClientValidation' => false,
        'enableAjaxValidation' => false,
    ]
) ?>

<?= Html::activeHiddenInput($model, 'user_id') ?>


<?= $form->field($model, 'items')->widget(Select2::classname(), [
    'data' => $availableItems,
    'options' => [
        'multiple' => true
    ],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);
?>
<?= Html::submitButton(Yii::t('usuario', 'Update assignments'), ['class' => 'btn btn-success btn-block']) ?>

<?php ActiveForm::end() ?>
