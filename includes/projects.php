<div class="container">
    <div class="section-header">
        <h2>My Projects</h2>
        <p>Check out some of my recent work</p>
    </div>
    <div class="projects-grid">
        <?php foreach (array_slice($projects, 0, 3) as $project): ?>
        <div class="project-card">
            <div class="project-thumbnail">
                <img src="<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?>">
            </div>
            <div class="project-info">
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['description']; ?></p>
                <div class="project-tech">
                    <?php foreach ($project['technologies'] as $tech): ?>
                    <span class="tech-tag"><?php echo $tech; ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="project-links">
                    <a href="<?php echo $project['link_code']; ?>" class="btn btn-sm" target="_blank">
                        <i class="fab fa-github"></i> View Code
                    </a>
                    <a href="projects.php?id=<?php echo $project['id']; ?>" class="btn btn-sm">
                        <i class="fas fa-info-circle"></i> Details
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="btn-projects">
        <a href="projects.php" class="btn btn-primary text-center">View All Projects</a>
    </div>
</div>