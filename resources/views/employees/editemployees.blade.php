@include('layouts.modal')

<div class="modal-dialog modal-xl" tabindex="-1" id="crear">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ __('New Employee') }}</h5><br>
      </div>
           @include('layouts.danger')
      <div class="modal-body">
        <div class="container">

                         <form onsubmit="document.getElementById('type_doc_ci').value=document.getElementById('type_doc').value+'-'+document.getElementById('ci').value" class="row g-3" method="POST" action="{{ route('Employee.update') }}" role="form">
                            @csrf

                                {{-- Select --}}

                              <div class="col-auto">
                                <input type="hidden" value="" id="type_doc_ci" name="type_doc_ci" />
                                <select name="type_doc" id="type_doc" class="multiselect">
                                  <option value="">{{ __('Select...') }}</option>           
                                    @foreach($documentos as $documento)     
                                      <option value="{{ $documento->id  }}">{{ $documento->codigo }}</option>
                                    @endforeach    
                                </select>
                              </div>
                              

                                  {{-- resto del formulario --}}
                                     
                                <input type="hidden" value="{{ $id->id }}" name="id">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('identity card') }}" id="ci" name="ci" maxlength="10" value="{{ $id->ci }}">
                                </div>

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('First Name') }}" name="first_name_1" maxlength="40" id="first_name_1" value="{{ $id->first_name_1 }}">
                                </div>

                                <div class="col-auto">
                                    <input class="form-control" placeholder="{{ __('Second Name') }}" id="first_name_2" name="first_name_2" maxlength="40" value="{{ $id->first_name_2 }}"></input>
                                </div>

                                <div class="col-auto">
                                    <input class="form-control" placeholder="Primer Apellido" id="last_name_1" name="last_name_1" maxlength="40" value="{{ $id->last_name_1 }}"></input> 
                                </div>

                                <div class="col-auto"> 
                                    <input class="form-control" placeholder="Segundo Apellido" id="last_name_2" name="last_name_2" maxlength="40" value="{{ $id->last_name_2 }}"></input> 
                                </div>

                                <div class="col-auto">
                                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="fech_nac" name="fech_nac" value="{{ $id->fech_nac }}"></input>
                                </div>  

                                <div class="col-auto"> 
                                    <input type="date" class="form-control" placeholder="Fecha de Ingreso" id="fech_ingre" name="fech_ingre" value="{{ $id->fech_ingre }}"></input>
                                </div>   

                                <div class="col-auto">  
                                    <input type="telf" class="form-control" placeholder="+584121234567" id="phone" name="phone" maxlength="15" value="{{ $id->phone }}"></input>
                                </div>   

                                <div class="col-auto">
                                    <input type="telf" class="form-control" placeholder="example@example.com" id="email" name="email" value="{{$id->email }}"></input>  
                                </div>   

                                    {{-- checkbook --}}

                                <div class="col-auto">
                                    <label class="form-check-label" for="inlineRadio1" name="sexo" value="{{ $id->sexo }}">{{ __('Sexo:') }}</label> <br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="M" name="sexo" value="M">
                                        <label class="form-check-label" for="inlineRadio1">{{ __('Masculino') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="F" name="sexo" value="F">
                                        <label class="form-check-label" for="inlineRadio2">{{ __('Femenino') }}</label>
                                    </div>  
                                </div>
                                
                                {{--  Botones --}}

                                <div class="d-grid gap-2 d-md-flex justify-content" >
                                  <div class="form-group">
                                      <div class="input-group">

                                        {{ Form::button('Guardar', ["type"=>"submit", 'class'=>'btn btn-primary me-md-2'] ) }}
                                        <div>                               
                                            &nbsp;
                                            &nbsp; 
                                            &nbsp;
                                        </div>
                                        {{ Form::button('Cerrar', ["type"=>"", 'class'=>'btn btn-primary'] ) }}
                                        
                                      </div>
                                  </div>
                                  <div align="center">
                   
                                     @if (session('status')) 
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                     @endif
                                  </div>
                            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>