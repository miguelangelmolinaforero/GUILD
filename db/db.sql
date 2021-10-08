CREATE TABLE Usuario (

    Nombre Varchar(20),
    Apellido Varchar(20),
    Num_Identificacion Int,
    Ciudad Varchar(30),
    País Varchar(30),
    Codigo_Postal Int,
    Telefono int,
    Fecha_Registro Date,
    Email Varchar(50),
    Codigo_Cliente Int
);

CREATE TABLE Vendedor (
    Nombre Varchar(20),
    Apellido Varchar(20),
    Num_Identificacion Int,
    Ciudad Varchar(30),
    Direccion Varchar(30),
    Codigo_Postal Int,
    Telefono int,
    Email Varchar(50),
);


CREATE TABLE Persona_de_Contacto (
    Nombre_Contacto Varchar(30),
    Telefono int,
    Campo Varchar (20)
);

CREATE TABLE Pedido (
    ID_Pedido int,
    Fecha_pedido date,
    Pais_Entrega Varchar(30),
    Total double
);


CREATE TABLE Producto (
    ID_Producto int,
    Nombre Varchar(50),
    Descripcion Varchar(120),
    Precio_Unitario double
);


CREATE TABLE Producto_Precio (
    ID_Producto int,
    Precio_Unitario double,
    Campo Varchar(20)
);


CREATE TABLE Categoria_Producto (
    ID_Categoria int,
    Nombre Varchar(20),
    Descripcion Varchar(120)
);