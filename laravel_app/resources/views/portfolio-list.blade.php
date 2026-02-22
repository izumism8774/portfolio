<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite([
    'resources/css/app.css',
    'resources/css/list.css',
    ])
</head>
<body>
<div class="portfolio-container">
    <!-- サイドバー -->
    <aside class="sidebar">
        <div class="sidebar-menu">
            <div class="menu-item active">
                <img class="menu-icon" src="/images/lucide/book-marked.png" alt="Portfolio">
                <span>Portfolio</span>
            </div>
            <a href="/portfolio-post" class="menu-item">
                <img class="menu-icon" src="/images/lucide/copy-plus.png" alt="Post">
                <span>Post</span>
            </a>
            <div class="menu-item">
                <img class="menu-icon" src="/images/lucide/message-circle-more.png" alt="Chat">
                <span>Chat</span>
            </div>
        </div>
    </aside>

    <!-- メインコンテンツ -->
    <main class="main-content">
        <div class="portfolio-header">
            <h1>Portfolio</h1>
            <!-- タブ -->
            <div class="tabs">
                <button class="tab-btn active" data-category="all">All</button>
                <button class="tab-btn" data-category="web">Web</button>
                <button class="tab-btn" data-category="app">App</button>
                <button class="tab-btn" data-category="design">Design</button>
            </div>
        </div>

        <!-- グリッドレイアウト -->
        <div class="portfolio-grid">
            @forelse($portfolios as $portfolio)
                <a href="/portfolio-show/{{ $portfolio->id }}" class="portfolio-card" data-category="{{ $portfolio->category }}">
                    <div class="card-image">
                        <span class="badge badge-{{ $portfolio->category === 'web' ? 'blue' : ($portfolio->category === 'app' ? 'purple' : 'pink') }}">
                            {{ ucfirst($portfolio->category) }}
                        </span>
                        <img src="{{ $portfolio->picture }}" alt="{{ $portfolio->title }}">
                    </div>
                    <div class="card-content">
                        <h3>{{ $portfolio->title }}</h3>
                        <p>{{ Str::limit($portfolio->description, 100) }}</p>
                    </div>
                </a>
            @empty
                <p style="grid-column: 1 / -1; text-align: center; color: #999; padding: 40px;">
                    ポートフォリオがまだ登録されていません
                </p>
            @endforelse
        </div>
    </main>
</div>
</body>
</html>
