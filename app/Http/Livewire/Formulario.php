<?php

namespace App\Http\Livewire;

use App\Models\DetalleModel;
use App\Models\TipoModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Formulario extends Component
{
    public  $detalle, $id_tipo;
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function render()
    {
        $tipos = TipoModel::where('estado',1)->get();
        $detalles = DB::table('detalle')
        ->join('tipo','detalle.id_tipo','=','tipo.id')
        ->select('tipo.tipo','detalle.*')
        ->where('detalle.estado',1)->paginate(3);
        return view('livewire.formulario',compact('tipos','detalles'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'detalle' => 'required|min:3',
        'id_tipo' => 'required',
    ];

    protected $messages = [
        'detalle.required' => 'El Campo es Requerido',
        'detalle.min' => 'El Campo es de 3 Caracteres Minimo',
        'id_tipo.required' => 'El Campo es Requerido',
    ];

    public function save(){
        $this->validate();
        DetalleModel::create([
            'detalle' => $this->detalle,
            'id_tipo' => $this->id_tipo,
            'estado' => 1
        ]);
        $this->reset();
        session()->flash('message', 'Guardado Correctamente.');
    }
}
