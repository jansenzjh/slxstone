<?php

/**
 * This is the model class for table "rock".
 *
 * The followings are the available columns in table 'rock':
 * @property integer $id
 * @property string $modelId
 * @property string $description
 * @property integer $finishedType
 * @property integer $thickness
 * @property integer $series
 * @property integer $color
 * @property string $image
 * @property string $image2
 */
class Rock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rock the static model class
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
		return 'rock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('modelId, description, finishedType, thickness, series, color, image, image2', 'required'),
			array('finishedType, thickness, series, color', 'numerical', 'integerOnly'=>true),
			array('modelId', 'length', 'max'=>10),
			array('description', 'length', 'max'=>40),
			array('image', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, modelId, description, finishedType, thickness, series, color, image', 'safe', 'on'=>'search'),
                        array('image', 'file', 'types'=>'jpg, gif, png'),
                        array('image2', 'file', 'types'=>'jpg, gif, png'),
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
			'modelId' => Yii::t('yii', 'model'),
			'description' => Yii::t('yii', 'description'),
			'finishedType' => Yii::t('yii', 'finishedtype'),
			'thickness' => Yii::t('yii', 'thickness'),
			'series' => Yii::t('yii', 'series'),
			'color' => Yii::t('yii', 'color'),
			'image' => Yii::t('yii', 'image'),
                        'image2' => Yii::t('yii', 'image2'),
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
		$criteria->compare('modelId',$this->modelId,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('finishedType',$this->finishedType);
		$criteria->compare('thickness',$this->thickness);
		$criteria->compare('series',$this->series);
		$criteria->compare('color',$this->color);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}