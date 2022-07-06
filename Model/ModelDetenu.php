<?php
    class ModelDetenu extends Connect{
        public function listDetenu(){
            $db = $this->getDb();
            $req = $db->query('SELECT `id_detenu`, `firstname`, `lastname`, `age`, `residence`, `activity_area`, `phone`, `email`, `photo`, `photo_simple`, `delit`, `quality`, `defaut` FROM `detenus` ORDER BY `id_detenu` ASC ');

            $detenus = [];
            while($det = $req->fetch(PDO::FETCH_ASSOC)){
                $detenus[] = new Detenu($det);
            }
            return $detenus;
        }
        public function select($id){
            $db = $this->getDb();
            $req = $db->prepare('SELECT `id_detenu`, `firstname`, `lastname`, `age`, `residence`, `activity_area`, `phone`, `email`, `photo`, `photo_simple`, `delit`, `quality`, `defaut` FROM `detenus` WHERE `id_detenu` = :id');
            $req->bindParam(':id', $id['id_detenu'], PDO::PARAM_INT); 
            $req->execute();

            $data = $req->fetch(PDO::FETCH_ASSOC);
            $detenu = new Detenu($data);
            return $detenu; 
        }
    }