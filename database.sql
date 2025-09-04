CREATE TABLE authors (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    status SMALLINT NOT NULL DEFAULT 1 CHECK (status IN (0, 1))
);

INSERT INTO authors (name, surname, username, email, password, status) VALUES
('John', 'Doe', 'johndoe', 'johndoe@example.com', 'password123', 1),
('Jane', 'Smith', 'janesmith', 'jane.smith@example.com', 'password123', 1),
('Michael', 'Johnson', 'mikej', 'michael.johnson@example.com', 'password123', 1),
('Emily', 'Brown', 'emilyb', 'emily.brown@example.com', 'password123', 1),
('David', 'Wilson', 'davidw', 'david.wilson@example.com', 'password123', 1),
('Sarah', 'Davis', 'sarahd', 'sarah.davis@example.com', 'password123', 1),
('Chris', 'Martinez', 'chrism', 'chris.martinez@example.com', 'password123', 1),
('Laura', 'Garcia', 'laurag', 'laura.garcia@example.com', 'password123', 1),
('James', 'Rodriguez', 'jamesr', 'james.rodriguez@example.com', 'password123', 1),
('Anna', 'Lopez', 'annal', 'anna.lopez@example.com', 'password123', 1),
('Robert', 'Taylor', 'robertt', 'robert.taylor@example.com', 'password123', 1),
('Linda', 'Anderson', 'lindaa', 'linda.anderson@example.com', 'password123', 1),
('Kevin', 'Thomas', 'kevint', 'kevin.thomas@example.com', 'password123', 1),
('Nancy', 'Hernandez', 'nancyh', 'nancy.hernandez@example.com', 'password123', 1),
('Brian', 'Moore', 'brianm', 'brian.moore@example.com', 'password123', 1);