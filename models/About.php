<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property string $id
 * @property string|null $description
 * @property string|null $banner_image
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class About extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['description', 'meta_description', 'meta_keywords'], 'string'],
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
            'description' => 'Description',
            'banner_image' => 'Banner Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
