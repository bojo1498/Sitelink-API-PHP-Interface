<?php
echo '<p>Testing SiteLink...</p>';
define( 'SITELINK_URL', "https://api.smdservers.net/CCWs_3.5/CallCenterWs.asmx?WSDL");
define( 'SITELINK_CORP_CODE', "CCTST" );
define( 'SITELINK_LOC_CODE', "Demo" );
define( 'SITELINK_CORP_LOGIN', "Administrator" );
define( 'SITELINK_CORP_PASS', "Demo" );
$client = new SoapClient( SITELINK_URL );
$params->sCorpCode = SITELINK_CORP_CODE;
$params->sLocationCode = SITELINK_LOC_CODE;
$params->sCorpUserName = SITELINK_CORP_LOGIN;
$params->sCorpPassword = SITELINK_CORP_PASS;
try
{
 $units = $client->SiteInformation( $params );
 $result = $units->SiteInformationResult;
}
catch (Exception $e )
{
 die( 'Error: '.$e->getMessage().'<br>'.$e );
}
echo htmlentities( $result->any );
?>