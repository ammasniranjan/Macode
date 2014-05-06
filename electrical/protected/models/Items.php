<?php

/**
 * This is the model class for table "items".
 *
 * The followings are the available columns in table 'items':
 * @property string $id
 * @property string $code
 * @property string $item_category
 * @property string $item_desc
 * @property integer $reorder_point
 * @property string $unit
 *
 * The followings are the available model relations:
 * @property ItemsManufacturers[] $itemsManufacturers
 */
class Items extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Items the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, item_category, item_desc, reorder_point, unit', 'required'),
			array('reorder_point', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>25),
			array('item_category', 'length', 'max'=>100),
			array('item_desc', 'length', 'max'=>500),
			array('unit', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, item_category, item_desc, reorder_point, unit', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'itemsManufacturers' => array(self::HAS_MANY, 'ItemsManufacturers', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'item_category' => 'Item Category',
			'item_desc' => 'Item Desc',
			'reorder_point' => 'Reorder Point',
			'unit' => 'Unit',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('item_category',$this->item_category,true);
		$criteria->compare('item_desc',$this->item_desc,true);
		$criteria->compare('reorder_point',$this->reorder_point);
		$criteria->compare('unit',$this->unit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}