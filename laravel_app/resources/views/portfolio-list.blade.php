<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
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
            <!-- 作品 1 -->
            <div class="portfolio-card" data-category="web">
                <div class="card-image">
                    <span class="badge badge-blue">Web</span>
                    <img src="/images/001.png" alt="Web Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>

            <!-- 作品 2 -->
            <div class="portfolio-card" data-category="app">
                <div class="card-image">
                    <span class="badge badge-purple">App</span>
                    <img src="/images/001.png" alt="App Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>

            <!-- 作品 3 -->
            <div class="portfolio-card" data-category="design">
                <div class="card-image">
                    <span class="badge badge-pink">Design</span>
                    <img src="/images/001.png" alt="Design Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>

            <!-- 作品 4 -->
            <div class="portfolio-card" data-category="app">
                <div class="card-image">
                    <span class="badge badge-purple">App</span>
                    <img src="/images/001.png" alt="App Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>

            <!-- 作品 5 -->
            <div class="portfolio-card" data-category="design">
                <div class="card-image">
                    <span class="badge badge-pink">Design</span>
                    <img src="/images/001.png" alt="Design Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>

            <!-- 作品 6 -->
            <div class="portfolio-card" data-category="web">
                <div class="card-image">
                    <span class="badge badge-blue">Web</span>
                    <img src="/images/001.png" alt="Web Project">
                </div>
                <div class="card-content">
                    <h3>Web app Projects</h3>
                    <p>test</p>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .portfolio-container {
        display: flex;
        min-height: 100vh;
        background-color: #f5f5f5;
    }

    /* サイドバースタイル */
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
    }

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
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .menu-item.active {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .menu-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .menu-icon {
        width: 32px;
        height: 32px;
    }

    .menu-item.active .menu-icon {
        background-color: white;
        border-radius: 50%;
        padding: 8px;
        box-sizing: content-box;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* メインコンテンツ */
    .main-content {
        margin-left: 80px;
        flex: 1;
        padding-top: 180px;
        padding-left: 40px;
        padding-right: 40px;
    }

    .portfolio-header {
        position: fixed;
        top: 0;
        left: 80px;
        right: 0;
        background-color: white;
        padding: 30px 40px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        z-index: 100;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .portfolio-header h1 {
    color: #000;
    display: inline-block;
    position: relative;
    margin: 0;
    font-family: 'Inter', sans-serif;
    font-size: 36px;
    font-weight: 600;
    }


    .portfolio-header h1::after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: -10px;
    width: calc(100% + 20px);
    height: 3px;
    background-color: #FF1054;
}

    /* タブスタイル */
    .tabs {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;
    }

    .tab-btn {
        width: 90px;
        height: 35px;
        border: none;
        border-radius: 10px;
        background-color: #f0f0f5;
        color: #9d9d9d;
        cursor: pointer;

        display: flex;
        align-items: center;
        justify-content: center;

        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 500;

        position: relative;
        transition: all 0.3s;
    }

    .tab-btn.active {
        background-color: transparent; /* ← 背景消す */
        color: #000;
    }

    /* 各タブのホバー/アクティブカラー */
    .tab-btn[data-category="all"]:hover,
    .tab-btn[data-category="all"].active {
        background-color: #FB2E82;
        color: white;
    }

    .tab-btn[data-category="web"]:hover,
    .tab-btn[data-category="web"].active {
        background-color: #67C7F5;
        color: white;
    }

    .tab-btn[data-category="app"]:hover,
    .tab-btn[data-category="app"].active {
        background-color: #6D6EA1;
        color: white;
    }

    .tab-btn[data-category="design"]:hover,
    .tab-btn[data-category="design"].active {
        background-color: #FF1054;
        color: white;
    }

    /* グリッドレイアウト */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
    }

    .portfolio-card {
        background-color: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .card-image {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #87ceeb 0%, #87ceeb 100%);
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .badge {
        position: absolute;
        top: 12px;
        left: 12px;
        width: 90px;
        height: 35px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 500;
        line-height: 1;
        color: white;
        z-index: 10;
    }

    .badge-blue {
        background-color: #67C7F5;
    }

    .badge-purple {
        background-color: #6D6EA1;
    }

    .badge-pink {
        background-color: #FB2E82;
    }

    .card-content {
        padding: 20px;
    }

    .card-content h3 {
        font-size: 16px;
        color: #000;
        margin-bottom: 10px;
    }

    .card-content p {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
    }

    /* レスポンシブ */
    @media (max-width: 768px) {
        .sidebar {
            width: 70px;
            padding: 15px 0;
        }

        .menu-item {
            gap: 5px;
            padding: 8px;
        }

        .menu-icon {
            width: 28px;
            height: 28px;
        }

        .sidebar-menu {
            gap: 20px;
        }

        .main-content {
            margin-left: 70px;
            padding: 30px 20px;
        }

        .portfolio-header h1 {
            font-size: 24px;
        }

        .portfolio-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
    }
</style>

<script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // タブの切り替え
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // カテゴリーでフィルタリング
            const category = this.dataset.category;
            document.querySelectorAll('.portfolio-card').forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>
