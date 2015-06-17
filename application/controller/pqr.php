<?php
class pqr extends Controller{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlpqr");

    } 


    public function index(){
       $listapqr = $this->mdlModel->consultar();
        require APP . 'view/_templates/pqr/header.php';
        require APP . 'view/pqr/index.php';
        require APP . 'view/_templates/pqr/footer.php';
    }
   
        public function agregarPqr(){
        // if we have POST data to create a new song entry
        if (isset($_POST["btnPQR"])) {
            // do addSong() in model/model.php
            $this->mdlModel->__SET('tipoPqr',$_POST["txtTipoPqr"]);
            $this->mdlModel->__SET('titulo',$_POST["txtTitulo"]);
            $this->mdlModel->__SET('categoria',$_POST["txtCategoria"]);
            $this->mdlModel->__SET('descripcion',$_POST["txtDescripcion"]);
            $this->mdlModel->agregarPqr();
        }
        header('location: ' . URL . 'pqr/index');
    }

    public function eliminarPqr($idPqr){
            $this->mdlModel->__SET('idPqr',$idPqr);
            $this->mdlModel->eliminarPqr();
        header('location: ' . URL . 'pqr/index');
    }
}
