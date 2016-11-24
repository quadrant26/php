1. 进入bios
	VMWare 启动 按 F2

2. 配置网络

	2.1 配置 ip 地址
	
		命令行模式 输入 setup

		选择 network configuration -> device configuration -> eth0 

		use DHCP [ ]

			设置 DHCP 空格
				输入 局域网地址 192.168.x.x 
				255.255.255.0 
				网关 192.168.x.1

	2.2  设置网卡的配置文件

		vi /etc/sysconfig/network-scripts/ifcfg-eth0

		使用方向键移动光标到最后一行，按字母键“O”，进入编辑模式： 


		把“ONBOOT”改为yes（改为启动状态）（如果“BOOTPROTO“为dhcp，更改为BOOTPROTO=none） 
		完成后，按一下键盘左上角ESC键。

		输入：
			:wq (注意前面的：符号）

	2.3  重启服务

		service network restart
	
	2.4  查看  

		ifconfig

	2.5 如果连接不上，请查看 VMWare 编辑 -> 虚拟网络编辑器

			VMnet8 子网地址是否和本机网络地址一致

3. root 123456

	[root@localhost ~]#   
		
		root    	当前用户
		
		localhost  	主机名

		~			用户的家

					/root

					/home/username

		# 			当前是超级用户

					$ 	是普通用户

4. 命令格式

	命令  [选项] [参数]

	1. 查询目录中的内容

		ls 

		ls -l 	显示详细信息

		ls -a	显示所有文件，包括隐藏文件

		ls -lh 	文件统计大小 k / m / b

		ls -d 	查看目录属性
		
		ls -i	显示 inode

	2. 权限

		-rw-r--r--

		- 文件类型（- 文件 d 目录  l 软连接文件）

		rw-				r-- 			r--

		u 所有者 4 	g 所属组 2		o 其他人 1  - 0

		r 读  	w 写 	x 执行

		10个 - 之后  每三个一组 用户组 所属组 其他人

		.   	代表 ACL 权限


4. 文件系统

	4.1 创建目录

		mkdir  创建一个目录

			-p  	递归创建

	4.2 cd

		cd ~   回到当前用户的家
		cd

		cd - 	进入上次目录

		cd ..   进入上一级目录

		cd .	进入当前目录

	
	4.3 删除文件或目录

		rm	

			-r		删除目录

			-f		强制删除

	4.4 复制文件或目录

		cp

			-r 		复制目录

			-p		连带文件属性复制

			-d 		若源文件是链接文件，则复制链接属性

			-a		相当于 -pdr  兼容所有属性

	4.5 剪切或改名  

		mv [目录] [目标目录]

			如果原目录文件在同一个目录，就是改名，不在同一个目录就是剪切


5. 常用目录

	/				根目录

	/bin
	/sbin			保存命令
	user -> /bin /sbin 	

	/boot 			启动目录

	/dev 			特殊文件目录

	/etc			系统的配置文件

	/home			用户目录

	/root			超级用户目录

	/lib			函数库内容

	/media			挂载目录
	/mnt 			挂在光盘和U盘
	/misc			外接存储设备

	/proc
	/sys 			写入内存

	/tmp 			临时目录

	/user 			系统软件目录
	/user/bin		普通用户
	/user/sbin  	超级用户

	可以在家目录 和 tmp 进行操作，其他系统目录尽量不予操作


6. 链接命令

	ln

		-s   [原文件] [目标文件]
		创建软链接

	硬链接特点：

		1. 拥有相同的 i 节点 和 存储 block 块，可以看成是一个文件

		2. 可通过 i 节点识别
		
		3. 不能跨分区
		
		4. 不能针对目录使用

	软链接特点：

		1. 类似 windows 的快捷方式

		2. 拥有自己的 i 节点 和 存储 block 块，但是数据中只保存原文件的文件名和 i 节点号，并没有实际的文件数据

		3. lrwxrwxrwx  l 软链接 文件的权限都是  rwxrwxrwx

		4. 修改任意文件，另一个都改变

		5. 删除原文件，软链接不能使用

7. 文件搜索命令

	7.1. locate

		locate [filename]

		在后台数据库里面按文件搜索，速度快 
		更新数据库 (updatadb)

		/var/lib/mlocate  locate 所搜索的后台数据库

		/etc/updatadb.com 配置文件

			PRUNE_BIND_MOUNTS="yes"

			# 开启搜索限制

			PRUNEFS=

			# 搜索时，不搜索的文件系统

			PRUNENAMES=

			# 搜索时 不搜索的文件类型

			PRUNEPATHS=

			# 搜索时，不搜索的路径

	7.2. whereis which 命令搜索命名

		whereis [参数] [命令]

			-b		只查看可执行文件

			-m 		只查看帮助文档所在

		which	[命令]

			只查看可执行文件， 如果命令有别名， 也会显示别名

		
		echo $PATH  环境变量 用 冒号(:) 进行分割


	7.3. find [搜索范围] [搜索文件]

		避免扩大搜索范围，浪费系统资源

		通配符 -> 完全匹配

			*		匹配任意内容

			?		匹配任意一个字符

			[]		匹配中括号中的内容

		-iname		按文件名搜索

		-user		按照所有者搜索

		find /root -nouser		查找没有所有者的文件

		-mtime +10		查找10天前修改的文件
			
			+10 	10天前
			10		10天当天
			-10 	10天内

		-atime		文件访问时间

		-ctime		改变文件属性

		-mtime		修改时间

		-size		按照文件大小

			25k		文件为25k
			-25k	小于25k的文件	
			+25k	大于26k的文件		

		-inum	按照文件的 id 来搜索

		example:
			
			-size +20k -a -size -50k 	大于20k下雨50k的文件

				-a		and		&&
				-o		or 		||
			find /root -size +20k -a -size -50k -exec ls -lh {} \;
			-exec/-ok {} \;	对搜索结果进行操作

	4. grep

		grep [选项] 字符串 文件名

			-i		忽略大小写

			-v		排除制定的字符串

	5. find 和 frep 命令的区别

		find:	在系统中搜索符合条件的文件名， 用通配符进行匹配，通配符是完全匹配

		grep:	在文件中搜索符合条件的字符串， 用正则表达式进行匹配， 正则表示包含匹配


8. 帮助命令

	8.1 man		-> manual 缩写

		man 命令

		级别

			1		命令的帮助

			2		可被内核调用的函数的帮助

			3		函数和函数库的帮助

			4		特殊文件的帮助 /dev 目录下的帮助

			5		配置文件的帮助

			6		游戏的帮助

			7		其他杂项的帮助

			8		系统管理员可用命令的帮助

			9		内和相关的帮助

		查看帮助级别

			man -f 命令  ===  whatis

			man -4 null
			man -7 ifconfig

		查看命名相关的所有帮助

			man -k 命令   === apropos 命令

	8.2 选项帮助命令

		--help

			[命令] --help  ==>  ls --help
			查看选项命令帮助

	8.3 shell 内部命名帮助

		help shell  ==> 只能获取 shell 内部的命令

		whereis cd  确定是否是 shell 内部命令

		help cd 	获取内部命令帮助

	8.4 详细命令帮助

		info [命令]

			回车	  进入子帮助页面 ( 带有 * 帮助 )

			-u		进入上层页面

			-n 		进入下一个帮助小节

			-p 		进入上一节帮助小节

			-q  	退出


9. 压缩和解压缩

	9.1 zip
		压缩 

			zip [文件] 文件		压缩文件

				-r	[目录] 源目录	压缩目录
	
		解压缩

			unzip [压缩文件]	文件解压缩

	9.2 gz 格式 	将文件压缩成为 .gz 格式的文件

		gzip 原文件 	压缩文件后， 源文件会消失

			-c 原文件 -> 压缩文件 		源文件不消失

			-r	压缩文件目录， 压缩目录下的所有的文件的子目录

			-d  文件解压缩
		
		gunzip 		文件解压缩

			-r		解压缩目录

	9.3 bz2

		bzip2 	源文件 	对文件进行压缩，压缩为 .bz2 文件

			-k		保留源文件进行压缩

			-d 		解压缩

		bunzip2  解压缩 

			-k 		保留文件进行解压缩

	9.4 打包命令  

		tar -cvf  打包文件名 源文件

			-c  	打包 

			-v 		显示过程

			-f  	制定打包的文件名

		tar -xvf	解打包文件名

			-x		解压缩文件

			-z 		直接将包压缩为 tar 格式

			-j 		把目录压缩为 bz2 格式

			-t 		只查看文件内容，不解压

		tar -zcvf  打包文件名 源文件

		tar -zcvf 打包文件名 -C 指定文件位置

		tar -zcvf /path/压缩文件名  文件1 文件2 多文件打包并指定文件位置 

10. 关机和重启

	shutdown [选项] 时间

		-c   	取消之前的关机命令

		-r 		重启机器		

		-h 		关机

		& 把命令放入计算机后台命令执行

	其他的关机命令

		halt

		init 0

		poweroff
	
	其他重启命令
		
		reboot

		init 6

	系统运行级别

		0			关机

		1			单用户

		2			不完全多用户，不含 NFS 服务

		3			完全多用户

		4			未分配

		5			图形界面

		6			重启

	runlevel	查看系统运行级别

		/etc/inittab 修改系统的运行级别

		centos7里inittab已经不用了，已被targets代替
	
	退出登录命令
	
		logout  

11.挂载命令

	mount 	查看已经挂载的设备

	mount -a  根据 /etc/fstab/ 来挂载设备

	挂载命令的格式

		mount [-t 文件系统] [-o 特殊选项] 设备文件名 挂载点

		-t 文件系统： 加入文件系统类型来指定挂载的类型 可以 ext3,ext4 iso9660

		-o 特殊选项： 可以指定挂载的额外选项

			atime/noatime 	更新访问时间/不更新访问时间 访问分区文件时，是否更新文件的访问时间，默认为更新

			async/sync		异步/同步	默认异步

			auto/noauto		自动/手动 mount -a 执行时，是否会自动安装 /etc/fstab 文件内容挂载。默认为自动

			defaults		定义默认值，相当于 rw、suid、dev、exec、auto、nouser、async、这7个选项

			extc/noexec		是否可以直接运行执行文件 默认是可以执行

			remount			重新挂载已经挂载的文件系统，一般用于修改特殊权限

			rw/ro			读写/只读 是否具有读写权限 默认rw

			suid/nosuid		具有/不具有 SUID权限 	默认是有

			user/nouser		允许/不允许普通用户挂载，设定文件系统是否允许普通用户挂载，默认不允许，只有 root可以挂载分区

			usrquota		写入代表文件系统支持用户组磁盘配额，默认不支持

			grqpuota		写入代表文件系统支持组磁盘配额，默认不支持

	挂载光盘

		建立挂载点  mkdir /mnt/cdrom

		挂载光盘	mount -t iso9660 /dev/sr0 /mnt/cdrom/ 	
				    mount /dev/sr0/ /mnt/cdrom/

		卸载命令	umount 设备名 或者 挂载点  (只能选一个)

			如果设备正忙时：回到根目录在进行卸载

	挂载U盘

		查看U盘设备名  fdisk -l

		mount -t vfat /dev/sdb1 /mnt/usb/

			linux 默认不支持 NTFS 文件系统( vfat 代表文件系统的文件类型 )

		
12. 用户登录信息

	1. w 

		USER		登陆的用户名
		TTY			登录终端
		FROM		从哪个 ip 地址登录
		LOGIN@		登录时间
		IDLE		用户闲置时间
		JCPU		该终端连接的所有进程占用的时间。这个时间不包括过去的后台作业时间，在包括正在运行的后台作业所占用的时间
		PCPU		当前进程所占用的时间
		WHAT		当前正在运行的命令

	2. who

	3. last 	查看过去和现在所有的用户信息

		直接查看 /var/log/wtmp 文件 

		输出 用户名 登录终端 登录IP 登录时间 退出时间

	4. lastlog	查看系统日志

		直接查看 /var/log/lastlog

		输出 用户名 登录终端 登录IP 最后一次登录时间





































