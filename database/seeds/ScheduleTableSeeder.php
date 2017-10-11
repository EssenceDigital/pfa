<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-10 07:00:00',
            'end_time' => '2014-11-10 11:55:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pro and Amateur Team training (invite only)',
            'start_time' => '2014-11-10 09:30:00',
            'end_time' => '2014-11-10 10:30:00',
            'color' => '#18448d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-10 13:00:00',
            'end_time' => '2014-11-10 16:25:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-10 12:00:00',
            'end_time' => '2014-11-10 12:55:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-10 18:30:00',
            'end_time' => '2014-11-10 19:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Brazilian Jiu Jitsu (No-Gi Beginner-Advanced)',
            'start_time' => '2014-11-10 19:30:00',
            'end_time' => '2014-11-10 20:25:00',
            'color' => '#3e8a06'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-11 07:00:00',
            'end_time' => '2014-11-11 17:25:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pro and Amateur Team training (invite only)',
            'start_time' => '2014-11-11 09:30:00',
            'end_time' => '2014-11-11 10:30:00',
            'color' => '#18448d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Sparring Class Competitive (Intermediate/Advanced)',
            'start_time' => '2014-11-11 17:30:00',
            'end_time' => '2014-11-11 18:25:00',
            'color' => '#969696'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Wrestling (Beginner-Advanced)',
            'start_time' => '2014-11-11 18:30:00',
            'end_time' => '2014-11-11 19:25:00',
            'color' => '#111'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-11 19:30:00',
            'end_time' => '2014-11-11 20:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Brazilian Jiu Jitsu (No-Gi Beginner-Advanced)',
            'start_time' => '2014-11-11 20:30:00',
            'end_time' => '2014-11-11 21:25:00',
            'color' => '#3e8a06'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-12 07:00:00',
            'end_time' => '2014-11-12 11:55:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pro and Amateur Team training (invite only)',
            'start_time' => '2014-11-12 09:30:00',
            'end_time' => '2014-11-12 10:30:00',
            'color' => '#18448d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-12 12:00:00',
            'end_time' => '2014-11-12 12:55:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-12 13:00:00',
            'end_time' => '2014-11-12 17:25:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-12 18:30:00',
            'end_time' => '2014-11-12 19:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Brazilian Jiu Jitsu (No-Gi Beginner-Advanced)',
            'start_time' => '2014-11-12 19:30:00',
            'end_time' => '2014-11-12 20:25:00',
            'color' => '#3e8a06'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-13 07:00:00',
            'end_time' => '2014-11-13 17:25:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pro and Amateur Team training (invite only)',
            'start_time' => '2014-11-13 09:30:00',
            'end_time' => '2014-11-13 10:30:00',
            'color' => '#18448d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'MMA Fusion (Beginner-Advanced)',
            'start_time' => '2014-11-13 17:30:00',
            'end_time' => '2014-11-13 18:25:00',
            'color' => '#1bc4b2'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pad work-MMA, Kickboxing- (Intermediate/Advanced)',
            'start_time' => '2014-11-13 18:30:00',
            'end_time' => '2014-11-13 19:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-13 19:30:00',
            'end_time' => '2014-11-13 20:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Brazilian Jiu Jitsu (No-Gi Beginner-Advanced)',
            'start_time' => '2014-11-13 20:30:00',
            'end_time' => '2014-11-13 21:25:00',
            'color' => '#3e8a06'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-14 07:00:00',
            'end_time' => '2014-11-14 11:55:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pro and Amateur Team training (invite only)',
            'start_time' => '2014-11-14 09:30:00',
            'end_time' => '2014-11-14 10:30:00',
            'color' => '#18448d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-14 12:00:00',
            'end_time' => '2014-11-14 12:55:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-14 13:00:00',
            'end_time' => '2014-11-14 17:25:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Sparring Class Competitive (Intermediate/Advanced)',
            'start_time' => '2014-11-14 17:30:00',
            'end_time' => '2014-11-14 18:25:00',
            'color' => '#969696'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Muay Thai/Kickboxing (Beginner-Advanced)',
            'start_time' => '2014-11-14 18:30:00',
            'end_time' => '2014-11-14 19:25:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Wrestling (Beginner-Advanced)',
            'start_time' => '2014-11-14 19:30:00',
            'end_time' => '2014-11-14 20:25:00',
            'color' => '#111'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Pad work-MMA, Kickboxing- (Intermediate/Advanced)',
            'start_time' => '2014-11-15 12:00:00',
            'end_time' => '2014-11-15 12:55:00',
            'color' => '#dd820d'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Brazilian Jiu Jitsu (No-Gi Beginner-Advanced)',
            'start_time' => '2014-11-15 13:00:00',
            'end_time' => '2014-11-15 13:55:00',
            'color' => '#3e8a06'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-15 14:00:00',
            'end_time' => '2014-11-15 18:30:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Open Gym (Available to All PFA Members)',
            'start_time' => '2014-11-09 11:00:00',
            'end_time' => '2014-11-09 17:30:00',
            'color' => '#b40001'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Lil Champs (Ages 5-8)',
            'start_time' => '2014-11-10 17:30:00',
            'end_time' => '2014-11-10 18:25:00',
            'color' => '#8e14b6'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Lil Champs (Ages 5-8)',
            'start_time' => '2014-11-12 17:30:00',
            'end_time' => '2014-11-12 18:25:00',
            'color' => '#8e14b6'
        ]);
        DB::table('schedule')->insert([
            'class' => 'Lil Champs (Ages 5-8)',
            'start_time' => '2014-11-15 10:15:00',
            'end_time' => '2014-11-15 10:55:00',
            'color' => '#8e14b6'
        ]);
        DB::table('schedule')->insert([
            'class' => "Junior Samurai's (Ages 9-12)",
            'start_time' => '2014-11-10 17:30:00',
            'end_time' => '2014-11-10 18:25:00',
            'color' => '#e0cb18'
        ]);
        DB::table('schedule')->insert([
            'class' => "Junior Samurai's (Ages 9-12)",
            'start_time' => '2014-11-12 17:30:00',
            'end_time' => '2014-11-12 18:25:00',
            'color' => '#e0cb18'
        ]);
        DB::table('schedule')->insert([
            'class' => "Junior Samurai's (Ages 9-12)",
            'start_time' => '2014-11-15 11:00:00',
            'end_time' => '2014-11-15 11:55:00',
            'color' => '#e0cb18'
        ]);
    }
}
