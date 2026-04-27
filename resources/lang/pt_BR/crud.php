<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Respostas de Sucesso
    |--------------------------------------------------------------------------
    | Chaves alinham com métodos do Controller (index, show, destroy).
    | m = Masculino | f = Feminino
    */
    'success' => [
        // index
        'index' => [
            'm' => 'Listagem de :resource realizada com sucesso.',
            'f' => 'Listagem de :resource realizada com sucesso.',
        ],
        // show
        'show' => [
            'm' => ':resource recuperado com sucesso.',
            'f' => ':resource recuperada com sucesso.',
        ],
        // store
        'store' => [
            'm' => ':resource criado com sucesso.',
            'f' => ':resource criada com sucesso.',
        ],
        // update
        'update' => [
            'm' => ':resource atualizado com sucesso.',
            'f' => ':resource atualizada com sucesso.',
        ],
        // destroy
        'destroy' => [
            'm' => ':resource excluído com sucesso.',
            'f' => ':resource excluída com sucesso.',
        ],
        // restore
        'restore' => [
            'm' => ':resource restaurado com sucesso.',
            'f' => ':resource restaurada com sucesso.',
        ],
        // forceDelete
        'forceDelete' => [
            'm' => ':resource excluído permanentemente.',
            'f' => ':resource excluída permanentemente.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Respostas de Erro
    |--------------------------------------------------------------------------
    */
    'error' => [
        'not_found' => [
            'm' => ':resource não encontrado.',
            'f' => ':resource não encontrada.',
        ],
        'duplicate' => [
            'm' => 'Este :resource já existe.',
            'f' => 'Esta :resource já existe.',
        ],
        'associated' => [
            'm' => 'Este :resource não pode ser excluído pois possui vínculos no sistema.',
            'f' => 'Esta :resource não pode ser excluída pois possui vínculos no sistema.',
        ],
        'generic' => 'Ocorreu um erro ao processar o(a) :resource.',
    ],
];
