<div style="margin-top: ">

    {{-- @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif --}}

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif

    {{-- @if(Session::has('info'))
        <div class="alert alert-danger">
        {{Session::get('info')}}
        </div>
    @endif

    @if(Session::has('warning'))
        <div class="alert alert-danger">
        {{Session::get('warning')}}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger">
        {{Session::get('error')}}
        </div>
    @endif --}}
    
    @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif
    
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif
   
    @if ($message = Session::get('info'))
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif
  
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif --}}
</div>