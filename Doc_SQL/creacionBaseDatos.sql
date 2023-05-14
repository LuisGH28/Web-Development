
CREATE database 13_GHL; 
use 13_GHL;

create table Proveedor(
  idProveedor int not null primary key,
  Proveedor varchar(80),
  Telefono varchar(40)
);

create table Ingredientes(
  idIngredientes int not null primary key,
  Nombre varchar(50),
  Presentacion varchar(50),
  Cantidad int not null, 
  Presentacion_Total varchar(50)
);

create table Ingredientes_Proveedores(
  idProveedores int not null, 
  idIngrediente int not null,
  Nombre_Ingrediente varchar (50),
  FOREIGN KEY (idProveedores) REFERENCES Proveedor(idProveedor),
  FOREIGN KEY (idIngrediente) REFERENCES Ingredientes(idIngredientes)
);

create table Preparacion(
  idPreparacion int not null primary key,
  idIngredientes int not null, 
  Ingredientes varchar(80),
  Cantidad_Utilizada varchar(40),
  FOREIGN KEY (idIngredientes) REFERENCES Ingredientes(idIngredientes)
);

create table Producto(
  idProducto int not null primary key,
  Nombre varchar(80),
  Presentacion_Producto varchar(80),
  Precio DOUBLE
);

create table Preparacion_Producto(
  idPreparaciones int not null,
  idProductos int not null,
  Nombre_Producto varchar(80),
  FOREIGN KEY (idPreparaciones) REFERENCES Preparacion(idPreparacion),
  FOREIGN KEY (idProductos) REFERENCES Producto(idProducto)
);

create table Ticket(
  idTicket int not null primary key,
  idProducto int not null,
  Producto varchar(80),
  Cantidad int not null,
  Fecha Date, 
  Total DOUBLE,
  FOREIGN KEY (idProducto) REFERENCES Producto(idProducto)
);

create table Producto_Ticket(
  idTicket int not null,
  idProducto int not null, 
  Nombre_Producto varchar(80),
  Presentacion varchar(40),
  Precio DOUBLE, 
  FOREIGN KEY (idTicket) REFERENCES Ticket(idTicket),
  FOREIGN KEY (idProducto) REFERENCES Producto(idProducto)
);
