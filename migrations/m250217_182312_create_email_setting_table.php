<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%email_setting}}`.
 */
class m250217_182312_create_email_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%email_setting}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'admin_email' => $this->string()->defaultValue(null),
            'support_email' => $this->string()->defaultValue(null),
            'sender_email' => $this->string()->defaultValue(null),
            'sender_name' => $this->string()->defaultValue(null),
            'mailer_email' => $this->string()->defaultValue(null),
            'mailer_password' => $this->string()->defaultValue(null),
            'transport' => $this->string()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%email_setting}}');
    }
}
