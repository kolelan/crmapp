<?php
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * Add Customer UI.
 *
 * @var View $this
 * @var CustomerRecord $customer
 * @var PhoneRecord $phone
 */
//$out = "Hello";
$form = ActiveForm::begin([
    'id'=>'add-customer-form'
]);

$out = $form->errorSummary([$customer,$phone]);
$out .= $form->field($customer,'name');
$out .= $form->field($customer,'birth_date');
$out .= $form->field($customer,'notes');
$out .= $form->field($phone,'number');
$out .= Html::submitButton('Save',['class'=>'btn btn-primary']);
echo $out;
ActiveForm::end();
echo date("Y-m-d",time()),"<br>";
echo time();