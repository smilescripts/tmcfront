<?php

/**
 * This is the model class for table "jadwal_sim".
 *
 * The followings are the available columns in table 'jadwal_sim':
 * @property integer $kode_jadwal
 * @property string $dari_tanggal
 * @property string $sampai_tanggal
 * @property string $dari_jam
 * @property string $sampai_jam
 * @property string $lokasi_tempat
 * @property string $keterangan
 * @property string $oleh_petugas
 *
 * The followings are the available model relations:
 * @property Petugas $olehPetugas
 */
class JadwalSim extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JadwalSim the static model class
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
		return 'jadwal_sim';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dari_tanggal, sampai_tanggal, dari_jam, sampai_jam, lokasi_tempat, keterangan, oleh_petugas', 'required'),
			array('oleh_petugas', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_jadwal, dari_tanggal, sampai_tanggal, dari_jam, sampai_jam, lokasi_tempat, keterangan, oleh_petugas', 'safe', 'on'=>'search'),
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
			'kode_jadwal' => 'Kode Jadwal',
			'dari_tanggal' => 'Dari Tanggal',
			'sampai_tanggal' => 'Sampai Tanggal',
			'dari_jam' => 'Dari Jam',
			'sampai_jam' => 'Sampai Jam',
			'lokasi_tempat' => 'Lokasi Tempat',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('kode_jadwal',$this->kode_jadwal);
		$criteria->compare('dari_tanggal',$this->dari_tanggal,true);
		$criteria->compare('sampai_tanggal',$this->sampai_tanggal,true);
		$criteria->compare('dari_jam',$this->dari_jam,true);
		$criteria->compare('sampai_jam',$this->sampai_jam,true);
		$criteria->compare('lokasi_tempat',$this->lokasi_tempat,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}