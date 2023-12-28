<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Rental;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Book::factory(10)->create();
        \App\Models\Reservation::factory(10)->create();
        \App\Models\Rental::factory(10)->create();
         foreach (Reservation::all() as $reservation){
           $books=Book::inRandomOrder()->take(rand(1,3))->pluck('id');
           $reservation->books()->attach($books);
         }
        foreach (Rental::all() as $rental){
            $books=Book::inRandomOrder()->take(rand(1,3))->pluck('id');
            $rental->books()->attach($books);
        }
    }
}
