<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat</title>
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }

    body{
      font-family: Inter, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background:#f5f5f5;
      color:#000;
    }

    /* ===== Sidebar（今のまま） ===== */
    .sidebar {
      width: 80px;
      background: linear-gradient(to bottom, #FF1054 0%, #DB7EB9 50%, #6D6EA1 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px 0;
      position: fixed;
      height: 100vh;
      left: 0;
      top: 0;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
    }

    .sidebar-menu {
      display: flex;
      flex-direction: column;
      gap: 30px;
      width: 100%;
      align-items: center;
      flex: 1;
    }

    .sidebar-bottom {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 16px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .avatar-small {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .settings-btn {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s;
    }
    .settings-btn:hover { background: rgba(255, 255, 255, 0.3); }

    .menu-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      color: white;
      cursor: pointer;
      font-size: 11px;
      text-align: center;
      width: 60px;
      padding: 10px;
      border-radius: 10px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .menu-item.active { background-color: rgba(255, 255, 255, 0.2); }
    .menu-item:hover  { background-color: rgba(255, 255, 255, 0.1); }

    .menu-icon { width: 32px; height: 32px; }
    .menu-item.active .menu-icon {
      background-color: white;
      border-radius: 50%;
      padding: 8px;
      box-sizing: content-box;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ===== Main（お手本の構造） ===== */
    .main-content{
      margin-left: 80px;
      height: 100vh;
      padding: 0;
      position: relative;
    }

    .chat-page{
      height: 100vh;
      display:flex;
    }

    /* ===== 左：ユーザー一覧（お手本：白パネル＋影） ===== */
    .users-panel{
      width: 260px;                 /* お手本の幅感 */
      background:#F0F0F5;
      padding: 20px;
      box-shadow: 2px 0 10px rgba(0,0,0,.10);
    }

    .users-title{
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    /* 検索：アイコンは右側に */
    .icon-img{
      width: 18px;
      height: 18px;
      display: block;
    }

    .search{
      position: relative;
      margin-bottom: 20px;
    }
    .search input{
      width:100%;
      height:36px;
      border-radius:20px;
      border:1px solid #ddd;
      padding:0 44px 0 12px;        /* 右の虫眼鏡分あける */
      outline:none;
      font-size:14px;
      background:#fff;
    }
    .search::after{
      content:"";
      position:absolute;
      right: 14px;
      top: 50%;
      width: 14px; height: 14px;
      transform: translateY(-50%);
      border:2px solid rgba(0,0,0,.55);
      border-radius:50%;
    }
    .search::before{
      content:"";
      position:absolute;
      right: 10px;
      top: 58%;
      width: 10px; height: 2px;
      background: rgba(0,0,0,.55);
      transform: rotate(45deg);
      border-radius: 2px;
    }

    .users-list{
      display:flex;
      flex-direction:column;
      gap: 20px;
    }

    .user-row{
      display:flex;
      align-items:center;
      position:relative;
      gap:10px;
    }

    .user-row img{
      width:40px;
      height:40px;
      border-radius:50%;
      object-fit:cover;
    }

    .user-row .name{
      font-size:20px;
      font-weight:700;
      letter-spacing: .2px;
    }

    .status-dot{
      width:10px;
      height:10px;
      border-radius:50%;
      position:absolute;
      right:10px;
    }
    .green{background:#00c896;}
    .red{background:#ff2e63;}
    .yellow{background:#f9c74f;}

    /* ===== 右：メッセージ（お手本：白背景、吹き出し大きめ） ===== */
    .chat-panel{
      flex:1;
      padding: 40px;
      background:#ffff;
      position: relative;
      overflow: hidden;
    }

    .messages{
      height: calc(100vh - 40px - 90px); /* 上padding + 入力欄分 */
      overflow-y:auto;
      padding-right: 6px;
    }

    .message-row{
      display:flex;
      align-items:flex-start;
      gap:10px;
      margin-bottom: 30px;
    }

    .message-row.left img{
      width:40px;
      height:40px;
      border-radius:50%;
      object-fit:cover;
      margin-top: 2px;
    }

    .message-row.right{
      justify-content:flex-end;
    }

    .bubble{
      padding: 15px 20px;
      border-radius: 15px;
      max-width: 350px;
      font-size: 14px;
      line-height: 1.5;
    }
    .bubble.gray{ background:#e5e5ea; color:#111; }
    .bubble.blue{ background:#9ec3d7; color:#0b2a3a; }

    /* ===== 入力（お手本：下に浮く・横長） ===== */
    .chat-input{
      position:absolute;
      left: 50%;
      bottom: 22px;
      transform: translateX(-50%);
      width: min(760px, calc(100% - 80px));
      height: 56px;

      background:#fff;
      border-radius: 12px;
      border: 1px solid rgba(0,0,0,0.10);
      box-shadow: 0 5px 20px rgba(0,0,0,.10);

      display:flex;
      align-items:center;
      padding: 0 14px;
      gap: 10px;
    }

    .chat-input input{
      flex:1;
      border:none;
      outline:none;
      font-size: 18px;
    }
    .chat-input input::placeholder{ color: rgba(0,0,0,0.40); }

    .icon-btn{
      width: 36px;
      height: 36px;
      border:none;
      background:transparent;
      cursor:pointer;
      font-size: 18px;
      border-radius: 10px;
    }
    .icon-btn:hover{ background: rgba(0,0,0,0.06); }
  </style>
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
