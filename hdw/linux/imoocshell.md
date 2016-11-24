1. shell 

    1. shell

        bourne shell  文件 sh 

            sh ksh bash psh zsh

        C shell

            csh tsch

    2. echo 把内容输出到屏幕

        [选项] [ 内容 ]

        -e      反斜线控制的字符转换

            开启颜色识别 \e[1;   关闭颜色 \e[0m 

            颜色代码 30m ~ 37m

    3. 脚本

        vi hello.sh

            #!/bin/bash
            #The first program


    3. 脚本执行

        1. 直接运行

            chmod 755 hello.sh
            ./hello.sh // 相对路劲或者绝对路径来调用

        2. bash 

            bash hello.sh

    4. bash 的基本功能

        1. 命令别名和快捷键

            alias   查看系统中已经设置过的别名

            alias  [原命令=新命令]

                alias ls="ls --color=never"
            
            vi ~/.bashrc 写入环境变量配置文件  (当前用户)

            unalias  删除别名

            命令生效顺序

                1. 使用相对路劲或绝对路径执行的目录

                2. 别名

                3. Bash 的内部命令

                4. $PATH 环境变量定义的目录


            快捷键

                1. ctrl + c                 强制终止

                2. ctrl + L || clear        清屏

                3. ctrl + a                 光标移动到行首

                4. ctrl + e                 光标移动到行尾      

                5. ctrl + u                 把光标所在位置删除到行首 

                6. ctrl + z                 把命名放入后台

                7. ctrl + r                 在历史命令中搜索

        2. 历史命令

            history [选项] [历史命令保存文件]

                -c      清空历史命令

                -w      ~/.bash_history     将缓存中的历史命令写入历史命令保存文件

                历史命令默认保存 1000 条， 在 /etc/profile 中可以修改
            
            调用

                上下箭头

                !n  调用历史命令中的第几条

                !!  重复执行最后一条命令

                !字符串    重复执行以改字符串开头的命令

            命令和文件补全

                输入部分命令后，按 TAB 进行命令进行补全，如果命令多， 会将命令或目录进行补全


        3. 输出重定向

            标准输入

                键盘          /dev/stdin          0           标准输入

                显示器         /dev/sdtout         1               标准输入 

                显示器         /dev/sdterr         2               标准错误输出


            1. 输出重定向

                标准输出重定向     命令 > 文件        已覆盖的方式，把命令的正确输入输出到指定的文件或设备中
                                  命令 >> 文件        已追加的方式

                标准错误输出重定向

                            命令 > 文件      已覆盖的方式，把命令的错误信息输入输出到指定的文件或设备中      

                            命令 >> 文件      已追加的方式

                正确输出和错误输出   

                        命令 > 文件 2&         已覆盖的方式，把正确和错误的信息输入输出都保存到同一个文件中

                        命令 >> 文件 2>&1       已追加的方式

                        命令 &> 文件            已覆盖的方式，把正确和错误的信息输入输出都保存到同一个文件中

                        命令 &>> 文件           已追加的方式

                        命令 >> 文件1 2 >> 文件2  把正确的输出追加到文件1， 把错误输出追加到 文件2中


            2. 输入重定向

                wc [选项] [文件名]       ctrl + d    退出编辑模式

                    -c      统计字节数

                    -w      统计单词数

                    -l      统计行数       

                    命令 <  文件        统计文件的

                    命令 << 字符串       输入时 遇到 同一个字符串 就会退出输入模式。然后运行统计

        4. 管道符

            ;       多个命令多次执行  命令之间用分号隔开

            &&      只有都是正确的命令，才会执行下一个命令

            ||      命令1正确，命令2不会执行， 反之亦然

            |       命令1 的正确输出作为 命令 2 的操作对象


        5. 通配符  文件名或者目录

            ?           匹配一个任意字符

            *           匹配一或多个字符

            []          匹配中括号内任意一个的字符，只匹配

            [-]         代表一个范围 

            [^]         不匹配中括号

            特殊符号

                ''          $ ` 没有特殊含义 

                ""          $ ` \       分别引用变量的值， 引用命令， 转义

                ``          用来包含系统命令， 现将命令执行结果复制给变量

                $()         与上面用法一样

                #           注释

                $           用于调用变量

                \           转义符

2. vi 编辑器
    
    i       插入内容

    vim + filename      把光标定位到文件的最后一行

        +n  filename    定位到文件的指定的行 如果 n 大于文件的行数， 将直接定位到最后一行

        +/string        将文件定位到字符串第一次出现的位置， 按 n 可以在单词之间来回切换

    vim filename filename filename  打开多个文件，如果文件不存在，创建多个文件， 

            输入 : N || prev 进行问价切换


    底行模式常用指令
        
        :w          保存

        :q          退出 

        :!          强制运行

        :ls         打开多个文件时，列出打开文件

        :n          下一个文件

        :N          上一个文件   

        :15         定位文件的15行


3. 磁盘管理

    df          磁盘分区使用状况

        -l          仅显示本地磁盘

        -a          所有文件系统的磁盘使用情况

        -h          1024 进制 最合适的单位显示磁盘容量

        -H          1000 进制 来显示

        -t          显示指定文件系统的磁盘分区

        -T          显示磁盘分区类型

        -x          不现实指定文件系统的磁盘分区

    du      统计文件的大小

        -b          以 byte 为单位

        -k          以 KB 为单位

        -m          以 MB 为单位

        -h          1024 进制

        -H          1000 进制 最合适的单位显示磁盘容量

        -s          指定统计的目标

4. 磁盘分区
    
    MBR 分区
    
        fdisk   

            -l          列出当前分支表

        fdisk /path     进入未分区的磁盘，进行操作

            n           新建分区

            w           写入分区


    GPT 分区

        parted

            select  /dev/sdc || path        切换到目标磁盘

            mklabel     msdos       使用 MBR 进行分区

            mklabel     gpt         使用 GPT 进行分区

            print all       查看分区系统信息

            mkpart      交互模式

            mkpart 磁盘名称 开始位置 结束位置

            rm num      删除分区   num 分区的编号

            unit GB     以 GB 为单位进行分区， 默认为 MB

            quit        退出分区模式

5. 磁盘格式化
    
    mkfs        格式化  

        mkfs.ext3   path / sdb           以 ext3 文件系统 进行格式化

        mkfs -t ext4 path / sdb          以 ext4 文件系统 进行格式化


    
    mount       挂载

        vim     /etc/fstab

    swap    

        fdisk           修改 

        mkswap          格式化 swap 分区

        swapon          启用 swap 分区

6. 用户和用户组

    1. 用户文件信息

        /etc/group          存储当前用户组信息
            
            组名称:组密码占位符:组编号:组中用户名列表    

        /etc/gshadow        存储当前系统中用户组密码信息

            组名称:组密码:组管理者:组中用户名列表

        /etc/passwd         存储用户密码信息
            
            用户名:密码占位符:用户编号:用户组编号:用户注释信息:用户主目录:shell类型

        /etc/shadow         存储当前系统中所有用户的密码信息

            用户名:密码 :::::

    2. 用户命令

        groupadd    name        添加新的用户组

        groupmod    -n   newname olname     重命名用户组

        groupmod    -g    num  name         更改用户组编号

        groupdel    name        删除用户组  (必须先删除用户组中的用户)

        useradd  -g  [用户组] [用户]      给用户组添加用户

        useradd  -d   [路径]       

                 -d: 家目录 ，保存在/etc/passwd 第六个段位

                 -e:账号终止日期，格式为MM/DD/YY，保存在/etc/

                 -f;账号过期计入后永久停权。值为0立刻停权，值为-1关闭此工能（预设）。

                 -g：预设的用户组群数字为1。

                 -G：定义此用户为多个  

        passwd  -l  username        使用户的密码暂时失效
        
        passwd  -u  username        解锁用户

        passwd  -d  username        删除用户的密码，不需要密码登录
 
        gpasswd[-a user][-d user][-A user,...][-M user,...][-r][-R]groupname


            gpasswd -a                  添加用户到组

                    -a  username  boss       添加到 boss 附属组

                    -g                  修改用户组

            gpasswd -d                  从组删除用户

                    -A：指定管理员

                    -M：指定组成员和-A的用途差不多

                    -r：删除密码

                    -R：限制用户登入组，只有组中的成员才可以用newgrp加入该组


        su username         切换到其他用户 


        Whoami              我是谁

        id imooc            显示指定用户信息，包括用户编号，用户名 ( 主要组编号及名称，附属组列表)

        groups imooc        显示 imooc 用户所造的所有组

        chfn    imooc       设置用户资料 依次输入

        finger imooc        显示用户详细资料



