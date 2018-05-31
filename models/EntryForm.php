<?php
/**
 * Created by PhpStorm.
 * User: fajrinimamarif
 * Date: 5/31/18
 * Time: 8:34 AM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}