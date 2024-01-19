<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language; // Add this line to import the Language model

class LanguageSeeder extends Seeder
{
    public function run()
    {
        // Check if a default language already exists
        $defaultLanguage = Language::where('is_default', 1)->first();

        if (!$defaultLanguage) {
            // Create a default language record
            Language::create([
                'name' => 'Francais',
                'is_default' => 1,
                'code' => 'fr',
                'rtl' => 0,
                // Add other fields as needed
            ]);

            $this->command->info('Default language created successfully.');
        } else {
            $this->command->info('Default language already exists.');
        }
    }
}
