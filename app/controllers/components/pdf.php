<?php  
class PdfComponent extends Object { 

    var $p;                         // The Pdf Class 
    var $media; 
    var $filename = 'invoice';    // Without the .pdf 
    var $output = 'browser';      // browser,file,download 

  function init() { 

      // Include the class file and create Html2ps instance 
      App::import('vendor', 'Html2PsConfig', array('file' => 'html2ps'.DS.'config.inc.php')); 
      App::import('vendor', 'Html2Ps', array('file' => 'html2ps'.DS.'pipeline.factory.class.php')); 
      parse_config_file(APP .'vendors'. DS .'html2ps'. DS .'html2ps.config'); 

      global $g_config; 
      $g_config = array( 
                'cssmedia'     => 'screen', 
                'renderimages' => true, 
                'renderforms'  => false, 
                'renderlinks'  => true, 
                'mode'         => 'html', 
                'debugbox'     => false, 
                'draw_page_border' => false 
                ); 

    $this->media = Media::predefined('A4'); 
    $this->media->set_landscape(false); 
    $this->media->set_margins(array('left'   => 0, 
                              'right'  => 0, 
                              'top'    => 0, 
                              'bottom' => 0)); 
    $this->media->set_pixels(1024); 
    global $g_px_scale; 
    $g_px_scale = mm2pt($this->media->width() - $this->media->margins['left'] - $this->media->margins['right']) / $this->media->pixels; 
    global $g_pt_scale; 
    $g_pt_scale = $g_pt_scale * 1.43; 
    $this->p = PipelineFactory::create_default_pipeline("",""); 

    switch ($this->output) { 
      case 'download': 
      $this->p->destination = new DestinationDownload($this->filename); 
      break; 
      case 'file': 
      $this->p->destination = new DestinationFile($this->filename); 
      break; 
      default: 
      $this->p->destination = new DestinationBrowser($this->filename); 
      break; 
    } 
     
  } 

  function process($url) { 
    $this->p->process($url, $this->media); 
  } 
} 
?>