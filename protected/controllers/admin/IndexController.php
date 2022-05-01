<?php

////////////////////////////////////////////////////////////////////////////////////////////
/// 
/// PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)
/// 
////////////////////////////////////////////////////////////////////////////////////////////

class IndexController extends Controller
{
	public $layout='//content';
	
	
	public function actionIndex()
	{
		if (Yii::app()->user->isGuest OR Yii::app()->user->access_level < Config::get('access_level_editor')) {
			$this->redirect(Yii::app()->homeUrl);
		}
		
		$this->pageTitle = Yii::t('title', 'Admin panel');
		
		$this->render('/admin/index');
	}

}