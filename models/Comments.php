<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $comment
 * @property integer $rating
 * @property string $username
 * @property integer $id_item
 * @property string $post_date
 */
class Comments extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['id_item'], 'integer'],
            [['username', 'id_item', 'comment'], 'required', 'message' => 'Поле не может быть пустым.'],
            [['post_date', 'username', 'id_item'], 'safe'],
            ['rating', 'integer', 'min' => 1, 'max' => 5, 'tooSmall' => 'Рейтинг не может быть ниже 1.',
                'tooBig' => 'Рейтинг не может быть выше 5.',
                'message' => 'Введите целое число.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Комментарий',
            'rating' => 'Рейтинг',
            'id_item' => 'Id Item',
            'post_date' => 'Дата',
            'username' => 'Пользователь',
        ];
    }

}
