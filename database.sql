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
 UPDATE courses
	SET course_cdn = 'https://mp4-c.udemycdn.com/2023-07-01_08-36-26-10e6d09f5a18ac63c7354216693383e5/2/WebHD_720p.mp4?Expires=1737213556&Signature=7nQ9Cdo4ma3TBJxxLtmzoP17hljZY~7LF281Bl~lpmF5Se2t9WryZudcSz0ztG10p9px0KhH-kI831MF9Wcedc0i-8b5lRO-xXSYnTbQwIVLfzqWkr~13wfdS-UcN7peKi90B8PW7cO5uBiY8B17N6BGDmGi0Fuqv-aOgZFK18bm7kc-50lvWUEUyckoW5f9kdLKa5SPqQrY~f6~C0KxNuYYnt1xUZAFFVtA2MsdBmQROYJKz1xZx2HEzwbRLgxQ7QIBhZoD00hqwnNLAXmQkH9iX74F7Ofpv07cW2GPzjgE60Be5lpzzwZL8kgyrTWOJDMEMh3Ybxjko-vw3JNm4A__&Key-Pair-Id=K3MG148K9RIRF4' WHERE course_type = 'video';
UPDATE courses
SET course_cdn = 'https://icseindia.org/document/sample.pdf' WHERE course_type = 'document';