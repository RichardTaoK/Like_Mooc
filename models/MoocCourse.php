<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mooc_course".
 *
 * @property int $id
 * @property int $fid
 * @property int $tid
 * @property int $did
 * @property string $title
 * @property int $view_count
 * @property string $description
 * @property string $pic
 * @property string $teacher_id
 * @property string $teacher_tip
 * @property string $create_time
 * @property string $url
 */
class MoocCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mooc_course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fid', 'tid', 'did', 'view_count', 'url'], 'required'],
            [['fid', 'tid', 'did', 'view_count'], 'integer'],
            [['create_time'], 'safe'],
            [['title', 'description', 'pic', 'teacher_id', 'teacher_tip', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fid' => 'Fid',
            'tid' => 'Tid',
            'did' => 'Did',
            'title' => 'Title',
            'view_count' => 'View Count',
            'description' => 'Description',
            'pic' => 'Pic',
            'teacher_id' => 'Teacher ID',
            'teacher_tip' => 'Teacher Tip',
            'create_time' => 'Create Time',
            'url' => 'Url',
        ];
    }
}
