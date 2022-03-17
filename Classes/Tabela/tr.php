<?php

include "th.php";
include "td.php";
include "./Conexao/index.php";

class classTr {
    public function __toString()
    {
        $colunas = $this->buscaColunas();
        $dados = $this->buscaDados();

        if ($dados) {
            $classTh = new classTh($colunas);
            $classTd = new classTd($dados);
            
            $retorno = "<tr>";
            $retorno .= $classTh;
            $retorno .= "</tr>";
            $retorno .= $classTd;
        } else {
            $retorno = '<h4 style="text-align: center">Bem Vindo!</h4>';
        }

        return $retorno;
    }

    public function buscaDados()
    {
        if (isset($_GET['pagina'])) {
            $conexao = new conexao();

            if ($_GET['pagina'] === 'lista_pessoa') {
                $dados = $conexao->executaSql("select id,nome,email from pessoa");
            } else {
                $dados = $conexao->executaSql("select id,nome,valor,total_estoque from produto");
            }

            if (!count($dados)) {
                print('<script>alert(\'Nenhum dado retornado\');</script>');
            }

            return $dados;
        }
    }

    public function buscaColunas()
    {
        if (isset($_GET['pagina'])) {
            if ($_GET['pagina'] === 'lista_pessoa') {
                $colunas = ["ID","Nome","E-mail"];
            } else {
                $colunas = ["ID","Nome","Valor","Total Estoque"];
            }

            if (!count($colunas)) {
                print('<script>alert(\'Nenhuma coluna encontrada\');</script>');
            }

            return $colunas;
        }        
    }
}
