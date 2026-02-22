<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
  @vite([
  'resources/css/app.css',
  'resources/css/post.css',
  'resources/js/app.js',
  'resources/js/portfolio/post.js',
  ])
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
</body>
</html>
