<?php
require_once MODX_CORE_PATH.'model/modx/modprocessor.class.php';
require_once MODX_CORE_PATH.'model/modx/processors/resource/update.class.php';

class WoolCategoriesUpdateProcessor extends modResourceUpdateProcessor {

    public function beforeSet() {
        $beforeSet = parent::beforeSet();
        
        return $beforeSet;
    }

    public function beforeSave() {
        $beforeSave = parent::beforeSave();
        
        return $beforeSave;
    }
 
    public function afterSave() {
        $afterSave = parent::afterSave();
        $this->modx->log(modX::LOG_LEVEL_DEBUG,'Updating a Wool Page!');
        return $afterSave;
    }
}