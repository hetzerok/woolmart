<?php
require_once MODX_CORE_PATH.'model/modx/modprocessor.class.php';
require_once MODX_CORE_PATH.'model/modx/processors/resource/create.class.php';

class WoolCategoriesCreateProcessor extends modResourceCreateProcessor {
    
    public function beforeSet() {
        $beforeSet = parent::beforeSet();

        return $beforeSet;
    }
    
    public function afterSave() {
        $afterSave = parent::afterSave();
        $this->modx->log(modX::LOG_LEVEL_DEBUG,'Creating a Wool Page!');
        return $afterSave;
    }
    
}
