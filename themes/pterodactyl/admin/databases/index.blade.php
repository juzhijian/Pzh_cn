{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.admin')

@section('title')
    数据库服务器
@endsection

@section('content-header')
    <h1>数据库服务器<small>服务器所能创建数据库的数据库服务器。.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">后台</a></li>
        <li class="active">数据库服务器</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">服务器列表</h3>
                <div class="box-tools">
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newHostModal">新建</button>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>名称</th>
                            <th>地址</th>
                            <th>端口</th>
                            <th>用户名</th>
                            <th class="text-center">数据库</th>
                            <th class="text-center">节点</th>
                        </tr>
                        @foreach ($hosts as $host)
                            <tr>
                                <td><code>{{ $host->id }}</code></td>
                                <td><a href="{{ route('admin.databases.view', $host->id) }}">{{ $host->name }}</a></td>
                                <td><code>{{ $host->host }}</code></td>
                                <td><code>{{ $host->port }}</code></td>
                                <td>{{ $host->username }}</td>
                                <td class="text-center">{{ $host->databases_count }}</td>
                                <td class="text-center">
                                    @if(! is_null($host->node))
                                        <a href="{{ route('admin.nodes.view', $host->node->id) }}">{{ $host->node->name }}</a>
                                    @else
                                        <span class="label label-default">无</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newHostModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.databases') }}" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">新建一个数据库主机</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pName" class="form-label">名称</label>
                        <input type="text" name="name" id="pName" class="form-control" />
                        <p class="text-muted small">用来区分这个位置和其他位置的短标识符。必须在1到60个字符之间，例如, <code>us.nyc.lvl3</code>.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pHost" class="form-label">地址</label>
                            <input type="text" name="host" id="pHost" class="form-control" />
                            <p class="text-muted small">当试图从面板连接到该MySQL主机以添加新数据库时，应该使用的IP地址或FQDN.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="pPort" class="form-label">端口</label>
                            <input type="text" name="port" id="pPort" class="form-control" value="3306"/>
                            <p class="text-muted small">在这个主机上运行MySQL的端口.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pUsername" class="form-label">用户名</label>
                            <input type="text" name="username" id="pUsername" class="form-control" />
                            <p class="text-muted small">数据库的账户，该帐户具有足够的权限来在系统上创建新用户和数据库.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="pPassword" class="form-label">密码</label>
                            <input type="password" name="password" id="pPassword" class="form-control" />
                            <p class="text-muted small">帐户设置的密码.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pNodeId" class="form-label">链接节点</label>
                        <select name="node_id" id="pNodeId" class="form-control">
                            <option value="">空</option>
                            @foreach($locations as $location)
                                <optgroup label="{{ $location->short }}">
                                    @foreach($location->nodes as $node)
                                        <option value="{{ $node->id }}">{{ $node->name }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        <p class="text-muted small">当将数据库添加到选定节点上的服务器时，此设置对该数据库宿主没有任何影响.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-danger small text-left">为此数据库宿主定义的帐户 <strong> 必须 </strong> 具有 <code>授予权限</code> 权限. 如果定义的帐户没有此权限，则创建数据库的权限 <em>将</em> 失败. <strong>不要使用与此面板定义的MySQL相同的帐户信息.</strong></p>
                    {!! csrf_field() !!}
                    <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-success btn-sm">新建</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    <script>
        $('#pNodeId').select2();
    </script>
@endsection
