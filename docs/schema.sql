create TABLE job_post (
  id BIGINT AUTO_INCREMENT,
  title varchar(255),
  posted_by_id BIGINT,
  job_type_id INT,
  job_description VARCHAR(60000),
  job_location_id BIGINT,
  is_active CHAR(1),
  PRIMARY KEY (id)
);
create table job_type(
  id BIGINT AUTO_INCREMENT,
  job_type VARCHAR(64),
  PRIMARY KEY (id)
);
create table skills(
  id INT AUTO_INCREMENT,
  skill_name VARCHAR(64),
  PRIMARY KEY (id)
);
create table job_application_activity (
  user_id BIGINT,
  job_post_id BIGINT,
  application_date TIMESTAMP,
  CONSTRAINT uc_application UNIQUE (user_id, job_post_id)
);
create table job_location (
  id BIGINT AUTO_INCREMENT,
  street_address VARCHAR (128),
  city VARCHAR (64),
  state VARCHAR (64),
  country VARCHAR (64),
  PRIMARY KEY (id)
);
create table skill_list(
  job_post_id BIGINT,
  id_1 INTEGER,
  id_2 INTEGER,
  id_3 INTEGER,
  id_4 INTEGER,
  id_5 INTEGER,
  PRIMARY KEY (job_post_id)
)