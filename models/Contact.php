<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property string $id
 * @property string|null $description
 * @property string|null $banner_image
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $address
 * @property string|null $email
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Contact extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['description', 'meta_description', 'meta_keywords'], 'string'],
            [['id', 'banner_image', 'phone1', 'phone2', 'address', 'email', 'created_at', 'updated_at'], 'string', 'max' => 255],
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
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'address' => 'Address',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
