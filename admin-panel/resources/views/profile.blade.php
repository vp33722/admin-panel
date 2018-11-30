@extends('layouts.master')

@section('content')


       <div class="row">
      <div class="col-sm-6">
          <h3 class="heading">General Information</h3>

             {{ html()->form('POST', route('profile.update'))->open() }}
                      {{ csrf_field() }}

              <div class="form-group">
                <label>Name</label>
                    {{
                                        html()
                                            ->text('name',Auth::user()->name)
                                            ->class('form-control')
                                            ->placeholder('Please Enter Name')
                                    }}
                                    <span class="error" style="color: red !important;">{{ $errors->first('name') }}</span>

              </div>

              <div class="form-group">
                <label>Email</label>
                    {{
                                        html()
                                            ->text('email',Auth::user()->email)
                                            ->class('form-control')



                                    }}
                                    <span class="error" style="color: red !important;">{{ $errors->first('email') }}</span>

              </div>

              <h3 class="heading">Change Password</h3>
              <div class="form-group">
                <label>Current Password</label>

                    {{
                                        html()
                                            ->password('password')
                                            ->class('form-control')


                                    }}
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <style type="text/css">

                                        .field-icon {
                                                      float: right;
                                                      margin-right: -25px;
                                                      margin-top: -25px;
                                                      position: relative;
                                                      z-index: 2;
                                                    }

                                    </style>
                                    <span class="error" style="color: red !important;">{{ $errors->first('password') }}</span>

              </div>
              <div class="form-group">
                <label>New Password</label>
                    {{
                                        html()
                                            ->password('new-password')
                                            ->class('form-control')

                                    }}
                                    <span toggle="#new-password" class="fa fa-fw fa-eye field-icon toggle-new-password"></span>
                                    <span class="error" style="color: red !important;">{{ $errors->first('new-password') }}</span>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                    {{
                                        html()
                                            ->password('confirm-password')
                                            ->class('form-control')

                                    }}
                                    <span toggle="#confirm-password" class="fa fa-fw fa-eye field-icon toggle-confirm-password"></span>
                                    <span class="error" style="color: red !important;">{{ $errors->first('confirm-password') }}</span>
              </div>
               <div class="form-group">
                                    <span class="edit-cancel-button-append"></span>
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <a class="btn btn-danger" href="{{ route('home') }}">Cancel</a>
                         </div>

               {{ html()->form()->close() }}
        </div>
    </div>


@endsection
