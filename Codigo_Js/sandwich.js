function sale() {
  var sumPrice = 0;
  var nameOne = "Torta de Jamon"; 
  var priceOne = 30;
  var orderOne = document.getElementById("pedidoUno").value;
  var amoutOne = document.getElementById("cantidadUno").value;
  sumPrice += amoutOne * priceOne;

  var nameTwo = "Torta Cubana"; 
  var priceTwo = 75;
  var orderTwo = document.getElementById("orderTwo").value;
  var amoutTwo = document.getElementById("amoutTwo").value;
  sumPrice += amoutTwo * priceTwo;

  var nameThree = "Torta Doble Cubana"; 
  var priceThree = 150;
  var orderThree = document.getElementById("orderThree").value;
  var amoutThree = document.getElementById("amoutThree").value;
  sumPrice += amoutThree * priceThree;

  var nameFour = "Torta de Milanesa"; 
  var priceFour = 40;
  var orderFour = document.getElementById("orderFour").value;
  var amoutFour= document.getElementById("amoutFour").value;
  sumPrice += amoutFour * priceFour;

  var nameFive = "Michi Hamburguesa"; 
  var priceFive = 50;
  var orderFive = document.getElementById("orderFive").value;
  var amoutFive = document.getElementById("amoutFive").value;
  sumPrice += amoutFive * priceFive;

  document.write("<p style='text-align:center'></p>");
  document.write(
    "<p align='center'><i><font size='25' color=#BF7B3F> Recibo:"
  );
  
  document.write("<table style='width:90%' align='center' border='1'>");
  document.write("<th align='center' >CANTIDAD </th>");
  document.write("<th align='center' >TORTA </th>");
  document.write("<th align='center' >PICANTE </th>");
  document.write("<th align='center' >PRECIO </th>");
  document.write("<th align='center' >IMPORTE </th>");

  if (amoutOne != 0) {
    document.write("<tr>");
    seeSandwich(amoutOne, nameOne, orderOne, priceOne);
    document.write("</tr>");
  }

  if(amoutTwo != 0){
    document.write("<tr>");
    seeSandwich(amoutTwo, nameTwo, orderTwo, priceTwo);
    document.write("</tr>")
  }

  if(amoutThree != 0){
    document.write("<tr>");
    seeSandwich(amoutThree, nameThree, orderThree, priceThree);
    document.write("</tr>")
  }

  if(amoutFour != 0){
    document.write("<tr>");
    seeSandwich(amoutFour, nameFour, orderFour, priceFour);
    document.write("</tr>")
  }

  if(amoutFive != 0){
    document.write("<tr>");
    seeSandwich(amoutFive, nameFive, orderFive, priceFive);
    document.write("</tr>")
  }

  document.write("</table>");
  document.write(
    "<a 'font-size=25px' align='center' > Su total es: $ " + sumPrice + "</a>"
  );
}



function seeSandwich(amoutSandwich, nameSandwich, spicy, priceSandwich) {
  document.write("<td align='center' > " + amoutSandwich + "</td>");
  document.write("<td align='center' > " + nameSandwich + "</td>");
  document.write("<td align='center' > " + spicy + "</td>");
  document.write("<td align='center' > " + priceSandwich + ".00</td>");
  document.write(
    "<td align='center' > " + amoutSandwich * priceSandwich + ".00</td>"
  );
}
