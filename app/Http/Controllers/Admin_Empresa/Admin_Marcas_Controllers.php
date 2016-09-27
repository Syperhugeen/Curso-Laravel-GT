<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\MarcaRepo;
use Illuminate\Http\Request;
use App\Managers\Users\user_admin_crear;



class Admin_Marcas_Controllers extends Controller
{

  protected $MarcaRepo;

  public function __construct(MarcaRepo $MarcaRepo)
  {
    $this->MarcaRepo = $MarcaRepo;
  }

  //home admin User
  public function get_admin_marcas(Request $Request)
  { 
    $marcas = $this->MarcaRepo->getMarcasAll($Request);

    return view('admin.marcas.marcas_home', compact('marcas'));
  }

  //get Crear admin User
  public function get_admin_marcas_crear()
  {  
    return view('admin.marcas.marcas_crear');
  }

  //set Crear admin User
  public function set_admin_marcas_crear(Request $Request)
  {     
     //me traigo la funcion del repositorio UserRepo   
     $this->MarcaRepo->setMarcaAdmin($Request);

     return redirect()->route('get_admin_marcas')->with('alert', 'Marca Creado Correctamente');
    
  }

  //get edit admin marca
  public function get_admin_marcas_editar($id)
  {
    $marca = $this->MarcaRepo->find($id);

    return view('admin.marcas.marcas_editar',compact('marca'));
  }

  //set edit admin marca
  public function set_admin_marcas_editar($id,Request $Request)
  {
    $marca = $this->MarcaRepo->find($id);

    $this->MarcaRepo->setMarcaAdminEdit($marca,$Request); 

    return redirect()->route('get_admin_marcas')->with('alert', 'Marca Editado Correctamente');  
  }

  
}