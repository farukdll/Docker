CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'fpektas'@'%' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON wordpress.* TO 'fpektas'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY '12345';