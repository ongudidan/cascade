<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "service".
 *
 * @property string $id
 * @property string $title
 * @property string|null $image
 * @property string $description
 * @property string|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Service extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $iconFile;


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                // 'createdAtAttribute' => false,
                // 'updatedAtAttribute' => 'sale_date',

            ],
            // [
            //     'class' => BlameableBehavior::class,
            //     'createdByAttribute' => 'created_by',
            //     'updatedByAttribute' => 'updated_by',
            // ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description'], 'required'],
            [['description', 'meta_description', 'meta_keywords'], 'string'],
            [['id', 'title', 'image', 'status', 'created_at', 'updated_at'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['imageFile', 'iconFile'], 'file', 'extensions' => 'png, jpg, jpeg', 'skipOnEmpty' => true], // Validate file type

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
