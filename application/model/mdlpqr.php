<?php 
class mdlpqr 
{
	/**
     * @param object $db A PDO database connection
     */
    private $db=null;
    private $tipoPqr;
    private $titulo;
    private $categoria;
    private $descripcion;

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function __GET($variable){
        return $this->$variable;
    }

    public function __SET($variable,$valor){
        $this->$variable=$valor;
    } 

    public function agregarPqr(){
        $sql = "INSERT INTO pqr (tipoPqr, titulo, categoria,descripcion,idUsuario) VALUES (?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('tipoPqr'));
        $query->bindValue(2,$this->__GET('titulo'));
        $query->bindValue(3,$this->__GET('categoria'));
        $query->bindValue(4,$this->__GET('descripcion'));
        $query->bindValue(5,$__SESSION["idUsuario"]);//dfgfdgfdgdfgdfgdfgdfg

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
    }

    public function consultar(){
        $sql = "SELECT * FROM pqr";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }

    public function eliminarPqr(){
        $sql = "DELETE FROM pqr WHERE idPqr = ?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('idPqr'));
        $query->execute();
    }

}
?>