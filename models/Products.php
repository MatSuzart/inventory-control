<?php 
    Class Products extends Model {

        public function getProducts(){
            $array = array();

            $sql = "SELECT * FROM products";
            $sql= $this->db->query($sql);

            if($sql->rowCount() >0){
                $array = $sql->fetchAll();
            }

            return $array;

        }


        public function verifyProduct($id){
            return true;
        }

        public function addProduct($cod, $name, $price, $quantity, $min_quatity){
            $sql = "INSERT INTO products (cod, name,price, quantity,min_quantity) VALUES
                (:cod, :name, :price, :quantity, :min_qunatity)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":cod", $cod);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":price", $price);
            $sql->bindValue(":quantity", $quantity);
            $sql->bindValue(":min_quantity", $min_quatity);
            $sql->excute();
        }else {
            return false;
        }

        public function editProduct($cod, $name, $price, $quantity, $min_quatity, $id){
            $sql = "UPDATE product SET cod=:cod, name= :name, price=:price, quantity:=qunatity
             WHERE id=:id";

                $sql = $this->db->prepare($sql);
                $sql->bindValue(":cod", $cod);
                $sql->bindValue(":name", $name);
                $sql->bindValue(":price", $price);
                $sql->bindValue(":quantity", $quantity);
                $sql->bindValue(":min_quantity", $min_quatity);
                $sql->bindValue(":id", $id);
                $sql->execute();
        }else {
            return false;
        }

        public function getProduct($id){

            $rray = array();


            $sql = "SELECT * FROM product WHERE id= :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(":d", $id);
            $sql->execute();

            if($sql->rowCount()>0){


                    $array = $sql->fetch();

            }
        }
    }