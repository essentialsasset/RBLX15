<?php
//$productId = $_GET['productId'];
//header('Location: https://economy.roblox.com/v2/developer-products/'.$productId.'/details');
    $ProductInfo = array(
    "AssetId" => 1818,
    "ProductId" => 1818,
    "Name" => "RBLX15",
    "Description" => "RBLX15",
    "AssetTypeId" => 19,
    "Creator" => 1,
    "IconImageAssetId" => 0,
    "Created" => 0,
    "Updated" => 0,
    "PriceInRobux" => 0,
    "PriceInTickets" => 0,
    "Sales" => 0,
    "IsNew" => false,
    "IsForSale" => true,
    "IsPublicDomain" => false,
    "IsLimited" => false,
    "IsLimitedUnique" => false,
    "Remaining" => false,
    "MinimumMembershipLevel" => 0,
    "ContentRatingTypeId" => 0,
);
exit(json_encode($ProductInfo))
?>