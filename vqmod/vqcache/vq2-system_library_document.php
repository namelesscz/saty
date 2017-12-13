<?php
class Document {
	private $title;
	private $description;
	private $keywords;
	private $links = array();
	private $styles = array();
	private $scripts = array();


	private $conversionGoogle;
	public function setConversionGoogle($conversionGoogle) {
		$this->conversionGoogle = $conversionGoogle;
	}
	public function getConversionGoogle() {
		return $this->conversionGoogle;
	}
	private $conversionUniversal;
	public function setConversionUniversal($conversionUniversal) {
		$this->conversionUniversal = $conversionUniversal;
	}
	public function getConversionUniversal() {
		return $this->conversionUniversal;
	}


	private $remarketingGoogleGA;
	public function setRemarketingGoogleGA($remarketingGoogleGA) {
		$this->remarketingGoogleGA = $remarketingGoogleGA;
	}
	public function getRemarketingGoogleGA() {
		return $this->remarketingGoogleGA;
	}
	private $remarketingGoogleGTAG;
	public function setRemarketingGoogleGTAG($remarketingGoogleGTAG) {
		$this->remarketingGoogleGTAG = $remarketingGoogleGTAG;
	}
	public function getRemarketingGoogleGTAG() {
		return $this->remarketingGoogleGTAG;
	}
	private $remarketingGoogleTag;
	public function setRemarketingGoogleTag($remarketingGoogleTag) {
		$this->remarketingGoogleTag = $remarketingGoogleTag;
	}
	public function getRemarketingGoogleTag() {
		return $this->remarketingGoogleTag;
	}
	private $remarketingFacebook;
	public function setRemarketingFacebook($remarketingFacebook) {
		$this->remarketingFacebook = $remarketingFacebook;
	}
	public function getRemarketingFacebook() {
		return $this->remarketingFacebook;
	}
	private $ecommerceGoogleGA;
	public function setEcommerceGoogleGA($ecommerceGoogleGA) {
		$this->ecommerceGoogleGA = $ecommerceGoogleGA;
	}
	public function getEcommerceGoogleGA() {
		return $this->ecommerceGoogleGA;
	}
	private $ecommerceGoogleGTAG;
	public function setEcommerceGoogleGTAG($ecommerceGoogleGTAG) {
		$this->ecommerceGoogleGTAG = $ecommerceGoogleGTAG;
	}
	public function getEcommerceGoogleGTAG() {
		return $this->ecommerceGoogleGTAG;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function addLink($href, $rel) {
		$this->links[$href] = array(
			'href' => $href,
			'rel'  => $rel
		);
	}

	public function getLinks() {
		return $this->links;
	}

	public function addStyle($href, $rel = 'stylesheet', $media = 'screen') {
		$this->styles[$href] = array(
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		);
	}

	public function getStyles() {
		return $this->styles;
	}

	public function addScript($href, $postion = 'header') {
		$this->scripts[$postion][$href] = $href;
	}

	public function getScripts($postion = 'header') {
		if (isset($this->scripts[$postion])) {
			return $this->scripts[$postion];
		} else {
			return array();
		}
	}
}