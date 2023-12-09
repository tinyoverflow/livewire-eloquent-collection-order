<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private array $names = [
        'Elena',
        'Anne',
        'Jennifer',
        'John',
        'Thomas',
        'Alfred'
    ];

    public function run(): void
    {
        $orders = collect($this->names)->sort()->values();

        $sequence = collect($this->names)->map(fn(string $name) => [
            'name' => $name . ': ' . $orders->search($name) + 1,
            'email' => Str::kebab($name) . '@example.com'
        ]);

        User::factory($sequence->count())
            ->sequence(...$sequence)
            ->create();
    }
}
