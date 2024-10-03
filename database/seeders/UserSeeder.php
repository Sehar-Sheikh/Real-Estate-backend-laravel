<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdminRole = Role::create([
            'name' => 'SuperAdmin',
            'guard_name' => 'web'
        ]);

        $adminRole = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        $userRole = Role::create([
            'name' => 'User',
            'guard_name' => 'web'
        ]);


        ///////////////////////////////////////////////////////////////////////


        $user = User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make("secret"),
            // 'profile_completed' => 1,

        ]);
        $user->assignRole('SuperAdmin');

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("secret"),
            // 'profile_completed' => 1,
        ]);
        $user->assignRole('Admin');


        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make("secret"),
        ]);
        $user->assignRole('User');

        // $user = User::factory()->create([
        //     'name' => 'Js',
        //     'email' => 'js@tio.gov.pk',
        //     'password' => Hash::make("secret"),
        // ]);
        // $user->assignRole('Tio User');

        // $user = User::factory()->create([
        //     'name' => 'IT',
        //     'email' => 'it@tio.gov.pk',
        //     'password' => Hash::make("secret"),
        // ]);
        // $user->assignRole('Tio User');

        // $user = User::factory()->create([
        //     'name' => 'User',
        //     'email' => 'user@tio.gov.pk',
        //     'password' => Hash::make("secret"),
        // ]);
        // $user->assignRole('User');
        ////////////////////////////////////////////////////////////////////////////////////////////////

        ///////////////////////////// Dummy Data For Testing///////////////////////////////

        // $country = Country::create([
        //     'name' => 'Pakistan',
        // ]);

        // $city = city::create([
        //     'name' => 'Islamabad',
        //     'province_id' => Null,
        // ]);

        // $city = city::create([
        //     'name' => 'Lahore',
        //     'province_id' => Null,
        // ]);

        // $designation = Designation::create([
        //     'name' => 'Assistant Directore',
        // ]);

        // $designation = Designation::create([
        //     'name' => 'Clerk',
        // ]);
        // $designation = Designation::create([
        //     'name' => 'Marketing Officer',
        // ]);

        // $pct = PeriodCoveredType::create([
        //     'name' => '1Y',
        // ]);

        // $pct = PeriodCoveredType::create([
        //     'name' => '2Y',
        // ]);
        // $pct = PeriodCoveredType::create([
        //     'name' => '3Y',
        // ]);

        // $retn = NatureAssistance::create([
        //     'name' => 'B2B meeting',
        // ]);
        // $retn = NatureAssistance::create([
        //     'name' => 'B2G meeting',
        // ]);
        // $retn = NatureAssistance::create([
        //     'name' => 'Help in appointing agent or distributor',
        // ]);
        // $retn = NatureAssistance::create([
        //     'name' => 'Help in registration of product',
        // ]);
        // $retn = NatureAssistance::create([
        //     'name' => 'Other',
        // ]);


        // ////////////////////////////////////Dummy Data////////////////////////////////////////////
        // $data = [
        //     ['name' => 'Trade Exhibition'],
        //     ['name' => 'Trade Delegation'],
        //     ['name' => 'Business Forum'],
        //     ['name' => 'Other'],
        // ];

        // // Insert data into the database
        // DB::table('trade_events')->insert($data);

        // $meeting_objectives = [
        //     ['name' => 'Objective 1'],
        // ];

        // // Insert data into the database
        // DB::table('meeting_objectives')->insert($meeting_objectives);

        // $meeting_outcomes = [
        //     ['name' => 'outcomes 1'],
        // ];

        // // Insert data into the database
        // DB::table('meeting_outcomes')->insert($meeting_outcomes);

        // $locations = [
        //     ['name' => 'location ABC'],
        // ];
        // // Insert data into the database
        // DB::table('locations')->insert($locations);

        // $nature_intelligences = [
        //     ['name' => 'Trade Inquiry'],
        //     ['name' => 'Change in Import Regulations'],
        //     ['name' => 'Competitors information'],
        //     ['name' => 'Other'],
        // ];
        // // Insert data into the database
        // DB::table('nature_intelligences')->insert($nature_intelligences);

        // $meeting_natures = [
        //     ['name' => 'Project Discussion'],
        // ];
        // // Insert data into the database
        // DB::table('meeting_natures')->insert($meeting_natures);

        // // $task_statuses = [
        // //     ['name' => 'Recievings'],
        // // ];
        // // Insert data into the database
        // // DB::table('task_statuses')->insert($task_statuses);



        // $previous_references = [
        //     ['name' => 'Reference H'],
        // ];
        // // Insert data into the database
        // DB::table('previous_references')->insert($previous_references);

        // $distribution_lists = [
        //     ['name' => 'Distribution 3'],
        // ];
        // // Insert data into the database
        // DB::table('distribution_lists')->insert($distribution_lists);

        // $products = [
        //     ['name' => 'Product 1'],
        // ];
        // // Insert data into the database
        // DB::table('products')->insert($products);
    }
}
