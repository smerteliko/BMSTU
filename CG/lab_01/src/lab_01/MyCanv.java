package lab_01;

import javax.swing.*;
import java.awt.*;
import java.io.*;
import java.util.*;
import lab_01.*;

public class MyCanv extends Canvas{

    public MyCanv() {

        Canvas canv = new Canvas();
        canv.setSize(800, 600);
        canv.setBackground(Color.BLACK);
        canv.setVisible(true);
        canv.setFocusable(false);
    }
}
