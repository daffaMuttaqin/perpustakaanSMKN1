<?php

namespace App\Console\Commands;

use App\Models\RentLogs;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Notifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifications';

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
        $rents = RentLogs::where('status', 'Terlambat')->get();

        foreach ($rents as $item) {
            Notification::create(['userId' => $item->userId, 'message' => $item->user->name . ' dari ' . $item->user->jurusan . ' telah jatuh tempo untuk mengembalikan buku, tanggal peminjaman ' . $item->returnDate]);
        }
    }
}
