@extends('admin.layout.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->


    <div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-5">
            <div class="card p-3">
                <div class="header mt-5">
                    <a href="{{ route('dashboard') }}"><button class="btn btn-primary mt-3" style="float:right;">Back</button></a><br><br>
                    <h2>Edit Slider</h2>
                </div>
                <div class="body">
                    <form action="{{ route('updateslider', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')               


                        <input type="hidden" name="id" id="id" value="{{ $slider->id }}">  


                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="title" class="col-md-4 col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $slider->title }}">  
                            </div>        
  
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif        

                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="description" class="col-md-4 col-form-label">Description</label>
                                <textarea id="description" type="text" class="form-control" rows="4" name="description" autocomplete="description"
                                    autofocus>{{ $slider->description }} </textarea>    
                            </div>

                            @if ($errors->has('description'))        
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif

                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                <input type="file" value="{{ $slider->image }}" class="form-control" name="image">
                            </div>

                                <img src="{{ asset('storage/' . $slider->image) }}" class="img-fluid"
                                    style="max-width:70; height:70px;">
                           
                          

                        </div>

                        <button type="submit" class="btn btn-primary mt-2"> Edit  </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')            
@endsection
