<?php
/**
 * SkinTemplate class for the NanoCenter skin
 *
 * @ingroup Skins
 */
class SkinNanoCenter extends SkinTemplate {
	public $skinname = 'nanocenter', $stylename = 'NanoCenter',
		$template = 'NanoCenterTemplate';

	/**
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.content.externallinks',
			'skins.nanocenter',
			// This is a separate module from skins.nanocenter because it has its own
			// @media declarations in its less, and apparently modules cannot be defined
			// with both. That is the only reason.
			'skins.nanocenter.misc'
		] );
		$out->addHeadItem('NanoCenterCSS','<link rel="stylesheet" href="/assets/css/app.css"/>');
		$out->addModules( [
			'skins.nanocenter.js',
			'skins.nanocenter.mobile'
		] );
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
