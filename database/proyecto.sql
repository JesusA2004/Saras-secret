DROP DATABASE IF EXISTS bdSaras;
CREATE DATABASE bdSaras;
USE bdSaras;
show tables;

/* Crear tabla de usuarios
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    token_recordar VARCHAR(100) NULL,
    rol ENUM('admin', 'user'),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
); */

-- Crear tabla de clientes
CREATE TABLE clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NULL,
    direccion TEXT NOT NULL,
    idUsuario INT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idUsuario) REFERENCES users(id) ON DELETE CASCADE
);

-- Crear tabla de productos
CREATE TABLE productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    precio DECIMAL(8,2) NOT NULL,
    cantidad INT NOT NULL,
    categoria VARCHAR(255) NOT NULL,  -- Definir como VARCHAR
    created_at TIMESTAMP,
    updated_at TIMESTAMPS
);

-- Crear tabla de carritos
CREATE TABLE carrito (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sesion_id VARCHAR(255) NULL,
    idCliente INT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idCliente) REFERENCES clientes(id)  -- Cambiado a "clientes"
);

-- Crear tabla de ítems del carrito
CREATE TABLE carritoItems (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCarrito INT NOT NULL,
    idProducto INT NOT NULL,
    cantidad INT NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idCarrito) REFERENCES carrito(id) ON DELETE CASCADE,  
    FOREIGN KEY (idProducto) REFERENCES productos(id)  -- Cambiado a "productos"
);

-- Crear tabla de pedidos
CREATE TABLE pedidos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    estado ENUM('Pendiente', 'Completo', 'Cancelado'),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idCliente) REFERENCES clientes(id)  -- Cambiado a "clientes"
);

-- Crear tabla de ítems del pedido
CREATE TABLE pedidoItems (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPedido INT NOT NULL,
    idProducto INT NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(8,2) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idPedido) REFERENCES pedidos(id),  -- Cambiado a "pedidos"
    FOREIGN KEY (idProducto) REFERENCES productos(id)  -- Cambiado a "productos"
);

-- Crear tabla de envíos
CREATE TABLE envios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPedido INT NOT NULL,
    numSeguimiento VARCHAR(255) NOT NULL,
    transportista VARCHAR(255) NOT NULL,
    estado VARCHAR(255) NOT NULL,
    fechaEntrega DATE NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idPedido) REFERENCES pedidos(id)
);

-- Crear tabla de pagos
CREATE TABLE pagos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPedido INT NOT NULL,
    monto DECIMAL(10,2) NOT NULL,
    metodo ENUM('paypal', 'credit_card', 'debit_card', 'oxxo', 'apple_pay') NOT NULL,
    idTransaccion VARCHAR(255) NOT NULL,
    estado ENUM('Pendiente', 'Completo', 'Fallida'),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (idPedido) REFERENCES pedidos(id)  
);