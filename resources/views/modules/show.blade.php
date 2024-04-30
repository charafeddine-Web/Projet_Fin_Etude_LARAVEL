@extends('layouts.app')
 
@section('title', 'Show Module')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Module</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nom Module</label>
            <div class="mt-2">
                {{ $module->nom_Module}}
            </div>
            <div class="mt-2">
                {{ $module->code_Module}}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection