<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Aluno_model extends CI_Model
{
    public function listaAlunos($id = false)
    {
        if ($id) {
            return $this->db->get_where('alunos', ['id' => $id])->result();    
        }
        // select * from alunos
        return $this->db->get('alunos')->result();
    }

    public function insere($data)
    {
        return $this->db->insert('alunos', $data);
    }

    public function altera ($data)
    {
        $id = $data['id'];
        return $this->db->update('alunos',$data, "id = $id");
    }

    public function deleta($id)
    {
        return $this->db->delete('alunos', ['id' => $id]);
    }
}
