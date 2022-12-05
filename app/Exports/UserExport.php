<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;



class UserExport implements FromCollection, WithCustomStartCell, Responsable, WithMapping,
WithColumnFormatting, WithHeadings, WithColumnWidths, WithDrawings, WithStyles
{
    use Exportable;

    private $fileName = 'ReporteUsuarios.xlsx';
    private $writerType = Excel::XLSX;

    public function collection()
    {
        return User::all();
    }

    public function startCell(): string
    {
        return 'A15';
    }

    public function headings(): array
    {
        return [
            'Nombres',
            'Apellidos',
            'E-mail',
            'Teléfono',
            'Fecha de Registro',
        ];
    }


    public function map($user): array
    {
        return [

            $user->name,
            $user->lastname,
            $user->email,
            $user->phone,
            Date::dateTimeToExcel($user->created_at),

        ];
    }

    public function columnFormats(): array
    {
        return [
            'E' => 'dd/mm/yyyy',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 30,
            'B' => 30,
            'C' => 40,
            'D' => 30,
            'E' => 20
        ];
    }



    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Asesoría Optica D & R');
        $drawing->setDescription('Asesoría Optica D & R');
        $drawing->setPath(public_path('img/logos/logo.png'));
        $drawing->setHeight(250);
        $drawing->setCoordinates('B2');

        return $drawing;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Usuarios');
        $sheet->getStyle('A15:E15')->applyFromArray([
            'font' => [
                'bold' => true,
                'name' => 'Arial',
            ],

            'aligment' => [
                'horizontal' => 'center'
            ],

            'fill' => [
                'fillType' => 'solid',
                'startColor' => [
                    'argb' => 'C5D9F1'
                ]

            ],

        ]);

        $sheet->getStyle('A15:E' . $sheet->getHighestRow() )->applyFromArray([

            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin',
                    'color' => [
                       'argb' => '000000'
                    ]
                ]
            ]

        ]);



    }

}
