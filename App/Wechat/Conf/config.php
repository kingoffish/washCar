<?php
defined('THINK_PATH') or exit();
return array(
	//'配置项'=>'配置值'
	'SYSTEM_NAME'           => '后台管理系统',
	'SYSTEM_VERSION'        => '1.0.140315',

	'SHOW_PAGE_TRACE'       => false,

	/* 内容管理栏目类型  */
	'CONTENT_CATEGORY_TYPE' => array(0 => '栏目', 1 => '页面', 2 => '链接'),

// 	/* 模板引擎设置 */
//     'TMPL_ACTION_ERROR'     => MODULE_PATH.'View'.DS.'Common'.DS.'dispatch_jump.html',   // 默认错误跳转对应的模板文件
//     'TMPL_ACTION_SUCCESS'   => MODULE_PATH.'View'.DS.'Common'.DS.'dispatch_jump.html',   // 默认成功跳转对应的模板文件
// 	'TMPL_EXCEPTION_FILE'   => MODULE_PATH.'View'.DS.'Common'.DS.'exception.html',       // 异常页面的模板文件

	/* 后台自定义设置 */
	'SAVE_LOG_OPEN'         => 0,          //开启后台日志记录
	'MAX_LOGIN_TIMES'       => 2,          //最大登录失败次数，防止为0时不能登录，因此不包含第一次登录
	'LOGIN_WAIT_TIME'       => 60,         //登录次数达到后需要等待时间才能再次登录，单位：分钟

    'DATAGRID_PAGE_SIZE'    => 20,         //列表默认分页数
	/* 单独配置，会覆盖全局配置 */
    'FILE_UPLOAD_LINK_CONFIG'    => array(
		'exts'     => array('zip','rar', 'tar', 'gz', '7z', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx','txt'),
	),
	'FILE_UPLOAD_IMG_CONFIG'    => array(
		'exts'     => array('jpg','jpeg','gif','png'),
	),
	'FILE_UPLOAD_FLASH_CONFIG'    => array(
		'exts'     => array('swf'),
	),
	'FILE_UPLOAD_MEDIA_CONFIG'    => array(
		'exts'     => array('avi'),
	),
    /* 模板解析设置 */
    'TMPL_PARSE_STRING'     => array(
        '__APIROOT__' => SCRIPT_DIR . '/Public/static',
        './Public/upload' => SCRIPT_DIR . '/Public/upload',
        '__PUBLIC__'      => SCRIPT_DIR . '/Public',
        '__STATIC__'      => SCRIPT_DIR . '/Public/static',
        '__PAGE__'      => SCRIPT_DIR . '/Public/view',
        '__VIEW__'      => SCRIPT_DIR . '/App/Admin/View',
        '__JS__'      => SCRIPT_DIR . '/App/Admin/View',
    ),

    "NO_CHECK_CONFIG" => array(
        array('CONTROLLER_NAME'=>'Member','ACTION_NAME'=>'personalInfo'),
    ),

);