<?php

/**
 * This is the model class for table "t_sparepart".
 *
 * The followings are the available columns in table 't_sparepart':
 * @property integer $id
 * @property integer $office_id
 * @property string $category
 * @property string $series
 * @property string $type
 * @property string $model
 * @property string $aliasname
 * @property string $partno
 * @property string $status
 *
 * The followings are the available model relations:
 * @property THistory[] $tHistories
 * @property TSerialnumber[] $tSerialnumbers
 * @property TOffice $office
 */
class sparepart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_sparepart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('office_id, category, series, type, model, aliasname, partno, status', 'required'),
			array('office_id', 'numerical', 'integerOnly'=>true),
			array('category, series, type, model, aliasname, partno, status', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, office_id, category, series, type, model, aliasname, partno, status', 'safe', 'on'=>'search'),
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
			'tHistories' => array(self::HAS_MANY, 'THistory', 'sparepart_id'),
			'tSerialnumbers' => array(self::HAS_MANY, 'TSerialnumber', 'sparepart_id'),
			'office' => array(self::BELONGS_TO, 'TOffice', 'office_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'office_id' => 'Office',
			'category' => 'Category',
			'series' => 'Series',
			'type' => 'Type',
			'model' => 'Model',
			'aliasname' => 'Aliasname',
			'partno' => 'Partno',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('office_id',$this->office_id);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('aliasname',$this->aliasname,true);
		$criteria->compare('partno',$this->partno,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return sparepart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
