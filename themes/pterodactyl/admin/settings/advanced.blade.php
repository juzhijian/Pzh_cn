@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'advanced'])

@section('title')
    高级选项
@endsection

@section('content-header')
    <h1>高级选项<small>设置翼龙面版的高级选项</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">后台</a></li>
        <li class="active">选项</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <form action="" method="POST">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">reCAPTCHA</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">状态</label>
                                <div>
                                    <select class="form-control" name="recaptcha:enabled">
                                        <option value="true">启用</option>
                                        <option value="false" @if(old('recaptcha:enabled', config('recaptcha.enabled')) == '0') selected @endif>禁用</option>
                                    </select>
                                    <p class="text-muted small">服务器在中国且客户面向中国请不要开启。如开启将会在登陆时要求通过验证码(由Google提供)</p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">站点Key</label>
                                <div>
                                    <input type="text" required class="form-control" name="recaptcha:website_key" value="{{ old('recaptcha:website_key', config('recaptcha.website_key')) }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">密钥Key</label>
                                <div>
                                    <input type="text" required class="form-control" name="recaptcha:secret_key" value="{{ old('recaptcha:secret_key', config('recaptcha.secret_key')) }}">
                                    <p class="text-muted small">您的reCAPTCHA的密钥。</p>
                                </div>
                            </div>
                        </div>
                        @if($showRecaptchaWarning)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="alert alert-warning no-margin">
                                        您当前正在使用翼龙面版默认的验证码API。 为了提高安全性请<a href="https://www.google.com/recaptcha/admin">前往生成</a>专门用于您面板的API。
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">HTTP 连接</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">连接超时</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:guzzle:connect_timeout" value="{{ old('pterodactyl:guzzle:connect_timeout', config('pterodactyl.guzzle.connect_timeout')) }}">
                                    <p class="text-muted small">在认为连接发生错误之前的等待时间。</p>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">请求超时</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:guzzle:timeout" value="{{ old('pterodactyl:guzzle:timeout', config('pterodactyl.guzzle.timeout')) }}">
                                    <p class="text-muted small">在认为请求过程中发生错误之前的等待时间。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">控制台</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">消息数</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:console:count" value="{{ old('pterodactyl:console:count', config('pterodactyl.console.count')) }}">
                                    <p class="text-muted small">每次推送到控制台的消息条数。</p>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">请求频率</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:console:frequency" value="{{ old('pterodactyl:console:frequency', config('pterodactyl.console.frequency')) }}">
                                    <p class="text-muted small">每次推送消息到控制台的频率。以毫秒为单位。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-footer">
                        {{ csrf_field() }}
                        <button type="submit" name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
