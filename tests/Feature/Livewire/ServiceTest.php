<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Service::class);

        $component->assertStatus(200);
    }
}
