<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>
<body>
<div class="portfolio-container">
  <!-- サイドバー -->
  <aside class="sidebar">
    <div class="sidebar-menu">
      <a href="/portfolio-list" class="menu-item">
        <img class="menu-icon" src="/images/lucide/book-marked 2.png" alt="Portfolio">
        <span>Portfolio</span>
      </a>

      <div class="menu-item active">
        <img class="menu-icon" src="/images/lucide/copy-plus 2.png" alt="Post">
        <span>Post</span>
      </div>

      <div class="menu-item">
        <img class="menu-icon" src="/images/lucide/message-circle-more.png" alt="Chat">
        <span>Chat</span>
      </div>
    </div>
  </aside>

  <!-- メインコンテンツ -->
  <main class="main-content">
    <div class="portfolio-header">
      <h1>Post</h1>
    </div>

    <div class="post-wrap">
      <form method="POST" action="#" enctype="multipart/form-data">
        <div class="post-grid">

          <!-- 左 -->
          <div class="left">
            <div class="card">
              <div class="uploadBox" id="uploadBox">
                <img id="preview" class="uploadPreview" alt="preview">
                <div class="uploadHint" id="hint">
                  <div class="plus"> ＋ </div>
                  <div>Drag & drop at image</div>
                </div>
                <input type="file" id="image" accept="image/*">
              </div>
            </div>

            <div class="card" style="margin-top:18px;">
              <div class="label">Description<span class="req">*</span></div>
              <textarea class="textarea" placeholder="説明を書いてね"></textarea>
            </div>

            <div class="submitWrap">
              <button class="submit" type="button">Create post</button>
            </div>
          </div>

          <!-- 右 -->
          <div class="right">
            <div class="card">
              <div class="field">
                <div class="label">Project Title<span class="req">*</span></div>
                <input class="input" type="text" placeholder="Portfolio Site!">
              </div>

              <div class="field">
                <div class="label">Sub title</div>
                <input class="input" type="text" placeholder="審査会提出！">
              </div>

              <div class="field">
                <div class="label">Period</div>
                <input class="input" type="text" placeholder="2026/01/28~2026/02/13">
              </div>

              <div class="field">
                <div class="label">Category</div>
                <div class="chips" data-group="category">
                  <button class="chip is-active" type="button">Web</button>
                  <button class="chip" type="button">App</button>
                  <button class="chip" type="button">Design</button>
                </div>
              </div>

              <div class="field">
                <div class="label">Stack</div>
                <div class="chips" data-group="stack">
                  @forelse($stacks as $stack)
                    <button class="chip" type="button" value="{{ $stack->id }}" name="stacks_id">{{ $stack->text }}</button>
                  @empty
                    <p style="color: #999;">スタックがありません</p>
                  @endforelse
                </div>
              </div>

              <div class="field">
                <div class="label">Tags</div>
                <div class="chips" data-group="tags">
                  @forelse($tags as $tag)
                    <button class="chip" type="button" value="{{ $tag->id }}" name="tags_id">{{ $tag->text }}</button>
                  @empty
                    <p style="color: #999;">タグがありません</p>
                  @endforelse
                </div>
              </div>

              <div class="field">
                <div class="label">Github</div>
                <input class="input" type="url" placeholder="https://github.com/...">
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </main>
</div>

