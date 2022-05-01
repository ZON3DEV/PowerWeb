<?php

////////////////////////////////////////////////////////////////////////////////////////////
/// 
/// PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)
/// 
////////////////////////////////////////////////////////////////////////////////////////////

class CastleController extends Controller
{
	public $layout='//content';
	
	
	public function actionIndex()
	{
		$this->pageTitle = Yii::t('title', 'Fortress sieges');
		
		$this->render('/castle', array(
		));
	}
	
	public function actionXml()
	{
		$criteria=new CDbCriteria;
		$criteria->select = '*';
		$criteria->order = 'id';
		$model = SiegeLocations::model()->findAll($criteria);
		
		header('Content-type: text/xml');
		echo '<?xml version="1.0" encoding="UTF-8" ?>
		<updateLayer>
			<World name="" serverURL="">';
				foreach ($model as $model)
				{
					echo '
					<Abyss id="'.$model->id.'" name="Soon...">
						<race>'.$this->race($model->race).'</race>
						<legion>'.$this->legion($model->legion_id).'</legion>
						<status>Invulnerable</status>
						<nextStatus>Invulnerable</nextStatus>
						<effect>Soon...</effect>
					</Abyss>
				
					<Artifact id="'.$model->id.'" name="Soon...">
						<race>'.$this->race($model->race).'</race>
						<legion>'.$this->legion($model->legion_id).'</legion>
					</Artifact>';
				}
		echo '</World>
		</updateLayer>';
	}
	
	
	public function race($var)
	{
		if ($var == 'ELYOS') return 'Elyosian';
		elseif ($var == 'ASMODIANS') return 'Asmodians';
		elseif ($var == 'BALAUR') return 'Balaur';
	}
	
	public function legion($var)
	{
		$legion = Legions::model()->findByPk($var);
		return $legion['name'];
	}
}