<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    public function testAccessAdminWithGuestRole() {

$response= $this->get('/admin/articles');
        $response-> assertRedirect('/login');
    }
public function testAccessAdminWithAdminRole()
{
    $admin = User::create([
        'email' => 'admin@admin.com',
        'name' => 'Admin',
        'password' => Hash::make('toor'),
        'role' => User::ADMIN_ROLE,
    ]);
    
    $this->actingAs($admin);
    $response = $this->get('/admin/articles');
    $response->assertStatus(200);

}
}