<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Show</title>
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

        <div class="show-updated">最終更新日：2026/02/08</div>
      </header>

      <!-- ===== 本文 ===== -->
      <div class="show-wrap">
        <div class="show-grid">
          <!-- 左：メイン詳細 -->
          <section class="left">
            <div class="card main-card">
              <div class="hero">
                <img src="/images/002.png" alt="hero" />
              </div>

              <div class="main-body">
                <h2>Portfolio site!</h2>
                <div class="sub">審査会提出！</div>
                <div class="divider"></div>

                <div class="desc">
                  とにかくめっちゃいい作品ですとにかくめっちゃいい作品ですとにかくめっちゃいい作品ですとにかくめっちゃいい作品です…
                  <br /><br />
                  （ここは後でDBに繋いだら本文が入る）
                </div>
              </div>
            </div>
          </section>

          <!-- 右：情報カード＋Related -->
          <aside class="right">
            <div class="card info-card">
              <div class="period">2026/01/28~2026/02/13</div>

              <div class="meta">
                <div class="meta-row">
                  <div class="meta-label">Category：</div>
                  <span class="pill pill-web">Web</span>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Stack：</div>
                  <div class="pill-row">
                    <span class="pill pill-purple">PHP</span>
                    <span class="pill pill-pink">Figma</span>
                  </div>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Tags：</div>
                  <div class="pill-grid">
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                    <span class="pill pill-tag">Simple</span>
                    <span class="pill pill-tag">Design</span>
                  </div>
                </div>

                <div class="meta-row">
                  <div class="meta-label">Github：</div>
                  <a class="github" href="https://github.com/tahoito/cafest_app.git" target="_blank" rel="noreferrer">
                    https://github.com/tahoito/cafest_app.git
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

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Inter', system-ui, -apple-system, "Segoe UI", sans-serif; background: #f5f5f5; }

    .portfolio-container { display: flex; min-height: 100vh; }

    /* ===== sidebar ===== */
    .sidebar{
  width:80px;
  background: linear-gradient(to bottom, #FF1054 0%, #DB7EB9 50%, #6D6EA1 100%);
  display:flex;
  flex-direction:column;
  align-items:center;
  padding:20px 0;

  position:fixed;
  top:0;
  bottom:0;   /* ← これが重要 */
  left:0;

  z-index:200; /* ← かぶされ防止 */
  box-shadow:2px 0 10px rgba(0,0,0,0.3);
}

  .sidebar-menu{ display:flex; flex-direction:column; gap:30px; width:100%; align-items:center; }
  .menu-item{
    display:flex; flex-direction:column; align-items:center; gap:8px;
    color:#fff; cursor:pointer; font-size:11px; text-align:center;
    width:60px; padding:10px; border-radius:8px;
    transition: background-color .3s;
    text-decoration:none;
  }
  .menu-item.active{ background-color: rgba(255,255,255,0.2); }
  .menu-item:hover{ background-color: rgba(255,255,255,0.1); }
  .menu-icon{ width:32px; height:32px; }
  .menu-item.active .menu-icon{
    background:#fff; border-radius:50%; padding:8px;
    box-sizing:content-box; display:flex; align-items:center; justify-content:center;
  }

    /* ===== main ===== */
    .main-content{
      margin-left:105px; /* 80 + 25 */
      flex:1;
      padding-top:190px;
      padding-left:0;
      padding-right:40px;
    }

    /* ===== show header (Frame27と同じ) ===== */
  .show-header{
    position: fixed;
    top: 0;
    left: 80px;
    right: 0;
    background: #fff;
    padding: 26px 40px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.25);
    z-index: 100;
    box-sizing: border-box;
  }


    .show-header-left{
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .show-title{
      display: inline-block;
      position: relative;
      font-size: 36px;
      font-weight: 700;
      color: #000;
      margin: 0;
      line-height: 1.1;
    }

    .show-title::after{
      content:"";
      position:absolute;
      left: 0;
      bottom: -4px;
      width: 100%;
      height: 3px;
      background:#FF1054;
      border-radius: 2px;
    }

    .show-updated{
      color:#9a9a9a;
      font-size:12px;
      padding-top:22px;
      white-space:nowrap;
    }

    .show-tabs{ display:flex; gap:16px; }
    .show-tab{
      border:none;
      cursor:pointer;
      height:34px;
      padding:0 22px;
      border-radius:10px;
      background:#ececf2;
      color:#9d9d9d;
      font-weight:600;
      font-size:16px;
      line-height:1;
    }
    .show-tab.is-active{ background:#67C7F5; color:#fff; }
    .show-tab:focus{ outline:none; }

    /* ===== layout ===== */
    .show-wrap{
      padding-top:35px;   /* ヘッダー下〜カード上：35px */
      max-width:1200px;
      margin:0;
    }

  .show-grid{
    display:grid;
    grid-template-columns: 720px 404px; /* ←ここ変更 */
    gap:25px;
  }

    /* 右カラム内のカード間を24pxにする */
    .right{
      display:flex;
      flex-direction:column;
      gap:24px;
    }

    /* ===== card共通 ===== */
    .card{
      background:#fff;
      border-radius:14px;
      box-shadow:0 2px 10px rgba(0,0,0,.10);
      overflow:hidden;
    }

    /* ===== left main card ===== */
    .hero{ height:320px; background:#eee; }
    .hero img{ width:100%; height:100%; object-fit:cover; display:block; }

    .main-body{ padding:22px 22px 26px; }
    .main-body h2{ font-size:32px; font-weight:800; color:#000; margin-bottom:8px; }
    .sub{ font-size:16px; font-weight:700; color:#000; margin-bottom:14px; }
    .divider{ height:1px; background:#ddd; margin:0 0 16px; }
    .desc{ font-size:13px; line-height:1.7; color:#111; }

    /* ===== info card ===== */
    .info-card{ padding:20px; }
    .period{ font-size:20px; font-weight:800; color:#000; margin-bottom:14px; }
    .meta{ display:flex; flex-direction:column; gap:12px; }
    .meta-row{ display:flex; align-items:flex-start; gap:8px; }
    .meta-label{ width:72px; font-size:13px; font-weight:800; color:#000; padding-top:2px; }
    .pill-row{ display:flex; gap:8px; flex-wrap:wrap; }

    .pill{
      display:inline-flex; align-items:center; justify-content:center;
      height:22px; padding:0 10px;
      border-radius:999px;
      font-size:12px; font-weight:700;
      white-space:nowrap;
    }
    .pill-web{ background:#67C7F5; color:#fff; }
    .pill-purple{ background:#6D6EA1; color:#fff; }
    .pill-pink{ background:#FB2E82; color:#fff; }
    .pill-tag{ background:#cfe4ff; color:#1a3b5d; }

    .pill-grid{
      display:grid;
      grid-template-columns: repeat(4, max-content);
      gap:8px;
    }

    .github{
      font-size:12px;
      color:#111;
      text-decoration:underline;
      word-break:break-all;
    }

    /* ===== related ===== */
    .related-card{ padding:16px; }
    .related-card h3{ font-size:16px; font-weight:800; margin-bottom:12px; }

    .related-item{
      display:block;
      border-radius:12px;
      overflow:hidden;
      border:1px solid #e6e6ee;
      text-decoration:none;
      color:inherit;
      background:#fff;
    }

    .related-thumb{
      position:relative;
      height:120px;
      background:#d7e9ff;
    }
    .related-thumb img{ width:100%; height:100%; object-fit:cover; display:block; }

    .badge{
      position:absolute; top:10px; left:10px;
      height:28px; padding:0 14px;
      border-radius:10px;
      display:inline-flex; align-items:center; justify-content:center;
      font-size:12px; font-weight:800;
      color:#fff;
    }
    .badge-web{ background:#67C7F5; }

    .related-body{ padding:12px; }
    .related-title{ font-size:16px; font-weight:800; margin-bottom:6px; }
    .related-text{ font-size:12px; color:#111; line-height:1.5; }

    @media (max-width: 980px){
      .show-grid{ grid-template-columns: 1fr; }
      .pill-grid{ grid-template-columns: repeat(3, max-content); }
      .show-wrap{ max-width: 100%; }
      .show-updated{ padding-top: 0; }
    }
  </style>
</body>
</html>
