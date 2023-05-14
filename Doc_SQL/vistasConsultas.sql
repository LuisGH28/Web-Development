use 13_GHL;

#Creacion de la vista que muestre los productos con su respectivo precio

create view precioProductos as Select Producto.Nombre, Producto.Presentacion_Producto, Producto.Precio From Producto order by Precio;

select * from precioProductos;

#Creacion de la vista que Genere el Ticket con la presentacion el producto adquirido

Create view ticketPresentacion as Select Ticket.idTicket, Ticket.Producto, Ticket.Cantidad, Producto_Ticket.Presentacion, Ticket.Fecha, Ticket.Total From Ticket inner join Producto_Ticket on Ticket.idTicket = Producto_Ticket.idTicket;

select * from ticketPresentacion;

#Creacion de la vista que nos informa de cuantos productos se vendieron en una fecha especifica

Create view reporteVentaPorFechas as Select Producto, sum(case when Fecha = "2023-04-05" then Cantidad else 0 end) as Venta_05, sum(case when Fecha = "2023-04-07" then Cantidad else 0 end) as Venta_07 From Ticket Group by Producto;

select * from reporteVentaPorFechas;



