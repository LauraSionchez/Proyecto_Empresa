@include('layouts.app')


<div class="container" >
    <div class="container">
              <br><br><h3 class="text-center">{{ __('Employee') }}</h3><br><br>
                <table class="table table-bordered">
                    <thead>
                    <form class="col-auto">
                        <input class="col-auto" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">{{ __('Search') }}</button>
                    </form>
                        <button id="button2" class="btn btn-dark" style="float: right;" role="link" onclick="window.location='{{ route('Employee.create') }}'" data-bs-toggle="modal" data-bd-target="#crear">{{ __('New') }}</button>
                    <br>
                    <br>
                        <tr>
                            <th scope="col" class="text-center">{{ __('identification card') }}</th>
                            <th scope="col" class="text-center">{{ __('Name') }}</th>
                            <th scope="col" class="text-center">{{ __('Last Name') }}</th>
                            <th scope="col" class="text-center">{{ __('Date of Admission') }}</th>
                            <th scope="col" class="text-center">{{ __('Family Burden') }}</th>
                            <th scope="col" class="text-center">{{ __('Actions') }}</th>
                        </tr>
                    </thead >
                    <tbody id="contenido">
                        @foreach($empleados as $empleado)
                            <tr>
                                <input type="hidden" name="id">
                                <td class="text-center">{{  $empleado->ci }}</td>
                                <td class="text-center">{{ $empleado->first_name_1 }}</td>
                                <td class="text-center">{{ $empleado->last_name_1 }}</td>
                                <td class="text-center">{{ $empleado->family->name }}</td>
                                <td class="text-center">{{ $empleado->last_name_1 }}</td>
                                <td class="text-center">
                                  <div class="row">
                                    <div class="col-lg-4">
                                      <button id="button" class="btn btn-dark" role="link" onclick="window.location='{{ route("Employee.edit",$empleado->id) }}'">{{ __('Edit') }}</button>
                                    </div>
                                    <div class="col-lg-4">
                                      <form method="post" action="{{ route("Employee.destroy",$empleado->id) }}">
                                          @csrf @method('DELETE')
                                          <button id="button12" class="btn btn-danger" role="link">{{ __('Delete') }}</button> 
                                     </form>
                                    </div>
                                    <div class="col-lg-4">
                                      <button id="button" class="btn btn-dark" role="link" onclick="window.location='{{ route("Employee.edit",$empleado->id) }}'">{{ __('Edit Family Burden') }}</button>
                                    </div>
                                  </div>
                                </td>    
                            </tr>
                        @endforeach
                    </tbody>
                </table>    

                <div class="d-grid gap-2 d-md-flex justify-content">
                    {{ $empleados->onEachSide(5)->links() }}
                </div>

                @if (session('status')) 
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                   @endif
              
    </div>
        
</div>