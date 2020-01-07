<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom admin" style="background-color: #7d65d3 !important; height: 70px; max-width: 100% !important;min-width: 100% !important; box-shadow: 0 15px 15px -15px #333; border-color:#7d65d3 !important; color:white !important;">
   {{-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> --}}

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">           
           
     </ul>
       <div class="form-inline">
         
           
       <ul class="navbar-nav mr-auto" style="color: white !important;">
         <li class="nav-item" ><a class="nav-link" href="/">Página Principal</a></li>         
         @guest
             <li class="nav-item"><a class="nav-link" href="{{route('register')}}">
               Registro
             </a></li>
             <li class="nav-item"><a class="nav-link" href="{{route('login')}}">
               <i class="fas fa-sign-in-alt"></i>
             </a></li>
         @else
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle bar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>          
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   @if(Auth::user()->type == "admin")
                       <a class="dropdown-item" href="{{route('user.perfil')}}">{{\Auth::user()->name}} {{\Auth::user()->lastname}}</a>
                   @else                                    
                      
                   @endif
                 <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Cerrar Sesion
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                 </form>
               </div>
             </li>
         @endguest
       </ul>            
       </div>
   </div>

 </nav>
 <!-- /#sidebar-wrapper -->