@extends('admin.layout.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->


    <div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-5">
            <div class="card p-3">
                <div class="header">
                    <h2>Edit Clients</h2>
                </div>
                <div class="body">
                    <form action="{{ route('updateclients', $clients->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')               


                        <input type="hidden" name="id" id="id" value="{{ $clients->id }}">  

                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="title" class="col-md-4 col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $clients->title }}">  
                            </div>        
  
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif        

                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Image</label>
                                <input type="file" value="{{ $clients->image }}" class="form-control" name="image">
                            </div>

                                <img src="{{ asset('storage/' . $clients->image) }}" class="img-fluid"
                                    style="max-width:70; height:70px;">
                           
                        </div>

                        <button type="submit" class="btn btn-primary mt-2"> Edit  </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')            
@endsection
