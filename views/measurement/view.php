<div class="container">
    <h2>Messung anzeigen</h2>

    <p>
        <a class="btn btn-primary" href="index.php?r=measurement/update&id=<?= $model->getId() ?>">Aktualisieren</a>
        <a class="btn btn-danger" href="index.php?r=measurement/delete&id=<?= $model->getId() ?>">Löschen</a>

    </p>

    <table class="table table-striped table-bordered detail-view">
        <tbody>
            <tr>
                <th>Name of the Station</th>
                <td><?= $model->getStationName();?></td>
            </tr>
            <tr>
                <th>Time</th>
                <td><?= $model->getTime()?></td>
            </tr>
            <tr>
                <th>Temperature</th>
                <td><?= $model->getTemperature()?> C°</td>
            </tr>
            <tr>
                <th>Rain</th>
                <td><?= $model->getRain()?> mm</td>
            </tr>
            <tr>

        </tbody>
    </table>
</div> <!-- /container -->

