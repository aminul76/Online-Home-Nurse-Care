@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Nurses</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
             <thead>
          <tr>
                  <th scope="col">name</th>
                  <th scope="col">photo</th>
                  <th scope="col">city</th>
                  <th scope="col">area</th>
                  <th scope="col">skill</th>
                  <th scope="col">description</th>
                  <th scope="col">number</th>
                  <th scope="col">Action</th>
                </tr>


              </thead>
              @foreach($nInfo as $nInfo)
              <tbody>
                <tr>
                  <td>{{$nInfo->name}}</td>
                   <td>
                <img src="{{ Storage::url($nInfo->photo) }}" alt="" width="100px">
                </td>
                  <td>{{$nInfo->city}}</td>
                 <td>{{$nInfo->area}}</td>
                 <td>{{$nInfo->skill}}</td>
                 <td>{{$nInfo->description}}</td>
                  <td>{{$nInfo->number}}</td>
                 <td></td>
                </tr>
                <tr>
                 
              </tbody>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection