<?php  

// 这里使用了一个扩展，故定义了一个别名  
Yii::setPathOfAlias('ext', dirname(__FILE__).'/../extensions');  
// 下面是分离前后台需要增加的  
$backend=dirname(dirname(__FILE__));  
$frontend=dirname($backend);  
Yii::setPathOfAlias('backend', $backend);  

// 下面是通用配置  
return array(  	
	'basePath' => $frontend,  
	'controllerPath' => $backend.'/controllers',  
	'viewPath' => $backend.'/views',  
	'runtimePath' => $backend.'/runtime',  
	'name'=>'VZManage',  
	'theme'=>'VZM_Default', 
	'defaultController'=>'admin',
	// preloading 'log' component  
	'preload'=>array('log'),  	
	// autoloading model and component classes  
	'import'=>array(  
			'backend.models.*',  
			'backend.components.*',	
			'ext.*',ext
		),  
		
		'modules'=>array(  
			//  Gii tool  
			'gii'=>array(  
				'class'=>'system.gii.GiiModule',  
				'password'=>'594211',  
				'generatorPaths'=>array(  
					'ext.dwz.gii.module.templates.dwz.module',  
					),   
				// If removed, Gii defaults to localhost only. Edit carefully to taste.  
				'ipFilters'=>array('127.0.0.1','::1'),  
				),  
			
			),  
		
		// application components  
		'components'=>array(  
			'user'=>array(  
				// enable cookie-based authentication  
				'allowAutoLogin'=>true,  
				),  
			// uncomment the following to enable URLs in path-format  
			
			'urlManager'=>array( 
				'urlFormat'=>'path', 
				'rules'=>array( 
					'<controller:\w+>/<id:\d+>'=>'<controller>/view', 
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>', 
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>', 
					), 
				), 
			
			
			//   MySQL database  
			
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=vzdb_mysql_basesite',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => 'zzzzzz',
				'charset' => 'utf8',
				),
			'errorHandler'=>array(  
				// use 'site/error' action to display errors  
				'errorAction'=>'site/error',  
				),  
			'log'=>array(  
				'class'=>'CLogRouter',  
				'routes'=>array(  
					array(  
						'class'=>'CFileLogRoute',  
						'levels'=>'error, warning',  
						),  
					// uncomment the following to show log messages on web pages  
					/* array(  
					     'class'=>'CWebLogRoute',  
					     ),
													*/  
					),  
				),  
			
			
			),  
		
		// application-level parameters that can be accessed  
		// using Yii::app()->params['paramName']  
		'params'=>array(  
			// this is used in contact page  
			'adminEmail'=>'webmaster@example.com',  
			'loginType'=>'',  
			),  
		);  
