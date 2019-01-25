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
public class Logueo {
    public String Conexion(String aaa, String bbb){
        String orden="Select * FROM Usuario";
   //conexion
    try{
    String dbClassName = "com.mysql.jdbc.Driver";
    String CONNECTION ="jdbc:mysql://18.188.142.231/proyecto?autoReconnect=true&useSSL=false";
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
    String Usuario="";
    String Contrase="";
    while (myResultSet.next()){
        if((myResultSet.getString("Usuario")).equals(aaa)){
        Usuario="T";
        }
        if((myResultSet.getString("Pass")).equals(bbb)){
        Contrase="T";
        }
    }
    System.out.println("Exito");
    c.close();
    if(Usuario.equals("T") && Contrase.equals("T")){
        System.out.println("Ingreso EXITOSO!");
    }else{
        System.out.println("Credenciales INCORRECTAS");
    }

    }catch(Exception e){
      e.printStackTrace();
    }
    return "Sesión Iniciada Correctamente";
    }
}
