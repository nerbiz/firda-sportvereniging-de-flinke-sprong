<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        <style>
            body {
                font-family: 'Georgia', serif;
                line-height: 1.8;
                background-color: seagreen;
            }

            .container {
                margin: 0 auto;
                padding: 20px;
                max-width: 800px;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.8);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>{{ config('app.name') }}</h1>

            <p>Bij Sportvereniging De Flinke Sprong draait alles om sportieve prestaties en gezelligheid. Van voetbalteams die strijden om de beker tot turners die sierlijk door de lucht vliegen: er is altijd wat te beleven. Maar achter de schermen gaat niet alles zo soepel als het lijkt.</p>

            <p>Het bestuur heeft een groot probleem. Over twee weken staat het jaarlijkse Flinke Sprong Toernooi op de planning, waarbij teams van de vereniging tegen elkaar en tegen gastteams zullen strijden. Het toernooi is een traditie die de vereniging al vijftig jaar in stand houdt. Maar dit jaar dreigt alles in de soep te lopen.</p>

            <p>Waarom? Omdat niemand precies weet wie er in welk team zit. De teams zijn overal en nergens: sommige staan op een oud Excel-bestand, andere op een briefje dat ergens tussen de kantinebonnetjes ligt. Niemand heeft een volledig overzicht, en er wordt al geklaagd: "Waarom staat Marieke in twee teams tegelijk?" of "Waarom heeft het turnteam een keeper?!"</p>

            <p>Voorzitter Sanne, die normaal kalm blijft onder druk, heeft nu een zenuwinzinking: "Als we niet op tijd de teams en spelers georganiseerd krijgen, kunnen we het toernooi afblazen. Dat zou een schande zijn!"</p>

            <p>Daarom roept ze jouw hulp in.</p>

            <h2>Stap 1</h2>

            <p>Als Laravel-developer is het jouw taak om <strong>twee tabellen (migrations) en models te maken</strong>: voor <strong>teams (met kolommen voor naam en sport)</strong> en voor <strong>spelers (met kolommen voor voornaam, achternaam en team_id)</strong>, zodat je later per team alle spelers overzichtelijk kunt ophalen.</p>

            <h2>Stap 2</h2>

            <p>Je gaat aan de slag met een <strong>bestaande controller</strong> waarin je via een method in de controller <strong>twee teams</strong> toevoegt aan de database, <strong>elk met drie spelers</strong>. Deze data voeg je toe met behulp van <strong>models</strong>.</p>

            <h2>Stap 3</h2>

            <p>In een andere controller-method <strong>haal je alle teams en spelers op</strong>. De opgehaalde data wordt doorgegeven aan een <strong>bestaande pagina, waar deze wordt getoond</strong>. Elk team wordt weergegeven met naam en sport. Elke speler wordt getoond met voornaam en achternaam. <strong>Hoe laat je zien in welk team de speler hoort?</strong></p>

            <p>Hier is de <a href="{{ route('page.show') }}">pagina om teams en spelers op te tonen</a>.</p>
        </div>
    </body>
</html>
