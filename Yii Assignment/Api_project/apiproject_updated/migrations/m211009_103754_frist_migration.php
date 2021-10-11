<?php

use yii\db\Migration;

/**
 * Class m211009_103754_frist_migration
 */
class m211009_103754_frist_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user1', [
            'User_id' => $this->primaryKey(),
            'firstname' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'gender' => $this->string()->notNull(),
            'email_id' => $this->string()->notNull(),
        ]);

        $this->createTable('address', [
            'Add_id' => $this->primaryKey(),
            'addressone' => $this->string()->notNull(),
            'addresstwo' => $this->string()->notNull(),
            'city' => $this->string(),
            'state' => $this->string(),
            'pincode' => $this->integer(),
            'country' => $this->string()
        ]);

        $this->createTable('project', [
            'P_id' => $this->primaryKey(),
            'P_title' => $this->string()->notNull(),
            'P_desc' => $this->text()->notNull(),
            'P_logo' => $this->string()
        ]);

        $this->createTable('module', [
            'M_id' => $this->primaryKey(),
            'M_title' => $this->string()->notNull(),
            'M_desc' => $this->text()->notNull()
            
        ]);

        $this->createTable('api', [
            'A_id' => $this->primaryKey(),
            'A_title' => $this->string()->notNull(),
            'A_desc' => $this->text()->notNull(),
            'A_url' => $this->string(),
            'A_method' => $this->string(),
            'A_request' => $this->string(),
            'A_response' => $this->string()
        ]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user1');
        $this->dropTable('address');
        $this->dropTable('project');
        $this->dropTable('module');
        $this->dropTable('api');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211009_103754_frist_migration cannot be reverted.\n";

        return false;
    }
    */
}
