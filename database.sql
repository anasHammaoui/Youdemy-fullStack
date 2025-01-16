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
	teacher_id INT,
	category_id INT,
	FOREIGN KEY (teacher_id) REFERENCES users(user_id) ON DELETE CASCADE,
	FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
CREATE TABLE tags(
	tag_id INT PRIMARY KEY AUTO_INCREMENT,
	tag_name varchar(20)
);
CREATE TABLE coursTags(
	tag_id INT,
	course_id INT,
	PRIMARY KEY (tag_id, course_id),
	FOREIGN KEY (tag_id) REFERENCES tags(tag_id) ON DELETE CASCADE,
	FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);
ALTER TABLE courses
ADD COLUMN thumbnail VARCHAR(255);
INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("ahmed","document",5,3,"https://placehold.co/600x400");
courses INSERT INTO courses(course_name,course_type,teacher_id,category_id,thumbnail)
 VALUES("dev from zero to hero","video",5,3,"https://placehold.co/600x400");
 SELECT * from users;
 SELECT * FROM courses;