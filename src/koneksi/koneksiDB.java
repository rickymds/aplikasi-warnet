package koneksi;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//package koneksi;

import java.sql.Connection;
import java.sql.DriverManager;
import javax.swing.JOptionPane;

/**
 *
 * @author iqbal
 */
public class koneksiDB {
    public static Connection on;
    
    public static Connection getKoneksi(){
        if (on == null){
            try {
                DriverManager.registerDriver(new com.mysql.jdbc.Driver());
                on = DriverManager.getConnection("jdbc:mysql://localhost/db_warnet", "root", "");
            } catch (Exception e){
                e.printStackTrace();
            }
        }
        return on;
    }
}
