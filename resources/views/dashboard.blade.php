{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
{{-- @extends('admin.layout.app')            

@section('styles')    
@endsection

@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Sales Overview</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>              
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">$36,358</h4>
                    <div class="d-flex align-items-center mb-3">
                      <span
                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="me-4">
                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
                      </div>
                      <div>
                        <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">       
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="earning"></div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')     
@endsection --}}
@extends('admin.layout.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                {{-- <a href="{{ URL::to('img_type/create') }}"><i class="fa fa-plus-square" style="font-size: 40px;float:right;"></i></a> --}}
                <a href="{{ route('addslider') }}"><button class="btn btn-primary" style="float:right;">Add</button></a><br><br>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($image as $key => $images)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $images->title }}</td>
                                        <td>{{ $images->description }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $images->image) }}" class="img-fluid"
                                                style="max-width:70; height:70px;">
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('editslider', $images->id) }}"
                                                class="btn btn-info btn-sm waves-effect">
                                                <i class="fa fa-edit" style="font-size:20px">
                                                </i>
                                            </a>
                                            <form method="POST" action="{{ route('deleteslider', $images->id) }}">
                                                @csrf 
                                                @method('delete')
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm waves-effect show_confirm"
                                                    data-toggle="tooltip" title='Delete'> <i class="fa fa-trash" style="font-size:20px">
                                                    </i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    @endsection

    @section('scripts')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="text/javascript">
            $('.show_confirm').click(function(e) {
                if (!confirm('Are you sure you want to delete this?')) {
                    e.preventDefault();
                }
            });
        </script>
    @endsection

