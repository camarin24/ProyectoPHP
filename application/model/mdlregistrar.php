<?php 
class mdlregistrar
{
    private $db=null;

    private $nombre;
    private $apellido;
    private $nombreUsuario;
    private $contrasenia;
    private $preguntaSeguridad;
    private $tipoUsuario;
    private $respuestaSeguridad;
    function __construct($db){
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
    // public function getAllSongs()
    // {
    //     $sql = "SELECT id, artist, track, link FROM song";
    //     $query = $this->db->prepare($sql);
    //     $query->execute();

    //     // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
    //     // core/controller.php! If you prefer to get an associative array as the result, then do
    //     // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
    //     // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
    //     return $query->fetchAll();
    // }
     public function addUser()
    {
        $sql = "INSERT INTO usuarios (nombre, apellido, nombreUsuario,contrasenia,preguntaSeguridad,tipoUsuario,respuestaSeguridad) VALUES (?,?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);

        $query->bindValue(1,$this->__GET('nombre'));
        $query->bindValue(2,$this->__GET('apellido'));
        $query->bindValue(3,$this->__GET('nombreUsuario'));
        $query->bindValue(4,$this->__GET('contrasenia'));
        $query->bindValue(5,$this->__GET('preguntaSeguridad'));
        $query->bindValue(6,$this->__GET('tipoUsuario'));
        $query->bindValue(7,$this->__GET('respuestaSeguridad'));
        $query->execute();
    }


    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
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

 ?>