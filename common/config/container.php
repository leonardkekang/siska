<?php

use yii\db\BaseActiveRecord;
use yii\db\Expression;

return [
    'TimestampBehavior' => [
        'class' => 'yii\behaviors\TimestampBehavior',
        'attributes' => [
            BaseActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
        ],
        'value' => new Expression('NOW()')
    ],
    'BlameableBehavior' => [
        'class' => 'yii\behaviors\BlameableBehavior',
        'attributes' => [
            BaseActiveRecord::EVENT_BEFORE_INSERT => ['created_by', 'updated_by'],
            BaseActiveRecord::EVENT_BEFORE_UPDATE => 'updated_by',
        ],
    ],
];
