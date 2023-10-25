CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    feedback_type VARCHAR(255) NOT NULL,
    comments TEXT NOT NULL
);
