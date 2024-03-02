
<div class="file-content">
    <div class="file-info" style="display: flex; justify-content: space-between; gap: 10px; align-items: center;">
        <h2>File content</h2>
        <div>
            <span><b>File size: </b></span>
        <span><?= $file_size ?></span>
        </div>
    </div>
    <pre>
    <?= htmlentities($file_content); ?>
    </pre>
</div>