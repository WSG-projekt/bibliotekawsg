<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Rental;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>'admin@admin.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('admin1234'),
            'isAdmin' => 1
        ]);
        Book::factory(10)->create();
        Reservation::factory(10)->create();
        Rental::factory(10)->create();
         foreach (Reservation::all() as $reservation){
           $books=Book::inRandomOrder()->take(rand(1,3))->pluck('id');
           $reservation->books()->attach($books);
         }
        foreach (Rental::all() as $rental){
            $books=Book::inRandomOrder()->take(rand(1,3))->pluck('id');
            $rental->books()->attach($books);
        }
        Student::factory(10)->create();
    }
}
