@extends('layouts.master')

@section('content')

<h3 class="panel-heading">Edit Applications</h3>
    
	<div class="grid-body no-border">
        <div class="row">
            <div class="col-xs-6">

                {{ html()->form('PUT', route('application.update', $Application->getKey()))->acceptsFiles()->open() }}
                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Select Plateform</label>
                           		    {{
                                        html()
                                            ->select('platform', $plateform,$Application->app_platform_id)
                                            ->class('form-control')
                                    }}
                                    <span class="error">{{ $errors->first('plateform') }}</span>
                    </div>

                    <div class="form-group">
                                    <label for="">Application Name</label>
                                    {{
                                        html()
                                            ->text('name',$Application->name)
                                            ->class('form-control')
                                            ->placeholder('Name')
                                    }}
                                    <span class="error" style="color: red !important;">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                                    <label for="">Latest Version</label>
                                    {{
                                        html()
                                            ->text('latest_version',$Application->latest_version)
                                            ->class('form-control')
                                            ->placeholder('Latest Version')
                                    }}
                                    <span class="error">{{ $errors->first('latest_version') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Title Of Add</label>
                                    {{
                                        html()
                                            ->text('title_of_ad',$Application->title_of_ad)
                                            ->class('form-control')
                                            ->placeholder('Add title')
                                    }}
                                    <span class="error">{{ $errors->first('title_of_ad') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Message Of Add</label>
                                    {{
                                        html()
                                            ->textarea('messge_of_ad',$Application->messge_of_ad)
                                            ->class('form-control')
                                            ->placeholder('Add Message')
                                    }}
                                    <span class="error">{{ $errors->first('messge_of_ad') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Link</label>
                                    {{
                                        html()
                                            ->text('link',$Application->link)
                                            ->class('form-control')
                                            ->placeholder('Link')
                                    }}
                                    <span class="error">{{ $errors->first('link') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Contact Email</label>
                                    {{
                                        html()
                                            ->text('contact_email',$Application->contact_email)
                                            ->class('form-control')
                                            ->placeholder('Enter Email Here')
                                    }}
                                    <span class="error" style="color: red !important;">{{ $errors->first('contact_email') }}</span>
                    </div>

                    <div class="form-group">
                                    <label for="">Share Format</label>
                                    {{
                                        html()
                                            ->textarea('share_format',$Application->share_format)
                                            ->class('form-control')

                                            ->placeholder('Description')
                                    }}
                                    <span class="error">{{ $errors->first('share_format') }}</span>
                    </div>

                    <div class="form-group">
                                    <label for="">Contact Format</label>
                                    {{
                                        html()
                                            ->textarea('contact_format',$Application->contact_format)
                                            ->class('form-control')
                                            ->placeholder('Description')
                                    }}
                                    <span class="error">{{ $errors->first('contact_format') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Developer Site</label>
                                    {{
                                        html()
                                            ->text('developer_site',$Application->developer_site)
                                            ->class('form-control')
                                            ->placeholder('Developer Site')
                                    }}
                                    <span class="error">{{ $errors->first('developer_site') }}</span>
                    </div>

                    <div class="form-group">
                                    <label for="">Developer Name</label>
                                    {{
                                        html()
                                            ->text('developer_name',$Application->developer_name)
                                            ->class('form-control')
                                            ->placeholder('Developer Name')
                                    }}
                                    <span class="error">{{ $errors->first('developer_name') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Developer Apps</label>
                                    {{
                                        html()
                                            ->text('developer_apps',$Application->developer_apps)
                                            ->class('form-control')
                                            ->placeholder('Developer Apps')
                                    }}
                                    <span class="error">{{ $errors->first('developer_apps') }}</span>
                    </div>

                     <div class="form-group">
                                    <label for="">Generated In App</label>
                                    {{
                                        html()
                                            ->text('generated_in_app',$Application->generated_in_app)
                                            ->class('form-control')
                                            ->placeholder('Generated In App')
                                    }}
                                    <span class="error">{{ $errors->first('generated_in_app') }}</span>
                    </div>

                     <div class="form-group">
                                    {{ html()->checkbox('is_force_update', old('is_force_update',$Application->is_force_update),1) }}
                                    <label style="display: inline-flex" for="is_force_update">Is Force Updates?</label>
                    </div>

                    <div class="form-group">
                                    {{ html()->checkbox('is_only_banner', old('is_only_banner',$Application->is_only_banner),1) }}
                                    <label style="display: inline-flex" for="is_only_banner">Is Only Banner?</label>
                    </div>

                     <div class="form-group">
                                    <span class="edit-cancel-button-append"></span>
                                    <button class="btn btn-primary" type="submit" name="btnsubmit">Save</button>
                                    <a class="btn btn-default" href="{{ route('application.index') }}">Cancel</a>
                    </div>






            	{{ html()->form()->close() }}

            </div>
        </div>
    </div>                    	

@stop