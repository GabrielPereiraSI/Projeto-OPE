
package view;


import db.ClienteDAO;

import java.awt.GridLayout;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import model.Cliente;

public class Consultar extends JFrame{
    private JButton buttonConsultar = new JButton("Consultar");
    private JLabel labelId = new JLabel("Digite o id");
    private JLabel labelNome = new JLabel("Nome");
    private JLabel labelEmail = new JLabel("Email");
    private JLabel labelTelefone = new JLabel("Telefone");
    private JLabel labelEndereco = new JLabel("Endereco");
    private JLabel labelSenha = new JLabel("Senha"); 
    private JLabel espaco = new JLabel(" ");
    private JLabel espaco2 = new JLabel(" ");
    private JLabel espaco3 = new JLabel(" ");
    private JLabel espaco4 = new JLabel(" ");
    private JTextField textId = new JTextField();
    private JTextField textNome = new JTextField();
    private JTextField textEmail = new JTextField();
    private JTextField textTelefone = new JTextField();
    private JTextField textEndereco = new JTextField();
    private JTextField textSenha = new JTextField();
    
    private Listener listener = new Listener();
    
    public Consultar(){
        GridLayout layout2 = new GridLayout(6,3);
       this.setLayout(layout2);
       this.add(labelId);
       this.add(textId);
       this.add(buttonConsultar);
       this.add(labelNome);
       this.add(textNome);
       this.add(espaco);
       this.add(labelTelefone);
       this.add(textTelefone);       
       this.add(espaco2);
       this.add(labelEndereco);
       this.add(textEndereco);
       this.add(espaco3);
       this.add(labelEmail);
       this.add(textEmail);
       this.add(espaco4);
       this.add(labelSenha);       
       this.add(textSenha);        
        
        
        buttonConsultar.addActionListener(listener);
        this.pack();
        this.setVisible(true);
        
        
    }
    
      private class Listener implements ActionListener{
        public void actionPerformed(ActionEvent e){
            Integer id = Integer.parseInt(textId.getText());

            
            
                
                    if(e.getSource() == buttonConsultar){
                    
                        try{
                        Cliente a = new ClienteDAO().consultar(id);
                        textNome.setText(a.getNome());
                        textEmail.setText(a.getEmail());
                        textTelefone.setText(a.getTelefone());
                        }catch(Exception err){
                            System.out.println(err);
                        }
                        
                    }
                            
        }            
    }
    
   
    
}
