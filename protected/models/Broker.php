<?php

class Broker extends CActiveRecord
{
	/*
	* Переменные для запроса, если различаются имена столбцов
	
	public $item_id;
	public $item_count;
	public $brokerRace;
	public $expireTime;
	public $isSold;
	*/
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	/*
	* Название таблицы
	*/
	public function tableName()
	{
		return Config::db('gs').'.broker';
	}
	
	
	/*
	* Правила валидации
	*/
	public function rules()
	{
		return array(
			array('id, itemPointer, item_id, item_count, seller, price, brokerRace, expireTime, settleTime, sellerId, isSold, isSettled', 'safe', 'on'=>'search'),
		);
	}
	
	
	/*
	* Связи с таблицами
	*/
	public function relations()
	{
		return array(
		);
	}
	
	
	/*
	* Название столбцов
	*/
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			Column::broker('itemPointer') => 'Item Pointer',
			Column::broker('item_id') => 'Item',
			Column::broker('item_count') => 'Item Count',
			'seller' => 'Seller',
			'price' => 'Price',
			Column::broker('brokerRace') => 'Broker Race',
			Column::broker('expireTime') => 'Expire Time',
			Column::broker('settleTime') => 'Settle Time',
			Column::broker('sellerId') => 'Seller',
			Column::broker('isSold') => 'Is Sold',
			Column::broker('isSettled') => 'Is Settled',
		);
	}
	
	
	/*
	public function getTest()
	{
		return $this->brokerRace;
	}
	*/
	
	
	/*
	* Поиск
	*/
	public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('itemPointer',$this->itemPointer);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('item_count',$this->item_count,true);
		$criteria->compare('seller',$this->seller,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('brokerRace',$this->brokerRace,true);
		$criteria->compare('expireTime',$this->expireTime,true);
		$criteria->compare('settleTime',$this->settleTime,true);
		$criteria->compare('sellerId',$this->sellerId);
		$criteria->compare('isSold',$this->isSold);
		$criteria->compare('isSettled',$this->isSettled);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}