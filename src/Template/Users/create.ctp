<div class="form-login">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $title ?></h1>
            <p>
                下記、必要事項を記入し新しいアカウントを作成して下さい。
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($user) ?>
            <fieldset class="form-group">
                <?= $this->Form->input('name');?>
            </fieldset>
            <fieldset class="form-group">
                <?= $this->Form->input('screen_name') ?>
            </fieldset>
            <fieldset class="form-group">
                <?= $this->Form->input('mail_address') ?>
            </fieldset>
            <fieldset class="form-group">
                <?= $this->Form->input('password')?>
            </fieldset>
            <fieldset class="form-group">
                <?= $this->Form->input('confirm_password', ['type' => 'password'])?>
            </fieldset>
            <fieldset class="form-group">
                <?= $this->Form->input('role_mst_id', ['options' => $roleMst]) ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => ['btn-primary']]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>