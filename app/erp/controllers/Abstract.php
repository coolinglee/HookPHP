<?php
abstract class AbstractController extends Yaf\Controller_Abstract
{
    public function init()
    {
        $viewPath = '';
        if ($this->_request->module !== 'Index') {
            $viewPath = 'modules/'.$this->_request->module;
        }
        $this->_view->setScriptPath(APP_ROOT.'/'.$viewPath.'/views/'.APP_THEME.'/');

        $this->_view->assign(['title' => l('app.title'), 'keywords' => l('app.keywords'), 'description' => l('app.description')]);
    }
}