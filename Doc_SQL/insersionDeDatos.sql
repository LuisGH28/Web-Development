use 13_GHL;

INSERT INTO Proveedor (idProveedor, Proveedor, Telefono) VALUES
	(1, 'Nescafe', '5522450941'),
    (2, 'Santa Clara', '3466235621'),
    (3, 'Alpura', '4322340139'),
    (4, 'Hersheys Cacao', '4523094532'),
    (5, 'Juan Valdez', '3412985643'),
    (6, 'Herseys', '4490548723');
    

 INSERT into Ingredientes (idIngredientes, Nombre, Presentacion, Cantidad, Presentacion_Total) values
 	(1, 'Cafe', '200g', 3, '600g'),
 	(2, 'Leche', '1 Litro', 6, '6 Litros'),
 	(3, 'Agua', '10 Litros', 4, '40 Litros'),
 	(4, 'Cacao en polvo', '200g', 3, '600g');

 INSERT into Ingredientes_Proveedores (idProveedores, idIngrediente, Nombre_Ingrediente) values
 	(1, 1, 'Cafe'),
 	(2, 2, 'Leche'),
 	(3, 2, 'Leche'),
 	(4, 4, 'Cacao en Polvo'),
 	(5, 1, 'Cafe');
INSERT into Producto(idProducto, Nombre, Presentacion_Producto, Precio) values 
 	(1, 'Cafe', '500ml', 30.00),
 	(2, 'Capucchino', '500ml', 50.00),
 	(3, 'Cafe Arte', '500ml', 150.00);
 
insert into Preparacion (idPreparacion, idIngredientes, Ingredientes, Cantidad_Utilizada) values
	(1, 1, 'Cafe', '5g'),
	(2, 2, 'Leche', '200ml'),
	(3, 3, 'Agua', '200ml'),
	(4, 4, 'Cacao en Polvo', '20g');

insert into Preparacion_Producto (idPreparaciones, idProductos, Nombre_Producto) values
	(1, 1 , 'Cafe'),
	(2, 1, 'Cafe'), 
	(3, 1, 'Cafe'),
	(1, 2, 'Capuchino'),
	(2, 2, 'Capuchino'),
	(4, 2, 'Capuchono'),
	(1, 1 , 'Cafe Arte'),
	(2, 1, 'Cafe Arte'), 
	(3, 1, 'Cafe Arte');
	
insert into Ticket (idTicket, idProducto, Producto, Cantidad, Fecha, Total) values
	(1, 2, 'Capuchino', 1, '2023-04-05', 50.00),
	(2, 3, 'Cafe Arte', 1, '2023-04-06', 150.00),
	(3, 2, 'Capuchino', 1, '2023-04-07', 50.00);

insert into Producto_Ticket (idTicket, idProducto, Nombre_Producto, Presentacion, Precio) values
	(1, 2, 'Capuchino', '500ml', 50.00),
	(2, 3, 'Cafe Arte', '500ml', 150.00),
	(3, 2, 'Capuchino', '500ml', 50.00);
	

