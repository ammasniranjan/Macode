<?php


class Manufacturers extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
	public function tableName()
	{
		return 'manufacturers';
	}

	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, address, contact_no', 'required'),
			array('code', 'length', 'max'=>25),
			array('name', 'length', 'max'=>250),
			array('address', 'length', 'max'=>750),
			array('contact_no', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, name, address, contact_no', 'safe', 'on'=>'search'),
		);
	}

	
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'itemsManufacturers' => array(self::HAS_MANY, 'ItemsManufacturers', 'manufacturer_id'),
			'orders' => array(self::HAS_MANY, 'Orders', 'manufacturer_id'),
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'name' => 'Name',
			'address' => 'Address',
			'contact_no' => 'Contact No',
		);
	}

	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('contact_no',$this->contact_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}