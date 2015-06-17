<?php

class productos extends Controller{    
    private $mdlModel=null;

    function __construct(){
        $this->mdlModel = $this->loadModel("mdlproductos");
    }
    public function index($v=0){  
        $lista = $this->mdlModel->consultar();  
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

    public function eliminarProducto($idProducto){
            $this->mdlModel->__SET('idProducto',$idProducto);
            $this->mdlModel->eliminarProducto();
        header('location: ' . URL . 'productos/index');
    }

    public function editarProductos(){
        if (isset($_POST["btnModificarProducto"])) {
            $this->mdlModel->__SET('nombreProducto',$_POST["txtNombreProducto"]);
            $this->mdlModel->__SET('estado',$_POST["txtEstado"]);
            $this->mdlModel->__SET('existencias',$_POST["txtExistencias"]);
            $this->mdlModel->__SET('fabricante',$_POST["txtFabricante"]);
            $this->mdlModel->__SET('descripcion',$_POST["txtDescripcion"]);
            $this->mdlModel->__SET('idProducto',$_POST["txtId"]);
            $this->mdlModel->editarProductos();
            
        }
    }

}
