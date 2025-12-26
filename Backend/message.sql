-- Suppression des tables si elles existent (ordre important)
DROP TABLE IF EXISTS cart_items;
DROP TABLE IF EXISTS carts;
DROP TABLE IF EXISTS items;
DROP TABLE IF EXISTS users;

-- =========================================================
-- Table : users
-- Rôle : stocker les utilisateurs et gérer les permissions
-- =========================================================
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('user', 'admin') DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================
-- Table : items
-- Rôle : stocker les pièces de tuning et accessoires auto
-- =========================================================
CREATE TABLE items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  category VARCHAR(100),
  price DECIMAL(10,2) NOT NULL,
  stock INT DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================================
-- Table : carts
-- Rôle : représenter le panier d’un utilisateur
-- Chaque utilisateur possède un panier unique
-- =========================================================
CREATE TABLE carts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT fk_carts_user
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE
);

-- =========================================================
-- Table : cart_items
-- Rôle : associer les produits à un panier
-- Relation many-to-many entre carts et items
-- =========================================================
CREATE TABLE cart_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cart_id INT NOT NULL,
  item_id INT NOT NULL,
  quantity INT DEFAULT 1,

  CONSTRAINT fk_cart_items_cart
    FOREIGN KEY (cart_id)
    REFERENCES carts(id)
    ON DELETE CASCADE,

  CONSTRAINT fk_cart_items_item
    FOREIGN KEY (item_id)
    REFERENCES items(id)
    ON DELETE CASCADE,

  CONSTRAINT uq_cart_item UNIQUE (cart_id, item_id)
);

-- =========================================================
-- Fin du schéma
-- =========================================================