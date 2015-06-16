<?php

class mdlproductos
{
    /**
     * @param object $db A PDO database connection
     */
    private $db=null;
    private $idProducto;
    private $nombreProducto;
    private $existencias;
    private $fabricante;
    private $descripcion;
    private $url;
    private $estado;

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

    public function listarProductos()
    {
        $sql = "SELECT id, nombreProducto, estado, existencias,fabricante,descripcion,url FROM productos";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function agregarProducto()
    {
        $sql = "INSERT INTO productos (nombreProducto, estado, existencias,fabricante,descripcion,url) VALUES (?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('nombreProducto'));
        $query->bindValue(2,$this->__GET('estado'));
        $query->bindValue(3,$this->__GET('existencias'));
        $query->bindValue(4,$this->__GET('fabricante'));
        $query->bindValue(5,$this->__GET('descripcion'));
        $query->bindValue(6,$this->__GET('url'));

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
    }

    public function eliminarProducto()
    {
        $sql = "DELETE FROM Productos WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('id'));
        

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
    }


    public function updateSong()
    {
        $sql = "UPDATE Productos SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

     public function consultar()
    {
        $sql = "SELECT * FROM productos";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }


}
