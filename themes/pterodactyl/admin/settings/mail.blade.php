@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'mail'])

@section('title')
    邮件选项
@endsection

@section('content-header')
    <h1>邮件选项<small>配置翼龙面版如何发送邮件.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">后台</a></li>
        <li class="active">选项</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">邮件选项</h3>
                </div>
                @if($disabled)
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="alert alert-info no-margin-bottom">
                                    这里仅在使用SMTP发送邮件的时候使用。 您可以使用 <code>php artisan p:environment:mail</code> 命令来更新您的邮件设置,或者在配置文件中设置 <code>MAIL_DRIVER=smtp</code>。
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <form action="{{ route('admin.settings.mail') }}" method="POST">
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">SMTP服务器</label>
                                    <div>
                                        <input required type="text" class="form-control" name="mail:host" value="{{ old('mail:host', config('mail.host')) }}" />
                                        <p class="text-muted small">输入一个SMTP服务器地址</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="control-label">SMTP端口</label>
                                    <div>
                                        <input required type="number" class="form-control" name="mail:port" value="{{ old('mail:port', config('mail.port')) }}" />
                                        <p class="text-muted small">输入SMTP服务器的端口</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label">加密选项</label>
                                    <div>
                                        @php
                                            $encryption = old('mail:encryption', config('mail.encryption'));
                                        @endphp
                                        <select name="mail:encryption" class="form-control">
                                            <option value="" @if($encryption === '') selected @endif>不加密</option>
                                            <option value="tls" @if($encryption === 'tls') selected @endif>传输层安全协议(TLS)</option>
                                            <option value="ssl" @if($encryption === 'ssl') selected @endif>安全套接层协议 (SSL)</option>
                                        </select>
                                        <p class="text-muted small">选择一个发送邮件时的加密方式,此项设置取决于您的SMTP服务器</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">用户名 <span class="field-optional"></span></label>
                                    <div>
                                        <input type="text" class="form-control" name="mail:username" value="{{ old('mail:username', config('mail.username')) }}" />
                                        <p class="text-muted small">您的SMTP服务器用户名,通常为邮箱</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">密码 <span class="field-optional"></span></label>
                                    <div>
                                        <input type="password" class="form-control" name="mail:password"/>
                                        <p class="text-muted small">您的SMTP服务器密码,如果无需密码,请输入 <code>!e</code> 在本输入框.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr />
                                <div class="form-group col-md-6">
                                    <label class="control-label">邮件发送者</label>
                                    <div>
                                        <input required type="email" class="form-control" name="mail:from:address" value="{{ old('mail:from:address', config('mail.from.address')) }}" />
                                        <p class="text-muted small">输入一个发送邮件的邮箱地址,通常与您的用户名相同。</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">邮件发送名字 <span class="field-optional"></span></label>
                                    <div>
                                        <input type="text" class="form-control" name="mail:from:name" value="{{ old('mail:from:name', config('mail.from.name')) }}" />
                                        <p class="text-muted small">发送邮件时使用的名字</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            {{ csrf_field() }}
                            <button type="submit" name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">保存</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
