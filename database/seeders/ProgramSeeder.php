<?php
namespace Database\Seeders;
use App\Models\Program;
use App\Models\ProgramTranslation;
use Illuminate\Database\Seeder;
class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'code' => '172-EP',
                'level' => 'bachelor',
                'duration_years' => 4,
                'credits' => 240,
                'uk' => ['title' => 'Електронні прилади та пристрої', 'department' => 'Кафедра радіотехнічних пристроїв', 'description' => 'Проєктування аналогових і цифрових електронних систем, мікроконтролерних модулів та засобів обробки сигналів.',],
                'en' => ['title' => 'Electronic Devices and Systems', 'department' => 'Department of Radio Engineering Devices', 'description' => 'Design of analog and digital electronic systems, microcontroller modules, and signal processing hardware.',],
            ],
            [
                'code' => '172-RT',
                'level' => 'bachelor',
                'duration_years' => 4,
                'credits' => 240,
                'uk' => ['title' => 'Радіотехніка та телекомунікаційні системи', 'department' => 'Кафедра телекомунікацій та радіотехніки', 'description' => 'Побудова бездротових мереж, систем зв’язку, антенно-фідерних трактів та засобів радіомоніторингу.',],
                'en' => ['title' => 'Radio Engineering and Telecommunication Systems', 'department' => 'Department of Telecommunications and Radio Engineering', 'description' => 'Development of wireless networks, communication systems, antenna-feeder paths, and radio monitoring tools.',],
            ],
            [
                'code' => '175-IVT',
                'level' => 'bachelor',
                'duration_years' => 4,
                'credits' => 240,
                'uk' => ['title' => 'Інформаційно-вимірювальні технології', 'department' => 'Кафедра інформаційно-вимірювальних технологій', 'description' => 'Автоматизація вимірювань, сенсорні системи, збір і аналіз даних у промислових та наукових комплексах.',],
                'en' => ['title' => 'Information and Measurement Technologies', 'department' => 'Department of Information and Measurement Technologies', 'description' => 'Measurement automation, sensor systems, and data acquisition and analysis in industrial and research setups.',],
            ],
            [
                'code' => '121-SE',
                'level' => 'bachelor',
                'duration_years' => 4,
                'credits' => 240,
                'uk' => ['title' => 'Інженерія програмного забезпечення систем', 'department' => 'Кафедра системного програмування та мереж', 'description' => 'Архітектура вебзастосунків, баз даних, серверної логіки та автоматизованого тестування програмних рішень.',],
                'en' => ['title' => 'Software Engineering of Systems', 'department' => 'Department of Systems Programming and Networks', 'description' => 'Web application architecture, databases, backend engineering, and automated software testing.',],
            ],
            [
                'code' => '172-ES-M',
                'level' => 'master',
                'duration_years' => 2,
                'credits' => 120,
                'uk' => ['title' => 'Вбудовані інтелектуальні системи', 'department' => 'Кафедра радіотехнічних пристроїв', 'description' => 'Поглиблена підготовка з проєктування вбудованих систем реального часу, цифрової фільтрації та IoT-пристроїв.',],
                'en' => ['title' => 'Embedded Intelligent Systems', 'department' => 'Department of Radio Engineering Devices', 'description' => 'Advanced training in real-time embedded systems, digital filtering, and IoT device engineering.',],
            ],
            [
                'code' => '172-SP-M',
                'level' => 'master',
                'duration_years' => 2,
                'credits' => 120,
                'uk' => ['title' => 'Цифрова обробка сигналів та зв’язок', 'department' => 'Кафедра телекомунікацій та радіотехніки', 'description' => 'Математичне моделювання сигналів, адаптивна фільтрація, радіолокація та високошвидкісні канали передачі.',],
                'en' => ['title' => 'Digital Signal Processing and Communications', 'department' => 'Department of Telecommunications and Radio Engineering', 'description' => 'Signal modeling, adaptive filtering, radar systems, and high-speed communication channels.',],
            ],
            [
                'code' => '175-DA-M',
                'level' => 'master',
                'duration_years' => 2,
                'credits' => 120,
                'uk' => ['title' => 'Інтелектуальні вимірювальні комплекси', 'department' => 'Кафедра інформаційно-вимірювальних технологій', 'description' => 'Проєктування прецизійних вимірювальних каналів, метрологічне забезпечення та аналітика телеметрії.',],
                'en' => ['title' => 'Intelligent Measurement Complexes', 'department' => 'Department of Information and Measurement Technologies', 'description' => 'Design of precision measurement channels, metrology assurance, and telemetry analytics.',],
            ],
            [
                'code' => '172-AC-B',
                'level' => 'bachelor',
                'duration_years' => 4,
                'credits' => 240,
                'uk' => ['title' => 'Прикладна електроніка та схемотехніка', 'department' => 'Кафедра радіотехнічних пристроїв', 'description' => 'Схемотехнічний аналіз, моделювання підсилювачів та генераторів, конструювання друкованих вузлів.',
                ],
                // Переклад англійською навмисно пропущено для перевірки fallback на 'uk'
            ],
        ];
        foreach ($programs as $item) {
            $program = Program::updateOrCreate(
                ['code' => $item['code']],
                [
                    'level' => $item['level'],
                    'duration_years' => $item['duration_years'],
                    'credits' => $item['credits'],
                ]
            );
            foreach (['uk', 'en'] as $locale) {
                if (!isset($item[$locale])) {
                    continue;
                }
                ProgramTranslation::updateOrCreate(
                    [
                        'program_id' => $program->id,
                        'locale' => $locale,
                    ],
                    $item[$locale]
                );
            }
        }
    }
}
