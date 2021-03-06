<?php

namespace bl\multilang\widgets\languageList;

use bl\multilang\entities\Language;
use Yii;
use yii\base\Widget;

/**
 * Description of LanguageList
 *
 * @author RuslanSaiko
 */
class LanguageListWidget extends Widget {

    public function run() {
        $languages = Language::findAll(['active' => true]);
        $current = Language::findOne(['lang_id' => Yii::$app->language]);
        return $this->render('list', ['current' => $current, 'languages' => $languages]);
    }

}
