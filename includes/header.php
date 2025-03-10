<header class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><?php echo $personal_info['name']; ?></a>
        </div>
        <nav class="main-nav">
            <button class="mobile-menu-toggle" aria-label="Toggle navigation menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-list">
                <?php foreach ($nav_items as $item): ?>
                <li><a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>