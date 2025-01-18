CREATE DATABASE youdemy;
USE youdemy;
CREATE TABLE users(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	full_name VARCHAR(50),
	email VARCHAR(50),
	user_password VARCHAR(255),
	user_role ENUM('admin','teacher','student')
);
INSERT INTO users(full_name, email, user_password, user_role) VALUES ("anas hammaoui","anas@gmail.com","12345678","teacher");
INSERT INTO users(full_name, email, user_password, user_role) VALUES ("yassine","admin@gmail.com","12345678","admin");
CREATE TABLE categories(
	category_id int PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(50),
	admin_id INT,
	FOREIGN KEY (admin_id) REFERENCES users(user_id) ON DELETE CASCADE
);
SELECT * FROM categories;
INSERT INTO categories(category_name, admin_id)
 VALUES ("web dev",6);
CREATE TABLE courses(
	course_id INT PRIMARY KEY AUTO_INCREMENT,
	course_name VARCHAR(70),
	course_type ENUM('video', 'document'),
	teacher_id	 INT,
	category_id INT,
	FOREIGN KEY (teacher_id) REFERENCES users(user_id) ON DELETE CASCADE,
	FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
CREATE TABLE enrollement(
	enroll_id INT PRIMARY key AUTO_INCREMENT,
	student_id INT, 
	course_id INT,
	enroll_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (student_id) REFERENCES users(user_id) ON DELETE CASCADE,
	FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);
SELECT * FROM enrollement;
CREATE TABLE tags(
	tag_id INT PRIMARY KEY AUTO_INCREMENT,
	tag_name varchar(20)
);
SELECT * FROM tags;
INSERT INTO tags(tag_name) VALUE ("test");
INSERT INTO tags(tag_name) VALUE ("dev");
INSERT INTO tags(tag_name) VALUE ("web");
CREATE TABLE coursTags(
	tag_id INT,
	course_id INT,
	PRIMARY KEY (tag_id, course_id),
	FOREIGN KEY (tag_id) REFERENCES tags(tag_id) ON DELETE CASCADE,
	FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);
INSERT INTO coursTags(tag_id,course_id) VALUE (1,16);
INSERT INTO coursTags(tag_id,course_id) VALUE (2,16);
INSERT INTO coursTags(tag_id,course_id) VALUE (3,16);
ALTER TABLE courses
ADD COLUMN thumbnail VARCHAR(255);
INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("ahmed","document",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("dev from zero to hero","document",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("yasssin","document",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("moha","document",5,3,"https://placehold.co/600x400");
 
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("ahmed","video",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("dev from zero to hero","video",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("yasssin","video",5,3,"https://placehold.co/600x400");
 INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("moha","video",5,3,"https://placehold.co/600x400");
 SELECT * from users;
 SELECT * FROM courses;
 DELETE FROM courses;
 ALTER TABLE courses 
 ADD course_desc VARCHAR(255);
 ALTER TABLE courses
 ADD course_cdn VARCHAR(255);
 ALTER TABLE courses
 CHANGE course_cdn course_cdn TEXT;
 UPDATE courses
 SET course_desc = 'the best course in the world is ready to use';
 
SELECT distinct courses.course_name, courses.course_desc, courses.course_id, courses.course_type, courses.thumbnail, 
       users.full_name, categories.category_name
FROM courses
INNER JOIN users ON users.user_id = courses.teacher_id
INNER JOIN categories ON categories.category_id = courses.category_id
JOIN coursTags ON coursTags.course_id = courses.course_id
JOIN tags ON tags.tag_id = coursTags.tag_id
WHERE tags.tag_name LIKE '%%' AND course_type = 'video'
LIMIT 2 OFFSET 0;

SELECT * FROM tags JOIN courstags JOIN courses ON courses.course_id = courstags.course_id;