<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RoutesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRouteHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Lista de Notas Fiscais');
        });
    }

    public function testRouteSincronizeAll()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/sincronizeAll')
                    ->assertSee('Lista de Notas Fiscais');
        });
    }

}
