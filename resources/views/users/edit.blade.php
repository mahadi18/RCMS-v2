@extends('layout')

@section('content')
    
    {{-- Session::get('message') !== null ? Session::get('message') : '' --}}
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:error</div>')) }}
    @endif

    <div class="page-header">
        <h1>User / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="1">

                <div class="form-group">
                    <label class="col-md-4 control-label">NAME</label>
                    <div class="col-md-6">
                     <input type="text" name="name" class="form-control" value="{{$user->name}}"/><span class="mandatory">*</span>
                        </div>
                </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-6">
                     <input type="text" name="email" class="form-control" value="{{$user->email}}"/><span class="mandatory">*</span>
                            </div>
                </div><div class="form-group">
                        <label class="col-md-4 control-label" for="email">Organization</label>
                        <div class="col-md-6">
                     {{$user->organization->name}}
                            </div>
                </div><div class="form-group">
                        <label class="col-md-4 control-label" for="email">Role</label>
                        <div class="col-md-6">
                     {{$user->roles[0]->name}}
                            </div>
                </div><div class="form-group">
                        <label class="col-md-4 control-label" for="email">Country</label>
                        <div class="col-md-6">
                     {{$country}}
                            </div>
                </div>


                <div class="form-group">
					<label class="col-md-4 control-label">Current Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="old_password">
                        <span class="mandatory">*</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <a class="btn btn-default" href="{{ URL::previous() }}">Back</a>
                        <button class="btn btn-primary" type="submit" value="Save">Save</button>
                    </div>
                    </div>

            </form>
        </div>
    </div>


@endsection