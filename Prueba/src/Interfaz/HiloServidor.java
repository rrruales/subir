/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaz;

import Thrift.Servidor;
import org.apache.thrift.server.TServer;
import org.apache.thrift.server.TThreadPoolServer;
import org.apache.thrift.transport.TServerSocket;

/**
 *
 * @author Ronald Ruales
 */
public class HiloServidor implements Runnable {

    @Override
    public void run() {
        while(true){
            try{
                TServerSocket serverTransport = new TServerSocket(8000);
                Servidor.Processor processor = new Servidor.Processor(new Microservicio());
                TServer server = new TThreadPoolServer(new TThreadPoolServer.Args(serverTransport).processor(processor));
                System.err.println("Servidor en escucha puerto 7911..");
                server.serve();
            }catch(Exception e){
                System.out.println("No se puede ecuchar en el puerto 7911");
            }
        }}
    
}
