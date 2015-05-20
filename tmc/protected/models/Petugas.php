<?php

/**
 * This is the model class for table "petugas".
 *
 * The followings are the available columns in table 'petugas':
 * @property string $kode_petugas
 * @property string $nama_petugas
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $last_login
 *
 * The followings are the available model relations:
 * @property Berita[] $beritas
 * @property JenisPengaduan[] $jenisPengaduans
 * @property KategoriBerita[] $kategoriBeritas
 * @property KontakInformasi[] $kontakInformasis
 * @property ProfilInstansi[] $profilInstansis
 */
class Petugas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Petugas the static model class
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
		return 'petugas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_petugas, nama_petugas, username, password, email', 'required'),
			array('kode_petugas', 'length', 'max'=>20),
			array('nama_petugas, username', 'length', 'max'=>50),
			array('email', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_petugas, nama_petugas, username, password, email, last_login', 'safe', 'on'=>'search'),
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
			'beritas' => array(self::HAS_MANY, 'Berita', 'oleh_petugas'),
			'jenisPengaduans' => array(self::HAS_MANY, 'JenisPengaduan', 'oleh_petugas'),
			'kategoriBeritas' => array(self::HAS_MANY, 'KategoriBerita', 'oleh_petugas'),
			'kontakInformasis' => array(self::HAS_MANY, 'KontakInformasi', 'oleh_petugas'),
			'profilInstansis' => array(self::HAS_MANY, 'ProfilInstansi', 'oleh_petugas'),
		);
	}
	
	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->password);
	}
	
	public function hashPassword($password)
	{
		return md5($password);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_petugas' => 'Kode Petugas',
			'nama_petugas' => 'Nama Petugas',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'last_login' => 'Last Login',
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

		$criteria->compare('kode_petugas',$this->kode_petugas,true);
		$criteria->compare('nama_petugas',$this->nama_petugas,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('last_login',$this->last_login,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}