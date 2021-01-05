@include('layouts.modal')

<div class="modal-dialog modal-xl" tabindex="-1" id="crear">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <br><h5 class="modal-title">{{ __('New Employee') }}</h5><br>
      </div>
           @include('layouts.danger')
      <div class="modal-body">
        <div class="container">

                         <form onsubmit="document.getElementById('type_doc_ci').value=document.getElementById('type_doc').value+'-'+document.getElementById('ci').value" class="row g-3 needs-validation" novalidate method="POST" action="{{ route('Employee.store') }}" role="form">
                            @csrf

                                {{-- Select --}}

                              <div class="col-auto">
                                <input type="hidden" value="" id="type_doc_ci" name="type_doc_ci" />
                                <select name="type_doc" id="type_doc" class="multiselect">
                                  <option value="">{{ __('Select...') }}</option>           
                                    @foreach($documentos as $documento)     
                                      <option value="{{ $documento->id }}">{{ $documento->codigo }}</option>
                                    @endforeach    
                                </select>
                              </div>
                              

                                  {{-- resto del formulario --}}
                                     

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('identity card') }}" id="ci" name="ci" maxlength="10" value="{{ old ('ci')}}" required>
                                </div>

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('First Name') }}" name="first_name_1" maxlength="40" id="first_name_1" value="{{ old ('first_name_1')}}" required>
                                </div>

                                <div class="col-auto">
                                    <input class="form-control" placeholder="{{ __('Second Name') }}" id="first_name_2" name="first_name_2" maxlength="40" value="{{ old ('first_name_2')}}" required>
                                </div>

                                <div class="col-auto">
                                    <input class="form-control" placeholder="{{ __('Last Name') }}" id="last_name_1" name="last_name_1" maxlength="40" value="{{old('last_name_1')}}" required>
                                </div>

                                <div class="col-auto"> 
                                    <input class="form-control" placeholder="{{ __('Second Surname') }}" id="last_name_2" name="last_name_2" maxlength="40" value="{{old('last_name_2')}}" required>
                                </div>

                                <div class="col-auto"> 
                                    <input type="date" class="form-control" placeholder="{{ __('Birthdate') }}" id="fech_nac" name="fech_nac" value="{{old('fech_nac')}}" required>
                                </div>  

                                <div class="col-auto"> 
                                    <input type="date" class="form-control" placeholder="{{ __('Date of Admission') }}" id="fech_ingre" name="fech_ingre" value="{{old('fech_ingre')}}" required>
                                </div>   

                                <div class="col-auto">  
                                    <input type="telf" class="form-control" placeholder="{{ __('Phone: +582121234567') }}" id="phone" name="phone" maxlength="15" value="{{old('phone')}}" required>
                                </div>   

                                <div class="col-auto">
                                    <input type="telf" class="form-control" placeholder="{{ __('Email: example@example.com') }}" id="email" name="email" value="{{old('email')}}" required> 
                                </div>   

                                    {{-- checkbook --}}

                                <div class="col-auto">
                                    <label class="form-check-label" for="inlineRadio1" name="sexo">{{ __('Sex:') }}</label> <br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="M" name="sexo" value="M">
                                        <label class="form-check-label" for="inlineRadio1">{{ __('Male') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="F" name="sexo" value="F">
                                        <label class="form-check-label" for="inlineRadio2">{{ __('Female') }}</label>
                                    </div>  
                                </div>
                                
                                {{--  Botones --}}

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                                  <div class="form-group">
                                      <div class="input-group">

                                        {{ Form::button('Save', ["type"=>"submit", 'class'=>'btn btn-dark'] ) }}
                                        <div>                               
                                            &nbsp;
                                            &nbsp; 
                                            &nbsp;
                                        </div>
                                        {{ Form::button('Close', ["type"=>"", 'class'=>'btn btn-secondary'] ) }}
                                        
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