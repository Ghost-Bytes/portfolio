<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <?php echo $personal_info['name']; ?>
            </div>
            <div class="footer-nav">
                <?php foreach ($nav_items as $item): ?>
                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="footer-social">
                <?php foreach ($personal_info['social_links'] as $social): ?>
                <a href="<?php echo $social['url']; ?>" target="_blank" aria-label="<?php echo $social['platform']; ?>">
                    <i class="<?php echo $social['icon']; ?>"></i>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="footer-text">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $personal_info['name']; ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>