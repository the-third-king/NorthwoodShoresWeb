/*Create Database*/
CREATE DATABASE northwoord_shores;

/*Create admin table and insert values*/
CREATE TABLE admin(
    username VARCHAR(50) NOT NULL,
    pword VARCHAR(50) NOT NULL,
    PRIMARY KEY (username)
);
INSERT INTO admin (username, pword) VALUES ('admin', 'admin');


/*Create site table and insert values*/
CREATE TABLE site(
    id INT(4) NOT NULL AUTO_INCREMENT,
    available boolean NOT NULL,
    type VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO site (available, type) VALUES (true, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (true, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (true, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (false, 'daily');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (true, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');
INSERT INTO site (available, type) VALUES (false, 'seasonal');

