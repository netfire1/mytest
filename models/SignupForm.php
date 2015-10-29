<?php

namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'Поле не может быть пустым.'],
            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'Такое имя пользователя уже есть.'],
            ['username', 'string', 'min' => 2, 'max' => 50,
                'tooShort' => 'Имя пользователя должно содержать не менее 2 символов.',
                'tooLong' => 'Имя пользователя должно содержать не более 50 символов.'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => 'Поле не может быть пустым.'],
            ['email', 'email', 'message' => 'Это совсем не email.'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'Такой email адрес уже занят.'],
            ['password', 'required', 'message' => 'Поле не может быть пустым.'],
            ['password', 'string', 'min' => 6, 'tooShort' => 'Пароль должен иметь длину не менее 6 символов.'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate())
        {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save())
            {
                return $user;
            }
        }

        return null;
    }

}
