<?php 

class sesion extends Controller
{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlsesion");
    } 

    public function index()
    {
       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/sesion/header.php';
        require APP . 'view/sesion/index.php';
        require APP . 'view/_templates/sesion/footer.php';
    }

    public function addUser1()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btnIngresar"])) {
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('contrasenia',$_POST["txtContrasenia"]);
            $flag= $this->mdlModel->addUser1();

            if($flag != false){
                $_SESSION['idUsuario']= $flag['idUsuario'];
                $_SESSION['nombre']= $flag['nombreUsuario'];
                $_SESSION['tipoUsuario']= $flag['tipoUsuario'];
                header('location: '.URL.'productos/index');
            }else{
                echo '<script language="javascript">alert("Datos incorrectos");</script>'; 
            }
        }
    }


    public function recuperar(){
        if (isset($_POST["btnRecuperar"])){
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('preguntaSeguridad',$_POST["txtPregunta"]);
            $this->mdlModel->__SET('respuestaSeguridad',$_POST["txtRespuesta"]);
            $flag=$this->mdlModel->recuperar();
            if($flag != false){
                $this->mdlModel->nuevoContrasenia();
                header('location: '.URL.'sesion/index');
            }
            
        }
    }

}

 ?>