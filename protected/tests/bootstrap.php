<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../vendor/yii-1.1.14.f0fee9/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
