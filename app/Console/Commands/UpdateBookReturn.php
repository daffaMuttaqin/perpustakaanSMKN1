<?php

namespace App\Console\Commands;

use App\Models\RentLogs;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateBookReturn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-book-return';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Book Rent';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now();
        $rents = RentLogs::where('returnDate', '<', $now)->where('status', 'Masih Dipinjam')->get();

        foreach ($rents as $item) {
            $item->status = 'Terlambat';
            $item->penalty = 'Rp.25.000';
            $item->save();
        }
    }
}
