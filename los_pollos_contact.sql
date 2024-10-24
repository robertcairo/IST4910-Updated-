-- Create the database
CREATE DATABASE los_pollos_contact;

-- Select the database to use
USE los_pollos_contact;

-- Create a table to store form submissions
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    service VARCHAR(50),
    country VARCHAR(50),
    subject TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
