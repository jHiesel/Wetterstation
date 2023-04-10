
<div class="row">
    <div class="col-md-4">
        <div class="form-group required <?= $model->hasError('time') ? 'has-error' : ''; ?>">
            <label class="control-label">Name *</label>
            <input type="text" class="form-control" name="time" value="<?= $model->getName() ?>">

            <?php if ($model->hasError('time')): ?>
                <div class="help-block"><?= $model->getError('time') ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div class="form-group required <?= $model->hasError('temperature') ? 'has-error' : ''; ?>">
            <label class="control-label">Ort *</label>
            <input type="text" class="form-control" name="temperature" value="<?= $model->getLocation() ?>">

            <?php if ($model->hasError('temperature')): ?>
                <div class="help-block"><?= $model->getError('temperature') ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div class="form-group required <?= $model->hasError('rain') ? 'has-error' : ''; ?>">
            <label class="control-label">Höhe [m] *</label>
            <input type="text" class="form-control" name="rain" value="<?= $model->getAltitude() ?>">

            <?php if ($model->hasError('altitude')): ?>
                <div class="help-block"><?= $model->getError('rain') ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group required <?= $model->hasError('station_id') ? 'has-error' : ''; ?>">
            <label class="control-label">Name *</label>
            <input type="text" class="form-control" name="station_id" value="<?= $model->getName() ?>">

            <?php if ($model->hasError('station_id')): ?>
                <div class="help-block"><?= $model->getError('station_id') ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
