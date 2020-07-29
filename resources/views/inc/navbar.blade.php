
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/"> <h1>{{config('app.name', 'LSAPP')}}</h1></a>
        <div class="collapse navbar-collapse" id="navbar">
           <ul class="navbar-nav"> 

             @if ($services){{-- //this checks if $services is avilable--}}
{{-- //then loops  though it to create the nav lis --}}
                @for ($i = 0; $i < count($services); $i++)
                <a class="nav-link" href="#">{{$services[$i]}}</a>
                    
                @endfor 
             @endif
        
           </ul>       
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
             <li><a href="/">Home</a></li>
             <li><a href="/about">About</a></li>
             <li><a href="/services">$services => services</a></li>
             <li><a href="/failedjobs">Blog</a></li>
            </ul>
          </div> 
          </div>
        </div>
      </nav>