<?php

namespace Packages\System\Console\Commands;

use Illuminate\Console\Command;

class SystemSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the system Package database seeds';

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
        $this->info('Running System Seeder...');
        $this->call('db:seed', [
            '--class' => 'Packages\\System\\Database\\Seeds\\DatabaseSeeder',
        ]);

        return 0;
    }
}
