<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    public $path_template;
    public $path_default;

    public function __construct($t, $d = false)

    {
        $this->CI =& get_instance();
        $this->path_template = $t;
        $d ? $this->path_default  = $d : $this->path_default = '';
    }

    public function load($data = array(), $content = false)
    {
        // caminho padrão de templates Ex: 'templates/header'
        if(file_exists(APPPATH.'views/'.$this->path_template.'/header.php')):
            $this->CI->load->view($this->path_template.'/header', $data);
        endif;

        // caminho padrão de templates Ex: 'templates/header'
        if(file_exists(APPPATH.'views/'.$this->path_template.'/aside.php')):
            $this->CI->load->view($this->path_template.'/aside');
        endif;
        
        // Verifica se foi enviado algum dado no parâmetro
        if($content != false):
            // Verifica se foi passado um array
            if(is_array($content)):
                // Carregar cada item do array
                foreach ($content as $c):
                    // Verifica se o arquivo existe para só depois fazer o carregamento
                    if(file_exists(APPPATH.'views/'.$this->path_default.$c.'.php')):
                        // Carrega o arquivo
                        $this->CI->load->view($this->path_default.$c);
                    endif;
                endforeach;
            else:
                // Se o parâmetro não for array testa se o arquivo solicitado existe
                if(file_exists(APPPATH.'views/'.$this->path_default.$content.'.php')):
                    // carrega o arquivo
                    $this->CI->load->view($this->path_default.$content);
                endif;
            endif;
        endif;
        
        if(file_exists(APPPATH.'views/'.$this->path_template.'/footer.php')):
            $this->CI->load->view($this->path_template.'/footer');
        endif;
    }
}