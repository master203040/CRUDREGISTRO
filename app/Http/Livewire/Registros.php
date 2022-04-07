<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registro;

class Registros extends Component
{
    public $registros,$nombre,$imagen,$cedula,$correo,$telefono,$observaciones,$id_registro;
    public $modal = false;

    public function render()
    {
        $this->registros=Registro::all();
        return view('livewire.registros');
    }
    public function crear()
    {
        //$this->limpiar();
        $this->abrilModal();
    }
    public function abrilModal()
    {
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->id_registro="";
        $this->nombre="";
        $this->imagen="";
        $this->cedula="";
        $this->correo="";
        $this->telefono="";
        $this->observaciones="";
    }
    public function editar($id)
    {
        $registros= Registro::findOrFail($id);
        $this->id_registro = $id;
        $this->nombre = $registros->nombre;
        $this->imagen= $registros->imagen;
        $this->cedula= $registros->cedula;
        $this->correo= $registros->correo;
        $this->telefono= $registros->telefono;
        $this->observaciones= $registros->observaciones;
        $this->abrilModal();
    }

    public function borrar($id)
    {
        Registro::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Registro::updateOrCreate(['id'=>$this->id_registro],
            [
                'nombre' => $this->nombre,
                'imagen' => $this->imagen,
                'cedula' => $this->cedula,
                'correo' => $this->correo,
                'telefono' => $this->telefono,
                'observaciones' => $this->observaciones,

            ]);

        session()->flash('message',
        $this->id_registro ? '¡Actualización exitosa!' : '¡Alta Exitosa!');

        $this->cerrarModal();
        $this->limpiarCampos();
    }

}
