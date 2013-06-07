<?php

require_once dirname(dirname(dirname(__FILE__))) . '/processors/mgr/categories/create.class.php';
require_once dirname(dirname(dirname(__FILE__))) . '/processors/mgr/categories/update.class.php';

class WoolCategories extends modResource {

    public $showInContextMenu = true;
    protected $extension;

    public function __construct(xPDO & $xpdo) {
        parent::__construct($xpdo);

        $fields = $this->xpdo->getFieldMeta('WoolCatExtension');
        unset($fields['id']);
        //$this->dataFields = array_keys($fields);
        //$xpdo->log(xPDO::LOG_LEVEL_ERROR,$xpdo->toJSON($fields));
        //var_dump(array_keys($fields));

        $aggregates = $this->xpdo->getAggregates('WoolCatExtension');
        $composites = $this->xpdo->getComposites('WoolCatExtension');
        //$this->dataRelated = array_merge(array_keys($aggregates), array_keys($composites));
        //$xpdo->log(xPDO::LOG_LEVEL_ERROR, $xpdo->toJSON(array_merge($aggregates, $composites)));
        //var_dump(array_merge(array_keys($aggregates), array_keys($composites)));
    }

    public static function getControllerPath(xPDO &$modx) {
        return $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woollmart/') . 'controllers/categories/';
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

    public function save($cacheFlag = null) {
        /*Это всё спорная хуйня*/
        $res = parent::save($cacheFlag);
        if (!is_object($this->extension)) {$this->loadExt();}
        $this->extension->set('id', parent::get('id'));
        $this->extension->set('producttemplate', 23);
	$this->extension->save($cacheFlag);
        return $res;
    }

    public function loadExt() {
        if (!is_object($this->extension) || !($this->extension instanceof WoolCatExtension)) {
            if (!$data = $this->xpdo->getObject('WoolCatExtension', parent::get('id'))) {
                $data = $this->xpdo->newObject('WoolCatExtension');
            }
            $this->extension = $data;
        }
    }

}