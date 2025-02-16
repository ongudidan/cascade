<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "careers".
 *
 * @property string $id
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Careers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'careers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['description', 'meta_description', 'meta_keywords'], 'string'],
            [['id', 'created_at', 'updated_at'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
