<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    public function testAccessAdminWithGuestRole() {

$response= $this->get('/admin/articles');
        $response-> assertRedirect('/login');
    }
public function testAccessAdminWithAdminRole()
{
    $admin = Auth::loginUsingId(37);
    $this->actingAs($admin);
    $response = $this->get('/admin/articles');
    $response->assertStatus(200);

}
}