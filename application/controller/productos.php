<?php

class productos extends Controller{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlproductos");
    }
    public function index($v=0){
        if($v == 1){
            echo "se registro";
        }
        $lista = $this->mdlModel->consultar();
        // getting all songs and amount of songs
        /*$songs = $this->mdlModel->getAllSongs();
        $amount_of_songs = $this->mdlModel->getAmountOfSongs();*/

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/productos/header.php';
        require APP . 'view/productos/index.php';
        require APP . 'view/_templates/productos/footer.php';
    }

    public function agregarProducto(){
        $v = "0";
        // if we have POST data to create a new song entry
        if (isset($_POST["btnRegistrarProducto"])) {

            $this->mdlModel->__SET('nombreProducto',$_POST["txtNombreProducto"]);
            $this->mdlModel->__SET('estado',$_POST["txtEstado"]);
            $this->mdlModel->__SET('existencias',$_POST["txtExistencias"]);
            $this->mdlModel->__SET('fabricante',$_POST["txtFabricante"]);
            $this->mdlModel->__SET('descripcion',$_POST["txtDescripcion"]);
            
            $target_dir = "upload/";

            $target_file = $target_dir . basename($_FILES["txtURL"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

                if (move_uploaded_file($_FILES["txtURL"]["tmp_name"], $target_file)) {
                    $this->mdlModel->__SET('url', $target_file);
                
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            


            if($this->mdlModel->agregarProducto()){
                $v = "1";
            }
        }

        // where to go after song has been added
        header('location: ' . URL . 'productos/index/'.$v.'');
    }

    // public function eliminarProductos(){
    //     // if we have POST data to create a new song entry
    //     if (isset($_POST["btnEliminarProducto"])) {
    //         // do addSong() in model/model.php
    //         $this->mdlModel->eliminarProducto();
    //         $this->mdlModel->__SET('nombreProducto',$_POST["txtNombreProducto"]);
    //         $this->mdlModel->__SET('existencias',$_POST["txtExistencias"]);
    //         $this->mdlModel->__SET('fabricante',$_POST["txtFabricante"]);
    //         $this->mdlModel->__SET('descripcion',$_POST["txtDescripcion"]);
    //         $this->mdlModel->__SET('url',$_POST["txtURL"]);
    //     }

    //     // where to go after song has been added
    //     header('location: ' . URL . 'productos/index');
    // }
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
