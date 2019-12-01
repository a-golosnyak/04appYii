<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property string $id
 * @property string $post_id
 * @property string $user_id
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'user_id', 'body'], 'required'],
            [['post_id', 'user_id'], 'integer'],
            [['body'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'user_id' => 'User ID',
            'body' => 'Body',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
