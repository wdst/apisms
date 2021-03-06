<?php

namespace wdst\apisms;

interface ApiInterface
{
    public function smsSend(AbstractSms $sms);
    
    public function request($method, $params = []);
    
    public function getClient();
    
    public function setClient(ClientInterface $client);
}
