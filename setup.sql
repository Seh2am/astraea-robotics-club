CREATE DATABASE IF NOT EXISTS astraea_club;
USE astraea_club;

CREATE TABLE IF NOT EXISTS events (
    id VARCHAR(50) PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    event_date DATE NOT NULL,
    location VARCHAR(100),
    description TEXT
);

CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    student_id VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    event_title VARCHAR(100) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO events (id, title, event_date, location, description) VALUES 
('sirius-workshop', 'Sirius Workshop', '2026-08-01', 'Robotics Lab 2', 'A beginner-friendly workshop on basic robot components and motor control.'),
('antares-competition', 'Antares Competition', '2026-08-05', 'Main Auditorium', 'A team-based robotics competition focusing on navigation.'),
('elephant-mountain-trip', 'Elephant Mountain Field Trip', '2026-08-10', 'Elephant Mountain', 'Outdoor testing and team building field trip.');