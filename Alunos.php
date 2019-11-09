<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * é arquivo que permite entradas do navegador
 */
class Aluno extends CI_Controller 
{
    public function index()
    {
       $this->load->model('Aluno_model');
       $alunos = $this->Aluno_model->listaAlunos();
    //    echo '<pre>';     
    //    print_r($alunos);
    //    echo '</pre>';     
       
        $data['alunos'] =  $alunos;
        $this->load->view('lista_alunos', $data);
    }

    public function formAlunos()
    {
        $tipo = $_GET['tipo'] ?? '';
        //inserção
        if ($tipo == 1) {
            $data['tipo'] = $tipo;
            $this->load->view('form_alunos', $data);
        }
        else {
            $id = $_GET['id'] ?? null;
            $this->load->model('Aluno_model');
            $aluno = $this->Aluno_model->listaAlunos($id);
            $data['aluno'] = $aluno;
            $data['tipo'] = $tipo;
            $this->load->view('form_alunos', $data);
            
        }
    }

    public function recebePost()
    {
        $tipo = $_GET['tipo'] ?? '';
        if ($tipo == 1) {
            $this->load->model('Aluno_model');
            $this->Aluno_model->insere($_POST);
            header('Location: /Aluno');// retorna para index
        } else {
            $this->load->model('Aluno_model');
            $this->Aluno_model->altera($_POST);
            header('Location: /Aluno');// retorna para index
        }
    }

    public function excluiRegistro()
    {
        $id = $_GET['id'] ?? '';
        $this->load->model('Aluno_model');
        $this->Aluno_model->deleta($id);
        header('Location: /Aluno'); // retorna para index
    }


}
