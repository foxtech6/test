<body>
<div class="container">
    <h1>Demo</h1>
    <div><a href="/">To main page</a></div>
    <div class="list">
        <?php foreach ($addresses as $address): ?>
            <?= $address?><br>
        <?php endforeach; ?>
    </div>
</div>
</body>
