@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">nurse add</a> <a href="#" class="current">Add Attributes</a> </div>
    <h1>nurse add</h1>
    </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Attributes</h5>
          </div>
           <div class="widget-content nopadding">



      

        <form class="" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              
              
                <input type="text" name="name" placeholder="Enter Name "><br /><br />
                <input type="file" name="photo"  placeholder="Enter photo "><br /><br />
                <input type="text" name="city"  placeholder="Enter city " ><br /><br /> 
                <input type="text" name="area" placeholder="Enter area " ><br /><br />
                <input type="text" name="number"  placeholder="Enter number "><br /><br />
                <input type="text" name="skill"  placeholder="Enter skill "><br /><br />
                <input type="text" name="price"  placeholder="Enter price "><br /><br />
               <textarea type="text" name="description"  placeholder="Enter description " ></textarea> <br /><br />
                <input type="submit" value="submit" class="btn btn success">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


