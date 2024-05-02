<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Repositories\BaseRepository;

class CategorieRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'user_created',
        'user_modified'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Categorie::class;
    }
}
