<?php


class AbstractController
{

    public $template = 'Template/layout';

    public function carregarPagina($nome)
    {
        $body = $this->capturaConteudo($nome);
        $template = $this->capturaConteudo($this->template);
        $cssBody = $this->listarLinkCssBody($body);
        $body  =  str_replace(['<body-pagina>', '</body-pagina>'], '', ($body ?? ''));
        return $this->showView($template, $body, $cssBody);
    }
    
    public function capturaConteudo($nome)
    {
        ob_start();
        //HTML PARA O BUFFER
        $arquivo = './View/modules/' . trim($nome) . '.php';
        require_once($arquivo);
        $htmlBuffer = ob_get_contents();
        ob_end_clean();
        return $htmlBuffer;
    }

    private function listarLinkCssBody(string &$body): string
    {
        preg_match_all(
            "/<head-pagina>(.*?)<\/head-pagina>/s",  // o que vai tirar
            $body,                                   // na onde vai tirar
            $cssbody,                                // o que foi tirado, no caso o head
            PREG_PATTERN_ORDER
        );
        $body = preg_replace("/<head-pagina>(.*?)<\/head-pagina>/s", '', $body);
        return str_replace(['<head-pagina>', '</head-pagina>'], '', ($cssbody[0][0] ?? ''));
    }

    private function showView(
        bool | string $template = '',
        bool | string $body = '',
        string $cssBody = '',
    ): bool {
        print_r(str_replace(
            [
                '@head-html',
                '@body-html'
            ],
            [
                $cssBody,
                $body
            ],
            is_bool($template) ? (string)$template : $template
        ));
        return false;
    }
}
