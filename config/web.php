<?php
return [
  'id'=>'crmapp',
  'basePath'=>dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
  'components'=>[
      'db'=>require (__DIR__.'/db.php'),
      'request'=>[
          'cookieValidationKey'=>'alskdkfjqpwoeirua;sldkfjz.cmcnf'
      ],
      'urlManager' => [
          'enablePrettyUrl' => true,
          'showScriptName' => false,
          'rules' => [
          ],
      ],
  ]
];
