
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

public class Atualizar  extends JFrame{
    private JButton buttonBuscar = new JButton("Buscar");
    private JButton buttonAtualizar = new JButton("Atualizar");
    private JLabel labelId = new JLabel("Digite o id");
    private JLabel labelNome = new JLabel("Nome");
    private JLabel labelEmail = new JLabel("Email");
    private JLabel labelTelefone = new JLabel("Telefone");
    private JLabel labelEndereco = new JLabel("Endereço");   
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
    private JTextField txtSenha = new JTextField();
    
    private Listener listener = new Listener();
    
    public Atualizar(){
        GridLayout layout2 = new GridLayout(6,4);
        this.setLayout(layout2);
        this.add(labelId);
        this.add(textId);
        this.add(buttonBuscar);
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
        this.add(txtSenha);
        this.add(buttonAtualizar);        
        
        buttonBuscar.addActionListener(listener);
        buttonAtualizar.addActionListener(listener);
         
        this.pack();
        this.setVisible(true);
    }
    
     private class Listener implements ActionListener{
        public void actionPerformed(ActionEvent e){
            Integer id = Integer.parseInt(textId.getText());
            String nome = String.valueOf(textNome.getText());
            String email = String.valueOf(textEmail.getText());
            String telefone = String.valueOf(textTelefone.getText());
            String endereco = String.valueOf(textEndereco.getText());
            String senha = String.valueOf(txtSenha.getText());
                    
            if(e.getSource() == buttonBuscar){
                    
                        try{
                        Cliente a = new ClienteDAO().consultar(id);
                        textNome.setText(a.getNome());                        
                        textTelefone.setText(a.getTelefone());
                        textEndereco.setText(a.getEndereco());
                        textEmail.setText(a.getEmail());
                        txtSenha.setText(a.getSenha());
                        }catch(Exception err){
                            System.out.println(err);
                        }
                        
                    }if(e.getSource() == buttonAtualizar){
                        Cliente a = new Cliente(id,nome,email,telefone, senha, endereco);
                        try{
                        new ClienteDAO().atualizar(a);
                        }catch(Exception err){
                            System.out.println(err);
                        }
                    }
                    
                            
        }            
    }
   
}
