<?php

function akbankKur()
{

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.akbank.com/_vti_bin/AkbankServicesSecure/FrontEndServiceSecure.svc/GetExchangeData?_=' . time(),
        CURLOPT_RETURNTRANSFER => true
    ]);
    $output = curl_exec($ch);
    curl_close($ch);

    $output = json_decode($output, true);
    $results = json_decode($output['GetExchangeDataResult'], true);

    $usd = $results['Currencies'][14];
    $eur = $results['Currencies'][6];
    $altin = $results['Currencies'][15];

    return [
        'DOLAR' => [
            'oran' => $usd['Rate'],
            'alis' => $usd['Buy'],
            'satis' => $usd['Sell']
        ],
        'EURO' => [
            'oran' => $eur['Rate'],
            'alis' => $eur['Buy'],
            'satis' => $eur['Sell']
        ],
        'ALTIN' => [
            'oran' => $altin['Rate'],
            'alis' => $altin['Buy'],
            'satis' => $altin['Sell']
        ]
    ];

}

function isBankasiKur()
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.isbank.com.tr/_layouts/ISB_DA/HttpHandlers/FinancialDashboardHandler.ashx?fdtype=0&time=' . time(),
        CURLOPT_RETURNTRANSFER => true
    ]);
    $output = curl_exec($ch);
    curl_close($ch);

    $output = json_decode($output, true);
    $altin = $output['GoldInfoList'][2];
    $eur = $output['MarketInfoList'][1];
    $usd = $output['MarketInfoList'][0];

    return [
        'DOLAR' => [
            'oran' => $usd['Change'],
            'fiyat' => $usd['LastPrice']
        ],
        'EURO' => [
            'oran' => $eur['Change'],
            'fiyat' => $eur['LastPrice']
        ],
        'ALTIN' => [
            'oran' => $altin['Change'],
            'fiyat' => $altin['UltimateValue']
        ]
    ];

}

$akbankKurlar = akbankKur();
$isBankasiKurlar = isBankasiKur();

?>

<ul>
    <?php foreach ($akbankKurlar as $key => $kur): ?>
        <li>
            <?= $key ?> <br>
            Alış: <?= $kur['alis'] ?> <br>
            Satış: <?= $kur['satis'] ?> <br>
            <div style="color: <?= $kur['oran'] > 0 ? 'green' : 'red' ?>;">
                Oran: %<?= number_format($kur['oran'], 2) ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach ($isBankasiKurlar as $key => $kur): ?>
        <li>
            <?= $key ?> <br>
            Fiyat: <?= $kur['fiyat'] ?> <br>
            <div style="color: <?= $kur['oran'] > 0 ? 'green' : 'red' ?>;">
                Oran: %<?= $kur['oran'] ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>