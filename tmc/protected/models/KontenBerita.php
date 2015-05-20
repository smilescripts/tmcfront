<?php

/**
 * This is the model class for table "konten_berita".
 *
 * The followings are the available columns in table 'konten_berita':
 * @property integer $kode_konten
 * @property integer $kode_berita
 * @property string $file_konten
 *
 * The followings are the available model relations:
 * @property Berita $kodeBerita
 */
class KontenBerita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KontenBerita the static model class
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
		return 'konten_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_berita, file_konten', 'required'),
			array('kode_berita', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_konten, kode_berita, file_konten', 'safe', 'on'=>'search'),
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
			'kodeBerita' => array(self::BELONGS_TO, 'Berita', 'kode_berita'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_konten' => 'Kode Konten',
			'kode_berita' => 'Kode Berita',
			'file_konten' => 'File Konten',
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

		$criteria->compare('kode_konten',$this->kode_konten);
		$criteria->compare('kode_berita',$this->kode_berita);
		$criteria->compare('file_konten',$this->file_konten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}