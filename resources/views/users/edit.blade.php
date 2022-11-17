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
                        {{ __('Asignar rol') }}
                    </span>
                </div>
            </nav>
        </div>
    </div>

  
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if(session('info'))

                    <div class = "alert alert-primary">
                        <strong>{{session('info')}}</strong>
                    </div>

                @endif
    
                <div class="card">
                    <div class="card-body">

                        <p class="h4">Nombre</p>
                        <p class="form-control"> {{$user->name}}</p>
                        <h2> Listado de roles</h2>

                        {!! Form::model($user, ['route' => ['users.update',$user], 'method'=> 'put'])!!}    
          
                        @foreach ($roles as $role)
                        
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, null,['class'=>'mr-1'])!!}
                                    {{$role->name}}
                                </label>
                            </div>

                        @endforeach

                        <div class="my-1 flex justify-center">
                            {!! Form::submit('Asignar rol',['class' => 'btn btn-outline-primary mt-2'])!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
    
</x-app-layout>