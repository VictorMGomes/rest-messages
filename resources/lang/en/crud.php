<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Success Responses
    |--------------------------------------------------------------------------
    | Keys match Laravel Resource Controller methods (index, show, destroy, etc.)
    | Gender keys ('m', 'f') are mirrored for structural consistency.
    */
    'success' => [
        // index
        'index' => [
            'm' => ':resource list retrieved successfully.',
            'f' => ':resource list retrieved successfully.',
        ],
        // show
        'show' => [
            'm' => ':resource retrieved successfully.',
            'f' => ':resource retrieved successfully.',
        ],
        // store
        'store' => [
            'm' => ':resource created successfully.',
            'f' => ':resource created successfully.',
        ],
        // update
        'update' => [
            'm' => ':resource updated successfully.',
            'f' => ':resource updated successfully.',
        ],
        // destroy
        'destroy' => [
            'm' => ':resource deleted successfully.',
            'f' => ':resource deleted successfully.',
        ],
        // restore
        'restore' => [
            'm' => ':resource restored successfully.',
            'f' => ':resource restored successfully.',
        ],
        // forceDelete
        'forceDelete' => [
            'm' => ':resource permanently deleted.',
            'f' => ':resource permanently deleted.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Error Responses
    |--------------------------------------------------------------------------
    */
    'error' => [
        'not_found' => [
            'm' => ':resource not found.',
            'f' => ':resource not found.',
        ],
        'duplicate' => [
            'm' => 'This :resource already exists.',
            'f' => 'This :resource already exists.',
        ],
        'associated' => [
            'm' => 'This :resource cannot be deleted because it is associated with other records.',
            'f' => 'This :resource cannot be deleted because it is associated with other records.',
        ],
        'generic' => 'An error occurred while processing the :resource.',
    ],
];
