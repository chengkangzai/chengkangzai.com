<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'name' => 'What to Eat Huh',
                'description' => [
                    'en' => 'Are you having trouble with what to eat today? What to eat app will be the essential app for you to decide what to eat no matter when!',
                    'zh' => '你今天不知道要吃什么吗？什么吃应用程序将是您决定随时吃什么的必备应用程序！',
                    'ms' => 'Adakah anda menghadapi masalah dengan apa yang hendak dimakan hari ini? Aplikasi apa yang hendak dimakan akan menjadi aplikasi penting untuk anda memutuskan apa yang hendak dimakan tidak kira bila!'
                ],
                'github_url' => 'https://github.com/chengkangzai/eatwhat',
                'url' => 'https://eat.chengkangzai.com',
                'is_active' => true,
                'tags' => ['Angular', 'Ionic', 'Capacitor', 'Firebase']
            ],
            [
                'name' => 'Pandemic Dashboard',
                'description' => [
                    'en' => 'The website is a Covid-19 dashboard for Malaysia, actively refresh for new data from MOH and CITF.',
                    'zh' => '该网站是马来西亚的 Covid-19 仪表板，积极刷新来自卫生部和 CITF 的新数据。',
                    'ms' => 'Laman web ini adalah papan pemuka Covid-19 untuk Malaysia, secara aktif menyegarkan data baharu dari KKM dan CITF.'
                ],
                'github_url' => 'https://github.com/chengkangzai/malaysia-pandemic-dashboard',
                'url' => 'https://pandemic.chengkangzai.com/',
                'is_active' => true,
                'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'Alpine JS', 'Livewire']
            ],
            [
                'name' => 'NakVaksin!',
                'description' => [
                    'en' => 'Nakvaksin is built for Malaysians to monitor their vaccination appointment and automatically send the notification if there is any update!',
                    'zh' => 'Nakvaksin 是为马来西亚人建造的，用于监控他们的疫苗接种预约，如果有任何更新，会自动发送通知！',
                    'ms' => 'Nakvaksin dibina untuk rakyat Malaysia memantau temujanji vaksinasi mereka dan menghantar pemberitahuan secara automatik jika terdapat sebarang kemaskini!'
                ],
                'github_url' => 'https://github.com/nubpro/nakvaksin',
                'url' => 'https://www.nakvaksin.com/',
                'is_active' => true,
                'tags' => ['Tailwind CSS', 'React', 'Next.js', 'Vercel']
            ],
            [
                'name' => 'Time Stone',
                'description' => [
                    'en' => 'TimeStone fetch my university(APU) timetable and automatically sync the timetable into the calendar!',
                    'zh' => 'TimeStone 获取我的大学（APU）时间表并自动将时间表同步到日历中！',
                    'ms' => 'TimeStone mengambil jadual waktu universiti saya (APU) dan secara automatik menyegerakkan jadual waktu ke dalam kalendar!'
                ],
                'github_url' => 'https://github.com/chengkangzai/time-stone',
                'url' => null,
                'is_active' => true,
                'tags' => ['Laravel', 'Alpine JS', 'Livewire']
            ],
            [
                'name' => 'Smart TT',
                'description' => [
                    'en' => 'SmartTT is focusing to help the Tour Agency for selling and manage their tour package. It can also act as online CMS for Tour Agency for online marketing and booking system.',
                    'zh' => 'SmartTT 专注于帮助旅行社销售和管理他们的旅游套餐。它还可以作为旅行社的在线 CMS，用于在线营销和预订系统。',
                    'ms' => 'SmartTT memberi tumpuan untuk membantu Agensi Pelancongan dalam menjual dan menguruskan pakej pelancongan mereka. Ia juga boleh bertindak sebagai CMS dalam talian untuk Agensi Pelancongan untuk pemasaran dalam talian dan sistem tempahan.'
                ],
                'github_url' => 'https://github.com/chengkangzai/SmartTT',
                'url' => 'https://smarttt.chengkangzai.com/',
                'is_active' => true,
                'tags' => ['Laravel', 'Tailwind CSS', 'Alpine JS', 'Livewire', 'Bootstrap', 'Filament']
            ],
            [
                'name' => 'Quotiverse',
                'description' => [
                    'en' => 'Quotiverse is a place where i keep my favourite quote that motivate my life and my motto',
                    'zh' => 'Quotiverse 是我保存激励我生活的最喜欢的名言和座右铭的地方',
                    'ms' => 'Quotiverse adalah tempat di mana saya menyimpan petikan kegemaran saya yang memotivasikan hidup saya dan moto saya'
                ],
                'github_url' => 'https://github.com/chengkangzai/Quotiverse',
                'url' => 'https://quotiverse.chengkangzai.com/',
                'is_active' => true,
                'tags' => ['Laravel', 'Tailwind CSS', 'Alpine JS', 'Livewire', 'Filament']
            ]
        ];

        foreach ($projects as $projectData) {
            $tags = $projectData['tags'];
            unset($projectData['tags']);

            $project = Project::create($projectData);
            $project->attachTags($tags);
        }
    }
}