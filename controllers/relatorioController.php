<?php
class relatorioController extends Controller {
    public function__construct(){
        parent::__construct();

        $this->user = new User();
        if(!$this->user->checkLogin()){
            header("Location:".BASE_URL."login");
            exit;
        }

    }

    public function index(){
        $data = array();



        $this->loadTemplate('relatorio',$data)
    }
}