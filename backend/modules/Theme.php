<?php

namespace backend\modules;

/**
 * Description of AdminlteTheme
 *
 * @author Misbahul D Munir (mdmunir) <misbahuldmunir@gmail.com>
 */
class Theme extends \yii\base\Theme {

    public $pathMap = [
        '@mdm/admin/views' => '@backend/modules/admin/views',
    ];

}
