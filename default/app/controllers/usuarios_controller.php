<?php
    Load:: models('usuarios');
class UsuariosController extends AppController{
    public function index ($nombres='') {
        View::template('principal');
        $this->listUsuarios = (new Usuarios)->getUsuarios($page=1);
    }
    public function registrar(){
        View::template('principal');
    }
    public function borrar($id){
        View::select(null);
    }
    public function guardar(){
        if(Input::hasPost('usuarios')){
        $usuario = new Usuarios(Input::post('usuarios'));
        if(!$usuario->create()){
            Flash::error('fallo el guardado');  
        }else{
            Flash::valid('operacion exitosa');
            Input::delete();
            return Redirect::to();
        } 
      }
    }
    public function editar($id){
        View::template('principal');
    }
}

