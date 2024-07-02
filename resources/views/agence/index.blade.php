@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Agences</h4>
                  <button class="btn btn-primary"><a class="nav-link" href="{{route('agence.create')}}">Ajouter</button></div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Nom
                        </th>
                        <th>
                          Adresse
                        </th>
                        
                        <th>
                          Telephone
                        </th>
                        <th>
                          Email
                        </th>
                      </tr></thead>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
@endsection