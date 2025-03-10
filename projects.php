<?php
require_once 'config.php';

$project_id = isset($_GET['id']) ? (int)$_GET['id'] : null;

$current_project = null;
if ($project_id) {
    foreach ($projects as $project) {
        if ($project['id'] === $project_id) {
            $current_project = $project;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $current_project ? $current_project['title'] : 'All Projects'; ?> - <?php echo $site_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'includes/header.php'; ?>
    
    <!-- Main Content -->
    <main class="projects-page">
        <div class="container">
            <?php if ($current_project): ?>
                <!-- Single Project View -->
                <div class="single-project">
                    <div class="back-link">
                        <a href="projects.php"><i class="fas fa-arrow-left"></i> Back to Projects</a>
                    </div>
                    <div class="section-header">
                        <h1><?php echo $current_project['title']; ?></h1>
                    </div>
                    
                    <div class="project-content">
                        <div class="project-image">
                            <img src="<?php echo $current_project['thumbnail']; ?>" alt="<?php echo $current_project['title']; ?>">
                        </div>
                        
                        <div class="project-details">
                            <div class="project-description">
                                <h3>About the Project</h3>
                                
                                <p><?php echo $current_project['full_details']; ?></p>
                            </div>
                            
                            <div class="project-tech-stack">
                                <h3>Technologies Used</h3>
                                <div class="tech-tags">
                                    <?php foreach ($current_project['technologies'] as $tech): ?>
                                    <span class="tech-tag"><?php echo $tech; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <div class="project-actions">
                                
                                <a href="<?php echo $current_project['link_code']; ?>" class="btn btn-secondary" target="_blank">
                                    <i class="fab fa-github"></i> View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- All Projects View -->
                <div class="section-header">
                    <h1>My Projects</h1>
                    <p>All my work in one place</p>
                </div>
                               
                <div class="projects-grid">
                    <?php foreach ($projects as $project): ?>
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
            <?php endif; ?>
        </div>
    </main>
    
    <?php include_once 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
</body>
</html>