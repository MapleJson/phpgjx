<?php
/*
如果是 mysql5.4以下版本
在my.ini 文件中 设置 log='你的log 日志路径'  这个配置下面数组配置需要用得上
在[mysqld]后面增加一行  然后重启mysql 生效
log=D:/wamp/www/mysql_bz.log


* 如果是 mysql5.5以上版本  一次性修改方法 重启后无效
SHOW VARIABLES LIKE '%general_log%'
SET GLOBAL general_log = 1
SET GLOBAL general_log_file = '你的log 日志路径' 这个配置下面数组配置需要用得上


长期有效修改方法在 my.ini 里面 [mysqld] 后面加上如下代码 没有 [mysqld] 自己加上
[mysqld]
general_log=ON
general_log_file=D:/wamp/www/mysql_bz.log // 这里设置你 log日志路径  这个配置下面数组配置需要用得上
然后重启mysql 生效
*/
return array(
	'web_url'  =>'http://www.php.com/', // php工具箱访问 url 根路径  能访问到你工具箱的 地址
	'mysql_log'=>'/tmp/query.log', // mysql 标准日志文件路径
    'mysql_host' =>'127.0.0.1', //mysql连接地址
	'mysql_user' =>'root', //mysql账号
	'mysql_password' =>'root', //mysql密码
	'mysql_port' =>'3306', //mysql端口	
	'menu'=>array( // 菜单配置项
	     '在线工具'=>'http://tool.oschina.net/',   // 如果自己配置的地址打不開 请加上 http://
	     '工具百宝箱'=>'http://tool.lu/',  		 
		 '运行代码'=>'http://tool.lu/coderunner/',
		 '模拟提交'=>'test_request.html',		 
		 '时间戳转换'=>'http://tool.chinaz.com/Tools/unixtime.aspx',  		 
		 '英文翻译'=>'http://fanyi.baidu.com/?aldtype=16047#auto/zh/',  		 
		 'TP手册'=>'http://document.thinkphp.cn/manual_3_2.html',  		 		 		 
		 '正则测试'=>'http://tool.oschina.net/regex',		 
		 '代码比对'=>'http://tool.oschina.net/diff',
		 'JSON格式化'=>'http://tool.oschina.net/codeformat/json',
		 'phpinfo'=>'phpinfo.php', 
		 'php探针'=>'tz.php',
		 '运行代码'=>'run.php',
		 'php手册'=>'http://www.w3school.com.cn/php/index.asp',
	),
);
