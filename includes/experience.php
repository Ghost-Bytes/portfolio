<div class="container">
    <div class="section-header">
        <h2>My Experience</h2>
        <p>My professional journey</p>
    </div>
    <div class="timeline">
        <?php foreach ($experiences as $index => $exp): ?>
        <div class="timeline-item <?php echo $index % 2 == 0 ? 'left' : 'right'; ?>">
            <div class="timeline-content">
                <div class="timeline-date"><?php echo $exp['period']; ?></div>
                <h3 class="timeline-title"><?php echo $exp['title']; ?></h3>
                <h4 class="timeline-company"><?php echo $exp['company']; ?></h4>
                <p class="timeline-description"><?php echo $exp['description']; ?></p>
                <div class="timeline-tech">
                    <?php foreach ($exp['technologies'] as $tech): ?>
                    <span class="tech-tag"><?php echo $tech; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>