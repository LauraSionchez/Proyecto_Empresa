@include('layouts.app')


<div class="container" >
    <div class="container">
              <h3 class="text-center">{{ __('Family') }}</h3>
                <table class="table table-bordered">
                    <thead class="text-center">
                    <form class="col-auto">
                        <input class="col-auto" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">{{ __('Search') }}</button>
                    </form>
                        <button id="button2" class="btn btn-dark" style="float: right;" role="link" onclick="window.location='{{ route('Family.create') }}'" data-bs-toggle="modal" data-bd-target="#crear">{{ __('New') }}</button>
                    <br>
                    <br>
                        <tr>
                            <th scope="col">{{ __('identification card') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Last Name') }}</th>
                            <th scope="col">{{ __('Birthdate') }}</th>
                            <th scope="col">{{ __('Relationship') }}</th>
                            <th scope="col">{{ __('Actions') }}</th>
                        </tr>
                    </thead >
                    <tbody id="contenido">
                        @foreach($familys as $family)
                            <tr>
                                <input type="hidden" name="id">
                                <td>{{ $family->ci }}</td>
                                <td>{{ $family->first_name_1 }}</td>
                                <td>{{ $family->last_name_1 }}</td>
                                <td>{{ $family->_fech_nac }}</td>
                                <td>{{ $family->_parent }}</td>
                                <td>
                                     <button id="button" class="btn btn-dark" role="link" onclick="window.location='{{ route("Family.edit",$family->id) }}'">{{ __('Edit') }}</button>

                                     <form method="post" action="{{ route("Family.destroy",$family->id) }}">
                                          @csrf @method('DELETE')
                                          <button id="button12" class="btn btn-danger" role="link">{{ __('Delete') }}</button> 
                                     </form>

                                </td>    
                            </tr>
                        @endforeach
                    </tbody>
                </table>    

                <div class="d-grid gap-2 d-md-flex justify-content">
                    {{ $familys->onEachSide(5)->links() }}
                </div>

                @if (session('status')) 
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                   @endif
              
    </div>
        
</div>