<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat</title>
  @vite([
  'resources/css/app.css',
  'resources/css/chat.css',
  'resources/js/app.js',
  ]),
</head>

<body>
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-menu">
      <a href="/portfolio-list" class="menu-item">
        <img class="menu-icon" src="/images/lucide/book-marked.png" alt="Portfolio">
        <span>Portfolio</span>
      </a>

      <a href="/portfolio-post" class="menu-item">
        <img class="menu-icon" src="/images/lucide/copy-plus.png" alt="Post">
        <span>Post</span>
      </a>

      <a href="/chat" class="menu-item">
        <img class="menu-icon" src="/images/lucide/message-circle-more.png" alt="Chat">
        <span>Chat</span>
      </a>

    </div>

    <div class="sidebar-bottom">
      <img src="/images/003.png" alt="user" class="avatar-small">
      <button class="settings-btn" aria-label="settings">⚙</button>
    </div>
  </aside>

  <!-- Main -->
  <main class="main-content">
    <div class="chat-page">

      <!-- 左：ユーザー一覧 -->
      <section class="users-panel">
        <div class="users-title">Chat</div>

        <div class="search">
          <input type="text" placeholder="" />
        </div>

        <div class="users-list">
          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot green"></div>
          </div>

          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot red"></div>
          </div>

          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot yellow"></div>
          </div>

          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot green"></div>
          </div>

          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot yellow"></div>
          </div>

          <div class="user-row">
            <img src="/images/003.png" alt="">
            <div class="name">shinsakai</div>
            <div class="status-dot red"></div>
          </div>
        </div>
      </section>

      <!-- 右：メッセージ -->
      <section class="chat-panel">
        <div class="messages">

          <div class="message-row left">
            <img src="/images/003.png" alt="">
            <div class="bubble gray">Type a message...</div>
          </div>

          <div class="message-row right">
            <div class="bubble blue">Type a message...</div>
          </div>

          <div class="message-row left">
            <img src="/images/003.png" alt="">
            <div class="bubble gray">Type a message...</div>
          </div>

          <div class="message-row left">
            <img src="/images/003.png" alt="">
            <div class="bubble gray">Type a message...</div>
          </div>

          <div class="message-row right">
            <div class="bubble blue">Type a message...</div>
          </div>

          <div class="message-row left">
            <img src="/images/003.png" alt="">
            <div class="bubble gray">Type a message...</div>
          </div>

          <div class="message-row right">
            <div class="bubble blue">Type a message...</div>
          </div>

        </div>

        <div class="chat-input">
          <input type="text" placeholder="Type a message..." />

          <button class="icon-btn" type="button" aria-label="emoji">
            <img src="/images/lucide/smile.png" alt="emoji" class="icon-img">
          </button>

          <button class="icon-btn" type="button" aria-label="send">
            <img src="/images/lucide/send.png" alt="send" class="icon-img">
          </button>
        </div>
      </section>

    </div>
  </main>
</body>
</html>
