
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('brands.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route('brands.store')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="name" name="name" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="type" name="type" required class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                <option value="Company">Company</option>                                
                                <option value="Product Brnads">Product Brnads</option>
                                <option value="Partners">Partners</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="address" name="address" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Website URL<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="text" id="url" name="url" required class="form-control col-md-7 col-xs-12" placeholder="http:// or https://">
                        </div>
                    </div>                 
                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="src">Logo<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="file" id="src" name="src" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>                    
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection