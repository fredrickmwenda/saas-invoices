<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\SubService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SubServiceTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(SubService::class);

        $component->assertStatus(200);
    }
}
