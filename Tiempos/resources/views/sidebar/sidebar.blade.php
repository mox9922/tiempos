<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                 <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.jpg') }}" 
                  alt="Logo" srcset=""
                  style="object-fit:cover;
     		object-position: letf;
            width:160px;
            height:180px;
            "  ></a>
                <div class="logo">
                   
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                            <li class="sidebar-item active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="sidebar-item">
                  
                        <div class="badges">
                            @if (Auth::user()->perfil=='Admin')
                          
                                 @include('sidebar.sideAdmin')
                  
                            @endif
                            @if (Auth::user()->perfil=='comprador')
                                     
                                 @include('sidebar.sideComprador')

                            @endif
                            @if (Auth::user()->perfil=='vendedor')
                        
                                 @include('sidebar.sideVendedor')
                            @endif
        <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link' onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                         <i class="bi bi-box-arrow-right"></i>
                        <span>Salir</span>
                       
                </li>              
                
          
    
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>