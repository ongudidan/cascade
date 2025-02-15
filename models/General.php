<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general".
 *
 * @property string $id
 * @property string|null $logo
 * @property string|null $favicon
 * @property string|null $home_banner
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class General extends \yii\db\ActiveRecord
{
    public $logoFile;
    public $faviconFile;
    public $bannerFile;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['logo', 'favicon', 'home_banner'], 'string'],
            [['id', 'created_at', 'updated_at'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['logoFile','faviconFile','bannerFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'], // Image validation

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'favicon' => 'Favicon',
            'home_banner' => 'Home Banner',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
