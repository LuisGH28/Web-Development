use 13_GHL;

#Mostrar los Productos junto con su precio ordenado de  menor a mayor (Consulta Simple).

Select Producto.Nombre, Producto.Presentacion_Producto, Producto.Precio From Producto order by Precio;


#Generar Ticket junto la presentacion del producto adquirido (Consulta Multitabla).

Select Ticket.idTicket, Ticket.Producto, Ticket.Cantidad, Producto_Ticket.Presentacion, Ticket.Fecha, Ticket.Total From Ticket inner join Producto_Ticket on Ticket.idTicket = Producto_Ticket.idTicket;

#Cuanto dinero se genero de la venta de los Capuchinos (Consulta con Funciones Agregadas).

Select sum(Total), Producto From Ticket where Producto = "Capuchino";

#Listado de los productos vendidos en una fecha especifica (Consulta de Tablas Cruzadas)

Select Producto, sum(case when Fecha = "2023-04-05" then Cantidad else 0 end) as Venta_05, sum(case when Fecha = "2023-04-07" then Cantidad else 0 end) as Venta_07 From Ticket Group by Producto;

