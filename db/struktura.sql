-- Vytvorenie tabuľky pre správy z kontaktného formulára
CREATE TABLE IF NOT EXISTS spravy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meno VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sprava TEXT NOT NULL,
    cas TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
