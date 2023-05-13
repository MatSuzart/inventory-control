<?php
class homeController extends Controller {

    private $user;

    public function __construct(){
        parent::__construct();

        $this->user= new Users();
        if(!$this->users->checkLogin()){
            header("Location:".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $data = array();
        $p = new Products();

        $data['list'] = $p->getProducts();

        $this->loadTemplate('home', $data);
    }

    public function add(){
        $data = array();
        $p= new Products();

        if(!empty($_POST['cod'])){
            $cod = $_POST['cod'];
            $cod = $_POST['name'];
            $cod = $_POST['price'];
            $cod = $_POST['quantity'];
            $cod = $_POST['min_quantity'];
        }

        $p->addProduct($cod, $name, $price, $quantity, $min_quatity){

        }

        $this->loadTemplate('add', $data);
    }

    public function edit($id){
        $data = array();
        $p= new Products();


        if(!empty($_POST['cod'])){
            $cod = $_POST['cod'];
            $cod = $_POST['name'];
            $cod = $_POST['price'];
            $cod = $_POST['quantity'];
            $cod = $_POST['min_quantity'];
        }

        $p->editProduct($cod, $name, $price, $quantity, $min_quatity,$id){


        $data['info'] = $p->getProduct($id);

    $this->loadTemplate('edit', $data);
}