-- Create database
CREATE DATABASE IF NOT EXISTS LaptopShop DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE LaptopShop;

-- Create table for laptops
CREATE TABLE IF NOT EXISTS Laptops (
  id INT AUTO_INCREMENT PRIMARY KEY,
  brand VARCHAR(100) NOT NULL,
  model VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  stock INT NOT NULL,
  description TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample data
INSERT INTO Laptops (brand, model, price, stock, description) VALUES
('Dell', 'XPS 13', 1200.00, 10, '13-inch ultrabook with Intel i7'),
('Apple', 'MacBook Air M2', 1400.00, 5, 'Lightweight laptop with Apple Silicon'),
('Asus', 'ROG Zephyrus', 2000.00, 3, 'Gaming laptop with NVIDIA RTX graphics');
