CREATE DATABASE IF NOT EXISTS computer_service
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE computer_service;

CREATE TABLE IF NOT EXISTS services (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title_lv VARCHAR(180) NOT NULL,
    title_en VARCHAR(180) NOT NULL,
    title_ru VARCHAR(180) NOT NULL,
    description_lv TEXT NOT NULL,
    description_en TEXT NOT NULL,
    description_ru TEXT NOT NULL,
    category VARCHAR(60) NOT NULL DEFAULT 'general',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS prices (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    service_lv VARCHAR(180) NOT NULL,
    service_en VARCHAR(180) NOT NULL,
    service_ru VARCHAR(180) NOT NULL,
    unit_lv VARCHAR(80) NOT NULL,
    unit_en VARCHAR(80) NOT NULL,
    unit_ru VARCHAR(80) NOT NULL,
    price_label VARCHAR(80) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO prices (service_lv, service_en, service_ru, unit_lv, unit_en, unit_ru, price_label) VALUES
('Operētājsistēmas instalēšana', 'Operating system installation', 'Установка операционной системы', 'par darbu', 'per job', 'за работу', 'no 35 €'),
('Vīrusu pārbaude un noņemšana', 'Virus scan and removal', 'Проверка и удаление вирусов', 'par darbu', 'per job', 'за работу', 'no 25 €'),
('Datora tīrīšana un termopastas maiņa', 'PC cleaning and thermal paste replacement', 'Чистка ПК и замена термопасты', 'par datoru', 'per computer', 'за компьютер', 'no 30 €'),
('SSD uzstādīšana', 'SSD installation', 'Установка SSD', 'par darbu', 'per job', 'за работу', 'no 20 €'),
('Ubiquiti / UniFi tīkla konfigurēšana', 'Ubiquiti / UniFi network configuration', 'Настройка сети Ubiquiti / UniFi', 'pēc vienošanās', 'by agreement', 'по согласованию', 'pēc vienošanās');
