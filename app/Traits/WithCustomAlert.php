<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

trait WithCustomAlert
{
    /**
     * Exibe um alerta de sucesso personalizado.
     *
     * @param string $title O título do alerta.
     * @param string $text A mensagem de texto do alerta.
     */
    public function showSuccessAlert(string $title = 'Operação Concluída', string $text = 'Os dados foram salvos com sucesso no banco de dados.'): void
    {
        LivewireAlert::title($title)
            ->text($text)
            ->success()
            ->withConfirmButton()
            ->confirmButtonText('OK')
            ->withOptions([
                'width' => '52rem',
                'padding' => '2rem',
                'background' => '#f8fafc',
                'backdrop' => 'rgba(0,0,0,0.5)',
                'customClass' => [
                ],
                'showClass' => [
                    'popup' => 'animate-fade-in'
                ],
                'hideClass' => [
                    'popup' => 'animate-fade-out'
                ]
            ])
            ->show();
    }

    /**
     * Exemplo de método para exibir um alerta de erro.
     * Você pode adicionar mais métodos para diferentes tipos de alertas.
     *
     * @param string $title O título do alerta.
     * @param string $text A mensagem de texto do alerta.
     */
    public function showErrorAlert(string $title = 'Erro!', string $text = 'Ocorreu um erro ao processar sua solicitação.'): void
    {
        LivewireAlert::title($title)
            ->text($text)
            ->error()
            ->withConfirmButton()
            ->confirmButtonText('OK')
            ->withOptions([
                'width' => '52rem',
                'padding' => '2rem',
                'background' => '#fef2f2', // Exemplo para fundo de erro (vermelho claro)
                'backdrop' => 'rgba(0,0,0,0.5)',
                'customClass' => [
                    // Ex: 'popup' => '!bg-red-100 !text-red-800'
                ],
                'showClass' => [
                    'popup' => 'animate-fade-in'
                ],
                'hideClass' => [
                    'popup' => 'animate-fade-out'
                ]
            ])
            ->show();
    }
}
