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
    private $Estado;

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

    /**
     * Get all songs from database
     */
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

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function agregarProducto()
    {
        $sql = "INSERT INTO productos (nombreProducto, existencias,fabricante,descripcion,url) VALUES (?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$this->__GET('nombreProducto'));
        $query->bindValue(2,$this->__GET('existencias'));
        $query->bindValue(3,$this->__GET('fabricante'));
        $query->bindValue(4,$this->__GET('descripcion'));
        $query->bindValue(5,$this->__GET('url'));

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
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

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
}
