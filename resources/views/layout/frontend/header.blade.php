 <div class="header @yield('header-2', '')">
     <div class="top-header">
         <div class="container">
             <div class="row">
                 <div class="col-xl-9 col-lg-9 col-md-6">
                     <div class="top-left">
                         <ul>
                             <li><a href="#"><i class="fas fa-envelope"></i>example@info.com</a></li>
                             <li><a href="#"><i class="fas fa-phone"></i>+880 1234 567890</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-6">
                     <div class="top-right">
                         @if (!auth()->user())
                             <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>login</a>
                             <a href="{{ route('register') }}"><i class="fas fa-user"></i>sign up</a>
                         @else
                             <a href="{{ route('logout') }}"><i class="fas fa-user"></i>Logout</a>
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bottom-header">
         <div class="container">
             <div class="bg">
                 <div class="row">
                     <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block d-flex align-items-center">
                                 <div class="logo">
                                     <a href="#"><img
                                             src="{{ asset('assets/frontend/assets/images/dcmlogo.png') }}"
                                             alt="LOGO"></a>
                                 </div>
                             </div>
                             <div class="d-xl-none d-lg-none d-block col-5">
                                 <button class="navbar-toggler" data-toggle="collapse"
                                     data-target="#navbarSupportedContent" type="button"
                                     aria-controls="navbarSupportedContent" aria-expanded="false"
                                     aria-label="Toggle navigation">
                                     <i class="fas fa-bars"></i>
                                 </button>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-9 col-lg-10">
                         <nav class="navbar navbar-expand-lg navbar-light">
                             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                 <ul class="navbar-nav ml-auto">
                                     <li class="nav-item ">
                                         <a class="nav-link {{ Request::routeIs('frontend.homes') ? 'active' : '' }}"
                                             href="{{ route('frontend.homes') }}">
                                             home
                                         </a>
                                     </li>

                                     <li class="nav-item ">
                                         <a class="nav-link {{ Request::routeIs('frontend.abouts') ? 'active' : '' }}"
                                             href="{{ route('frontend.abouts') }}">about</a>
                                     </li>
                                     <li class="nav-item ">
                                         <a class="nav-link {{ Request::routeIs('frontend.services') ? 'active' : '' }}"
                                             href="{{ route('frontend.services') }}">
                                             service
                                         </a>
                                     </li>
                                     <li class="nav-item  ">
                                         <a class="nav-link {{ Request::routeIs('frontend.teams') ? 'active' : '' }}"
                                             href="{{ route('frontend.teams') }}">team</a>
                                     </li>
                                     <li class="nav-item ">
                                         <a class="nav-link {{ Request::routeIs('frontend.blogs') ? 'active' : '' }}"
                                             href="{{ route('frontend.blogs') }}">
                                             blog
                                         </a>

                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link {{ Request::routeIs('frontend.contacts.create') ? 'active' : '' }}"
                                             href="{{ route('frontend.contacts.create') }}">contact</a>
                                     </li>
                                 </ul>
                             </div>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
