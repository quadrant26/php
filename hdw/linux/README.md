1. Linux

    centos 6.4
    
2. 文件介绍
    
    dev     设备文件夹
    
    etc     配置文件夹
    
    home    user 
    
    lib     共享的库
    
    mnt     挂载 
    
    var     右键   \www\

    sbin    超级管理员
    
    shell         用户与内核沟通的中间人
    
    图形化shell    GUI
    
    命令行shell    CLI
    
3. linux 正确关机方式

    shutdown
    
    -h  关机

        shutdown -h now     现在关机 -h halt

        shutdown -h +10 'msg'   10分钟关机 引号之后就是广播，告诉所有用户 10分钟 之后就关机了
    
    -r 重启

        shundown -r  重启

        reboot

    www.kernel.org

4. 文件操作

    yum install tree     安装 软件

    cal             日历

    cal d m y       日历 日 月 年

    ctrl + alt + F1 ~ F6    切换到命令行进行用户切换

    useradd username  必须在 root 下进行操作

    passwd username xxx

    tab键   显示命令

    man     显示命令的全部内容

5. 命令

    cd      无任何参数 直接回到该用户的家目录

6. 设置网络

    vi /etc/selinux/config

        selinux=disabled

    vim /etc/sysconfig/network-scripts/ifcfg-eth0

        ONBOOT=yes
        BOOTTPROTO=static

        NETMASk=255.255.255.0
        IPADDR=182.168.1.xxx
        GETEWAY=192.168.1.1
        DNS1=8.8.8.8

     ESC 退出编辑 输入 :wq! 保存
     :q! 不保存退出


7. 权限

    账号(用户)  user

    角色(用户组) group

    touch filename  创建一个文件

    -rw-rw-r--

        rw-     所有者
        rw-     所属组
        w-      只读

    文件已 点(.) 开头的 是隐藏文件

    umask   查看文件权限

    touch   创建一个文件

    chmod   修改文件权限

    alias   设置指令的别名

    rm      删除文件

        rm -rf 文件夹  全部文件

        rm -r -p /a/b/c   递归删除


    mkdir   创建一个文件夹

        mkdir -p 创建一个多级目录

    chown   改变一个文件的 所属组
        
        chown [选项]... [所有者][:[组]] 文件...

        chown  -R qq:qq admin       改变文件夹的所有者

    cat     查看文件内容

    cd  

        ~       回到自己的家

        -       在两个目录之间进行切换

        .       当前目录

        ..      上一级目录

        ~user   直接去用户家

    pwd

        查看当前目录

    echo $PATH

        echo "content">>filename    将内容输入到文件中

    更改环境变量

        PATH=$PATH:/目录

    dir

    dirname

    basename


    r   4

    w   2

    x   1

    -   0

    rwxr-xr-x    722

    example:  tmp/ -> hd -> 文件 baidu 755 ls -l

    example:  tmp/www/admin/model  NewModel.class.php  chown -> qq  ls


    ls -lh          文件显示

    ls -lhS         文件从大到小排序

    ls -lhSr        文件从小到大排序

    ls -t           文件按照最近修改时间

    ls -tr          修改时间反转

8. 复制

    cp  filename 目录

    cp  filename 目录

    cp  * 目录               复制所有的文件

    scp 远程复制

        scp filename user://  远程地址:目录位置

    example:    root 创建一个index.php 复制到 qq 家

    mv 改名

        mv a1 a2            文件重命名

        mv a1 ~user         将文件移动到某个目录

    ln -s path   创建快捷方式， 必须是绝对路径

    more filename   查看文件 (大文件)  (退出  q)
        n   向下查找
        N   向上查找

    less filename   查看文件 简单查看
        /搜索内容

    
    tail -num   查看前几条数据

    head -num   查看后几条数据

    find 

       /  -name     按照名称来查找
       /  -user qq  按照用户来查找
       /  -size +100k   按照文件大小大于100k的文件

    whereis filename     文件查找

    which filename       文件查找

    locate filename      文件查找 速度快

    80:00:27:9b:9c:d1
9. 磁盘操作

    sync    将内存中的数据存入到磁盘

    9.1 查看磁盘多小

        du 

            -a      包括子目录

            -s      仅显示总计，只列出最后加总的值。

            -h      以K，M，G为单位，提高信息的可读性。

            -S      不包含子目录

    9.2 磁盘分区

        df
            -h        可易识别的单位来显示 磁盘大小
            
    
    9.3 查看分区结构

        fdisk 

            -l         列出所有分区

        挂载新硬盘  /dev/sdb

        挂载新硬盘分区

        fdisk /dev/sdb

            m       查看所有帮助

            n       添加一个新的分区结构

            p       打印分区结构

            d       删除分区

            t       查看分区id

            w       写入分区表到磁盘退出

            n -> e 

                 p

    9.4 格式化

        mkfs -t ext4 /dev/sdb1

    9.5 挂载

        mount  查看

            # mkdir /mnt/sdb1

            # mount /dev/sdb1 /mnt/sdb1   将 /dev/sdb1 硬盘挂载在 /mnt/sdb1 上

            -L      使用卷标进行挂载  文件 卷标名

        umount 弹出挂载
        
            umount /dev/sdb1

        lsof  

    9.6 卷标  不能重名

        e2label     为磁盘设置卷标 -> 

            e2label /dev/sdb1 web

    9.7 磁盘自动挂载

        vim /etc/fatab

            磁盘          挂载点     文件系统类型                  是否启动自动备份    磁盘自动检测    
            dev/sdb1     /web        ext4           defaults        0                   0

        查看文件最后一行

            tail -1 filename

        mount -n -o remount,rw /  重新挂载根分区 并重新可以进行读写操作

        passwd root     更改 root 密码

10. 压缩解压缩

    1. zip

        zip [压缩后文件名]  [需要压缩的文件]

        unzip [需要解压缩的文件]

    2. gzip

        gzip [需要压缩的文件]    压缩文件后，源文件消失   x.tz

            -d  [压缩文件]      对文件进行解压缩

    3. bzip2

        bzip2 [需要压缩的文件]     压缩文件后，源文件消失 x.bz2

            -d [需要解压缩的文件]   对文件进行解压缩

    4. tar 文件打包

        -j      bzip2

        -z      zip 

        -f      设置文件名

        -c      新建打包文件

        -v      显示执行过程

        -x      执行解包命令

        -t      查看压缩包内容    (并不进行解压缩)

11. 编辑文件

    1. vi && vim

        :   命令模式

        esc     返回一般模式

        w       储存

        q       退出

        i       进入编辑模式 

        :w      保存

        :w!     强制保存

        :q      退出

        :q!     强制退出

        :w b.php  另存为

            i   在当前位置插入

            I   在行首插入

            a   下一个字符

            A   行尾插入

            o   下一行

            O   上一行

            :sh     把 vim 放入后台执行

            exit    返回 VIM
























