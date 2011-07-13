<?php

class AppController extends Controller {
    var $components = array('Session', 'RequestHandler');
    var $helpers = array('Html', 'Form', 'Session');
}

?>