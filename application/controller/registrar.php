<?php 

class registrar extends Controller
{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlregistrar");
    }

    public function index()
    {
        require APP . 'view/_templates/sesion/header.php';
        require APP . 'view/registrar/index.php';
        require APP . 'view/_templates/sesion/footer.php';
    }

    public function addUser(){
        if (isset($_POST["btnRegistrar"])) {
            $this->mdlModel->__SET('nombre',$_POST["txtNombre"]);
            $this->mdlModel->__SET('apellido',$_POST["txtApellido"]);
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('contrasenia',$_POST["txtContrasenia"]);
            $this->mdlModel->__SET('preguntaSeguridad',$_POST["ddlPregunta"]);
            $this->mdlModel->__SET('tipoUsuario',$_POST["rdbGroupTipoP"]);
            $this->mdlModel->__SET('respuestaSeguridad',$_POST["txtRespuesta"]);
            $this->mdlModel->addUser();
            header('location: '.URL.'sesion/index');
        }
    }

    // public function deleteSong($song_id)
    // {
    //     // if we have an id of a song that should be deleted
    //     if (isset($song_id)) {
    //         // do deleteSong() in model/model.php
    //         $this->mdlModel->deleteSong($song_id);
    //     }

    //     // where to go after song has been deleted
    //     header('location: ' . URL . 'productos/index');
    // }

    //  /**
    //  * ACTION: editSong
    //  * This method handles what happens when you move to http://yourproject/songs/editsong
    //  * @param int $song_id Id of the to-edit song
    //  */
    // public function editSong($song_id)
    // {
    //     // if we have an id of a song that should be edited
    //     if (isset($song_id)) {
    //         // do getSong() in model/model.php
    //         $song = $this->mdlModel->getSong($song_id);

    //         // in a real application we would also check if this db entry exists and therefore show the result or
    //         // redirect the user to an error page or similar

    //         // load views. within the views we can echo out $song easily
    //         require APP . 'view/_templates/header.php';
    //         require APP . 'view/productos/edit.php';
    //         require APP . 'view/_templates/footer.php';
    //     } else {
    //         // redirect user to songs index page (as we don't have a song_id)
    //         header('location: ' . URL . 'productos/index');
    //     }
    // }
    
    // /**
    //  * ACTION: updateSong
    //  * This method handles what happens when you move to http://yourproject/songs/updatesong
    //  * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a song" form on songs/edit
    //  * directs the user after the form submit. This method handles all the POST data from the form and then redirects
    //  * the user back to songs/index via the last line: header(...)
    //  * This is an example of how to handle a POST request.
    //  */
    // public function updateSong()
    // {
    //     // if we have POST data to create a new song entry
    //     if (isset($_POST["submit_update_song"])) {
    //         // do updateSong() from model/model.php
    //         $this->mdlModel->updateSong($_POST["artist"], $_POST["track"],  $_POST["link"], $_POST['song_id']);
    //     }

    //     // where to go after song has been added
    //     header('location: ' . URL . 'productos/index');
    // }

    // /**
    //  * AJAX-ACTION: ajaxGetStats
    //  * TODO documentation
    //  */
    // public function ajaxGetStats()
    // {
    //     $amount_of_songs = $this->mdlModel->getAmountOfSongs();

    //     // simply echo out something. A supersimple API would be possible by echoing JSON here
    //     echo $amount_of_songs;
    // }

}

 ?>