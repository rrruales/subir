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
public class Cuenta {
    
    public String Conexion(String x, String y, String z){
        String orden="insert into Usuario(Nombre,Usuario,Pass) values ('"+x+"','"+y+"','"+z+"')";
        //conexion
        try{
        String dbClassName = "com.mysql.jdbc.Driver";
        String CONNECTION ="jdbc:mysql://18.188.142.231:3306/proyecto";
        Class.forName(dbClassName);
        System.err.println("vamos bien");
        // Properties for user and password. Here the user and password are both 'paulr'
        Properties p = new Properties();
        p.put("user","invitado");
        p.put("password","password");
        // Now try to connect
        Connection c = DriverManager.getConnection(CONNECTION,p);
        //crear objeto statement
        Statement myStatement=c.createStatement();
        //excecute query
        //myStatement.executeUpdate(orden);
        System.out.println("Exito");
        c.close();
        }catch(Exception e){
         e.printStackTrace();
        }
        return "Se ha registrado con éxito";
    }
}
