<?php
class homeController extends controller {

    public function __construct() {

        //instanciando model usuarios
        $u = new usuarios();
        //se usuario não tiver logado
        if (!$u->isLogged()) {
            header('Location: ' . BASE_URL . '/login');
        }
        parent::__construct();


    }

    public function index() {
        $dados = array(
            'nome' => '',
            'aviso' => '',
            'ticketTable' => ''
            );

        $u = new usuarios();

        $dados['nome'] = $u->getNome($_SESSION['twlg']);

        if(isset($_GET['aviso']) && $_GET['aviso'] == 'novoticketok') {
            $dados['aviso'] = "Seu ticket foi feito com sucesso.";
        }

        //mostrando dados do usuario na tabela
        $ticket = new ticket();
        $lista = $u->getSeguidos();
        $dados['ticketTable'] = $ticket->mostrarTickets($lista);
        $helper = new helpers();
        //print_r($_SESSION['twlg']); exit;
        $this->LoadTemplate('home', $dados);
    }
    //novo ticket view
    public function novoticket() {
        $dados = array(
            'nome' => 'Vitor'
            );

        $u = new usuarios();

        $dados['nome'] = $u->getNome($_SESSION['twlg']);
        //se usuario fez requisição de abrir ticket ele entra aqui 
        if (!empty($_POST['produtoTicket'])) {
            //fazendo isso pra jogar aviso se as pessoa não preencher todos os campos
            if (isset($_POST['produtoTicket']) && !empty($_POST['produtoTicket']) && isset($_POST['categoriaTicket']) && !empty($_POST['categoriaTicket']) && isset($_POST['descricaoTicket']) && !empty($_POST['descricaoTicket'])) {
                //jogando na variavel
                $nomeProduto = addslashes($_POST['produtoTicket']);
                $categoria = addslashes($_POST['categoriaTicket']);
                $texto = addslashes($_POST['descricaoTicket']);
                //usuario to pegando a sessão que contem o ID dele
                $idUsuario = $_SESSION['twlg'];
                //tratar arquivo ainda
                $arquivo = 'null';

                //estanciando a classe
                $ticket = new ticket();
                $ticket->inserirTicket($nomeProduto, $categoria, $texto, $idUsuario, $arquivo);
                //retornavar para index


                header('Location: ' . BASE_URL . '?aviso=novoticketok');

            }else{
                $data['avisored'] = "Por favor, verifique se todos os campos estão preenchidos.";
            }
        }
        //print_r($_SESSION['twlg']); exit;
        $this->LoadTemplate('novoticket', $dados);
    }


}