drop table if exists leaderboard ;
drop table if exists quiz ;
drop table if exists registered ;
drop table if exists question ;
drop table if exists course ;
drop table if exists users ;


create table users(
    user_id int(100) not null auto_increment,
    user_name varchar(50) not null,
    type varchar(50) not null,
    dept varchar(50),
    pass varchar(50),
    email varchar(30),
    primary key (user_id)
);

ALTER TABLE users
DROP COLUMN email;

ALTER TABLE users
ADD email varchar(50);

create table course(
    course_id varchar(50) not null,
    course_name varchar(50) not null,
    user_id int(100) not null,
    primary key(course_id) ,
    foreign key(user_id ) references users(user_id)
    ON DELETE CASCADING
);
INSERT INTO `course` (`course_id`, `course_name`, `user_id`) VALUES ('cse3110', 'database', '5')
INSERT INTO `course` (`course_id`, `course_name`, `user_id`) VALUES ('cse3101', 'Theory of Computation', '5')

create table question(
    sub_id varchar(10),
    q_num int(20),
    qlevel int(20),
    ques varchar(100),
    op_1 varchar(50),
    op_2 varchar(50),
    op_3 varchar(50),
    op_4 varchar(50),
    ans varchar(50),
    marks int(30) check(marks<20),
    foreign key(sub_id ) references course(course_id)
    ON DELETE CASCADE
);

INSERT INTO `question` (`sub_id`, `q_num`, `qlevel`, `ques`, `op_1`, `op_2`, `op_3`, `op_4`, `ans`, `marks`) VALUES ('cse3110', '1', '1', 'What is SQL?', 'Structured Query Language', 'Standard Query Language', 'Specific Query Language', 'None', 'Structured Query Language', '1')


create table quiz(
    quiz_no int(50) ,
    user_id int(100),
    course_id varchar(50) not null,
    status varchar(50),
    total_ques int(30),
    total_mark int(30),
    duration int(20),
    primary key(user_id),
    foreign key(user_id) references users(user_id)
);
