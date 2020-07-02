<?php
    require_once "{$_SERVER['DOCUMENT_ROOT']}/MyProject/TesteCrudFinal/Connection/ConnectionDB.php";
    class Crud extends ConnectionDB
    {

        private $crud;
        private $contador;
        #Preparação da sql
        private function PrepareStatements ($Query, $Paramentros )
        {
            $this->countParametros($Paramentros);
            $this->crud=$this->getConnectionDB()->prepare($Query);

            if($this->contador > 0){
                for($i = 1; $i<= $this->contador;$i++){
                    $this->crud->bindValue($i, $Paramentros[$i-1]);
                }
            }
            $this->crud->execute();
        }
        #Contagem de parametos
        private function countParametros($Paramentros){
            $this->contador=count($Paramentros);
        }
        #inserindo no banco da dados
        public function insertDB($tabela, $condicoes, $parametros)
        {
            $this->PrepareStatements("insert into {$tabela}  values ({$condicoes})", $parametros);
            return $this->crud;
        }
        #Seleção do banco de dados
        public function selectBD($campos, $tabela, $condicoes, $parametros)
        {
            $this->PrepareStatements("select {$campos} from {$tabela} {$condicoes}", $parametros);
            return $this->crud;
        }
        #delete dados do banco de dados
        public function deleteDB($tabela, $condicoes, $parametros){
            $this->PrepareStatements("delete from {$tabela} where {$condicoes}", $parametros);
            $this->crud;
        }
        #editar dados do banco de dados
        public function UpdateDB($tabela, $set, $condicoes, $parametros){
            $this->PrepareStatements("update {$tabela} set {$set} where {$condicoes}", $parametros);
            $this->crud;
            print_r($this->crud);
        }

    }
?>