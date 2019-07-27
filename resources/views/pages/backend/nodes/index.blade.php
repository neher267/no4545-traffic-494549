@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">               
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.create')}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add Node</a>
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Route No</th>
                            <th>Length</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                        @foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>                            
                            <td>{{$result->name}}</td>                           
                            <td>{{$result->route->name}}</td>                           
                            <td>{{$result->length}} Meeters</td>                           
                            <td>
                                <a href="{{route($name.'.edit', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                <form 
                                action="{{route($name.'.destroy', $result)}}" 
                                method="POST" 
                                style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete </button>
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
@endsection