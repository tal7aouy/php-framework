<?php
class m0002_add_password_to_users{
    public function up()
    {
        $db = \talhaouy\phpmvc\Application::$app->data;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN  password VARCHAR(255) NOT NULL ");
    }
    public function down()
    {
        $db = \talhaouy\phpmvc\Application::$app->data;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN  password");
    }
}

