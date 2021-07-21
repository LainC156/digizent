<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Phone;
use App\Models\Address;
use App\Models\Business;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business = new Business();
        $business->business_name = 'Digizent';
        $business->save();

        $team1 = new Team();
        $team1->team_name = 'Desarrollo';
        $team1->business()->associate($business);
        $team1->save();

        $team2 = new Team();
        $team2->team_name = 'Administrativo';
        $team2->business()->associate($business);
        $team2->save();
        /* FIRST EMPLOYEE */
        $employee1 = new Employee();
        $employee1->employee_name = 'Juan Sánchez';
        $employee1->team()->associate($team1);
        $employee1->save();

        $address1 = new Address();
        $address1->address = 'Calle 1';
        $address1->city = 'Ciudad A';
        $address1->state = 'Estado A';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee1);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '1111111111';
        $phone1->employee()->associate($employee1);
        $phone1->save();
        /* SECOND EMPLOYEE */
        $employee2 = new Employee();
        $employee2->employee_name = 'Pedro González';
        $employee2->team()->associate($team1);
        $employee2->save();
        $address1 = new Address();
        $address1->address = 'Calle 2';
        $address1->city = 'Ciudad B';
        $address1->state = 'Estado B';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee2);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '2222222222';
        $phone1->employee()->associate($employee2);
        $phone1->save();
        /* THIRD EMPLOYEE */
        $employee3 = new Employee();
        $employee3->employee_name = 'Álvaro Fernández';
        $employee3->team()->associate($team1);
        $employee3->save();
        $address1 = new Address();
        $address1->address = 'Calle 3';
        $address1->city = 'Ciudad C';
        $address1->state = 'Estado C';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee3);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '333333333333';
        $phone1->employee()->associate($employee3);
        $phone1->save();
        /* FOURTH EMPLOYEE */
        $employee4 = new Employee();
        $employee4->employee_name = 'Carlos Amador';
        $employee4->team()->associate($team2);
        $employee4->save();
        $address1 = new Address();
        $address1->address = 'Calle 4';
        $address1->city = 'Ciudad D';
        $address1->state = 'Estado D';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee4);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '444444444444';
        $phone1->employee()->associate($employee4);
        $phone1->save();
        /* FIFTH EMPLOYEE */
        $employee5 = new Employee();
        $employee5->employee_name = 'Victor Lechuga';
        $employee5->team()->associate($team2);
        $employee5->save();
        $address1 = new Address();
        $address1->address = 'Calle 5';
        $address1->city = 'Ciudad E';
        $address1->state = 'Estado E';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee5);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '5555555555';
        $phone1->employee()->associate($employee5);
        $phone1->save();
        /* SIXTH EMPLOYEE */
        $employee6 = new Employee();
        $employee6->employee_name = 'Ana López';
        $employee6->team()->associate($team2);
        $employee6->save();
        $address1 = new Address();
        $address1->address = 'Calle 6';
        $address1->city = 'Ciudad F';
        $address1->state = 'Estado F';
        $address1->zip_code = '12345'; 
        $address1->employee()->associate($employee6);
        $address1->save();

        $phone1 = new Phone();
        $phone1->phone_number = '6666666666';
        $phone1->employee()->associate($employee6);
        $phone1->save();
    }
}
