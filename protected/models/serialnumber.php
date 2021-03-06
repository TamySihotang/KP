<?php

/**
 * This is the model class for table "t_serialnumber".
 *
 * The followings are the available columns in table 't_serialnumber':
 * @property integer $id
 * @property integer $sparepart_id
 * @property string $serial_number
 *
 * The followings are the available model relations:
 * @property THistory[] $tHistories
 * @property TSparepart $sparepart
 */
class serialnumber extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_serialnumber';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sparepart_id, serial_number', 'required'),
			array('sparepart_id', 'numerical', 'integerOnly'=>true),
			array('serial_number', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sparepart_id, serial_number', 'safe', 'on'=>'search'),
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
			'tHistories' => array(self::HAS_MANY, 'history', 'serialnumber_id'),
			'sparepart' => array(self::BELONGS_TO, 'sparepart', 'sparepart_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sparepart_id' => 'Sparepart',
			'serial_number' => 'Serial Number',
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
		$criteria->compare('sparepart_id',$this->sparepart_id);
		$criteria->compare('serial_number',$this->serial_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                            'pageSize'=>5
                        )
		));
	}
        public function searchWithSparepart($data)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('sparepart_id',$this->sparepart_id);
		$criteria->compare('serial_number',$this->serial_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return serialnumber the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
