<?php

use app\components\IdGenerator;
use yii\db\Migration;

/**
 * Class m250217_092553_seed_user_table
 */
class m250217_092553_seed_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $timestamp = time(); // Current timestamp

        // Insert admin user
        $this->insert('{{%user}}', [
            'id' => IdGenerator::generateUniqueId(),
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
            'status' => 10,
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250217_092553_seed_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250217_092553_seed_user_table cannot be reverted.\n";

        return false;
    }
    */
}
