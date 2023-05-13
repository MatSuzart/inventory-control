<?php
    class loginController extends Controller {
        public function index(){
            $data = array(

                'msg'=>''

            );

            if(!empty($_POST['number'])){
                $unumber = $_POST['number'];
                $upass = $_POST['password'];

                $users = new User();

                if($users->verifyUser($number, $pass)){

                    $token = $users->createToken($number);
                    $_SESSION['token'] = $token;

                    header("Location:".BASE_URL);
                    exit;
                }else {
                    $data['msg'] = 'Numero e/ou senha errados'
                }
            }

            $this->loadView('login',$data);
        }

    }