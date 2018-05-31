<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 POC</h1>
    <br>
</p>

this repo only for POC Yii2

REQUIREMENTS
------------

- The minimum requirement by this project template that your Web server supports PHP 5.4.0.
- Postgresql v9


How to setup?
-------------------
- Clone this repository
- Change database config in `/config/db.php`
    ```php
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=poc-yii',
        'username' => 'root',
        'password' => '1234',
        'charset' => 'utf8',
    ];
    ```

- Run migrations `php yii migrate`
- Run application `php yii serve`
- Server started on `http://localhost:8080/`