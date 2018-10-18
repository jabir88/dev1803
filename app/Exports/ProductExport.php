<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProductExport implements FromView, WithHeadings, ShouldAutoSize
{
    public function headings(): array
    {
        return [
      'Product Name',
      'Product Price',
      'Product Quantity',
      'Product Description',
    ];
    }
    public function view(): View
    {
        return view('exports.members', [
            'members' => \App\Product::all()
        ]);
    }
}
// <?php
//
// namespace App\Exports;
//
//
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithEvents;
//
// // use Illuminate\Contracts\View\View;
// // use Maatwebsite\Excel\Concerns\FromView;
//
// class ProductExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Product::all();
//     }
//
//     // public function view(): View
//     // {
//     //     return view('exports.invoices', [
//     //         'invoices' => Invoice::all()
//     //     ]);
//     // }
//
//
//     public function headings(): array
//     {
//         return [
//             '#',
//             'Product Name',
//             'Product Price',
//             'Product Quantity',
//             'Product Description',
//             'Product Photo',
//             'Create at',
//             'Update at',
//         ];
//     }
//     public function registerEvents(): array
//     {
//         return [
//         AfterSheet::class    => function (AfterSheet $event) {
//             $cellRange = 'A1:W1'; // All headers
//             $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(32);
//         },
//     ];
//     }
// }
