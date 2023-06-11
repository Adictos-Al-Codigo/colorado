<div>
    <form action="" wire:submit.prevent="save">
        <div class="mb-3">
            <br><br>
            <label for="formGroupExampleInput" class="form-label">Detalle</label>
            <input type="text" class="form-control" id="formGroupExampleInput" wire:model="detalle" placeholder="Ingresa el Detalle">
            @error('detalle')              
            <div class="alert alert-warning" style="margin-top: 5px" role="alert">
            <span class="error">{{ $message }}</span>
            </div> 
            @enderror

        </div>
          <div class="mb-3">
            <label>Tipo</label>
            <select wire:model="id_tipo" class="form-control select2" data-bs-toggle="select2"  style="cursor: pointer ">
                <option>Selecciona</option>
                @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>    
                @endforeach     
            </select>
            @error('id_tipo')              
            <div class="alert alert-warning" style="margin-top: 5px" role="alert">
            <span class="error">{{ $message }}</span>
            </div> 
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <div style="position: relative; top: 20px">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Detalle</th>
              <th scope="col">Tipo</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($detalles as $detalle)
              <tr>
                  <th scope="row">{{$detalle->id}}</th>
                  <td>{{$detalle->detalle}}</td>
                  <td>{{$detalle->tipo}}</td>
                  <td>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-trash3-fill"></i>
                  </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$detalles->links()}}
      </div>
</div>
