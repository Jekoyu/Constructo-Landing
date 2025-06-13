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

-- Contoh Data Legalitas
INSERT INTO legalitas (jenis_legalitas, nomor_keterangan, tanggal) VALUES
('Akta Pendirian', 'No. 18, Tgl 20 Desember 2018', '2018-12-20'),
('SK Menteri Kehakiman (Kemenkumham)', 'AHU-0001965.AH.01.01.Tahun 2019', '2019-01-01'),
('SIUP (Izin Usaha Perdagangan)', '503/0107/B/DPMPSTP/2019', '2019-01-01'),
('TDP (Tanda Daftar Perusahaan)', '503/0124/B/DPMPSTP/2019', '2019-01-01'),
('NPWP', '90.108.971.4-417.000', NULL),
('SPPKP (PKP/Pengusaha Kena Pajak)', 'S-91PKP/WPJ.08/KP.0403/2022', '2022-03-04'),
('SBU Jasa Konstruksi', 'PB-UMKU: 81203100834700030001', NULL),
('SKDP (Domisili Perusahaan)', '530/1/1/PM-Kesos/2020', '2020-01-01'),
('BPJS Ketenagakerjaan', '1900000000633608', NULL),
('BPJS Kesehatan', '02241377', NULL);

-- Contoh Data Services
INSERT INTO services (name, description, image_url) VALUES
('Fasilitas Umum', 'Pekerjaan Fasilitas umum seperti Puskesmas Pemkab Musi Rawas, Puskesmas Poned Biru Biru Puskesmas, Tanjung Ucang, etc.', 'path_to_image.jpg');

-- Contoh Data Clients
INSERT INTO clients (name, description, city) VALUES
('PT. TEREOS FKS INDONESIA', 'PT. TEREOS FKS INDONESIA is a client specializing in various sectors.', 'Jakarta');

-- Contoh Data Projects
INSERT INTO projects (name, description, client_id, year, type) VALUES
('Repair/ Modifikasi Line comp. Air', 'Repair or modification of air compression line.', 1, 'Jan 2019 – Feb 2019', 'Commercial'),
('Installation Cover Rear Great Boiler', 'Installation of cover for rear great boiler.', 1, 'Jan 2019 – Feb 2019', 'Commercial'),
('Fabrication & Installation Pipe Condensate CWM', 'Fabrication and installation of pipe condensate for CWM system.', 1, 'Feb 2019 – Mar 2019', 'Commercial'),
('Modification Line Hydrant, Glucose, Ceria, Etc.', 'Modification of lines for hydrants, glucose, and ceria.', 1, 'Feb 2019 – Mar 2019', 'Commercial');
