 @if(count($errors) > 0)
 <div class="box box-inverse box-danger">
    <div class="box-header">
        <h4 class="box-title">
            <strong>
                 @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </strong>
        </h4>
        <div class="box-tools pull-right">					
            <ul class="box-controls">
                <li><a class="box-btn-close" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>
@endif
 @if(\Session::has('error'))
 <div class="box box-inverse box-danger">
    <div class="box-header">
        <h4 class="box-title">
            <strong>
                {{ \Session::get('error') }}
            </strong>
        </h4>
        <div class="box-tools pull-right">					
            <ul class="box-controls">
                <li><a class="box-btn-close" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>
@endif

@if(\Session::has('success'))
<div class="box box-inverse box-success">
    <div class="box-header">
        <h4 class="box-title"><strong>{{ \Session::get('success') }}</strong></h4>
        <div class="box-tools pull-right">					
            <ul class="box-controls">
                <li><a class="box-btn-close" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>
@endif

{{-- the core code --}}
 {{-- @if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div>
@endif --}}