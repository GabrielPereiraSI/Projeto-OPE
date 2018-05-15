
package db;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import model.Cliente;

public class ClienteDAO {
    public void cadastrar(Cliente cliente) throws Exception{
        String nome = cliente.getNome();
        String email = cliente.getEmail();
        String telefone = cliente.getTelefone();
        String senha = cliente.getSenha();
        String endereco = cliente.getEndereco();
        
        PreparedStatement ps = ConexaoDB.getConexao().prepareStatement("insert into "
                + "cliente(nome,email,telefone,endereco,senha) values(?,?,?,?,?)");
        ps.setString(1, nome);
        ps.setString(2, email);
        ps.setString(3, telefone);
        ps.setString(4, senha);
        ps.setString(5, endereco);
        ps.execute();
    }
    
    public Cliente consultar(int id)throws Exception{
        PreparedStatement ps = ConexaoDB.getConexao().prepareStatement("select * from cliente where id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        if(rs.next()){            
            String nome = rs.getString("nome");
            String email = rs.getString("email");
            String telefone = rs.getString("telefone");
            String senha = rs.getString("senha");
            String endereco = rs.getString("endereco");
            
            return new Cliente(id,nome,email,telefone,endereco,senha);
            
        }else{
            return null;
        }
        
    }
    
    public void atualizar(Cliente cliente) throws Exception{
        PreparedStatement ps = ConexaoDB.getConexao().prepareStatement("update cliente set nome=?,"
                + " email=?,telefone=?,endereco=?,senha=? where id=?");
        ps.setString(1, cliente.getNome());
        ps.setString(2, cliente.getEmail());
        ps.setString(3, cliente.getTelefone());
        ps.setInt(4, cliente.getId());
        ps.setString(5, cliente.getEndereco());
        ps.setString(6, cliente.getSenha());
        ps.execute();
    }
    public void excluir(Cliente cliente) throws Exception{
        PreparedStatement ps = ConexaoDB.getConexao().prepareStatement("delete from cliente where id=?");
        ps.setInt(1, cliente.getId());
        ps.execute();
    }    
    
}
