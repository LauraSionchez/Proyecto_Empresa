@include('layouts.modal')

<div class="mmodal-dialog modal-dialog-scrollable" tabindex="-1" id="crear">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ __('Create Document Type') }}</h5>
      </div>
          @include('layouts.danger')
      <div class="modal-body">
        <div class="container">

                         <form class="row g-3" method="POST" action="{{ route('Document.store') }}" role="form">
                            @csrf

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('Nomenclature') }}" id="codigo" name="codigo" maxlength="3" value="{{ old ('codigo')}}">
                                </div>

                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" id="name" value="{{ old ('name')}}">
                                </div>    

                                <div class="col-auto">
                                  <input type="text" class="form-control" placeholder="{{ __('Description') }}" name="description" id="description" value="{{ old ('description')}}"></input>
                                </div>
                                <br>
                                
                                <div class="mb-3" >
                                  <div class="form-group">
                                      <div class="input-group">

                                        {{ Form::button('Save', ["type"=>"submit", 'class'=>'btn btn-dark'] ) }}
                                        <div>                               
                                            &nbsp;
                                            &nbsp; 
                                        </div>
                                        {{ Form::button('Close', ["type"=>"resert", 'class'=>'btn btn-secondary'] ) }}
                                        
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

         


                      
   
     


 