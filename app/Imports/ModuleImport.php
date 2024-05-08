<?php
namespace App\Imports;
use App\Models\Module;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class ModuleImport implements ToModel
{
    public function model(array $row)
    {
        $existingModule = Module::where('nom_Module', $row[0])
        ->first();

    if ($existingModule) {
        Log::info("Module '{$row[0]}' existe déjà et n'a pas été ajoutée.");
        return null; 
    }
        return new Module([
            'code_Module' => $row[0], 
            'nom_Module' => $row[1], 
        ]);
    }
}
