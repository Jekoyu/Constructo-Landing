CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255)
);

-- Tabel Legalitas
CREATE TABLE legalitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_legalitas VARCHAR(255) NOT NULL,
    nomor_keterangan VARCHAR(255) NOT NULL,
    file_path VARCHAR(255),
    tanggal DATE
);

-- Tabel Services (Layanan)
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255)
);

-- Tabel Clients (Klien)
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    city VARCHAR(255)
);

-- Tabel Projects
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    client_id INT NOT NULL,
    year VARCHAR(20),
    type VARCHAR(255),
    FOREIGN KEY (client_id) REFERENCES clients(id)
);
