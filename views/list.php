<body class="main">
<div class="container">
    <h1>List addresses</h1>
    <div class="link"><a href="/">To main page</a></div>
    <div class="list">
        <?php foreach ($addresses as $address): ?>
            <?= $address?><br>
        <?php endforeach; ?>
    </div>
</div>
</body>
