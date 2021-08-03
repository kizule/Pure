<?php
class SkinPure extends SkinTemplate {
	var $skinname = 'pure', $stylename = 'Pure',
		$template = 'PureTemplate';
	
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

        $viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
		$out->addMeta('viewport', $viewport_meta);
		$out->addModules( 'skins.pure.js' );

		$out->addHtmlClasses('no-js');
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'skins.pure.styles'
		) );
	}
}
?>