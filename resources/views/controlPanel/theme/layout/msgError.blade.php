@if(config('main.msgError'))
<?php $msg='';?>
@if (Session::has('success'))
<?php $msg='success';?>
@elseif (Session::has('danger'))
<?php $msg='danger';?>
@elseif (Session::has('warning'))
<?php $msg='warning';?>
@elseif (Session::has('info'))
<?php $msg='info';?>
@endif
<div class="alert alert-{{$msg}}" role="alert" >{{Session::get($msg)}}</div>

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
@endif




