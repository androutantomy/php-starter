<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuGroup;
use App\Models\MenuItem;

class MenuGeneralSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = MenuGroup::create([
            'name' => 'General',
            'permission_name' => 'general',
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'Dashboard',
            'icon' => 'ri-dashboard-2-line',
            'route' => 'dashboard.index',
            'permission_name' => 'dashboard_index',
            'menu_group_id' => $general->id,
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'Piramida',
            'icon' => 'ri-window-line',
            'route' => 'piramida.index',
            'permission_name' => 'piramida_index',
            'menu_group_id' => $general->id,
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'Segitiga',
            'icon' => 'ri-window-line',
            'route' => 'segitiga.index',
            'permission_name' => 'segitiga_index',
            'menu_group_id' => $general->id,
            'posision' => 3,
        ]);
    }
}
