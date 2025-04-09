<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a user
        User::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Hash the password
            'role' => 'admin', // You can modify this field if you have roles
        ]);
    }
}
