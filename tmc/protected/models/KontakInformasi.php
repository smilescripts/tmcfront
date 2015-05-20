<?php

/**
 * This is the model class for table "kontak_informasi".
 *
 * The followings are the available columns in table 'kontak_informasi':
 * @property integer $kode_kontak
 * @property string $alamat
 * @property integer $no_telepon
 * @property string $email
 * @property integer $fax
 * @property string $facebook
 * @property string $twitter
 * @property string $oleh_petugas
 *
 * The followings are the available model relations:
 * @property Petugas $olehPetugas
 */
class KontakInformasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KontakInformasi the static model class
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
		return 'kontak_informasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alamat, no_telepon, email, fax, facebook, twitter, oleh_petugas', 'required'),
			array('no_telepon, fax', 'numerical', 'integerOnly'=>true),
			array('oleh_petugas', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_kontak, alamat, no_telepon, email, fax, facebook, twitter, oleh_petugas', 'safe', 'on'=>'search'),
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
			'olehPetugas' => array(self::BELONGS_TO, 'Petugas', 'oleh_petugas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_kontak' => 'Kode Kontak',
			'alamat' => 'Alamat',
			'no_telepon' => 'No Telepon',
			'email' => 'Email',
			'fax' => 'Fax',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'oleh_petugas' => 'Oleh Petugas',
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

		$criteria->compare('kode_kontak',$this->kode_kontak);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telepon',$this->no_telepon);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}