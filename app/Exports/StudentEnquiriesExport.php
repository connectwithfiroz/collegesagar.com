<?php
namespace App\Exports;

use App\Models\StudentEnquiry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StudentEnquiriesExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    public function collection()
    {
        return StudentEnquiry::latest()->get();
    }

    public function headings(): array
    {
        return [
            'Course / College',
            'Student Name',
            'Email',
            'Phone',
            'IP Address',
            'Enquiry Date'
        ];
    }

    public function map($row): array
    {
        return [
            $row->college ?? 'General Enquiry',
            $row->name,
            $row->email,
            $row->course,
            $row->phone,
            $row->message,
            $row->source_page,
            $row->ip_address,
            $row->created_at->format('d M Y h:i A'),
        ];
    }
}