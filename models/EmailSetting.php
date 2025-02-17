<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email_setting".
 *
 * @property string $id
 * @property string|null $admin_email
 * @property string|null $support_email
 * @property string|null $sender_email
 * @property string|null $sender_name
 * @property string|null $mailer_email
 * @property string|null $mailer_password
 * @property string|null $transport
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class EmailSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'admin_email', 'support_email', 'sender_email', 'sender_name', 'mailer_email', 'mailer_password', 'transport', 'created_at', 'updated_at'], 'string', 'max' => 255],
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
            'admin_email' => 'Admin Email',
            'support_email' => 'Support Email',
            'sender_email' => 'Sender Email',
            'sender_name' => 'Sender Name',
            'mailer_email' => 'Mailer Email',
            'mailer_password' => 'Mailer Password',
            'transport' => 'Transport',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
