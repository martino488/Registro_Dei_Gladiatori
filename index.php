<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <?php include 'palestra.php'; ?>
    <?php include 'style.php' ?>

    <table class="table table-dark table-striped">
        <thead>
            <th id="gladiatore">Gladiatore</th>
            <th id="vittorie">Vittoria1</th>
            <th id="vittorie">Vittoria2</th>
            <th id="vittorie">Vittoria3</th>
            <th id="mediaVittorie">Media Vittorie</th>
            <th id="stato">Stato</th>
        </thead>
        <tbody>
            <?php foreach ($palestra as $gladiatore) : ?>
                <?php $somma = array_sum($gladiatore['vittorie']); ?>
                <?php $sessioni = count($gladiatore['vittorie']); ?>
                <?php $mediaVittorie = $somma /  $sessioni; ?>
                <tr>
                    <td><?php echo  $gladiatore['nome']; ?></td>
                    <?php foreach ($gladiatore['vittorie'] as $vittoria) : ?>
                        <td><?php echo $vittoria; ?></td>
                    <?php endforeach ?>
                    <td><?php echo number_format($mediaVittorie, 1); ?><br></td>
                    <td><?php if ($gladiatore['stato']): ?>
                            <span class="badge bg-success">Attivo</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Inattivo</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php "<br>" ?>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>