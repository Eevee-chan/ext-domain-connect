<?php
// Copyright 1999-2018. Plesk International GmbH.

class Modules_DomainConnect_ConfigDefaults extends pm_Hook_ConfigDefaults
{
    public function getDefaults()
    {
        return [
            'serviceProvider' => true,
            'dnsProvider' => true,
            'newDomainsOnly' => true,
            'providerId' => 'exampleservice.domainconnect.org',  // TODO: replace w/ "plesk"
            'webServiceId' => 'template1', // TODO: replace w/ "web"
        ];
    }
}
