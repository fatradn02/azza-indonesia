@php
  $pages = [
    [
      "title" => "Product",
      "icon" => "ni-shop text-success",
      "url" => route('product.index'),
      "name" => "admin/product",
      'children' => [
        [
          "title" => "Product",
          "url" => route('product.index'),
        ],
        [
          "title" => "Buat Product",
          "url" => route('product.create'),
        ],
      ]
    ],
    [
      "title" => "Feature",
      "icon" => "ni-tag text-success",
      "url" => route('feature.index'),
      "name" => "admin/feature",
      'children' => [
        [
          "title" => "Feature",
          "url" => route('feature.index'),
        ],
        [
          "title" => "Buat Feature",
          "url" => route('feature.create'),
        ],
      ]
    ],
    [
      "title" => "Sponsor",
      "icon" => "ni-diamond text-success",
      "url" => route('sponsor.index'),
      "name" => "admin/sponsor",
      'children' => [
        [
          "title" => "Sponsor",
          "url" => route('sponsor.index'),
        ],
        [
          "title" => "Buat Sponsor",
          "url" => route('sponsor.create'),
        ],
      ]
    ],
    [
      "title" => "About",
      "icon" => "ni-books text-success",
      "url" => route('about.index'),
      "name" => "admin/about",
      'children' => [
        [
          "title" => "About",
          "url" => route('about.index'),
        ],
        [
          "title" => "Buat About",
          "url" => route('about.create'),
        ],
      ]
    ],
    [
      "title" => "Gallery",
      "icon" => "ni-album-2 text-success",
      "url" => route('gallery.index'),
      "name" => "admin/Gallery",
      'children' => [
        [
          "title" => "Gallery",
          "url" => route('gallery.index'),
        ],
        [
          "title" => "Buat Gallery",
          "url" => route('gallery.create'),
        ],
      ]
    ],
    [
      "title" => "User",
      "icon" => "ni-single-02 text-success",
      "url" => route('user.index'),
      "name" => "admin/user",
      'children' => [
        [
          "title" => "User",
          "url" => route('user.index'),
        ],
        [
          "title" => "Buat User",
          "url" => route('user.create'),
        ],
      ]
    ],
    [
      "title" => "Setting",
      "icon" => "ni-settings text-success",
      "url" => route('setting.create'),
      "name" => "admin/Setting",
     
    ],
  ]
@endphp

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        
        <span class="ms-1 font-weight-bold">AzzaIndonesia</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  
             @if(Request::is('dashboard*'))
              active
             @endif" 
             href="{{ route('dashboard') }}">
            
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-success text-sm opacity-10"></i>
              </div>
            
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        @foreach ($pages as $index => $page)
          @if (empty($page['children']))
            <li class="nav-item">
              <a class="nav-link
                @if(request()->is($page['name'].'*'))
                  active
                @endif"  
                href="{{ $page['url'] }}" >
                
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni {{ $page['icon'] }} text-sm opacity-10"></i>
                  </div>
                
                <span class="nav-link-text ms-1">{{ $page['title'] }}</span>
              </a>
            </li>
          @else
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#main{{ $index }}" class="nav-link 
            @if(request()->is($page['name'].'*'))
              active
            @endif
            " aria-controls="main{{ $index}}" role="button" aria-expanded="{{ request()->is($page['name'].'*') ? 'true' : 'false' }}">
              <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni {{ $page['icon'] }} text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">{{ $page['title'] }}</span>
            </a>
            <div class="collapse 
            @if(request()->is($page['name'].'*'))
              show
            @endif
            " id="main{{ $index }}">
              <ul class="nav ms-4">
                @foreach ($page['children'] as $child)
                  <li class="nav-item">
                    <a class="nav-link " href="{{ $child['url'] }}">
                      <span class="sidenav-normal">{{ $child['title'] }}</span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </li>
          @endif
        @endforeach
      
      </ul>
    </div>
  </aside>