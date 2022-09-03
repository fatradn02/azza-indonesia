@extends('admin.layouts.app')
@section('content')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl  blur blur-rounded top-0 z-index-fixed shadow position-absolute" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">index</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">index</h6>
          
        </nav>
      
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

     



      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Setting</h6>
              </div>
            </div>
            <div class="table-responsive">
                @foreach ($data as $item)
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->instagram}}" value="{{$item->instagram}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->facebook}}" value="{{$item->facebook}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->linkedin}}" value="{{$item->linkedin}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->youtube}}" value="{{$item->youtube}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->address}}" value="{{$item->address}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->email}}" value="{{$item->email}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Phone_number</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->phone_number}}" value="{{$item->phone_number}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Logo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->logo}}" value="{{$item->logo}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Tagline_1</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->tagline_1}}" value="{{$item->tagline_1}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Tagline_2</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->tagline_2}}" value="{{$item->tagline_2}}">
                </div>
                <div class="mb-3 w-75 ms-4">
                    <label for="exampleFormControlInput1" class="form-label">Tagline_3</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->tagline_3}}" value="{{$item->tagline_3}}">
                </div>
                @endforeach
               
            </div>
          </div>
        </div>

       
      </div>

      <footer class="footer pt-3  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">PT AZZA INDONESIA SUPPLIER</a>
                </div>
              </div>
            
            </div>
          </div>
      </footer>

    </div>
</main>
@endsection