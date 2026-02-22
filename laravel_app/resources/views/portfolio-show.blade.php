<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Show</title>
  @vite([
  'resources/css/app.css',
  'resources/css/show.css',
  'resources/js/app.js',
  ])
</head>
<body>
  <div class="portfolio-container">
    <!-- サイドバー -->
    <aside class="sidebar">
      <div class="sidebar-menu">
        <a href="/portfolio-list" class="menu-item active">
          <img class="menu-icon" src="/images/lucide/book-marked.png" alt="Portfolio" />
          <span>Portfolio</span>
        </a>
        <a href="/portfolio-post" class="menu-item">
          <img class="menu-icon" src="/images/lucide/copy-plus.png" alt="Post" />
          <span>Post</span>
        </a>
        <a href="#" class="menu-item">
          <img class="menu-icon" src="/images/lucide/message-circle-more.png" alt="Chat" />
          <span>Chat</span>
        </a>
      </div>
    </aside>

    <!-- メイン -->
    <main class="main-content">
      <!-- ===== ヘッダー（Frame27と同じ見た目）===== -->
      <header class="show-header">
        <div class="show-header-left">
          <h1 class="show-title">Portfolio Site!</h1>

          <div class="show-tabs">
            <button class="show-tab is-active" type="button">Web</button>
            <button class="show-tab" type="button">App</button>
            <button class="show-tab" type="button">Design</button>
          </div>
        </div>

        <div class="show-updated">最終更新日：{{ $portfolio->updated_at->format('Y/m/d') }}</div>
      </header>

      <!-- ===== 本文 ===== -->
      <div class="show-wrap">
        <div class="show-grid">
          <!-- 左：メイン詳細 -->
          <section class="left">
            <div class="card main-card">
              <div class="hero">
                <img src="{{ $portfolio->picture }}" alt="{{ $portfolio->title }}" />
              </div>

              <div class="main-body">
                <h2>{{ $portfolio->title }}</h2>
                <div class="sub">{{ $portfolio->category }}</div>
                <div class="divider"></div>

                <div class="desc">
                  {{ $portfolio->description }}
                </div>
              </div>
            </div>
          </section>

          <!-- 右：情報カード＋Related -->
          <aside class="right">
            <div class="card info-card">
              <div class="period">{{ $portfolio->period }}</div>

              <div class="meta">
                <div class="meta-row">
                  <div class="meta-label">Category：</div>
                  <span class="pill pill-{{ $portfolio->category === 'web' ? 'web' : ($portfolio->category === 'app' ? 'purple' : 'pink') }}">
                    {{ ucfirst($portfolio->category) }}
                  </span>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Stack：</div>
                  <div class="pill-row">
                    @if($portfolio->stacks)
                      <span class="pill pill-purple">{{ $portfolio->stacks->text }}</span>
                    @endif
                  </div>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Tags：</div>
                  <div class="pill-grid">
                    @if($portfolio->tags)
                      <span class="pill pill-tag">{{ $portfolio->tags->text }}</span>
                    @endif
                  </div>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Github：</div>
                  <a class="github" href="{{ $portfolio->github }}" target="_blank" rel="noreferrer">
                    {{ $portfolio->github }}
                  </a>
                </div>
              </div>
            </div>

            <div class="card related-card">
              <h3>Related Projects</h3>

              <a href="/portfolio-show" class="related-item">
                <div class="related-thumb">
                  <span class="badge badge-web">Web</span>
                  <img src="/images/001.png" alt="related" />
                </div>
                <div class="related-body">
                  <div class="related-title">Web app Projects</div>
                  <div class="related-text">あ〜で、こ〜で、べちゃくちゃ…</div>
                </div>
              </a>

              <a href="/portfolio-show" class="related-item" style="margin-top:14px;">
                <div class="related-thumb">
                  <span class="badge badge-web">Web</span>
                  <img src="/images/001.png" alt="related" />
                </div>
                <div class="related-body">
                  <div class="related-title">Web app Projects</div>
                  <div class="related-text">あ〜で、こ〜で、べちゃくちゃ…</div>
                </div>
              </a>
            </div>
          </aside>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
