<?php

return array(
	'homeUrl'=>'http://localhost/aion/', // Homepage URL, the slash at the end is required
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Aion Reborn: German PvP Freeshard',
	'language' => 'en',
	'theme' => 'default', // Name of the themes folder being used
	
	
	'preload'=>array('log'),
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'defaultController'=>'news',
	'modules'=>array(
		/*'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'aaa',
			'ipFilters'=>array('127.0.0.1','::1'),
		),*/
	),
	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
		),
		'ih'=>array(
			'class'=>'CImageHandler',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>require(dirname(__FILE__).'/routes.php'),
		),
		
		// Cache
		//'cache'=>array(
		//	'class'=>'CDbCache',
		//),
		
		// Database connection settings
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=WEBSITE DB', // Database connection string
			'emulatePrepare' => true,
			'username' => 'USERNAME',
			'password' => 'PASSWORD',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging'=>true,
			//'schemaCachingDuration'=>3600, // cache time, sec
		),
		'gs'=>array(
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=GAME DB', // Database gameserver connection string
			'emulatePrepare' => true,
			'username' => 'USERNAME',
			'password' => 'PASSWORD',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging'=>true,
			//'schemaCachingDuration'=>3600, // cache time, sec
		),
		// Логинсервер
		'ls'=>array(
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=LOGIN DB', // Database loginserver connection string
			'emulatePrepare' => true,
			'username' => 'USERNAME',
			'password' => 'PASSWORD',
			'charset' => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging'=>true,
			//'schemaCachingDuration'=>3600, // cache time, sec
		),
		'session' => array(
			'class' => 'application.components.MyCDbHttpSession',
			'connectionID' => 'db',
			'sessionTableName'  =>  'session',
			'autoCreateSessionTable' => false,
			'compareIpAddress'=>true,
			'compareUserAgent'=>true,
			'compareIpBlocks'=>0
		),
		
		'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					//'class'=>'CProfileLogRoute',  // Log
					//'report'=>'summary', // Log
				),
				/* Log
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
	
	
	// Прочие настройки
	'params'=>array(
		'adminEmail' =>		'ackermann@dollanal.com',	// Admin email address
		'money' =>			'donatemoney',		// Database column for donations
		'version' =>		'3.0',
	),
);