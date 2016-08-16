数据库数据操作

标签（空格分隔）：

--数据操作-

在此输入正文



第一题
CREATE TABLE `tp_mailList_position` (
  `id` varchar(255) NOT NULL COMMENT '职位ID',
  `name` varchar(255) DEFAULT NULL COMMENT '职位名称',
  `wages` decimal(10,0) DEFAULT NULL COMMENT '工资',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `tp_maiList_department` (
  `id` varchar(255) NOT NULL COMMENT '部门ID',
  `name` varchar(255) NOT NULL COMMENT '部门名称',
  `manager` varchar(255) DEFAULT NULL COMMENT '部门经理',
  `address` varchar(255) DEFAULT NULL COMMENT '部门地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `tp_mailList_staff` (
  `id` char(255) NOT NULL COMMENT '员工ID',
  `name` varchar(20) NOT NULL COMMENT '姓名',
  `department` varchar(255) NOT NULL COMMENT '部门',
  `age` tinyint(4) NOT NULL COMMENT '年龄',
  `sex` char(255) NOT NULL COMMENT '性别',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `ipone` char(255) NOT NULL COMMENT '电话',
  `email` varchar(255) DEFAULT NULL COMMENT '邮件',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


第二题
create table student(
    -> xueHao char(20) primary key,
    -> name varchar(20) not null,
    -> ages tinyint,
    -> sex char(10),
    -> home varchar(50) not null,
    -> phoneNumber varchar(11) not null);创建表结构

alter table student add xueLi varchar(25);//添加学历
alter table student drop home;//删除家庭
insert into student (xueHao,name,ages,sex,phoneNumber,xueLi) values(1,'A',22,'男',123456,'小学');//插入第一条

insert into student (xueHao,name,ages,sex,phoneNumber,xueLi) values(2,'B',21,'男',119,'中学');//插入第二条

 insert into student (xueHao,name,ages,sex,phoneNumber,xueLi) values(3,'C',23,'男',110,'高中');//插入第三条

 insert into student (xueHao,name,ages,sex,phoneNumber,xueLi) values(4,'D',18,'女',110,'大学');//插入第四条

update student set xueLi='大专' where phoneNumber like '11%';//修改学生表的数据 11开头的电话 学历改为大专 like 后面不用[]

delete from student where name='C'and sex='男';//删除学生表的数据以C开头，性别为男的记录删除

 select name,xueHao from student where ages<22 and xueLi='大专';//查询学生表的数据，将年龄小于22与为大专的！显示名字和学号

 select * from student where xueHao<=(select count(*) from student)*0.25;//查询学生表的数据，列出前25%的纪录

select name,sex,ages from student order by ages desc;//查询出所有学生的姓名，性别，年龄降序排序

select sex,avg(ages) from student group by sex;//按照性别进行分组查询所有的平均年龄

第三题
create table point
( userNo varchar(20) not null comment '学号',  
 courseNo varchar(20)  not null comment '课程编号', 
 grade int(3) not null comment '分数', 
 primary key(userNo,courseNo));


create table course(
 courseNo varchar(20) primary key not null comment '课程编号', 
courseName varchar(15) not null comment '课程名称');

create table user( 
userNo varchar(20) primary key not null comment '学号', 
 userName varchar(20) not null comment '学员名称', 
 currentUnit char(20) not null comment '所属单位', 
 age char(4) comment '性别');


第一种方法select user.userNo,user.userName from user,point,course where user.userNo=point.userNo and course.courseNo=point.courseNo and courseName='税收基础';//通过查询课程名称为’税收基础’的学号和名字

第二种方法 select user.userNo,user.userName from point join course on(point.courseNo=course.courseNo) join user on (user.userNo=point.userNo) where courseName='税收基础'; //通过查询课程名称为’税收基础’的学号和名字


第一种方法Select user.userName,user.currentUnit from point join course on(point.courseNo=course.courseNo)join user on (user.userNo=point.userNo) where course.courseNo='C2';//通过查询课程编号为’C2’的学员名称和所属单位

第二种方法：select user.userName,user.currentUnit from point,user,course where point.courseNo=course.courseNo and point.userNo=user.userNo and course.courseNo='C2';//通过查询课程编号为’C2’的学员名称和所属单位

第一种方法select user.userName,user.currentUnit from point,user,course where point.courseNo=course.courseNo and point.userNo=user.userNo and not course.courseNo='C5';
//通过查询不选课程编号为’C5’的学员名称和所属单位

第二种方法Select user.userName,user.currentUnit from point join course on(point.courseNo=course.courseNo)join user on (user.userNo=point.userNo) where  not course.courseNo='C5';
//通过查询不选课程编号为’C5’的学员名称和所属单位



select user.userName,user.currentUnit from user where userNo in( select userNo from point group by userNo having count(1)=(select count(1) from course));
//查询选修全部课程的学员姓名和所属单位


select courseNo,count(userNo) from point group by courseNo;查询每门课程的人数
select count(distinct userNo) from point;查询选修了课程的人数


select user.userNo,user.currentUnit from user,point where user.userNo=point.userNo group by user.userNo,user.currentUnit having count(point.courseNo)>5;//查询选课超过5门的人数

第四题
创建一个赏罚功能
1.学生信息表 2.赏罚情况表 3，赏项表 4.罚项表
Select student.学号,student.姓名,student.奖金,student.处罚 from学生信息表 left join 赏罚情况表 on (学生信息表.id=赏罚情况表.id) join 赏项表 on(赏罚情况表.赏id=赏项表.赏id) join 罚项表 on (赏罚情况表.罚id=罚项表.罚id) where......;


