<?php

namespace common\modules\jurusan\models;

use Yii;

/**
 * This is the model class for table "jurusan_tahun_akademik".
 *
 * @property string $kode_tahun_akademik
 * @property string $tahun_akademik
 * @property string $semester
 * @property string $status
 * @property string $tanggal_mulai
 * @property string $tanggal_berakhir
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class TahunAkademik extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan_tahun_akademik';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun_akademik', 'tanggal_mulai', 'tanggal_berakhir'], 'required'],
            [['semester', 'status'], 'string'],
            [['tanggal_mulai', 'tanggal_berakhir', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['tahun_akademik'], 'string', 'max' => 9],
            [['tahun_akademik', 'semester'], 'unique', 'targetAttribute' => ['tahun_akademik', 'semester'], 'message' => 'The combination of Tahun Akademik and Semester has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_tahun_akademik' => 'Kode Tahun Akademik',
            'tahun_akademik' => 'Tahun Akademik',
            'semester' => 'Semester',
            'status' => 'Status',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_berakhir' => 'Tanggal Berakhir',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function behaviors() {
        return [
            'TimestampBehavior',
            'BlameableBehavior',
        ];
    }
}
