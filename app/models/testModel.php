<?php

    /**
     * Test Model [ Sample ]
     */

    class TestModel extends Dmodel {

        public $table = 'testing_table';

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

            $sql = $sql = "SELECT * FROM ". $this->table ;
            $sql .= " WHERE deleted_at IS NULL ORDER BY id DESC LIMIT 0,10";

            $result = $this->db->select($sql);

            /** 
             * URL define in Config File to Current Website Link
             * @desc    /test/getcat/{id}   toGet More Information Details 
             */
            foreach($result as $key => $value) {
                $result[$key]["src"] = [
                    "url" =>  URL . "/test/getcat/" . $value["id"],
                    "method" => "GET",
                    "description" => "More Information"
                ];
                
                // $value["method"] = "GET";
                // echo $value["name"] . "<br>";
            }

            // die(print_r($result));
            return ($result);
        }

        /**
         * @desc    Get Categorie By Id
         */
        public function findById($id) {

            $sql = "SELECT * FROM ".$this->table." where id=:id";
            $data = [
                ":id" => $id
            ];

            return $this->db->select($sql, $data);

            // $stmt = $this->db->prepare($sql);
            // $stmt->bindParam(":id", $id);
            // $stmt->execute();
    
            // return ($stmt->fetch($this->db::FETCH_ASSOC));
        }
        
        /**
         * @desc    Insert Categorie By Id
         * @param data
         * @example data ["name" => $_POST['name'],"title" => $_POST['title']]
         */
        public function create($data) {
           return $this->db->insert($this->table, $data);
        }

        /**
         * @desc    Update Categorie By COnd
         * @param data 
         * @example data [ 'name'=> 'name', 'pass'=> 'pass' ]
         * @param cond = Condition "WHERE id = 1"
         */
        public function update($data, $cond) {
            return $this->db->update($this->table, $data, $cond);
        }

        /**
         * @desc    DELETE Categorie By Id
         */
        public function deleteById($id) {
            $cond = " id=${id}";
            // die("$cond");
            $table = $this->table;
            return $this->db->delete($table, $cond);
        }
        

    }

