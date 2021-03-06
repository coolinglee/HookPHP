<?php
class Hook_IndexController extends AbstractController
{
    public function init()
    {
        parent::init();
        $this->model = new Hook\IndexModel($this->getRequest()->getParam('id'));
    }
    
    public function GETAction()
    {
        $data = $this->model->get();
        foreach ($data as &$v) {
            $v['date_add'] = date('Y-m-d H:i:s', $v['date_add']);
            $v['date_upd'] = date('Y-m-d H:i:s', $v['date_upd']);
        }
        return $this->send($data);
    }
    
    public function POSTAction()
    {
        return $this->send($this->model->create());
    }
    
    public function PUTAction()
    {
        return $this->send($this->model->update());
    }
    
    public function DELETEAction()
    {
        return $this->send($this->model->delete());
    }
}