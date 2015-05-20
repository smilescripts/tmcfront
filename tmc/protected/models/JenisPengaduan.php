<?php

/**
 * This is the model class for table "jenis_pengaduan".
 *
 * The followings are the available columns in table 'jenis_pengaduan':
 * @property integer $kode_jenis
 * @property string $nama_jenis
 * @property string $oleh_petugas
 *
 * The followings are the available model relations:
 * @property Petugas $olehPetugas
 * @property Pengaduan[] $pengaduans
 */
class JenisPengaduan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JenisPengaduan the static model class
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
		return 'jenis_pengaduan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_jenis, oleh_petugas', 'required'),
			array('nama_jenis', 'length', 'max'=>100),
			array('oleh_petugas', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_jenis, nama_jenis, oleh_petugas', 'safe', 'on'=>'search'),
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
			'pengaduans' => array(self::HAS_MANY, 'Pengaduan', 'jenis_pengaduan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_jenis' => 'Kode Jenis',
			'nama_jenis' => 'Nama Jenis',
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

		$criteria->compare('kode_jenis',$this->kode_jenis);
		$criteria->compare('nama_jenis',$this->nama_jenis,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}