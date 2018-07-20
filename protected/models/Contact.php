<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id
 * @property string $name
 * @property string $company
 * @property string $address
 * @property string $zip
 * @property string $telephone
 * @property string $cellphone
 * @property string $email
 * @property string $message
 */
class Contact extends CActiveRecord
{
    public $verifyCode;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
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
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' name, company, address, zip, telephone, cellphone, email, message', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('name, telephone, cellphone', 'length', 'max'=>20),
			array('company, address', 'length', 'max'=>40),
			array('zip', 'length', 'max'=>10),
			array('email', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, company, address, zip, telephone, cellphone, email, message', 'safe', 'on'=>'search'),
                        array('verifyCode','required','message'=>'验证码不能为空'),
                        array('verifyCode','captcha'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => Yii::t('yii', 'name'),
			'company' => Yii::t('yii', 'company'),
			'address' => Yii::t('yii', 'address'),
			'zip' => Yii::t('yii', 'zip'),
			'telephone' => Yii::t('yii', 'telephone'),
			'cellphone' => Yii::t('yii', 'cellphone'),
			'email' => Yii::t('yii', 'email'),
			'message' => Yii::t('yii', 'message'),
                        'verifyCode' => 'cerrify Code',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('message',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function validateVerifyCode($verifyCode){
            if(strtolower($this->verifyCode) === strtolower($verifyCode)){
                return true;
            }else{
                $this->addError('verifyCode','验证码错误.');
            }
	}
}