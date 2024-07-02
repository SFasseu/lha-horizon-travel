@extends('layouts.app')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Users</h4>
                  <button class="btn btn-primary"><a class="nav-link" href="{{route('user.create')}}">Ajouter</button></div>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                         <tr>
                          
                        <th>
                          Nom
                        </th>
                        <th>
                        Email
                        </th>
                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-success"><i class="material-icons">edit</i></a>
                                                
                                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm btn-mb-6"><i class="material-icons">delete</i></button>
                                              </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
      </div>


@endsection