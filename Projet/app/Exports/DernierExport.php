<?php

namespace App\Exports;

use App\Models\Page;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DernierExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Page::all();
    }
    public function map($page): array
    {
        return [
            $page->ID_classe,
            $page->annee_formation,
            $page->date_debut,
            $page->date_fin,
        ];
    }
    public function headings(): array
    {
        return [
            'ID Classe',
            'Année Formation',
            'Date Début',
            'Date Fin',
        ];
    }
}
