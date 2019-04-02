<?php

    /**
     * Test Model [ Sample ]
     */

    class TestModel extends Dmodel {

        public $table = 'category';

        /**
         * @desc    Constructor making Call Class new Database() 
         * @desc    From Extended Dmodel 
         * @desc    So You Can use $this->db  Like That
         */
        function __construct() {
            parent::__construct();
        }

        /**
         * @desc    Get All Categories ...
         */
        public function All() {

            return ($this->db->select($this->table));
        }

        /**
         * @desc    Get Categorie By Id
         */
        public function findById($id) {

            try {

                $sql = "SELECT * FROM ".$this->table." where id=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
    
                return ($stmt->fetch($this->db::FETCH_ASSOC));
                
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                return;
            }
           
        }

    }

