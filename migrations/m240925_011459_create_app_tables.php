<?php

use yii\db\Migration;

/**
 * Class m240925_011459_create_app_tables
 */
class m240925_011459_create_app_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create user table
        $this->createTable('{{%user}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'username' => $this->string()->defaultValue(null)->unique(),
            'verification_token' => $this->string()->defaultValue(null),
            'auth_key' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        // Create RBAC tables
        $this->createTable('{{%auth_rule}}', [
            'name' => $this->string()->notNull(),
            'data' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY (name)',
        ]);

        $this->createTable('{{%auth_item}}', [
            'name' => $this->string()->notNull(),
            'type' => $this->integer()->notNull(),
            'description' => $this->text(),
            'rule_name' => $this->string(),
            'data' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY (name)',
            'KEY rule_name (rule_name)',
            'KEY type (type)',
        ]);

        $this->createTable('{{%auth_item_child}}', [
            'parent' => $this->string()->notNull(),
            'child' => $this->string()->notNull(),
            'PRIMARY KEY (parent, child)',
            'KEY child (child)',
            'FOREIGN KEY ([[parent]]) REFERENCES {{%auth_item}} ([[name]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
            'FOREIGN KEY ([[child]]) REFERENCES {{%auth_item}} ([[name]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
        ]);

        $this->createTable('{{%auth_assignment}}', [
            'item_name' => $this->string()->notNull(),
            'user_id' => $this->string()->notNull(), // Changed to string
            'created_at' => $this->integer(),
            'PRIMARY KEY (item_name, user_id)',
            'FOREIGN KEY ([[item_name]]) REFERENCES {{%auth_item}} ([[name]])' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
            'FOREIGN KEY ([[user_id]]) REFERENCES {{%user}} ([[id]]) ' .
                $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
        ]);

        // Create service table
        $this->createTable('{{%service}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'title' => $this->string()->notNull(),
            'image' => $this->string()->defaultValue(null),
            'icon' => $this->string()->defaultValue(null),
            'description' => $this->text()->notNull(),
            'meta_description' => $this->text()->defaultValue(null),
            'meta_keywords' => $this->text()->defaultValue(null),
            'status' => $this->string()->defaultValue(10),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create service_image table
        $this->createTable('{{%service_image}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'service_id' => $this->string()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
            'FOREIGN KEY ([[service_id]]) REFERENCES {{%service}} ([[id]]) ' .
            $this->buildFkClause('ON DELETE CASCADE', 'ON UPDATE CASCADE'),
        ]);

        // Create about table
        $this->createTable('{{%about}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'description' => $this->text()->defaultValue(null),
            'banner_image' => $this->string()->defaultValue(null),
            'meta_description' => $this->text()->defaultValue(null),
            'meta_keywords' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create contact table
        $this->createTable('{{%contact}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'description' => $this->text()->defaultValue(null),
            'banner_image' => $this->string()->defaultValue(null),
            'phone1' => $this->string()->defaultValue(null),
            'phone2' => $this->string()->defaultValue(null),
            'address' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'meta_description' => $this->text()->defaultValue(null),
            'meta_keywords' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create help_desk table
        $this->createTable('{{%help_desk}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'image' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create general table
        $this->createTable('{{%general}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'logo' => $this->text()->defaultValue(null),
            'favicon' => $this->text()->defaultValue(null),
            'home_banner' => $this->text()->defaultValue(null),
            'meta_description' => $this->text()->defaultValue(null),
            'meta_keywords' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create home_banner_image table
        $this->createTable('{{%home_banner}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'image' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create careers table
        $this->createTable('{{%careers}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'description' => $this->text()->defaultValue(null),
            'meta_description' => $this->text()->defaultValue(null),
            'meta_keywords' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create why_us table
        $this->createTable('{{%why_us}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'image' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

        // Create emails table
        $this->createTable('{{%email}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'name' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'message' => $this->text()->defaultValue(null),
            'created_at' => $this->string()->defaultValue(null),
            'updated_at' => $this->string()->defaultValue(null),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
 
        $this->dropTable('{{%auth_assignment}}');
        $this->dropTable('{{%auth_item_child}}');
        $this->dropTable('{{%auth_item}}');
        $this->dropTable('{{%auth_rule}}');
        $this->dropTable('{{%user}}');
    }

    protected function buildFkClause($delete = '', $update = '')
    {
        return implode(' ', ['', $delete, $update]);
    }
}
