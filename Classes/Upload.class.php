<?php

/**
 * Description of Upload
 *
 * @author fsutel
 */
class Upload {

    private $pasta;
    private $tamanho;
    private $extensoes;

    function __construct($pasta, $tamanho, $extensoes) {
        $this->pasta = $pasta;
        $this->tamanho = $tamanho;
        $this->extensoes = $extensoes;
    }

    function getPasta() {
        return $this->pasta;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getExtensoes() {
        return $this->extensoes;
    }

    function setPasta($pasta) {
        $this->pasta = $pasta;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setExtensoes($extensoes) {
        $this->extensoes = $extensoes;
    }

    public function uploaddados() {
  
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        
        echo 'classe';
/*
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possível fazer o upload, erro:&lt;br /&gt;" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit; // Para a execução do script
        }

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
        }

// Faz a verificação do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
        }

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
        else {
// Primeiro verifica se deve trocar o nome do arquivo
            if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
                $nome_final = time() . '.jpg';
            } else {
// Mantém o nome original do arquivo
                $nome_final = $_FILES['arquivo']['name'];
            }

// Depois verifica se é possível mover o arquivo para a pasta escolhida
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
                echo "Upload efetuado com sucesso!";
                echo '&lt;br /&gt;&lt;a href="' . $_UP['pasta'] . $nome_final . '"&gt;Clique aqui para acessar o arquivo&lt;/a&gt;';
            } else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
                echo "Não foi possível enviar o arquivo, tente novamente";
            }
        }
        
        */
    }

}
