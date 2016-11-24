 1. 数据库操作
 
        1.1. 创建一个数据库

            create database dbname default charather set utf8
            
        1.2. 使用数据库

            use dbname
            
        1.3. 创建一个表

            create table tablename (id int(10) unsigned primary key auto_increment, name varchar(60), age tinyint(2)) default character set utf8
            
            unsigned   数值是非负的
            
        1.4. 显示表的信息

            desc tablename
            
        1.5. 插入一条数据

            insert into tablename(字段名) values(value)
            
            多个字段用逗号隔开
            
            多个值(value) 用逗号隔开
            
        1.6 修改表结构

            alter table tabname modify 字段名 数据类型
            
            ex : alter table g modify price decimal(10, 2)  // 一共10个数字，小数点后有两位
            
        1.7 数据库备份

            mysqldump -uroot -p 数据库名 > savepath
            
            mysqldump -uroot -p 数据库名 表 > savepath

        1.8 数据库导入

            mysql: source pathurl;
        
    
1. 数据类型

    1.1. 整型
    
        十进制  十六进制  八进制
        
    1.2. 浮点型
    
    1.3. 字符串 (0 个 或 多个 字符组成的数据)
    
    1.4. null  不确定的值

        整型数据    

            类型              大小           范围(有符号)                 范围(无符号 unsigned)     用途
            
            tinyint          1字节          -128 ~ 127                    0 ~ 255                小整数
            
            smallint         2字节          -32768 ~ 32767                0 ~ 65535              大整型
            
            mediumint        3字节          -8388608 ~ 8388607            0 ~ 16777215           大整型
            
            int              4字节          -2147483648 ~ 2147483647      0 ~ 4294967295         大整型
            
            bigint           8字节          -9233372036854775909 ~ -9233372036854775907  0 ~ 18446744073709661615


        浮点数数据类型

        双精度数据类型

            float           4字节    -3.402823466E+38 ~ 1.175494251E-38   0   1.175494251E-38  3.402823466E+38

            double          8字节    -1.7976931348623157E+308 -4.94E-307  0   4.94E-324   1.7976931348623157E+308 

            decimal(M,N)  5,2  一共5位数，2为小数点之后的数字个数


2. mysql 查询

    2.1. select 关键字
    
        select version()            版本信息
        
        select database()           查看使用哪个库
        
        set @s = 2                  定义一个变量
        
        select @s*100               运算
    
    2.2. 查询全部内容
    
        select * from tablename 
    
        * 查询某个表的全部字段，* 代表全部字段
        
    2.3. select * from tablename where sname=""
    
        where 条件约束
        
        sname 字段名
        
    2.4. 查找相似
        
        select * from tablename where sname like "李%"
    
            like         模糊查询
            
            李%          以李开头
            
            %玉%         包含玉
        
    2.5. 三目运算符
    
        select if(sex, "man","woman"), sname, qq from tablename
        
        查询多个字段用逗号隔开
        
    2.6. 别名 as 关键字
        
        select if(sex, "", "") as stusex, sname from tablename;
        
        as      别名
    
    2.7. 逻辑运算符
        
        select sname,sex from stu where sname like "李%" and sex=0
        
        select sname,sex from stu where sname like "李%" or sex=0
        
    2.8. concat 已连接形式返回数据
        
        select concat("姓名：",sname, "性别:", sex, "qq:",qq) from stu
        
        select concat("姓名：",sname, "性别:", sex, "qq:",qq) as stuinfo from stu
        
        select concat("姓名：",sname, "性别:", if(sex, "男", "女"), "qq:",qq) as stuinfo from stu
        
        select concat("姓名：",sname, "性别:", if(sex, "男", "女"), "qq:",qq) as stuinfo from stu where sex=0
        
3. 修改表结构
    
    3.1 alter 

        alter table tablename add 字段名 数据类型
    
4. 更新表
    
    4.1 update
    
        update stu set birday="1990/05/20" where id=1
        
        使用 where 进行条件约束
        
5. 删除
    
    5.1 delete  删除一条记录
        
        delete from tablename where id = 2
        
    5.2 drop  删除表或者库
    
        drop tablename
        
        drop databasename

