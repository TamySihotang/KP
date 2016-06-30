<?php

/**
 * This is the model class for table "t_office".
 *
 * The followings are the available columns in table 't_office':
 * @property integer $id
 * @property integer $account_id
 * @property string $name_office
 * @property string $email_office
 * @property string $address_office
 * @property string $phone_office
 *
 * The followings are the available model relations:
 * @property TAccount $account
 * @property TSparepart[] $tSpareparts
 */
class TOffice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_id, name_office, email_office, address_office, phone_office', 'required'),
			array('account_id', 'numerical', 'integerOnly'=>true),
			array('name_office, email_office, address_office, phone_office', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, account_id, name_office, email_office, address_office, phone_office', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'TAccount', 'account_id'),
			'tSpareparts' => array(self::HAS_MANY, 'TSparepart', 'office_id'),
                    'spareparts' => array(self::BELONGS_TO, 'TSparepart', 'sparepart_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_id' => 'Account',
			'name_office' => 'Name Office',
			'email_office' => 'Email Office',
			'address_office' => 'Address Office',
			'phone_office' => 'Phone Office',
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
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('name_office',$this->name_office,true);
		$criteria->compare('email_office',$this->email_office,true);
		$criteria->compare('address_office',$this->address_office,true);
		$criteria->compare('phone_office',$this->phone_office,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TOffice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
