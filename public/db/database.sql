-- Active: 1669529160937@@127.0.0.1@3306@db_usuarios
CREATE TABLE tb_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);
SELECT * FROM tb_usuarios;
CREATE DATABASE db_usuarios;

USE db_usuarios;
DROP DATABASE db_usuarios;


SELECT db_usuarios;