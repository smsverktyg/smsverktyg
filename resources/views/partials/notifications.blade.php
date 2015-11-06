
@if (Session::has('error'))
    <div class="alert alert-danger-alt alert-dismissable">
        <span class="glyphicon glyphicon-certificate"></span>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Hoppsan!</strong> {{ Session::get('error') }}
    </div>
@endif