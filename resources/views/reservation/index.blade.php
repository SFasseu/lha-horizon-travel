@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Toutes les reservations</h4>
                  <button class="btn btn-primary"><a class="nav-link" href="{{route('reservation.create')}}">Ajouter</button></div>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Date_début
                        </th>
                        <th>
                          Date_fin
                        </th>
                        
                      </tr></thead>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
@endsection