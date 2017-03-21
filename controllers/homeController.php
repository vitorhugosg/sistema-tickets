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
        //aqui vou ver se é usuario ou admin
        $nivel = $u->getAdmin($_SESSION['twlg']);
        if($nivel == '1'){
            $dados['ticketTable'] = $ticket->mostrarTicketsAdmin($lista);
        }else{
             $dados['ticketTable'] = $ticket->mostrarTickets($lista);
        }
        $helper = new helpers();
        //print_r($_SESSION['twlg']); exit;
        $this->LoadTemplate('home', $dados);
    }
    //novo ticket view
    public function novoticket() {
        $dados = array(
            'nome' => ''
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
                 $_SESSION['aviso'] = 'novoticketok';
                 $_SESSION['alerta'] = 'Seu ticket foi adicionado com sucesso';

                header('Location: ' . BASE_URL);

            }else{
                $data['avisored'] = "Por favor, verifique se todos os campos estão preenchidos.";
            }
        }
        //print_r($_SESSION['twlg']); exit;
        $this->LoadTemplate('novoticket', $dados);
    }

    //ver ticket
    public function verticket($codigo) {
        $dados = array(
            'nome' => ''
            );
        $u = new usuarios();
        $nomeUsuario = $u->getNome($_SESSION['twlg']);
        $dados['nome'] = $u->getNome($_SESSION['twlg']);


        //instanciando classe historico de tickets
        $historicoTickets = new historico_ticket();

        //fazendo tratamento de form
        if (isset($_POST['novoHistoricoTicket'])) {
            $novoHistorico = addslashes($_POST['novoHistoricoTicket']);

            if (!empty($novoHistorico)) {
                //add novo usuario

                $historicoTickets->adicionarTicket($codigo, $nomeUsuario, $novoHistorico);

                $_SESSION['aviso'] = 'Sua nova resposta ao ticket foi adicionada com sucesso.';
            }else{
                //aviso preencha os campos solicitados
                $dados['aviso'] = "Preencha o campo solicitado";
            }
        }
        //fazendo o historico dos tickets aparecerem na tela.
        $dados['historicoResposta'] = $historicoTickets->historicoTicket($codigo);

        //pegando ticket unico

        $ticket = new ticket();
        $dados['ticket'] = $ticket->getTicket($codigo);

        //print_r($_SESSION['twlg']); exit;
        $this->LoadTemplate('verticket', $dados);
    }


}