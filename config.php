<?php
  // This file is part of Moodle - http://moodle.org/
  //
  // Moodle is free software: you can redistribute it and/or modify
  // it under the terms of the GNU General Public License as published by
  // the Free Software Foundation, either version 3 of the License, or
  // (at your option) any later version.
  //
  // Moodle is distributed in the hope that it will be useful,
  // but WITHOUT ANY WARRANTY; without even the implied warranty of
  // MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  // GNU General Public License for more details.
  //
  // You should have received a copy of the GNU General Public License
  // along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
   
  /**
  * Theme version info
  *
  * @package    theme
  * @subpackage UFGD
  * @copyright  2014 Guto Moraes  {@link http://www.ideias12.com.br}
  * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
  */

    $THEME->doctype = 'html5';
    
    $THEME->yuicssmodules = array();
    
    $THEME->name = 'ufgd';
    
    $THEME->parents = array();
    
    $THEME->sheets = array('bootstrap.min','moodle','tema','csspersonalizado');
    
    $THEME->supportscssoptimisation = true;
    
    $THEME->editor_sheets = array('editor');
    
    $THEME->plugins_exclude_sheets = array(
        'block' => array(
            'html'
        ),
    );
 
    $THEME->layouts = array(
        // Layout compativel sem os blocos - este e o layout usado por padrão
        'base' => array(
            'file' => 'general.php',
            'regions' => array(),
        ),
        // Layout Standard com blocos, este e recomendado para a maioria das paginas com informacoes gerais
        'standard' => array(
            'file' => 'general.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // Pagina dos cursos
        'course' => array(
            'file' => 'course.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
            'options' => array('langmenu'=>true),
        ),
        'coursecategory' => array(
            'file' => 'course.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // Parte do template dos cursos, usado para modulos - layout padrao para a pagina se o $cm especificado requer require_login()
        'incourse' => array(
            'file' => 'course.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // Pagina Inicial
        'frontpage' => array(
            'file' => 'frontpage.php',
            'regions' => array('side-pre','hidden-dock'),
            'defaultregion' => 'side-pre',
        ),
        // Scripts de administração do servidor.
        'admin' => array(
            'file' => 'general.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // Painel do Aluno
        'mydashboard' => array(
            'file' => 'painel.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
            'options' => array('langmenu'=>true),
        ),
        // Pagina publica
        'mypublic' => array(
            'file' => 'general.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // Login
        'login' => array(
            'file' => 'login.php',
            'regions' => array(),
            'options' => array('langmenu'=>true),
        ),
        // Paginas que aparecem em janelas pop-up - sem navegacao, sem blocos, sem cabecalho.
        'popup' => array(
            'file' => 'general.php',
            'regions' => array(),
            'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologininfo'=>true, 'nocourseheaderfooter'=>true),
        ),
        // Sem blocos e rodape minimo - usado apenas para layouts de frames legado!
        'frametop' => array(
            'file' => 'general.php',
            'regions' => array(),
            'options' => array('nofooter'=>true, 'nocoursefooter'=>true),
        ),
        // Paginas embutidos, como iframe/object embutidos em formularios - ele precisa de tanto espaco quanto possivel
        'embedded' => array(
            'file' => 'embedded.php',
            'regions' => array(),
            'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
        ),
        // Usado durante a atualizacao e instalacao, exibe a mensagem: 'Este site está em manutenção'.
        // Este layout nao deve ter quaisquer blocos, tambem e aconselhavel que nao possua links em
        // outros lugares - por exemplo, nao deve haver um link para a pagina inicial no rodape...
        'maintenance' => array(
            'file' => 'general.php',
            'regions' => array(),
            'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
        ),
        // Deve exibir o conteudo e apenas cabecalhos basicos.
        'print' => array(
            'file' => 'general.php',
            'regions' => array(),
            'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>false, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
        ),
        // O layout usado quando um redirecionamento esta em andamento
        'redirect' => array(
            'file' => 'embedded.php',
            'regions' => array(),
            'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
        ),
        // O layout utilizado para relatorios
        'report' => array(
            'file' => 'report.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
        ),
        // O layout usado para Safebrowser e securewindow.
        'secure' => array(
            'file' => 'general.php',
            'regions' => array('side-pre'),
            'defaultregion' => 'side-pre',
            'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologinlinks'=>true, 'nocourseheaderfooter'=>true),
        ),
    );
    
    $THEME->enable_dock = false;
    
    $THEME->rendererfactory = 'theme_overridden_renderer_factory';
    
    $THEME->csspostprocess = 'ufgd_process_css';
    
    $THEME->hidefromselector = false;
    
    $THEME->rarrow = '&#47;';
    
    $THEME->javascripts = array();
    
    $THEME->javascripts_footer = array('bootstrap','jquery.fitvids');
