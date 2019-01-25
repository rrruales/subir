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
/**
 *
 * @author Ronald Ruales
 */
public class Encuentro {
    
    public String Conexion(String a, String b, String c, String d, String e){
        double d1 = Double.parseDouble(d);
        String orden="insert into Lugar(Nombre,Direccion,Tipo,Capacidad,Localidad_cap) values ('"+a+"','"+b+"','"+c+"',"+d1+",'"+e+"')";
        //conexion
        try{
                String dbClassName = "com.mysql.jdbc.Driver";
                String CONNECTION ="jdbc:mysql://18.188.142.231:3306/proyecto?autoReconnect=true&useSSL=false";
                Class.forName(dbClassName);
                // Properties for user and password. Here the user and password are both 'paulr'
                Properties p = new Properties();
                p.put("user","invitado");
                p.put("password","password");
                // Now try to connect
                Connection g = DriverManager.getConnection(CONNECTION,p);
                //crear objeto statement
                Statement myStatement=g.createStatement();
                //excecute query
                myStatement.executeUpdate(orden);
                System.out.println("Exito");
                g.close();
        }catch(Exception h){
                h.printStackTrace();
        }
        return "Éxito de registro de Venue";
    }
    
}
