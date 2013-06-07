<?php
class WoolCategoriesCreateManagerController extends ResourceCreateManagerController {
    public function getLanguageTopics() {
        return array('woolmart','woolmart:category');
    }
}