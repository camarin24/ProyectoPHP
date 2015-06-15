<?php 

class sesion extends Controller
{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlsesion");
    }
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/sesion/header.php';
        require APP . 'view/sesion/index.php';
        require APP . 'view/_templates/sesion/footer.php';
    }

    // /**
    //  * ACTION: addSong
    //  * This method handles what happens when you move to http://yourproject/songs/addsong
    //  * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
    //  * directs the user after the form submit. This method handles all the POST data from the form and then redirects
    //  * the user back to songs/index via the last line: header(...)
    //  * This is an example of how to handle a POST request.
    //  */
    /*public function addUser()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btnIngresar"])) {
            // do addSong() in model/model.php
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('contrasenia',$_POST["txtContrasenia"]);
            $resultado = $mdlModel->addUser();
            if($resultado != false)
            {
                if(($resultado["contrasenia"]) == trim($_POST["txtContrasenia"])){
                header('location: ' . URL . 'productos/index');
            }else{
                $mensaje = "La clave no es correcta";
            }
        }else{
            $mensaje = "El usuario no es correcto";
        }
        }

    }*/

    public function addUser1()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btnIngresar"])) {
            // do addSong() in model/model.php
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('contrasenia',$_POST["txtContrasenia"]);
            $resultado = $mdlModel->addUser1();
            if($resultado == 1)
            {
                 echo '<script language="javascript">alert("Datos correctos");</script>'; 
                header('location: ' . URL . 'productos/index');
            }else{
                echo '<script language="javascript">alert("Datos incocorrectos");</script>'; 
            }
        }
    }


        // where to go after song has been added

    // /**
    //  * ACTION: deleteSong
    //  * This method handles what happens when you move to http://yourproject/songs/deletesong
    //  * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
    //  * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
    //  * redirects the user back to songs/index via the last line: header(...)
    //  * This is an example of how to handle a GET request.
    //  * @param int $song_id Id of the to-delete song
    //  */
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