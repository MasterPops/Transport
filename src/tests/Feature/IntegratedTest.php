<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class IntegratedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAccessHome()
    {
        $response = $this->get('/home');
        $response->assertStatus(302);
    }

    public function testAccessAuto()
    {
        $response = $this->get('/auto');
        $response->assertStatus(302);
    }

    public function testAccessDrivers()
    {
        $response = $this->get('/drivers');
        $response->assertStatus(302);
    }

    public function testAccessTrip()
    {
        $response = $this->get('/trip');
        $response->assertStatus(302);
    }

    public function testAccessCustomers()
    {
        $response = $this->get('/auto');
        $response->assertStatus(302);
    }

    public function testAccessStatistic()
    {
        $response = $this->get('/auto');
        $response->assertStatus(302);
    }

    public function testAccessAdmin()
    {
        $response = $this->get('/admin');
        $response->assertStatus(302);
    }

    public function testHome()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function testAuto()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/auto');
        $response->assertStatus(200);
    }

    public function testDrivers()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/drivers');
        $response->assertStatus(200);
    }

    public function testTrip()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/trip');
        $response->assertStatus(200);
    }

    public function testCustomers()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/auto');
        $response->assertStatus(200);
    }

    public function testStatistic()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);
        $response = $this->get('/auto');
        $response->assertStatus(200);
    }

    public function testAddAuto()
    {
        $user = new User();
        $user->name = 'John';
        $user->lastname = 'Johnsn';
        $user->patronymic = 'Johnsn';
        $user->email = 'email';
        $user->password = 'pwdpwdpwd';
        $user->save();
        $user = User::find(1);
        $this->be($user);
         $response = $this->call('POST', '/auto/add',[
            'brand' => 'brand',
            'model' => 'model',
            'year' => 'year',
            'number' => 'number',
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testStatusAuto()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/auto/status',[
            'carid' => 1,
            'status' => 3,
        ]);
        $this->assertEquals(302, $response->status());
        $response = $this->call('POST', '/auto/status',[
            'carid' => 1,
            'status' => 4,
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testAddDriver()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/drivers/add',[
            'name' => 'name',
            'lastname' => 'lastname',
            'patronymic' => 'patronymic'
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testStatusDriver()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/drivers/status',[
            'driverid' => 1,
            'status' => 'В отпуске',
        ]);
        $this->assertEquals(302, $response->status());
        $response = $this->call('POST', '/drivers/status',[
            'driverid' => 1,
            'status' => 'На больничном',
        ]);
        $this->assertEquals(302, $response->status());
        $response = $this->call('POST', '/drivers/status',[
            'driverid' => 1,
            'status' => 'Свободен',
        ]);
        $this->assertEquals(302, $response->status());
    }
    public function testDelDriver()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/drivers/del',[
            'driverid' => 1,
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testAddCustomer()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/customers/add',[
            'name' => 'John',
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testDelCustomer()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/customers/del',[
            'identify' => 1,
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testAddTrip()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/trip/add',[
            'auto' => 1,
            'driver' => 1,
            'customer' => 1,
            'before' => 0,
            'price' => 1,
        ]);
        $this->assertEquals(500, $response->status());
    }

    public function testEndTrip()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/trip/end',[
            'after' => 1,
            'identify' => 1,
        ]);
        $this->assertEquals(500, $response->status());
    }

    public function testAddSupport()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/support/add',[
            'title' => 'test',
            'text' => 'test',
        ]);
        $this->assertEquals(302, $response->status());
    }
    public function testAddMessage()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/support/ticket/1/add',[
            'text' => 'test',
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testCloseTicket()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/support/ticket/1/close',[
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testAccessAdmin2()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->get('/admin');
        $response->assertStatus(302);
        $user->accaunt_type = 2;
        $response = $this->get('/admin');
        $response->assertStatus(200);
    }
    public function testAdminNews()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/admin/news/add',[
                'text' => 'test',
                'title' => 'test',
        ]);
        $this->assertEquals(302, $response->status());
    }

    public function testRename()
    {
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('POST', '/profile/rename',[
                'lastname' => '1',
                'name' => '1',
                'patronymic' => '1'
        ]);
        $this->assertEquals(200, $response->status());
    }
}
