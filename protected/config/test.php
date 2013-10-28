<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'db'=>array(
                            'connectionString' => 'mysql:host=127.0.0.1;dbname=cbdb',
                            'emulatePrepare' => true,
                            'username' => 'root',
                            'password' => '',
                            'charset' => 'utf8',
			),
		),
	)
);
