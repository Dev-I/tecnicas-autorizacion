<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDashboardTest extends TestCase
{

    /** @test */

    function admins_can_visit_the_min_dashboard()
    {
        $this->markTestIncomplete();
    }

    /** @test */

    function non_admin_users_cannot_visit_the_min_dashboard()
    {
        $this->markTestIncomplete();
    }

    /** @test */

    function guest_cannot_visit_the_min_dashboard()
    {
        $this->markTestIncomplete();
    }
}
