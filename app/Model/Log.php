<?php

namespace App\Model;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class Log{

    public static function createLog($mensagem, $modo = 'info')
    {
    //cria uma instancia do Logger e passa um nome para o serviço no caso 'logs'
    $logger = new Logger('logs');

    //Define o caminho do arquivo que será escrito no caso dentro do proprio diretório
    $logger->pushHandler(new StreamHandler(dirname(__FILE__). '/logs.txt'));

        switch ($modo) {
            case 'info':
                $logger->info($mensagem);
                break;
            case 'warning':
                $logger->warning($mensagem);
                break;
            case 'error':
                $logger->error($mensagem);
                break;
            case 'debug':
                $logger->debug($mensagem);
                break;
            case 'notice':
                $logger->notice($mensagem);
                break;
            case 'critical':
                $logger->critical($mensagem);
                break;
            case 'alert':
                $logger->alert($mensagem);
                break;
            case 'emergency':
                $logger->emergency($mensagem);
                break;    

            default:
                $logger->info($mensagem);
                break;
        }
    }

}


