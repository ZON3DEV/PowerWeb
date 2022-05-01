
<?php

////////////////////////////////////////////////////////////////////////////////////////////
/// 
/// PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)
/// 
////////////////////////////////////////////////////////////////////////////////////////////

class StatsController extends Controller
{
	public $layout='//content';
	
	public function actionIndex()
	{
		$this->pageTitle = Yii::t('title', 'Server statistics');
		
		$this->render('/stats', array(
		));
	}


}