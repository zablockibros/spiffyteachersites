<?php

namespace App\Console\Commands;

use App\Category;
use App\Website;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Websites;

class RankSites extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ranks:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ranks all websites';

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
     * @return mixed
     */
    public function handle()
    {
        $categories = Category::all();

        $this->info('Saving overall ranks...');
        Websites::calculateRanksForCategory(null);

        foreach ($categories->all() as $category) {
            $this->info('Saving '.$category->slug.' ranks...');
            Websites::calculateRanksForCategory($category);
        }

        $this->info('Ranks done!');
    }
}
