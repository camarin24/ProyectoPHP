<?php 
class mdlpqr 
{
	/**
     * @param object $db A PDO database connection
     */
    private $db=null;

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */
    public function agregarPqr()
    {
        $sql = "INSERT INTO pqr (tipoPqr, titulo, categoria,descripcion,idUsuario) VALUES (?,?,?,?,?,1)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('tipoPqr'));
        $query->bindValue(2,$this->__GET('titulo'));
        $query->bindValue(3,$this->__GET('categoria'));
        $query->bindValue(4,$this->__GET('descripcion'));
        $query->bindValue(5,$this->__GET('idUsuario'));
        $query->bindValue(6,$this->__GET('url'));

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
    }

}
 ?>