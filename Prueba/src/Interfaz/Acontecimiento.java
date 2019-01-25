/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaz;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Properties;
import java.io.IOException;
import java.sql.ResultSet;

/**
 *
 * @author Ronald Ruales
 */
public class Acontecimiento {
    
    public String Conexion(String aa, String bb, String cc, String dd, String ee){
        String orden="select Localidad_cap from Lugar where Id="+bb; //conexion
             try{
                String dbClassName = "com.mysql.jdbc.Driver";
                String CONNECTION ="jdbc:mysql://18.188.142.231:3306/proyecto?autoReconnect=true&useSSL=false";
                Class.forName(dbClassName);
                // Properties for user and password. Here the user and password are both 'paulr'
                Properties p = new Properties();
                p.put("user","invitado");
                p.put("password","password");
                // Now try to connect
                Connection c = DriverManager.getConnection(CONNECTION,p);
                //crear objeto statement
                Statement myStatement=c.createStatement();
                //excecute query
                ResultSet myResultSet=myStatement.executeQuery(orden);
                String localidad="";
                while (myResultSet.next()){
                        localidad=myResultSet.getString("Localidad_cap");
                }

               String orden2="insert into Evento(Nombre,Lugar,Fecha,Hora,Costos) values ('"+aa+"','"+bb+"','"+cc+"','"+dd+"','"+ee+"')";
               myStatement.executeUpdate(orden2);
               String orden3="select * from Lugar where Id="+bb;
               myResultSet=myStatement.executeQuery(orden3);
               String capac;
               myResultSet.next();
               capac=myResultSet.getString("Localidad_cap");
               String[] parte;
               parte= localidad.split(" ");
               String Tot="";
               for (int i=0; i<parte.length;i++){
                        String texto=parte[i];
                        String [] num=texto.split("-");
                        Tot+=num[1]+" ";
               }
               String orden4="insert into Venta(Disponibilidad) values ('"+Tot+"')";
               myStatement.executeUpdate(orden4);
               System.out.println("Exito");
               c.close();
               }catch(Exception e){
                        e.printStackTrace();
               }
             return "Se ha registado el evento con éxito";
    }
}
