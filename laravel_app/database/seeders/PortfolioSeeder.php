<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'SNS Web App',
            'picture' => '/images/001.png',
            'description' => 'React と Laravel を使用した SNS アプリケーション。ユーザー認証、投稿機能、コメント機能などを実装しました。',
            'category' => 'web',
            'period' => '2024年3月～2024年8月',
            'github' => 'https://github.com/example/sns-app',
            'tags_id' => 1,
            'stacks_id' => 1,
        ]);

        Portfolio::create([
            'title' => 'E-commerce Platform',
            'picture' => '/images/001.png',
            'description' => 'Laravel と MySQL を使用した ECサイト。決済機能、在庫管理、管理画面などを実装しました。',
            'category' => 'web',
            'period' => '2024年9月～2024年12月',
            'github' => 'https://github.com/example/ecommerce',
            'tags_id' => 2,
            'stacks_id' => 2,
        ]);

        Portfolio::create([
            'title' => 'Task Management App',
            'picture' => '/images/001.png',
            'description' => 'Vue.js と TypeScript を使用したタスク管理アプリ。リアルタイム更新、ドラッグ&ドロップ対応。',
            'category' => 'app',
            'period' => '2025年1月～2025年2月',
            'github' => 'https://github.com/example/task-app',
            'tags_id' => 4,
            'stacks_id' => 3,
        ]);
    }
}
