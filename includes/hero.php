<div class="container">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Hi, I'm <span class="highlight"><?php echo $personal_info['name']; ?></span></h1>
            <h2><?php echo $personal_info['title']; ?></h2>
            <p class="hero-description"><?php echo $personal_info['about_me']; ?></p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="<?php echo $personal_info['resume_link']; ?>" class="btn btn-secondary" target="_blank">Download Resume</a>
            </div>
            <div class="social-links">
                <?php foreach ($personal_info['social_links'] as $social): ?>
                <a href="<?php echo $social['url']; ?>" target="_blank" aria-label="<?php echo $social['platform']; ?>">
                    <i class="<?php echo $social['icon']; ?>"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo $personal_info['profile_image']; ?>" alt="<?php echo $personal_info['name']; ?>">
        </div>
    </div>
</div>