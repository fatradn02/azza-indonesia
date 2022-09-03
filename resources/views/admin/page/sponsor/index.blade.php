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
                <h6 class="mb-2">Sponsor</h6>
              </div>
              <a href="" type="button" class="btn btn-success">Tambah</a>

            </div>
            <div class="table-responsive">
              <table class="table align-items-center ">
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{$item->image}}" alt="Country flag" style="width:40px; height:40px;">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Title</p>
                          <h6 class="text-sm mb-0">{{$item->title}}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Action</p>
                        <div>
                          <button type="button" class="btn btn-primary">Edit</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
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