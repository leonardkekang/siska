<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
		'id' => 'app-backend',
		'basePath' => dirname ( __DIR__ ),
		'controllerNamespace' => 'backend\controllers',
		'bootstrap' => [ 
				'log' 
		],
		'modules' => [ 
				'jurusan' => [ 
						'class' => 'app\modules\jurusan\Module' 
				],
				'admin' => [ 
						'class' => 'mdm\admin\Module' 
				] 
		],
		'components' => [ 
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error',
												'warning' 
										] 
								] 
						] 
				],
				'urlManager' => [ 
						'enablePrettyUrl' => true,
						'showScriptName' => false 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'view' => [
            		'theme' => 'backend\modules\Theme'
        		],
		],
		'params' => $params 
];
