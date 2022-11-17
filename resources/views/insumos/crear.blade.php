<x-app-layout>
    
  <style>
         
    .head {
    
        height: 95vh;
        background-image: linear-gradient(
            to right bottom, rgba(0, 0, 0, 0.397), 
            rgba(1, 1, 1, 0.655));
        background-size: cover;
        
    }

    .heading-primary-bottom {

        display: block;
        font-size: 18px;
        letter-spacing: 5px;
        font-weight: 700;
    }

</style>

<div class="head">

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <br>
    <div class="overflow-hidden  shadow-xl sm:rounded-lg">
      <nav class="navbar bg-white">
        <div class="container-fluid">
          <span class="heading-primary-bottom">
            {{ __('Crear Insumo') }}
          </span>
        </div>
      </nav>
    </div>
  </div>
 
   

  
                <form action="{{ route('insumos.store') }}" method="post">
                    @include('insumos.formulario') 
                  </form>

</div>
          
    
  
</x-app-layout>