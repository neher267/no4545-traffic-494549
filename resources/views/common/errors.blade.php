@if ($errors->any())
<div class="panel">
    <div class="panel-body" style="background-color: #f5f5f5">        
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                	@if($errors->has('mobile'))
                	<li>Mobile No is not Valid.</li>
                	@else
                	<li>{{ $error }}</li>
                	@endif                    
                @endforeach
            </ul>
        </div>        
    </div>
</div>
@endif