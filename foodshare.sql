-- Create a new database
CREATE DATABASE IF NOT EXISTS FoodDonationDB;

-- Switch to the new database
USE FoodDonationDB;

-- Create a table for donors
CREATE TABLE IF NOT EXISTS Donors (
    donor_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pledge_amount DECIMAL(10, 2) DEFAULT 0,
    pickup_location VARCHAR(255)
);

-- Create a table for donation entries
CREATE TABLE IF NOT EXISTS Donations (
    donation_id INT AUTO_INCREMENT PRIMARY KEY,
    donor_id INT,
    donation_date DATE NOT NULL,
    donation_description TEXT,
    quantity INT NOT NULL,
    CONSTRAINT fk_donor FOREIGN KEY (donor_id) REFERENCES Donors(donor_id)
);

-- Create a table for receiving organizations
CREATE TABLE IF NOT EXISTS ReceivingOrganizations (
    organization_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact_person VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL
);

-- Create a table for received donations
CREATE TABLE IF NOT EXISTS ReceivedDonations (
    received_id INT AUTO_INCREMENT PRIMARY KEY,
    organization_id INT,
    donation_id INT,
    received_date DATE NOT NULL,
    received_quantity INT NOT NULL,
    CONSTRAINT fk_organization FOREIGN KEY (organization_id) REFERENCES ReceivingOrganizations(organization_id),
    CONSTRAINT fk_donation FOREIGN KEY (donation_id) REFERENCES Donations(donation_id)
);
