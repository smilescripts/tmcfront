<?php

/**
 * This is the model class for table "berita".
 *
 * The followings are the available columns in table 'berita':
 * @property integer $kode_berita
 * @property integer $judul_berita
 * @property integer $isi_berita
 * @property string $tanggal_posting
 * @property string $oleh_petugas
 * @property string $status
 * @property integer $kategori_berita
 *
 * The followings are the available model relations:
 * @property KategoriBerita $kategoriBerita
 * @property Petugas $olehPetugas
 * @property KontenBerita[] $kontenBeritas
 */
class Berita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Berita the static model class
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
		return 'berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_berita,judul_berita, isi_berita, tanggal_posting, oleh_petugas, status, kategori_berita', 'required'),
			array('oleh_petugas', 'length', 'max'=>20),
			array('status', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_berita, judul_berita, isi_berita, tanggal_posting, oleh_petugas, status, kategori_berita', 'safe', 'on'=>'search'),
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
			'kategoriBerita' => array(self::BELONGS_TO, 'KategoriBerita', 'kategori_berita'),
			'olehPetugas' => array(self::BELONGS_TO, 'Petugas', 'oleh_petugas'),
			'kontenBeritas' => array(self::HAS_MANY, 'KontenBerita', 'kode_berita'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_berita' => 'Kode Berita',
			'judul_berita' => 'Judul Berita',
			'isi_berita' => 'Isi Berita',
			'tanggal_posting' => 'Tanggal Posting',
			'oleh_petugas' => 'Oleh Petugas',
			'status' => 'Status',
			'kategori_berita' => 'Kategori Berita',
			'foto' => 'Foto',
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

		$criteria->compare('kode_berita',$this->kode_berita);
		$criteria->compare('judul_berita',$this->judul_berita);
		$criteria->compare('isi_berita',$this->isi_berita);
		$criteria->compare('tanggal_posting',$this->tanggal_posting,true);
		$criteria->compare('oleh_petugas',$this->oleh_petugas,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('kategori_berita',$this->kategori_berita);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function generateid_Berita(){
		$no=1;
        $last_po = $this->find(
                array(
                    "select"=>"kode_berita",
                    "order" => "kode_berita DESC"
                ));
      
        if($last_po != null){
            $_no = $last_po->kode_berita;
            $_no++;
            $no = $_no;
        }
        return $no;
    }
}