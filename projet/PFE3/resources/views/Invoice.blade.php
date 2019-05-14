
<html>
        <head>
            <meta charset="utf-8">
            <title>Invoice</title>
            <link rel="stylesheet" >
            <style>


span[contenteditable] { display: inline-block; }
*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }
/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */
/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; text-align: center}
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
            </style>

        </head>
        <body>
            <header>
                <h1>Reçu N° {{ $id }}</h1>


            </header>
            <article>
                    <span><img alt="" src="D:\UPM\PFE_MANGO\PFE3\public\Assets\Mango_logo.png" width="310" height="100" style="margin-left:5%"></span>
                <table class="meta">
                    <tr>
                        <th><span contenteditable>Reçu #</span></th>
                        <td><span contenteditable>{{ $id }}</span></td>
                    </tr>
                    <tr>
                            <th><span contenteditable>Client #</span></th>
                            <td><span contenteditable>{{ $client }}</span></td>
                        </tr>
                    <tr>
                        <th><span contenteditable>Date</span></th>
                        <td><span contenteditable>@php
                           echo date("Y-m-d");
                        @endphp</span></td>
                    </tr>
                    <tr>
                        <th><span contenteditable>Prix</span></th>
                        <td><span id="prefix" contenteditable>@php
                                $rk =new DateTime($dr);
                        $dk =new DateTime($dd);
                        $days= date_diff($dk,$rk);
                        echo $prixj*$days->format("%a");
                        @endphp</span> DH</td>
                    </tr>
                </table>
                <table class="inventory">
                    <thead>
                        <tr>
                            <th><span contenteditable>Immatriculation</span></th>
                            <th><span contenteditable>Modele</span></th>
                            <th><span contenteditable>Agence</span></th>
                            <th><span contenteditable>Nomber de Jour :</span></th>
                            <th><span contenteditable>Prix</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span contenteditable>{{ $im }}</span></td>
                            <td><span contenteditable>{{ $mq.' '.$mod }}</span></td>
                            <td><span contenteditable>{{ $name }}</span></td>
                            <td><span contenteditable>@php
                                    $rk =new DateTime($dr);
                        $dk =new DateTime($dd);
                            $days= date_diff($dk,$rk);
                           echo $days->format("%a");
                        @endphp</span></td>
                            <td><span data-prefix>{{ $prixj }}</span></td>
                        </tr>
                    </tbody>
                </table>

            </article>
            <aside>
                    <h1>MERCI</h1>
                    <div style="text-align:center">
                        <p>Nous vous comptons parmi nos plus fidèles clients, c’est pourquoi nous tenons à vous remercier de la confiance que vous accordez à notre travail et à notre savoir-faire</p>
                    </div>
                </aside>
        </body>
    </html>
