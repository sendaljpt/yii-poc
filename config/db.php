<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=poc-yii',
    'username' => 'postgres',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];