@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Toutes les Offres</h4>
                  <button class="btn btn-primary"><a class="nav-link" href="{{route('offre.create')}}">Ajouter</button></div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Nom
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Prix
                        </th>
                        <th>
                          Durée
                        </th>
                      
                      <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offreTouristique as $offreTouristique)
                                        <tr>
                                            <td>
                                                {{$offreTouristique->name}}
                                            </td>
                                            <td>
                                                {{$offreTouristique->description}}
                                            </td>
                                            <td>
                                                {{$offreTouristique->prix}}
                                            </td>
                                            <td>
                                                {{$offreTouristique->durée}}
                                            </td>
                                            
                                            <
                                            <td class="text-right">
                                                <a href="{{route('offre.edit',$user->id)}}" class="btn btn-sm btn-success"><i class="material-icons">edit</i></a>
                                                <a href="{{route('offre.destroy',$user->id)}}" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></a>
                                              <form action="articles/{{$article->id}}/delete" method="post">
                                                @crsf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">supprimer</button>
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