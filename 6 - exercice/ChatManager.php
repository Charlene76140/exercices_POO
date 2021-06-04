<?php
    class ChatManager{
        private PDO $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;dbname=atelier_bdd', 'root', '');
        }

        public function getChats(){
            $response = $this->db->query("SELECT * FROM chat");
            $result = $response->fetchAll(PDO :: FETCH_ASSOC);
            foreach($result as $key=>$chat){
                $result[$key] = new Chat($chat);
            }
            return $result;
        }

        public function addChat(Chat $chat){
            $query = $this->db->prepare("INSERT INTO chat(nom,age,sexe, couleur) VALUES(:nom, :age, :sexe, :couleur)");
            $query->execute([
                "nom" => $chat->getNom(),
                "age" => $chat->getAge(),
                "sexe"=> $chat->getSexe(),
                "couleur"=>$chat->getCouleur()
            ]);
        }
    }
?>