<?php
return [ 
		'vendorPath' => dirname ( dirname ( __DIR__ ) ) . '/vendor',
		'components' => [ 
				'cache' => [ 
						'class' => 'yii\caching\FileCache' 
				],
				'authManager' => [ 
						'class' => 'yii\rbac\DbManager' 
				] 
		] // or use 'yii\rbac\DbManager'

		,
		
		'as access' => [ 
				'class' => '\mdm\admin\components\AccessControl',
				'allowActions' => [ 
						'admin/*',
						'site/*',
						'debug/*'    
				] // add or remove allowed actions to this list
 
		] 
];
