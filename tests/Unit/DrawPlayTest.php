<?php

namespace Tests\Unit;

use App\Actions\DrawPlay;
use App\Models\DrawType;
use Database\Seeders\CompanySeeder;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\DrawTypeSeeder;
use Database\Seeders\DrawSeeder;
use Database\Seeders\TicketSeeder;
use Database\Seeders\UserSeeder;
use Dflydev\DotAccessData\Data;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Draw;

class DrawPlayTest extends TestCase
{

    //use RefreshDatabase;
    /**
     * test
     */
    public function update_tickets_test()
    {
        $this->expectNotToPerformAssertions();
        $seeder = new DatabaseSeeder();
        $seeder->call(DatabaseSeeder::class);
        $drawPlay = new DrawPlay();

        $draw_type = DrawType::where('type', '6x45')->first();
        $draw = Draw::where([
            ['type_id', $draw_type->id],
            ['is_played', '0']
        ])->first();

        $drawPlay->updateTickets($draw);
    }

    /**
     * @test
     */
    public function play_test()
    {
        $this->expectNotToPerformAssertions();
        $seeder = new DatabaseSeeder();
        $seeder->call(DatabaseSeeder::class);
        $drawPlay = new DrawPlay();


        $drawPlay->play('6x45');
    }
}
