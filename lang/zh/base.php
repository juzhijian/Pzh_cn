<?php

return [
    'validation_error' => '请求中有一个或多个字段出现错误。',
    'errors' => [
        'return' => '返回上一页',
        'home' => '回到首页',
        '403' => [
            'header' => '无权访问',
            'desc' => '您无权查看这些东西。',
        ],
        '404' => [
            'header' => '找不到文件',
            'desc' => '我们无法在服务器上找到您需要的文件。',
        ],
        'installing' => [
            'header' => '此服务器正在准备中',
            'desc' => '您请求的服务器或许刚刚才添加，我们需要一些时间来配置好服务器，稍后再来看看吧！一旦完成您将会收到一封邮件。',
        ],
        'suspended' => [
            'header' => '此服务器已被暂停',
            'desc' => '该服务器已被暂停，您无法访问。',
        ],
        'maintenance' => [
            'header' => 'Node Under Maintenance',
            'title' => 'Temporarily Unavailable',
            'desc' => 'This node is under maintenance, therefore your server can temporarily not be accessed.',
        ],
    ],
    'index' => [
        'header' => '您的服务器',
        'header_sub' => '您拥有的服务器。',
        'list' => '服务器列表',
    ],
    'api' => [
        'index' => [
            'list' => '你的密钥',
            'header' => '账户API',
            'header_sub' => '通过API，您可以便捷地操作您的服务器。',
            'create_new' => '创建一个新的API密钥',
            'keypair_created' => '创建成功！您可以在密钥列表中找到它。',
        ],
        'new' => [
            'header' => '新的API密钥',
            'header_sub' => '创建一个新的API密钥。',
            'form_title' => '详细信息',
            'descriptive_memo' => [
                'title' => '描述',
                'description' => '写上一个方便区分以及用途的描述。',
            ],
            'allowed_ips' => [
                'title' => '允许访问的IP',
                'description' => '输入可以使用此API的IP地址列表，一行一个。您也可以使用无类别域间路由来设置IP，或者留空即可让所有IP访问(不安全！)',
            ],
        ],
    ],
    'account' => [
        'details_updated' => '成功更新您的账户信息！',
        'invalid_password' => '您设置的密码是无效的。',
        'header' => '您的账户',
        'header_sub' => '管理您的账户资料。',
        'update_pass' => '设置新密码',
        'update_email' => '设置新邮箱地址',
        'current_password' => '当前密码',
        'new_password' => '新密码',
        'new_password_again' => '再输入一遍',
        'new_email' => '新邮箱地址',
        'first_name' => '姓',
        'last_name' => '名',
        'update_identity' => '更新信息',
        'username_help' => '用户名必须是唯一的，且只允许使用这些字符: :requirements.',
    ],
    'security' => [
        'session_mgmt_disabled' => '您的服务商尚未启用在此管理账户的功能。',
        'header' => '账户安全',
        'header_sub' => '管理您的账户登陆回话与启用两步验证。',
        'sessions' => '活动的回话',
        '2fa_header' => '两步验证',
        '2fa_token_help' => '输入您两步验证应用生成的令牌来完成验证。',
        'disable_2fa' => '关闭两步验证',
        '2fa_enabled' => '两步验证已启用，在您登陆的时候将会要求输入两步验证码。如果您想关闭只需在下面输入令牌即可。',
        '2fa_disabled' => '两步验证已禁用。',
        'enable_2fa' => '启用两步验证',
        '2fa_qr' => '在您的设备上设置两步验证',
        '2fa_checkpoint_help' => '使用两步验证APP扫描一旁的二维码，或者手动输入代码，搞定后请您输入您的令牌。',
        '2fa_disable_error' => '提供的两步验证令牌无效，我们无法关闭两步验证。',
    ],
];
