var cadena=prompt('Ingrese una cadena:','');
  document.writeln('La cadena ingresada es:'+cadena);
  document.writeln('<br>');
  document.writeln('La cantidad de caracteres son:'+cadena.length);
  document.writeln('<br>');
  document.writeln('El primer carácter es:'+cadena.charAt(0));
  document.writeln('<br>'); 
  document.writeln('Los primeros 3 caracteres son:'+cadena.substring(0,3));
  document.writeln('<br>'); 
  if (cadena.indexOf('hola')!=-1)
    document.writeln('Se ingresó la subcadena hola');
  else 
    document.writeln('No se ingresó la subcadena hola');
  document.writeln('<br>'); 
  document.writeln('La cadena convertida a mayúsculas es:'+cadena.toUpperCase());
  document.writeln('<br>');
  document.writeln('La cadena convertida a minúsculas es:'+cadena.toLowerCase());
  document.writeln('<br>'); 
