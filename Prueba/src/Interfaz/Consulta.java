/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaz;

import java.util.List;
import java.util.Properties;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Properties;
import java.io.IOException;
import java.sql.ResultSet;
import java.util.*;

/**
 *
 * @author Ronald Ruales
 */
public class Consulta {
        public  List<String> Mostrar(){
			String orden="SELECT * FROM Eventos";
                        
			List<String> resd = new ArrayList<String>();
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
				Connection c = DriverManager.getConnection(CONNECTION,p);
				//crear objeto statement
				Statement myStatement=c.createStatement();
				//excecute query
				ResultSet myResultSet=myStatement.executeQuery(orden);
                	
                    List<String> evento = new ArrayList<String>();
				List<String> cos = new ArrayList<String>();
				List<String> d = new ArrayList<String>();
                while (myResultSet.next()){
                        evento.add(myResultSet.getString("Nombre"));
						cos.add(myResultSet.getString("Costos"));                                              
                }
				String orden1="SELECT Disponibilidad FROM Venta";
				myResultSet=myStatement.executeQuery(orden1);
				while (myResultSet.next()){
                        d.add(myResultSet.getString("Disponibilidad"));
                }
                            List<String> res = new ArrayList<String>(); 
			for(int i=0;i<evento.size();i++){
				res.add(evento.get(i)+"/"+d.get(i)+"/"+cos.get(i));
			}    
                        res=resd;
				c.close();
			}catch(Exception e){
				e.printStackTrace();
			}
                       
			 
			return resd;
			
		}
}