6. 返回部分数据

    6.1 limit 
    
        select * from stu limit 2;
        
        limit  返回几条数据
        
        select * from stu order by id asc desc limit 2
        
        asc    由低到高排序   升序
        
        desc   由高到低排序    降序
        
        查找学生年龄最大的学生
        
        select * from stu order by birday desc limit 1
        
        查找学生年龄最小的学生
        
        select * from stu order by birday asc limit 1
        
        limit 0,1 可以多个参数，可以取中间的数据
        
        select * from stu order by birday desc limit 1,1
        
        limit 1         如果只有一个参数 参数代表取几条数据
        limit 1,2       如果有两个参数，第一个是开始位置，第二个是取几条数据
        
        select * from stu where birday <= "date"
        
        通过子查询 查询某一个特定条件的数据
        
        select * from stu where birday <= (select birday from stu order by birday asc limit 1,1)
        
        得到学生是哪年生
        
        select year(birday) from stu;
        
        select distinct year(birday) as "学生出生年份" from stu;
        
        distinct     删除重复的数据
    
    
7. 字符串的处理

    7.1 保存类型
        
        二进制
        
        binary,  varbinary,  blob
        
        主要用于保存 声音 图像等二进制数据   保存路径
        
        与字符集无关
        
        header("Content-type:image/jpeg")
        
        image           把图像当成普通文本来显示    文本  =>   乱码
        
        
        非二进制 有字符集 ( gbk UTF8 gb2312 big5 ) 和 字符集校对规则
        char,  varchar,  text

    
    7.2 字符集
    
        gbk       简繁体   2个字节         21000 多汉字  
        
        gb2312    简体     两个字节存储，   6700 多个汉字
        
        big5      繁体     2个字节         13000 多个汉字   大五码
        
        utf8      unicode  ( 万国码 )  可以在页面体现多个语种，多个国家的文字内容  1-3字节(可变的)
        
        unicode编码       国际化标准化制定涵盖世界上所有语种，所有符号的编码方案    ( 万国码 )

        看到字符集库
        
            show charcter set
            
     7.3 设置表中的字段的字符集    
     
        create table demo(name varchar(30) character set utf8, name2 varchar(30) character set gbk)
        
        show create table demo
        
        show create table demo\G
        
        select length(name),length(name2) from demo
        
        处理单字节是没有差异的
        处理汉字的时候， gbk 占两个字节， utf 占三个字节
        
        length          查看多少个字节
        
        char_length     查看多少个字符
        
    7.4  字符集校对规则
    
        show collation      显示字符集校对规则
        
        create table demo2(name varchar(30) character set utf8 collate utf8_bin, name2 varchar(30) character set utf8 collate utf8_general_ci)
        
        utf8_bin                区分大小写
        
        utf8_general_ci         不区分大小写
        
        insert into demo2(name, name2) values("a","a"),("b","b"),("A","A")
        
        create table demo3(name binary(3), name2 varchar(3)) default character set utf8;
        
        非二进制类型    varchar    数字代表可以存放3个字符
        二进制类型      binary     只能存储加起来超过数字的字节
        
        字段指定了字符集，没有指定校对规则      utf8
        
        如果指定了校对规则，没有指定字符集，     使用校对规则的字符集    ut8_bin   utf8
        
        如果字段没有指定校对规则，也没有指定字符集    依据表的字符集和校对规则
        
        表没有指定， 依据库的字符集
        
        库没有指定， mysql的默认字符集与校对规则


8. 字符集

    8.1 字符集校对规则
    
        show variables like "%character%"
        
            character_set_client     | gbk  
                                                     
            character_set_connection | gbk  
                                                     
            character_set_results    | gbk                                           
            
            
            character_set_database   | latin1    
                                                
            character_set_filesystem | binary    
                                                
            
            character_set_server     | latin1            默认操作字符集     
                                   
            character_set_system     | utf8                                
                      
            character_sets_dir       | E:\wamp\bin\mysql\mysql5.5.16\share\charsets\
            
        字段  表  库 mysql服务器
        
        show variables like "%collation%"
            
            collation_connection | gbk_chinese_ci    
            
            collation_database   | latin1_swedish_ci 
            
            collation_server     | latin1_swedish_ci
            
    
    8.2 设置字符集
        
        客户端字符集 连接字符集 和 返回结果集 字符集必须是一致的
        
        set names utf
        
        set character_set_results=utf8    设置返回结果集
        
        set character_set_collection=utf-8    设置连接字符集
        

9. SQL 注入风险
    
    宽字节有风险 set names gbk

    誠' or 1=1 limit 1 /*

    */#
    
    解决：
        $charset = set character_set_collection=gbk; character_set_results=gbk; character_set_client=binary






















