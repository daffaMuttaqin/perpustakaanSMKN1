<?php

namespace App\Exports;

use App\Models\RentLogs;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReportExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $rents = RentLogs::with('user')->where('status', '!=', 'Menunggu')->where('status', '!=', 'Ditolak')->get();

        return view('partials.export', ['rents' => $rents]);
    }
}
