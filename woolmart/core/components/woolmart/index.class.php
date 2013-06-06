<?php
require_once dirname(__FILE__) . '/model/woolmart/woolmart.class.php';
abstract class WoolMartManagerController extends modExtraManagerController {
    
    public $woolmart;
    public function initialize() {
        $this->woolmart = new WoolMart($this->modx);
 
        $this->addCss($this->woolmart->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->woolmart->config['jsUrl'].'mgr/woolmart.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            WoolMart.config = '.$this->modx->toJSON($this->woolmart->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('woolmart:default');
    }
    public function checkPermissions() { return true;}
}
class IndexManagerController extends WoolMartManagerController {
    public static function getDefaultController() { return 'home'; }
}
