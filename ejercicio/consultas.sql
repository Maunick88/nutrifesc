/*1. Consulta que calcule, con IVA incluido, la cuota que hay que cobrar a cada socio, al trimestre.*/
SELECT N_Socio, Nombre, Apellidos, (Cuota * 1.16) AS Cuota_Con_IVA
FROM Socios;

/*2. Ver a los socios de Las Palmas de Gran Canaria (localidad).*/
SELECT *
FROM Socios
WHERE Localidad = 'Las Palmas de Gran Canaria';

/*3. Ver los socios cuyo nombre empiece por 'J'.*/
SELECT *
FROM Socios
WHERE Nombre LIKE 'J%';

/*4. Ver los socios con apellido Blanco.*/
SELECT *
FROM Socios
WHERE Apellidos = 'Blanco';

/*5. Ordenar por localidad.*/
SELECT *
FROM Socios
ORDER BY Localidad;

/*6. Ver todos los socios que no son de Granada (provincia).*/
SELECT *
FROM Socios

WHERE Provincia <> 'Granada';

/*7. Ver todos los socios que tengan un apellido Perez y que no sean de La Coruña.*/
SELECT *
FROM Socios
WHERE Apellidos LIKE '%Perez%' AND Provincia <> 'La Coruña';

/*8. Socios no federados nivel de juego medio.*/
SELECT *
FROM Socios
WHERE Nivel_Juego = 'Medio' AND Federado = 'No';

/*9. Socios de Ponferrada y Yanguas.*/
SELECT *
FROM Socios
WHERE Localidad IN ('Ponferrada', 'Yanguas');

/*10. Socios que no sean de la Provincia de Badajoz.*/
SELECT *
FROM Socios
WHERE Provincia <> 'Badajoz';

/*11. Socios donde su cuota esté entre 5 y 15 euros.*/
SELECT *
FROM Socios
WHERE Cuota BETWEEN 5 AND 15;

/*12. Los socios de nivel de juego medio ordenados ascendentemente por el apellido.*/

SELECT *
FROM Socios
WHERE Nivel_Juego = 'Medio'
ORDER BY Apellidos ASC;

/*13. La fecha de alta de los socios que se llamen Fernando.*/
SELECT Fecha_Alta
FROM Socios
WHERE Nombre = 'Fernando';

/*14. Apellido y teléfono de los socios que se llamen Antonio o Santiago.*/
SELECT Apellidos, Teléfono
FROM Socios
WHERE Nombre IN ('Antonio', 'Santiago');

/*15. N_Socio, Nombre, Apellidos de los socios de la poblacion de Granada ordenadas
descendentemente.*/
SELECT N_Socio, Nombre, Apellidos
FROM Socios
WHERE Poblacion = 'Granada'
ORDER BY Apellidos DESC;

/*16. Muestra nombre dirección y teléfono de los socios cuyo número esté entre 992 y 994.*/
SELECT Nombre, Dirección, Teléfono
FROM Socios
WHERE N_Socio BETWEEN 992 AND 994;