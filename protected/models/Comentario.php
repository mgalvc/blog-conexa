<?php

/**
 * This is the model class for table "tbl_comentario".
 *
 * The followings are the available columns in table 'tbl_comentario':
 * @property integer $id
 * @property string $autor
 * @property string $texto
 * @property integer $id_post
 *
 * The followings are the available model relations:
 * @property Post $idPost
 */
class Comentario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentario the static model class
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
		return 'tbl_comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('autor, texto, id_post', 'required'),
			array('id_post', 'numerical', 'integerOnly'=>true),
			array('autor, texto', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, autor, texto, id_post', 'safe', 'on'=>'search'),
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
			'idPost' => array(self::BELONGS_TO, 'Post', 'id_post'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'autor' => 'Autor',
			'texto' => 'Texto',
			'id_post' => 'Id Post',
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
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('id_post',$this->id_post);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}