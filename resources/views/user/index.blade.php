@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Lista de users</h3></div>
                
                <div class="card-body">
                    <!--boton para crear
                    <a href="  "
                    class="btn btn-primary float-right"
                    >Create Rol
                </a>
                -->
                <br><br>
                @include('custom.message')


                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role(s)</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                            
                         @foreach ($users as $user)
                           
                         <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> 
                            @isset( $user->roles[0]->name)
                                {{ $user->roles[0]->name }}
                            @endisset
                            </td>
                          
                            <td> 
                            @can('view', [$user, ['user.show', 'userown.show']]) 
                                <a  class="btn btn-info" href="{{ route('user.show', $user->id) }}">Show</a>
                            @endcan
                            </td>
                            <td>
                            @can('view', [$user, ['user.edit', 'userown.edit']]) 
                                <a  class="btn btn-success" href="{{ route('user.edit', $user->id) }}">Edit</a>
                            @endcan
                            </td>                    
                            <td> 
                            @can('haveaccess', 'user.destroy')  
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                <button class="btn btn-danger">Delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                            @endcan
                            </td>                    
                        </tr> 
                         @endforeach
                       
                          
                        </tbody>
                      </table>
                      {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
