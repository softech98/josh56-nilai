
<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <!-- CSRF Token -->
            <div class="card-body ">
             <form id="commentForm" action="{{ route('admin.users.store') }}"
             method="POST" enctype="multipart/form-data" class="form-horizontal">
             {{ csrf_field() }}

             <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{ Form::text('nama',null,array('id'=>'nama','class'=>'form-control','placeholder' => 'Nama Lengkap','autofocus', 'required')) }}
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        {{ Form::text('username',null,array('class'=>'form-control','placeholder' => 'Username','autofocus', 'required')) }}
                        <small class="text-danger">{{ $errors->first('username') }}</small>
                    </div>
                </div>
            </div>
            <div class="form-grup">
                <div class="row">
                   <div class="col-lg-6 col-md-6">
                    {{ Form::email('email',null,array('class'=>'form-control','placeholder' => 'Alamat E-mail','autofocus', 'required')) }}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="col-lg-6 col-md-6">
                    {!! Form::select('gender',$jenis_kelamin, null, ['class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--', 'required']) !!}
                    <small class="text-danger">{{ $errors->first('gender') }}</small>
                </div>
            </div>
        </div>
        <br>
        <div class="form-grup">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                   {{ Form::password('password',array('id' => 'password', 'class'=>'form-control','placeholder' => 'Password','autofocus','required')) }}
                   <small class="text-danger">{{ $errors->first('password') }}</small>
               </div>
               <div class="col-lg-6 col-md-6">
                   {{ Form::password('password_confirm',array('id' => 'password_confirm', 'class'=>'form-control','placeholder' => 'Password Confirm','autofocus','required')) }}
                   <small class="text-danger">{{ $errors->first('password_confirm') }}</small>
               </div>
           </div>

       </div>
       <br>
       <div class="form-group">
        <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                    <img src=" {{ asset('assets/images/authors/no_avatar.jpg') }} " alt="profile pic">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                <div>
                </div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input id="pic" name="pic_file" type="file" class="form-control"/>
                </span>
                <a href="#" class="btn btn-danger fileinput-exists"
                data-dismiss="fileinput">Remove</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <select class="form-control required" title="Select group..." name="group"
            id="group">
            <option value="">Select Role</option>
            @foreach($groups as $group)
            <option value="{{ $group->id }}"
                @if($group->id == old('group')) selected="selected" @endif >{{ $group->name}}</option>
                @endforeach
            </select>
            {!! $errors->first('group', '<span class="help-block">:message</span>') !!}
            <span class="help-block">{{ $errors->first('group', ':message') }}</span>
                                                <input id="activate" name="activate" type="hidden"
                                                       class="pos-rel p-l-30 custom-checkbox"
                                                       value="1" checked="checked">
        </div>
    </div>
</div>
<div class="button-group">
    <div class="row">
        <div class="col-md-4">
         <button type="reset" class="btn btn-danger btn-block resetModal" aria-hidden="true">Reset</button>
     </div>
     <div class="col-md-4">
        <button type="submit" class="btn btn-info btn-block ">
         Simpan
     </button>
 </div>
</div>
</div>
</form>
{{-- {!! Form::close() !!} --}}
</div>

</div>
</div>
</div>
{{-- </div> --}}



