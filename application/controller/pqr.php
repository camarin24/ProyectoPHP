<?php
class pqr extends Controller
{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlpqr");
    }
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/pqr/header.php';
        require APP . 'view/pqr/index.php';
        require APP . 'view/_templates/pqr/footer.php';
    }
   
        public function agregarProducto()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btnRegistrarProducto"])) {
            // do addSong() in model/model.php
            $this->mdlModel->__SET('nombreProducto',$_POST["txtNombreProducto"]);
            $this->mdlModel->__SET('estado',$_POST["txtEstado"]);
            $this->mdlModel->__SET('existencias',$_POST["txtExistencias"]);
            $this->mdlModel->__SET('fabricante',$_POST["txtFabricante"]);
            $this->mdlModel->__SET('descripcion',$_POST["txtDescripcion"]);
            $this->mdlModel->__SET('url',$_POST["txtURL"]);
            $this->mdlModel->agregarProducto();
        }

        // where to go after song has been added
        header('location: ' . URL . 'productos/index');
    }
}
