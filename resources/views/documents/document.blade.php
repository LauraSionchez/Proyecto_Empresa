@include('layouts.app')



    <div class="container">
              <h3 class="text-center">{{ __('Document Type') }}</h3>
              
                <table class="table table-bordered ">
                    <thead>
                    <form class="col-auto">
                        <input class="col-auto" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">{{ __('Search') }}</button>
                    </form>
                        <button id="button2" class="btn btn-dark" style="float: right;" role="link" onclick="window.location='{{ route('Document.create') }}'" data-bs-toggle="modal" data-bd-target="#crear">{{ __('New') }}</button>
                    <br>
                    <br>
                        <tr class="text-center">
                            <th scope="col">{{ __('Nomenclature') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Description') }}</th>
                            <th scope="col">{{ __('Actions') }}</th>
                        </tr>
                    </thead >
                    <tbody id="contenido">
                        @foreach($docs as $doc)
                            <tr>
                                <input type="hidden" name="id">
                                <td>{{ $doc->codigo }}</td>
                                <td>{{ $doc->name  }}</td>
                                <td>{{ $doc->description }}</td>
                                <td>
                                  <div class="row">
                                    <div class="col-lg-3">
                                      <button id="button" class="btn btn-dark" role="link" onclick="window.location='{{ route("Document.edit",$doc->id) }}'">{{ __('Edit') }}</button> 
                                    </div>
                                    <div class="col-lg-3">
                                       <form method="post" action="{{ route("Document.destroy",$doc->id) }}">
                                          @csrf @method('DELETE')
                                          <button id="button12" class="btn btn-danger" role="link">{{ __('Delete') }}</button> 
                                       </form>
                                    </div>  
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
                <div class="d-grid gap-2 d-md-flex justify-content">
                    {{ $docs->onEachSide(5)->links() }}
                </div>
                @if (session('status')) 
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                   @endif
              
    </div>
