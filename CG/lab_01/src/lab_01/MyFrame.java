package lab_01;


import javax.swing.*;
import java.awt.*;
import java.io.*;
import java.util.*;
import lab_01.*;


public class MyFrame extends JFrame{

    JFrame mainFrame = new JFrame("Lab_01");
    JPanel mainPanel = new JPanel();
    public MyFrame() {

        mainFrame.setSize(800,600);
        mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        mainFrame.setLocationRelativeTo(null);
        mainFrame.setResizable(false);
        mainFrame.setVisible(true);
        mainFrame.add(mainPanel);

    }
    public void MyPanel() {
        JButton button_1 = new JButton("hello");
        JButton buttpn_2 = new JButton("world");
        mainFrame.add()
    }
    public void MyTextField() {

    }
}