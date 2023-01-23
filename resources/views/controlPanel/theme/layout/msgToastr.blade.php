@if(config('main.msgToastr'))
<?php $msg='';?>
@if ($success = Session::has('success'))
<?php $msg='success';?>
@elseif ($error = Session::has('error'))
<?php $msg='error';?>
@elseif ($warning = Session::has('warning'))
<?php $msg='warning';?>
@elseif ($info = Session::has('info'))
<?php $msg='info';?>
@endif
@if($success or $error or $warning or $info)
<script>
    toastr.options = {
        "positionClass": "toastr-bottom-left",
        "preventDuplicates": true,
        "progressBar" : true,
}
toastr.{!! $msg !!}("{!! Session::get($msg) !!}").css({ "width":"auto", "max-width":"150px" });//,"margin-bottom":"40px"

</script>


<?php session()->forget($msg);?>
    @endif
<script>
    toastr.options = {
        "positionClass": "toastr-bottom-left",
        "preventDuplicates": true,
        "progressBar" : true,

    }
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}").css({ "width":"auto", "max-width":"200px" });
        @endforeach
    @endif
</script>
@endif
