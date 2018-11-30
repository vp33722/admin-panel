@extends('layouts.master')

@section('page-css')
  <link rel="stylesheet" href="{{asset('css/datepicker-ui.css')}}">
  <link rel="stylesheet" href="{{asset('css/datepicker.bootstrap.min.css')}}">

@stop

@section('content')

<h3 class="panel-heading">Edit User</h3>

  <div class="grid-body no-border">
        <div class="row">
            <div class="col-xs-6">

        {{ html()->form('PUT', route('users.update', $appuser->getKey()))->acceptsFiles()->open() }}
                {{ csrf_field() }}

                <div class="form-group">
                        <label for="">Device Id</label>
                                  {{
                                       html()
                                            ->text('device_id',$appuser->device_id)
                                            ->class('form-control')
                                            ->placeholder($appuser->device_id)
                                            ->readonly('true')
                                    }}
                </div>

                <div class="form-group">
                        <label for="">Application Name</label>
                                  {{
                                       html()
                                            ->text('app',$appuser->application->name)
                                            ->class('form-control')
                                            ->placeholder($appuser->application->name)
                                            ->readonly('true')
                                    }}
                </div>

                 <div class="form-group">
                        <label for="">Country</label>
                                  {{
                                       html()
                                            ->text('country',$appuser->country)
                                            ->class('form-control')
                                            ->placeholder('Please Enter Country')
                                    }}
                                    <span class="error">{{ $errors->first('country') }}</span>
                 </div>

                 <div class="form-group">
                        <label for="">Device Type</label>
                                  {{
                                       html()
                                            ->text('device_type',$appuser->device_type)
                                            ->class('form-control')
                                            ->placeholder('Please Enter Device type')
                                    }}
                                    <span class="error">{{ $errors->first('device_type') }}</span>
                 </div>

                  <div class="form-group">
                        <label for="">OS Version</label>
                                  {{
                                       html()
                                            ->text('os_version',$appuser->os_version)
                                            ->class('form-control')
                                            ->placeholder('Please Enter OS Version')
                                    }}
                                    <span class="error">{{ $errors->first('os_version') }}</span>
                  </div>

                  <div class="form-group">
                        <label for="">App Version</label>
                                  {{
                                       html()
                                            ->text('app_version',$appuser->app_version)
                                            ->class('form-control')
                                            ->placeholder('Please Enter App Version')
                                    }}
                                    <span class="error">{{ $errors->first('app_version') }}</span>
                  </div>

                   <div class="form-group">

                                    {{ html()->checkbox('is_full_access', old('is_full_access',$appuser->is_full_access),1) }}
                                    <label style="display: inline-flex" for="is_full_access">Is Full Access?</label>

                   </div>

                   <div class="form-group">

                                    {{ html()->checkbox('purchase_ads', old('purchase_ads',$appuser->purchase_ads),1) }}
                                    <label style="display: inline-flex" for="purchase_ads"> Purchase Ads?</label>

                   </div>

                   <div class="form-group">

                                    {{ html()->checkbox('is_purchase_watermark', old('is_purchase_watermark',$appuser->is_purchase_watermark),1) }}
                                    <label style="display: inline-flex" for="is_purchase_watermark"> Purchase Watermark?</label>

                   </div>

                    <div class="form-group">

                                    {{ html()->checkbox('is_purchase_unlimited', old('is_purchase_unlimited',$appuser->is_purchase_unlimited),1) }}
                                    <label style="display: inline-flex" for="is_purchase_unlimited"> Purchase Unlimited?</label>

                   </div>

                    <div class="form-group">

                                    {{ html()->checkbox('is_purchase_subscription', old('is_purchase_subscription',$appuser->is_purchase_subscription),1) }}
                                    <label style="display: inline-flex" for="is_purchase_subscription"> Purchase Subscription?</label>

                   </div>

                    <div class="form-group">
                        <label for="">Last Date Of Subscription</label>
                                  {{
                                       html()
                                            ->text('last_date_of_subscription',$appuser->last_date_of_subscription)
                                            ->class('form-control')
                                            ->placeholder('Select Date Here')
                                            
                                    }}
                                    <span class="error">{{ $errors->first('last_date_of_subscription') }}</span>
                    </div>

                     <div class="form-group">
                                    <span class="edit-cancel-button-append"></span>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-default" href="{{ route('home') }}">Cancel</a>
                    </div>

                {{ html()->form()->close() }}
            </div>
        </div>
    </div>

@stop
@section('page-js')

    <script src="{{asset('js/datepicker.min.js')}}"></script>
    <script src="{{asset('js/datepicker-ui.js')}}"></script>
    <script src="{{asset('js/appusers.js')}}"></script>
@stop
