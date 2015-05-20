<?php

/**
 * This is the model class for table "profil_instansi".
 *
 * The followings are the available columns in table 'profil_instansi':
 * @property integer $kode_profil
 * @property string $visi
 * @property string $misi
 * @property string $profil_lainnya
 * @property string $oleh_petugas
 *
 * The followings are the available model relations:
 * @property Petugas $olehPetugas
 */
class ProfilInstansi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProfilInstansi the static model class
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
		return 'profil_instansi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('visi, misi, profil_lainnya, oleh_petugas', 'required'),
			array('oleh_petugas', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_profil, visi, misi, profil_lainnya, oleh_petugas', 'safe', 'on'=>'search'),
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
			'kode_profil' => 'Kode Profil',
			'visi' => 'Visi',
			'misi' => 'Misi',
			'profil_lainnya' => 'Profil Lainnya',
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

		$criteria->compare('kode_profil',$this->kode_profil);
		$criteria->compare('visi',$this->visi,true);
		$criteria->compare('misi',$this->misi,true);
		$criteria->compare('profil_lainnya',$this->profil_lainnya,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}