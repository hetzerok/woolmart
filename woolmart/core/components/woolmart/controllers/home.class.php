<?php
class WoolMartHomeManagerController extends WoolMartManagerController {
    public function process(array $scriptProperties = array()) {
 
    }
    public function getPageTitle() { return $this->modx->lexicon('doodles'); }
    public function loadCustomCssJs() {
        //$this->addJavascript($this->woolmart->config['jsUrl'].'mgr/widgets/woolmart.grid.js');
        $this->addJavascript($this->woolmart->config['jsUrl'].'mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->woolmart->config['jsUrl'].'mgr/sections/index.js');
    }
    public function getTemplateFile() { return $this->woolmart->config['templatesPath'].'mgr/home.tpl'; }
}