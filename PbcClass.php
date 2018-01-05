<?php
namespace UniversityOfFlorida\PbcClass;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class PbcClass extends AbstractExternalModule {

    public function __construct() {
        parent::__construct();
    }

    function hw() {
        return("<p>Hello, World</p>\n\n");
    }

    function query() {
        $module = \ExternalModules\ExternalModules::getModuleInstance('redcap_oncore_client', 'v1.0.0');
        $client = $module->getSoapClient();

        $result = $client->request('getProtocol', array('protocolNo' => 'OCR20002'));

        return($result);
    }

}
