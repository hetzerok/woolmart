<?php
class WoolCategories extends modResource {
    public $showInContextMenu = true;
    
    function __construct(xPDO & $xpdo) {
        parent :: __construct($xpdo);
        $this->set('class_key','WoolCats');
    }
    
    public static function getControllerPath(xPDO &$modx) {
        return $modx->getOption('woolmart.core_path',null,$modx->getOption('core_path').'components/woollmart/').'controllers/';
    }
    
    public function getContextMenuText() {
        $this->xpdo->lexicon->load('woolmart:category');
        return array(
            'text_create' => $this->xpdo->lexicon('woolmart.category_create'),
            'text_create_here' => $this->xpdo->lexicon('woolmart.category_create_here'),
        );
    }
    
    public function getResourceTypeName() {
        $this->xpdo->lexicon->load('woolmart:category');
        return $this->xpdo->lexicon('woolmart.category');
    }

}