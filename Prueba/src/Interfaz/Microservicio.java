/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaz;

import Thrift.Servidor;
import org.apache.thrift.TException;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Properties;
import java.util.Scanner;

/**
 *
 * @author Ronald Ruales
 */
public class Microservicio implements Servidor.Iface {
    
    public static void main(String[] args) {
        HiloServidor hs = new HiloServidor();
        Thread t = new Thread(hs);
        t.start();
    }
    
    @Override
    public String Usuario(String dato1, String dato2, String dato3) throws TException {
       String estado;
       Cuenta x = new Cuenta();
        estado = x.Conexion(dato1, dato2, dato3);
        return estado;
    }

    @Override
    public String Venue(String var1, String var2, String var3, String var4, String comp) throws TException {
        String estado;
        Encuentro j = new Encuentro();
        estado = j.Conexion(var1, var2, var3, var4, comp);
        return estado;
    }

    @Override
    public String Evento(String rar1, String rar2, String rar3, String rar4, String conc) throws TException {
        String estado;
        Acontecimiento j = new Acontecimiento();
        estado = j.Conexion(rar1, rar2, rar3, rar4, conc);
        return estado;
    }

    @Override
    public String Login(String sas1, String sas2) throws TException {
        String estado;
        Logueo j = new Logueo();
        estado = j.Conexion(sas1,sas2);
        return estado;
    }

    @Override
    public List<String> Mostrar() throws TException {
        List<String> evento = new ArrayList<String>();
        Consulta j = new Consulta();
        evento = j.Mostrar();
        return evento;
    }
}
