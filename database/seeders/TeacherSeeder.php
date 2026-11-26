<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('teachers')->insert([
            ['full_name' => 'Коваленко Олександр Петрович', 'department' => 'Радіотехнічні пристрої та системи', 'academic_title' => 'Професор, д.т.н.', 'email' => 'kovalenko.op@kpi.ua', 'experience_years' => 22, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Мельник Ірина Василівна', 'department' => 'Радіотехнічні пристрої та системи', 'academic_title' => 'Доцент, к.т.н.', 'email' => 'melnyk.iv@kpi.ua', 'experience_years' => 14, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Бондаренко Сергій Миколайович', 'department' => 'Інформаційно-вимірювальні технології', 'academic_title' => 'Доцент, к.т.н.', 'email' => 'bondarenko.sm@kpi.ua', 'experience_years' => 11, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Ткаченко Наталія Олегівна', 'department' => 'Телекомунікації та радіотехніка', 'academic_title' => 'Старший викладач', 'email' => 'tkachenko.no@kpi.ua', 'experience_years' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Шевченко Віктор Андрійович', 'department' => 'Радіотехнічні пристрої та системи', 'academic_title' => 'Асистент', 'email' => 'shevchenko.va@kpi.ua', 'experience_years' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Кравченко Марія Сергіївна', 'department' => 'Інформаційно-вимірювальні технології', 'academic_title' => 'Професор, д.т.н.', 'email' => 'kravchenko.ms@kpi.ua', 'experience_years' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Поліщук Андрій Володимирович', 'department' => 'Телекомунікації та радіотехніка', 'academic_title' => 'Доцент, к.т.н.', 'email' => 'polishchuk.av@kpi.ua', 'experience_years' => 12, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Савченко Оксана Ігорівна', 'department' => 'Радіотехнічні пристрої та системи', 'academic_title' => 'Доцент, к.т.н.', 'email' => 'savchenko.oi@kpi.ua', 'experience_years' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Литвин Дмитро Романович', 'department' => 'Телекомунікації та радіотехніка', 'academic_title' => 'Асистент', 'email' => 'lytvyn.dr@kpi.ua', 'experience_years' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['full_name' => 'Гриценко Тетяна Павлівна', 'department' => 'Інформаційно-вимірювальні технології', 'academic_title' => 'Старший викладач', 'email' => 'hrytsenko.tp@kpi.ua', 'experience_years' => 9, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
