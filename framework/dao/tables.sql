

//分类表
create table ask_category(
	cat_id int primary key auto_increment comment '分类序号',
	cat_name varchar(32) comment '分类名称',
	cat_logo varchar(128) comment '分类图标',
	cat_desc varchar(64) comment '分类描述',
	parent_id int comment '父类序号'
)