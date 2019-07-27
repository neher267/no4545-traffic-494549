
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('users')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form class="form-horizontal" method="POST" action="{{route('users.update.role', $user)}}">
                    {{csrf_field()}}
                    {{ method_field("PUT") }}

                    <div class="form-group">
                        <label for="role" class="col-md-4 control-label">User Role</label>

                        <div class="col-md-6">
                            <select id="role" class="form-control" name="role" required autofocus>
                                <option value="">Select</option>
                                <option value="1" {{$user->role == 1 ? "selected":""}}>Admin</option>
                                <option value="2" {{$user->role == 2 ? "selected":""}}>Moderator</option>
                            </select>
                        </div>
                    </div>                       

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
</script>

@endsection