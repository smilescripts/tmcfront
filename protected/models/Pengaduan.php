<?php

/**
 * This is the model class for table "pengaduan".
 *
 * The followings are the available columns in table 'pengaduan':
 * @property string $kode_pengaduan
 * @property integer $nama_pengadu
 * @property integer $email
 * @property integer $no_telp
 * @property integer $isi_pengaduan
 * @property integer $tanggal_pengaduan
 * @property integer $lokasi
 * @property integer $jenis_pengaduan
 * @property string $verifikasi
 *
 * The followings are the available model relations:
 * @property JenisPengaduan $jenisPengaduan
 */
class Pengaduan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pengaduan the static model class
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
		return 'pengaduan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_pengaduan, nama_pengadu, email, no_telp, isi_pengaduan, tanggal_pengaduan, lokasi, jenis_pengaduan, verifikasi', 'required'),
			array('nama_pengadu, email, no_telp, isi_pengaduan, tanggal_pengaduan, lokasi, jenis_pengaduan', 'numerical', 'integerOnly'=>true),
			array('kode_pengaduan', 'length', 'max'=>20),
			array('verifikasi', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_pengaduan, nama_pengadu, email, no_telp, isi_pengaduan, tanggal_pengaduan, lokasi, jenis_pengaduan, verifikasi', 'safe', 'on'=>'search'),
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
			'jenisPengaduan' => array(self::BELONGS_TO, 'JenisPengaduan', 'jenis_pengaduan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_pengaduan' => 'Kode Pengaduan',
			'nama_pengadu' => 'Nama Pengadu',
			'email' => 'Email',
			'no_telp' => 'No Telp',
			'isi_pengaduan' => 'Isi Pengaduan',
			'tanggal_pengaduan' => 'Tanggal Pengaduan',
			'lokasi' => 'Lokasi',
			'jenis_pengaduan' => 'Jenis Pengaduan',
			'verifikasi' => 'Verifikasi',
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

		$criteria->compare('kode_pengaduan',$this->kode_pengaduan,true);
		$criteria->compare('nama_pengadu',$this->nama_pengadu);
		$criteria->compare('email',$this->email);
		$criteria->compare('no_telp',$this->no_telp);
		$criteria->compare('isi_pengaduan',$this->isi_pengaduan);
		$criteria->compare('tanggal_pengaduan',$this->tanggal_pengaduan);
		$criteria->compare('lokasi',$this->lokasi);
		$criteria->compare('jenis_pengaduan',$this->jenis_pengaduan);
		$criteria->compare('verifikasi',$this->verifikasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function generateid_Gangguan(){
        $_d = date("y/m/");
        $_i = "WB-";
        $_left = $_i . $_d;
        $_first = "0001";
        $_len = strlen($_left);
        $no = $_left . $_first;
      
        $last_po = $this->find(
                array(
                    "select"=>"nogangguan",
                    "condition" => "left(nogangguan, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "nogangguan DESC"
                ));
      
        if($last_po != null){
            $_no = substr($last_po->nogangguan, $_len);
            $_no++;
            $_no = substr("0000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
        return $no;
    }
	<?php echo $form->textField($model,'nogangguan',array('size'=>50,
		'maxlength'=>50,'value' => (($model->isNewRecord) ? $model->generateid_gangguan() : $Gangguan->no), 'readonly'=>true)); ?>
	
}