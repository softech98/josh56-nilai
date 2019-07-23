    @extends('admin.layouts/default')

{{-- Page title --}}
@section('title')
Edit User
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
<!--end of page level css-->

@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Edit user</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Users</a></li>
        <li class="active">Edit User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 my-3">
            <div class="card panel-primary">
                <div class="card-heading">
                    <h3 class="card-title">
                        <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        Editing user : {!! $user->nama!!}
                    </h3>
                   {{--  <span class="float-right clickable">
                        <i class="fa fa-chevron-up"></i>
                    </span> --}}
                </div>
                <div class="card-body">
                    <!--main content-->
                    {!! Form::model($user, ['url' => URL::to('admin/users/'. $user->id.''), 'method' => 'put', 'class' => 'form-horizontal','id'=>'commentForm', 'enctype'=>'multipart/form-data','files'=> true]) !!}
                    {{ csrf_field() }}
                    <!-- CSRF Token -->


                    <div id="rootwizard">

                        <div class="tab-content">
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group ">
                                    <div class="row">
                                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap *</label>
                                        <div class="col-sm-4 {{ $errors->first('nama', 'has-error') }}">
                                            <input id="first_name" name="nama" type="text"
                                            placeholder="Nama Lengkap" class="form-control required"
                                            value="{!! old('nama', $user->nama) !!}"/>

                                            {!! $errors->first('nama', '<span class="help-block">:message</span>') !!}
                                        </div>
                                        <label for="username" class="col-sm-2 control-label">Username *</label>
                                        <div class="col-sm-4 {{ $errors->first('username', 'has-error') }}">
                                            <input id="first_name" name="username" type="text"
                                            placeholder="Username" class="form-control required"
                                            value="{!! old('username', $user->username) !!}"/>

                                            {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="email" class="col-sm-2 control-label">Email *</label>
                                        <div class="col-sm-4  {{ $errors->first('email', 'has-error') }}">
                                            <input id="email" name="email" placeholder="E-mail" type="text"
                                            class="form-control required email"   value="{!! old('email', $user->email) !!}"/>
                                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                        </div>
                                        <label for="gender" class="col-sm-2 control-label">Jenis Kelamin *</label>
                                        <div class="col-sm-4 {{ $errors->first('gender', 'has-error') }}">
                                            <select class="form-control" title="Select Gender..." name="gender">
                                                <option value="">Select</option>
                                                <option value="L" @if($user->gender === 'L') selected="selected" @endif >Laki-Laki</option>
                                                <option value="P" @if($user->gender === 'P') selected="selected" @endif >Perempuan</option>
                                            </select>
                                        </div>
                                        <span class="help-block">{{ $errors->first('gender', ':message') }}</span>
                                    </div>
                                </div>
                                

                                <div class="form-group ">

                                    <p class="text-primary">Jika tidak ingin mengubah password, kosongkan fill password</p>
                                    <div class="row">
                                        <label for="password" class="col-sm-2 control-label">Password *</label>
                                        <div class="col-sm-4 {{ $errors->first('password', 'has-error') }}">
                                            <input id="password" name="password" type="password" placeholder="Password"
                                            class="form-control required" value="{!! old('password') !!}"/>
                                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                        </div>
                                        <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                        <div class="col-sm-4 {{ $errors->first('password_confirm', 'has-error') }}">
                                            <input id="password_confirm" name="password_confirm" type="password"
                                            placeholder="Confirm Password " class="form-control required"/>
                                            {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('pic_file', 'has-error') }}">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">Profile picture</label>
                                        <div class="col-sm-4">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                    @if($user->pic)

                                                    @if((substr($user->pic, 0,5)) == 'https')
                                                    <img src="{{ $user->pic }}" alt="img"
                                                    class="img-responsive"/>
                                                    @else
                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                                                    class="img-responsive"/>
                                                    @endif
                                                    @elseif($user->gender === "male")
                                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                    class="img-responsive"/>
                                                    @elseif($user->gender === "female")
                                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                    class="img-responsive"/>
                                                    @else
                                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                    class="img-responsive"/>
                                                    @endif
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                    <div>
                                                    <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input id="pic" name="pic_file" type="file"
                                                    class="form-control"/>
                                                    </span>
                                                    <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput" style="color: black !important;">Remove</a>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <span class="help-block">{{ $errors->first('pic_file', ':message') }}</span>
                                                    </div>
                                                    </div>

                                                    
                                                    
                                                    <p class="text-danger"><strong>Be careful with group selection, if you give admin access.. they can access admin section</strong></p>

                                                    <div class="form-group required">
                                                    <div class="row">
                                                    <label for="group" class="col-sm-2 control-label">Role *</label>
                                                    <div class="col-sm-4">
                                                    <select class="form-control required"  title="Select group..." name="groups[]"
                                                    id="groups">
                                                    <option value="">Select</option>
                                                    @foreach($roles as $role)
                                                    <option value="{!! $role->id !!}" {{ (array_key_exists($role->id, $userRoles) ? ' selected="selected"' : '') }}>{{ $role->name }}</option>
                                                    @endforeach
                                                    </select>
                                                    {!! $errors->first('group', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    </div>
                                                    <span class="help-block">{{ $errors->first('group', ':message') }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="row">
                                                    <label for="activate" class="col-sm-2 control-label"> Activate User *</label>
                                                    <div class="col-sm-10">
                                                    <input id="activate" name="activate" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" @if($status) checked="checked" @endif  >
                                                    <span>To activate user account automatically, click the check box</span></div>

                                                    </div>
                                                    </div>
                                                    </div>
                                                    <a href="{{ route('admin.users.index') }}" class='btn btn-warning'>Back to List</a>
                                                    <button type="submit" class="btn btn-info " id="btncheck">
                                                    Update
                                                </button>
                                                    
                                                    </form>
                                                    </div>
                                                    <!--====  End of Section comment  ====-->
                                                    
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <!--row end-->
                                                    </section>
                                                    @stop

                                                    {{-- page level scripts --}}
                                                    @section('footer_scripts')
                                                    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
                                                    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
                                                    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
                                                    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
                                                    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
                                                    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
                                                    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
                                                    <script src="{{ asset('assets/js/pages/edituser.js') }}"></script>
                                                    @stop
