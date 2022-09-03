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
                <h6 class="mb-2">Gallery</h6>
              </div>
            </div>
            <div class="table-responsive">
              <div class="d-flex flex-wrap ">
               @foreach ($data as $item)
               <div class="p-2 col-md-2 col-sm-4 position-relative">
                <img class="img-fluid rounded" src="{{$item->image}}" alt="" style="width:400px; height:200px;">
                <form method="POST" class=" position-absolute top-0 end-0">
                  @csrf @method('DELETE')
                  <button class="btn btn-icon btn-2 btn-danger" formaction="{{route('gallery.destroy',$item->id)}}">
                    <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                  </button>
                </form>
              </div>
               @endforeach
                 
              </div>
            
              <form method="POST" enctype="multipart/form-data" class="mt-4" x-data="Galery">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-6-col-sm-12 px-3 mt-2">
                    <div class="d-grid">
                      <input onchange="preview()"  accept="image/*" class="form-control" type="file" id="file_input" value="Pilih Gambar" name="galeri_images[]"  multiple>
                    </div>
                  </div>
            
                  <div class="col-lg-6 col-md-6-col-sm-12 mt-2">
                    <div class="row">
                      <div class="d-grid col-6 sm-col-12">
                        <button type="button" x-on:click="cancel()" class="btn btn-danger">Batalkan</button>
                      </div>
                      <div class="d-grid col-6 sm-col-12">
                        <button formaction="" class="btn btn-primary">Upload Gambar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <template x-for="url in urls ">
                   <div class="col-md-2 col-sm-4 rounded p-2">
                    <img class="img-fluid rounded" id="tes" alt="" x-bind:src="url">
                   </div>
                  </template>
                </div>
              </form>
            
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
      <script>
        function Galery(){
          return {
            // data 
            urls: [],
            //  method
            cancel(){
              files = document.getElementById('file_input');
              files.value = '';
              this.urls = [];
            },
            preview(){
              // get url from id file_input
              var Objectfiles = document.getElementById("file_input").files;
    
              files = Object.entries(Objectfiles)
    
              files.map(function(file){
                var url = URL.createObjectURL(file[1]);
                this.urls.push(url)
              }.bind(this))
              
              console.log(typeof(files))
              console.log(files)
              console.log(this.urls)
            }
          }
        }
        </script>

    </div>
</main>
@endsection