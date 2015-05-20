<?php

/**
 * This is the model class for table "kategori_berita".
 *
 * The followings are the available columns in table 'kategori_berita':
 * @property integer $kode_kategori
 * @property string $nama_kategori
 * @property string $oleh_petugas
 *
 * The followings are the available model relations:
 * @property Berita[] $beritas
 * @property Petugas $olehPetugas
 */
class KategoriBerita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KategoriBerita the static model class
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
		return 'kategori_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_kategori, oleh_petugas', 'required'),
			array('nama_kategori', 'length', 'max'=>100),
			array('oleh_petugas', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_kategori, nama_kategori, oleh_petugas', 'safe', 'on'=>'search'),
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
			'beritas' => array(self::HAS_MANY, 'Berita', 'kategori_berita'),
			'olehPetugas' => array(self::BELONGS_TO, 'Petugas', 'oleh_petugas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_kategori' => 'Kode Kategori',
			'nama_kategori' => 'Nama Kategori',
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

		$criteria->compare('kode_kategori',$this->kode_kategori);
		$criteria->compare('nama_kategori',$this->nama_kategori,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}