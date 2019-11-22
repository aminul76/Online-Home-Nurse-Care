@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      
          
     


    @foreach($nInfo as $nInfo)
               <div class="container py-3">
                  <div class="card">
                    <div class="row ">
                      <div class="col-md-4">
                          <img src="{{ Storage::url($nInfo->photo) }}" height="100px;" width="80px;">
                        </div>
                        <div class="col-md-8 px-3">
                          <div class="card-block px-3">
                            <h4 class="card-title">{{$nInfo->name}}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach

    
     
    </div>
  </div>
</div>


@endsection