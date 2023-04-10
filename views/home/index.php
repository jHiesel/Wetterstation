<div class="container">
    <div class="row">
        <h2>Awesome Wetterstation</h2>
    </div>
    <div class="row">
        <p class="form-inline">
            <select  id="station" class="form-control" name="station_id" style="width: 200px">
                <?php
                foreach($model as $station):
                    print_r($model);
                    echo '<option value="' . $station->getId(). '">' . $station->getName() . '</option>';
                endforeach;
                ?>
            </select>
            <button id="btnSearch" class="btn btn-primary" onclick="loadDoc()"><span class="glyphicon glyphicon-search"></span> Messwerte anzeigen</button>
            <a class="btn btn-default" href="index.php?r=station/index"><span class="glyphicon glyphicon-pencil"></span> Messstationen bearbeiten</a>

            <canvas id="chart" width="400" height="100"></canvas>

        <br/>

        <table class="table table-striped table-bordered" id="test">
            <thead>
            <tr>
                <th>Zeitpunkt</th>
                <th>Temperatur [C°]</th>
                <th>Regenmenge [ml]</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="measurements"></tbody>
            <?php
            /*
             * TODO: gotta add the chart.js stuff here (also the ajax needs implementation here)
             */
            ?>
        </table>
    </div>
</div> <!-- /container -->
