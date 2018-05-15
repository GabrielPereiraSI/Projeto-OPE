
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


public class Cadastro extends JFrame{
    private JButton buttonCadastrar = new JButton("Cadastrar");
    private JLabel labelNome = new JLabel("Nome");
    private JLabel labelEmail = new JLabel("Email");
    private JLabel labelTelefone = new JLabel("Telefone");
    private JLabel labelEndereco = new JLabel("Endereço");
    private JLabel labelEspaco = new JLabel("");
    private JLabel labelSenha = new JLabel("Senha");
    private JTextField textNome = new JTextField();
    private JTextField textEmail = new JTextField();
    private JTextField textTelefone = new JTextField();
    private JTextField textEndereco = new JTextField();
    private JTextField txtSenha = new JTextField();
    private Listener listener = new Listener();
    
    public Cadastro(){
        
        GridLayout layout = new GridLayout(6,2);
        this.setLayout(layout);
        this.add(labelNome);
        this.add(textNome);        
        this.add(labelTelefone);
        this.add(textTelefone);
        this.add(labelEndereco);
        this.add(textEndereco);
        this.add(labelEmail);
        this.add(textEmail);
        this.add(labelSenha);
        this.add(txtSenha);
        this.add(labelEspaco);
        this.add(buttonCadastrar);
        
        buttonCadastrar.addActionListener(listener);
        this.pack();
        this.setVisible(true);
    }
    private class Listener implements ActionListener{
        public void actionPerformed(ActionEvent e){
            String nome = String.valueOf(textNome.getText());
            String email = String.valueOf(textEmail.getText());
            String telefone = String.valueOf(textTelefone.getText());
            String endereco = String.valueOf(textEndereco.getText());
            String senha = String.valueOf(txtSenha.getText());
            
                
                    if(e.getSource() == buttonCadastrar){
                    Cliente a = new Cliente(nome, email, telefone, endereco, senha);
                        try{
                        new ClienteDAO().cadastrar(a);
                        }catch(Exception err){
                            System.out.println(err);
                        }
                    }                           
        }            
    }
   
}
