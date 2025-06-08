CREATE DATABASE paprikadigital;

CREATE TABLE project_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    project_type ENUM('website', 'mobile-app', 'desktop-app', 'other') NOT NULL DEFAULT 'website',
    description TEXT NOT NULL,
    budget_min DECIMAL(10, 2) NOT NULL,
    budget_max DECIMAL(10, 2) NOT NULL,
    timeline VARCHAR(255) NOT NULL,
    preferred VARCHAR(255) DEFAULT NULL,
    attached_file VARCHAR(255) DEFAULT NULL,
    status ENUM('pending', 'approved', 'finished') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP
);
