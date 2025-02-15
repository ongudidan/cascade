<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "background".
 *
 * @property string $id
 * @property string|null $banner_image
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Background extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'background';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['description'], 'string'],
            [['id', 'banner_image', 'created_at', 'updated_at'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'], // Image validation

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banner_image' => 'Banner Image',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
