<?php 

class sesion extends Controller
{   
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlsesion");
    } 

    public function index() 
    {
        // $listaSesion = $this->mdlModel->consultar();
       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/sesion/header.php';
        require APP . 'view/sesion/index.php';
        require APP . 'view/_templates/sesion/footer.php';
    }

        public function consultar(){
        $sql = "SELECT * FROM usuarios";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
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
                header('location: '.URL.'sesion/index');
            }
        }
    }
    public function recuperar(){
        if (isset($_POST["btnRecuperar"])){
            $this->mdlModel->__SET('nombreUsuario',$_POST["txtNombreUsuario"]);
            $this->mdlModel->__SET('preguntaSeguridad',$_POST["txtPregunta"]);
            $this->mdlModel->__SET('respuestaSeguridad',$_POST["txtRespuesta"]);
            $bandera=$this->mdlModel->recuperar(); 
            if($bandera != false){ 
                $this->mdlModel->__SET('nuevaContrasenia',$_POST["txtNuevaContrasenia"]);
                $this->mdlModel->recuperarContrasenia($bandera);
                header('location: '.URL.'sesion/index');
            }else{
                echo '<script language="javascript">alert("Datos Erroneos,intentelo de nuevo");</script>'; 
            }
            
        }
    }

}

 ?>