<style>
  * { margin:0; padding:0; box-sizing:border-box; }

  body {
    font-family: 'Inter', system-ui, -apple-system, "Segoe UI", sans-serif;
    background-color:#f5f5f5;
  }

  .portfolio-container {
    display:flex;
    min-height:100vh;
    background-color:#f5f5f5;
  }

  /* サイドバー（一覧と同じ） */
  .sidebar {
    width:80px;
    background: linear-gradient(to bottom, #FF1054 0%, #DB7EB9 50%, #6D6EA1 100%);
    display:flex;
    flex-direction:column;
    align-items:center;
    padding:20px 0;
    position:fixed;
    height:100vh;
    left:0;
    top:0;
    box-shadow:2px 0 10px rgba(0,0,0,0.3);
  }

  .sidebar-menu {
    display:flex;
    flex-direction:column;
    gap:30px;
    width:100%;
    align-items:center;
  }

  .menu-item {
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:8px;
    color:white;
    cursor:pointer;
    font-size:11px;
    text-align:center;
    width:60px;
    padding:10px;
    border-radius:8px;
    transition: background-color 0.3s;
  }

  .menu-item.active { background-color: rgba(255,255,255,0.2); }
  .menu-item:hover  { background-color: rgba(255,255,255,0.1); }

  .menu-icon { width:32px; height:32px; }

  .menu-item.active .menu-icon {
    background-color:white;
    border-radius:50%;
    padding:8px;
    box-sizing:content-box;
    display:flex;
    align-items:center;
    justify-content:center;
  }

  /* メイン */
  .main-content {
    margin-left:80px;
    flex:1;
    padding-top:130px; /* header分 */
    padding-left:40px;
    padding-right:40px;
  }

  /* header（一覧と同じ） */
  .portfolio-header {
    position:fixed;
    top:0;
    left:80px;
    right:0;
    background-color:white;
    padding:30px 40px;
    box-shadow:0 2px 10px rgba(0,0,0,0.3);
    z-index:100;
    display:flex;
    flex-direction:column;
    gap:20px;
  }

  .portfolio-header h1{
    color:#000;
    display:inline-block;
    position:relative;
    margin:0;
    font-size:36px;
    font-weight:600;
  }
  .portfolio-header h1::after{
    content:"";
    position:absolute;
    bottom:-3px;
    left:-10px;
    width:calc(100% + 20px);
    height:3px;
    background-color:#FF1054;
  }

  /* Post layout */
  .post-wrap { padding-top: 20px; }
  .post-grid {
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap:28px;
    align-items:start;
  }

  .card {
    background:#fff;
    border-radius:14px;
    box-shadow:0 2px 10px rgba(0,0,0,.10);
    padding:22px;
  }

  .uploadBox{
    border:2px dashed #d7d7de;
    border-radius:14px;
    height:260px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#b0b0b8;
    position:relative;
    overflow:hidden;
    background:#fafafa;
  }
  .uploadBox input{ position:absolute; inset:0; opacity:0; cursor:pointer; }
  .uploadPreview{ width:100%; height:100%; object-fit:cover; display:none; }
  .uploadHint{ text-align:center; }
  .plus{
    width:56px; height:56px;
    border-radius:12px;
    background:#d9d9e2;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    font-size:34px;
    color:#fff;
    margin-bottom:10px;
  }

  .label{ font-size:18px; font-weight:700; margin-bottom:8px; color:#111; }
  .label .req{ color:#FF1054; margin-left:6px; }

  .input, .textarea{
    width:100%;
    border:1px solid #d7d7de;
    border-radius:10px;
    padding:10px 12px;
    font-size:14px;
    outline:none;
    background:#fff;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.04);
  }
  .textarea{ min-height:280px; resize:vertical; }

  .field{ margin-bottom:18px; }

  .chips{ display:flex; gap:12px; flex-wrap:wrap; }
  .chip{
    border:none;
    border-radius:10px;
    padding:10px 18px;
    background:#cfe4ff;
    color:#1a3b5d;
    font-weight:600;
    cursor:pointer;
    font-size:13px;
  }
  .chip.is-active{ background:#67C7F5; color:#fff; }

  .submitWrap{ margin-top:18px; display:flex; justify-content:center; }
  .submit{
    border:none;
    cursor:pointer;
    background:#FF1054;
    color:#fff;
    height:52px;
    padding:0 52px;
    border-radius:999px;
    font-size:18px;
    font-weight:700;
    box-shadow:0 10px 22px rgba(255,16,84,.25);
  }

  @media (max-width: 900px){
    .post-grid { grid-template-columns: 1fr; }
  }
</style>

<script>
  // 画像プレビュー
  const input = document.getElementById('image');
  const preview = document.getElementById('preview');
  const hint = document.getElementById('hint');

  input.addEventListener('change', () => {
    const file = input.files?.[0];
    if (!file) return;
    const url = URL.createObjectURL(file);
    preview.src = url;
    preview.style.display = 'block';
    hint.style.display = 'none';
  });

  // categoryは単一選択
  document.querySelectorAll('.chips[data-group="category"] .chip').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.chips[data-group="category"] .chip').forEach(b => b.classList.remove('is-active'));
      btn.classList.add('is-active');
    });
  });

  // stack/tagsはトグル
  document.querySelectorAll('.chips[data-group="stack"] .chip, .chips[data-group="tags"] .chip').forEach(btn => {
    btn.addEventListener('click', () => btn.classList.toggle('is-active'));
  });
</script>

</body>
</html>
