<?php

namespace App\Services;


class MenuService
{
    public static function itens(): array
    {
        return [
            [
                'link' => 'administrativo.categorias-exames.index',
                'text' => 'CRUD DE CATEGORIA DE SIMULADOS',
                'icon' => 'simulado'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE CERTIFICADOS',
                'icon' => 'certificado'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE APRENDIZAGEM',
                'icon' => 'aprendizagem'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE QUESTÕES',
                'icon' => 'questoes'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE RESPOSTAS',
                'icon' => 'resposta'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE VÍDEOS',
                'icon' => 'video'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE USUÁRIOS',
                'icon' => 'user'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE USUÁRIOS PREMIUM',
                'icon' => 'premium'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE EXAME DOS USUÁRIOS',
                'icon' => 'usuario-exame'
            ],
            [
                'link' => 'profile',
                'text' => 'CRUD DE QUESTÃO DO EXAME',
                'icon' => 'questao-exame'
            ],

        ];

    }

}
