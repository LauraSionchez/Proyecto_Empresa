@include('layouts.modal')

      <div class="mmodal-dialog modal-dialog-scrollable" tabindex="-1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ __('Tipo de Documento') }}</h5>
            </div>
              @include('layouts.danger')
            <div class="modal-body">
              <div class="container">
                    <form class="row g-3" method="POST" action="{{ route('Document.update') }}" role="form">
                            @csrf
                                <input type="hidden" value="{{ $id->id }}" name="id">

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Nomeclatura" id="codigo" name="codigo" maxlength="3" value="{{ $id->codigo }}">
                                </div>

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" value="{{ $id->name }}">
                                </div>

                                <div class="mb-4">
              
                                  <input class="form-control" placeholder="Descripcion" name="description" id="description" value="{{ $id->description  }}"></input>
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  <div class="form-group">
                                      <div class="input-group">

                                        {{ Form::button('Guardar', ["type"=>"submit", 'class'=>'btn btn-primary'] ) }}
                                        <div>                               
                                            &nbsp;
                                            &nbsp; 
                                        </div>
                                        {{ Form::button('Atras', ["type"=>"reset", 'class'=>'btn btn-secondary'] ) }}
                                        
                                      </div>
                                  </div>
                                  <div align="center">
                   
                                     @if (session('status')) 
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                     @endif

                               </div>
                            </div>
            </form>

          </div>

        </div>
        
      </div>
    </div>
  </div>
    
         