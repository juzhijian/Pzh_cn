<?php

return [
    'daemon_connection_failed' => '尝试与后端进程进行通信时发生错误。 错误代码为HTTP/:code 。我们已经记录了此情况。',
    'node' => [
        'servers_attached' => '节点必须没有被添加服务器才能被删除。',
        'daemon_off_config_updated' => '后端进程配置 <strong>已成功更新</strong>，但尝试自动更新后端进程上的配置文件时发送了不可预料的错误，您可能需要手动更新守护进程配置文件(core.json) 以应用更改。',
    ],
    'allocations' => [
        'server_using' => '服务器当前已被分配，只有没有被分配的服务器才能被删除。',
        'too_many_ports' => '不能一次性添加超过1000给端口，请缩小范围！',
        'invalid_mapping' => ':port 端口的映射无效！',
        'cidr_out_of_range' => 'CIDR 只允许 /25 或 /32 之间的掩码。',
        'port_out_of_range' => 'Ports in an allocation must be greater than 1024 and less than or equal to 65535.',
    ],
    'nest' => [
        'delete_has_servers' => '此服务已经在使用了，我们无法删除。',
        'egg' => [
            'delete_has_servers' => '此服务容器已经在使用了,我们无法删除。',
            'invalid_copy_id' => '您所用于复制脚本的服务容器不存在，或者正在复制脚本自身。',
            'must_be_child' => '服务容器的“复制设置”选项必须是所选的服务的子选项。',
            'has_children' => '这个服务容器被其他服务容器所复制,在删除本服务容器前需要先删除所复制的服务容器。',
        ],
        'variables' => [
            'env_not_unique' => 'The environment variable :name must be unique to this Egg.',
            'reserved_name' => 'The environment variable :name is protected and cannot be assigned to a variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'There was an error while attempting to parse the JSON file: :error.',
            'file_error' => 'The JSON file provided was not valid.',
            'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
        ],
    ],
    'packs' => [
        'delete_has_servers' => 'Cannot delete a pack that is attached to active servers.',
        'update_has_servers' => 'Cannot modify the associated option ID when servers are currently attached to a pack.',
        'invalid_upload' => 'The file provided does not appear to be valid.',
        'invalid_mime' => 'The file provided does not meet the required type :type',
        'unreadable' => 'The archive provided could not be opened by the server.',
        'zip_extraction' => 'An exception was encountered while attempting to extract the archive provided onto the server.',
        'invalid_archive_exception' => 'The pack archive provided appears to be missing a required archive.tar.gz or import.json file in the base directory.',
    ],
    'subusers' => [
        'editing_self' => 'Editing your own subuser account is not permitted.',
        'user_is_owner' => 'You cannot add the server owner as a subuser for this server.',
        'subuser_exists' => 'A user with that email address is already assigned as a subuser for this server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Cannot delete a database host server that has active databases linked to it.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'The maximum interval time for a chained task is 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Cannot delete a location that has active nodes attached to it.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes satisfying the requirements specified for automatic deployment could be found.',
        'no_viable_allocations' => 'No allocations satisfying the requirements for automatic deployment were found.',
    ],
    'api' => [
        'resource_not_found' => 'The requested resource does not exist on this server.',
    ],
];
