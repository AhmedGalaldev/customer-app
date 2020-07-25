<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'contact:company {name} {phone?}';
    // protected $signature = 'contact:company {name} {phone=N/A}';
    protected $signature = 'contact:company';



    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new company';

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
        // 1
        // $company = Company::create([
        //     'name' => $this->argument('name'),
        //     // 'phone' => $this->argument('phone') ?? 'N/A'
        //     'phone' => $this->argument('phone')

        // ]);

        // $this->info('Added: ' . $company->name);

        // 2 

        $name = $this->ask('What is the company name?');
        $phone = $this->ask('What is the company phone number?');

        if ($this->confirm('Are you ready to insert "' . $name . '"?')) {

            $company = Company::create([
                'name' => $name,
                'phone' => $phone

            ]);
            return  $this->info('Added: ' . $company->name);
        }

        $this->warn('No new company was added.');
    }
}
