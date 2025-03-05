CREATE DATABASE boat_booking;
USE boat_booking;

CREATE TABLE boats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO boats (name, type, price) VALUES 
('Sunset Cruiser', 'Luxury', 2500.00),
('Speed Rider', 'Speed Boat', 1500.00),
('Fishing King', 'Fishing Boat', 1200.00);


CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    boat_id INT NOT NULL,
    user_name VARCHAR(100) NOT NULL,
    booking_date DATE NOT NULL,
    FOREIGN KEY (boat_id) REFERENCES boats(id)
);

USE boat_booking;
SHOW TABLES;
DESCRIBE boats;
Select * from boat_booking;



CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

