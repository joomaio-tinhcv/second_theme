<div class="container">
	<div class="row">
		<div class="col s12">
			<h2 class="">Starter</h2>
			<ul class="tabs tabs-fixed-width tab-demo z-depth-1">
				<li class="tab"><a class="active" href="#solutions">Solutions</a></li>
				<li class="tab"><a class="" href="#theme">Theme</a></li>
				<li class="tab"><a href="#config">Configuration</a></li>
			</ul>
		</div>
		<div class="col s12 tab-content">
			<div id="solutions">
				<div>
					<?php echo $this->renderWidget('core::notification'); ?>
				</div>
				<div class="d-flex row align-items-end mb0">
					<?php echo $this->render('starter.list.filter', []); ?>
					<div class="col s6  mt4 right-align">
						<button class="btn modal-trigger" id="install-theme" data-bs-toggle="modal" data-target="upload_package">Upload Package</button>
					</div>
				</div>
				<div class="row mt2">
					<?php while ($this->list->hasRow()) echo $this->render('starter.list.row'); ?>
				</div>
			</div>
			<div id="theme">
				<div class="d-flex justify-content-end mt3">
					<div class="text-end">
						<button class="btn modal-trigger" id="install-theme" data-bs-toggle="modal" data-target="uploadTheme">Upload Theme</button>
					</div>
				</div>
				<div class="theme-list row mt2">
					<?php while ($this->themes->hasRow()) echo $this->render('starter.theme.row'); ?>
				</div>
			</div>
			<div id="config">
				<div class="row">
					<div class="col s12">
						<div class="form-config">
							<form class="mt4" action="<?php echo $this->link_config ?>" method="POST">
								<div class="row">
									<div class="col s6">
										<?php $this->ui->field('admin_theme'); ?>
									</div>
									<div class="col s6">
										<?php $this->ui->field('default_theme'); ?>
									</div>
								</div>
								<div class=" mt3 center-align">
									<a href="<?php echo $this->url('starter'); ?>" class="btn btn-secondary me-3">Cancel</a>
									<button class="btn">Save</button>
								</div>
								<?php $this->ui->field('token'); ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="upload_package" style="text-align: left;">
	<div class="modal-content">
		<h5 class="modal-title" id="popupNoteTypeLabel">Install Package</h5>
		<p id="error-text" style="color: red;"></p>
		<div class="d-flex justify-content-center">
			<div class="mb3 mx-auto file-field center-align">
				<div class="btn">
					<label for="package_upload" class="form-label fw-bold white-text">Choose package file (.zip)</label>
					<input class="form-control" type="file" id="package_upload" name="package_upload">
				</div>
			</div>
		</div>
		<div class="mx-4 center-align mt4">
			<label for="package_upload" class="mb-0 form-label fw-bold">OR</label>
		</div>
		<div class="mb3 center-align">
			<input class="form-control" type="text" id="package_url" name="package_url" placeholder="Enter URL package (.zip)">
		</div>
		<div class="d-flex mt3 justify-content-end">
			<button type="button" class="btn btn-secondary me3 modal-close">Cancel</button>
			<button type="button" id="submit-upload" class="btn">Install</button>
		</div>
	</div>
</div>
<div class="modal" id="uploadTheme" style="text-align: left;">
	<div class="modal-content">
		<h5 class="modal-title fw-bold" id="popupNoteTypeLabel">Install Theme</h5>
		<p id="error-theme-text" style="color: red;"></p>
		<div class="d-flex justify-content-center">
			<div class="mb3 mx-auto file-field center-align">
				<div class="btn">
					<label for="theme_upload" class="form-label white-text fw-bold">Choose theme file (.zip)</label>
					<input class="form-control" type="file" id="theme_upload" name="theme_upload">
				</div>
			</div>
		</div>
		<div class="mx-4 center-align mt4">
			<label for="theme_upload" class="mb-0 form-label fw-bold">OR</label>
		</div>
		<div class="mb3 center-align">
			<input class="form-control" type="text" id="theme_url" name="theme_url" placeholder="Enter URL theme (.zip)">
		</div>
		<div class="d-flex mt3 justify-content-end">
			<button type="button" class="btn me3 btn-outline-secondary modal-close" data-bs-dismiss="modal">Cancel</button>
			<button type="button" id="submit-theme-upload" class="btn btn-outline-success">Install</button>
		</div>
	</div>
</div>
<div class="modal" id="staticBackdrop">
	<div class="modal-header-sticky">
		<h5 class="modal-title" id="staticBackdropLabel"></h5>
		<div class="progress">
			<div class="determinate progress-bar"></div>
		</div>
		<div class="progess-status justify-content-center">
			<span id="progess-status"></span>
		</div>
	</div>
	<div class="modal-content">
		
		<div class="modal-body">
			<div id="modal-text"></div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<form class="hidden" method="POST"  id="form_install">
    <input type="hidden" value="<?php echo $this->token ?>" name="token">
</form>
<form class="hidden" method="POST"  id="form_uninstall">
    <input type="hidden" value="<?php echo $this->token ?>" name="token">
</form>
<?php echo $this->render('starter.list.javascript'); ?>
<?php echo $this->render('starter.theme.javascript'); ?>
