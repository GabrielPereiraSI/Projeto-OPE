
package model;


public class Cliente {
    private int id;
    private String nome;
    private String email;
    private String telefone;
    private String endereco;
    private String senha;

    public Cliente(int id, String nome, String email, String telefone, String endereco, String senha) {
        this.id = id;
        this.nome = nome;
        this.email = email;
        this.telefone = telefone;
        this.endereco = endereco;
        this.senha = senha;
    }

    public Cliente(String nome, String email, String telefone, String endereco, String senha) {
        this.nome = nome;
        this.email = email;
        this.telefone = telefone;
        this.endereco = endereco;
        this.senha = senha;
    }

    public int getId() {
        return id;
    }
   

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }
    public void setSenha(String senha){
    	this.senha = senha;
    }
    public String getSenha(){
    	return senha;
    }
    public void setEndereco(String endereco){
    	this.endereco = endereco;
    }
    public String getEndereco(){
    	return endereco;
    }	
}
