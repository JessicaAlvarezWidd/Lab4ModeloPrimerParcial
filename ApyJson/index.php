<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) { //SE ESCRIBE EN EL ARGUMENTO DE LA PAGINA, ES DECIR DIRECTAMENTE SIN & NI ?
    return $response->write("Hello, " . $args['name']);
});

$app->get('/', function ($request, $response, $args) {
    $miJson = '[{"id":1,"first_name":"Pito","last_name":"Hiorn","email":"khiorn0@discuz.net"},
                {"id":2,"first_name":"Pamella","last_name":"Casella","email":"pcasella1@whitehouse.gov"},
                {"id":3,"first_name":"Stanfield","last_name":"Joney","email":"sjoney2@shop-pro.jp"},
                {"id":4,"first_name":"Lucia","last_name":"Seagrove","email":"lseagrove3@paypal.com"},
                {"id":5,"first_name":"Dexter","last_name":"Witt","email":"dwitt4@disqus.com"},
                {"id":6,"first_name":"Lilian","last_name":"Cawthry","email":"lcawthry5@delicious.com"},
                {"id":7,"first_name":"Jacobo","last_name":"Scorey","email":"jscorey6@topsy.com"},
                {"id":8,"first_name":"Hasty","last_name":"Fehners","email":"hfehners7@upenn.edu"},
                {"id":9,"first_name":"Mathias","last_name":"McKelvey","email":"mmckelvey8@jiathis.com"},
                {"id":10,"first_name":"Rich","last_name":"MacKegg","email":"rmackegg9@cornell.edu"},
                {"id":11,"first_name":"Phelia","last_name":"Hince","email":"phincea@state.tx.us"},
                {"id":12,"first_name":"Staford","last_name":"Urry","email":"surryb@flavors.me"},
                {"id":13,"first_name":"Elayne","last_name":"Lewsley","email":"elewsleyc@e-recht24.de"},
                {"id":14,"first_name":"Roldan","last_name":"Ivell","email":"rivelld@twitter.com"},
                {"id":15,"first_name":"Cleve","last_name":"Pryor","email":"cpryore@ihg.com"},
                {"id":16,"first_name":"Reggy","last_name":"Alderton","email":"raldertonf@time.com"},
                {"id":17,"first_name":"Valentia","last_name":"Medford","email":"vmedfordg@si.edu"},
                {"id":18,"first_name":"Daniela","last_name":"Halgarth","email":"dhalgarthh@samsung.com"},
                {"id":19,"first_name":"Scarface","last_name":"Bidgood","email":"sbidgoodi@issuu.com"},
                {"id":20,"first_name":"Conn","last_name":"Storah","email":"cstorahj@mapquest.com"},
                {"id":21,"first_name":"Suzy","last_name":"Coupman","email":"scoupmank@angelfire.com"},
                {"id":22,"first_name":"Peggie","last_name":"Scarsbrook","email":"pscarsbrookl@ow.ly"},
                {"id":23,"first_name":"Cara","last_name":"Muge","email":"cmugem@tumblr.com"},
                {"id":24,"first_name":"Eddie","last_name":"Pesek","email":"epesekn@unicef.org"},
                {"id":25,"first_name":"Allister","last_name":"Harverson","email":"aharversono@smugmug.com"},
                {"id":26,"first_name":"Karola","last_name":"Simson","email":"ksimsonp@mac.com"},
                {"id":27,"first_name":"Avrom","last_name":"Hayden","email":"ahaydenq@wordpress.org"},
                {"id":28,"first_name":"Nicholle","last_name":"Fowlestone","email":"nfowlestoner@smh.com.au"},
                {"id":29,"first_name":"Rhodie","last_name":"Jeanes","email":"rjeaness@netvibes.com"},
                {"id":30,"first_name":"Elset","last_name":"Swalwel","email":"eswalwelt@reverbnation.com"},
                {"id":31,"first_name":"Fidole","last_name":"Dyson","email":"fdysonu@reddit.com"},
                {"id":32,"first_name":"Curran","last_name":"De Castri","email":"cdecastriv@dedecms.com"},
                {"id":33,"first_name":"Matilde","last_name":"Ainger","email":"maingerw@archive.org"},
                {"id":34,"first_name":"Nikolos","last_name":"Debell","email":"ndebellx@google.it"},
                {"id":35,"first_name":"Garvin","last_name":"Sich","email":"gsichy@tripod.com"},
                {"id":36,"first_name":"Silvana","last_name":"Mountfort","email":"smountfortz@ycombinator.com"},
                {"id":37,"first_name":"Sylvester","last_name":"Cokely","email":"scokely10@infoseek.co.jp"},
                {"id":38,"first_name":"Hedi","last_name":"Canario","email":"hcanario11@china.com.cn"},
                {"id":39,"first_name":"Leontyne","last_name":"Folkerd","email":"lfolkerd12@oakley.com"},
                {"id":40,"first_name":"Stoddard","last_name":"Wraxall","email":"swraxall13@tripadvisor.com"},
                {"id":41,"first_name":"Marcel","last_name":"Graveson","email":"mgraveson14@youtube.com"},
                {"id":42,"first_name":"Rhea","last_name":"Jacomb","email":"rjacomb15@icq.com"},
                {"id":43,"first_name":"Raine","last_name":"Quan","email":"rquan16@dot.gov"},
                {"id":44,"first_name":"Leigh","last_name":"Vant Hoff","email":"lvanthoff17@statcounter.com"},
                {"id":45,"first_name":"Tonie","last_name":"O Donohoe","email":"todonohoe18@gravatar.com"},
                {"id":46,"first_name":"Barbabas","last_name":"Feitosa","email":"bfeitosa19@nsw.gov.au"},
                {"id":47,"first_name":"Zabrina","last_name":"Kilsby","email":"zkilsby1a@hp.com"},
                {"id":48,"first_name":"Victoria","last_name":"Frigout","email":"vfrigout1b@bloglines.com"},
                {"id":49,"first_name":"Basia","last_name":"Trevallion","email":"btrevallion1c@washingtonpost.com"},
                {"id":50,"first_name":"Tirrell","last_name":"McDonand","email":"tmcdonand1d@quantcast.com"},
                {"id":51,"first_name":"Domingo","last_name":"Kivelle","email":"dkivelle1e@zimbio.com"},
                {"id":52,"first_name":"Deloris","last_name":"Sterte","email":"dsterte1f@bbb.org"},
                {"id":53,"first_name":"Avril","last_name":"Matissoff","email":"amatissoff1g@whitehouse.gov"},
                {"id":54,"first_name":"Forster","last_name":"Hemphrey","email":"fhemphrey1h@accuweather.com"},
                {"id":55,"first_name":"Martita","last_name":"Jeanon","email":"mjeanon1i@elpais.com"},
                {"id":56,"first_name":"Gilemette","last_name":"Gallihawk","email":"ggallihawk1j@miibeian.gov.cn"},
                {"id":57,"first_name":"Willyt","last_name":"Nassi","email":"wnassi1k@cdbaby.com"},
                {"id":58,"first_name":"Margret","last_name":"Georgeau","email":"mgeorgeau1l@last.fm"},
                {"id":59,"first_name":"Dannye","last_name":"Andreix","email":"dandreix1m@bing.com"},
                {"id":60,"first_name":"Merle","last_name":"Pollok","email":"mpollok1n@histats.com"},
                {"id":61,"first_name":"Anett","last_name":"Littlewood","email":"alittlewood1o@imageshack.us"},
                {"id":62,"first_name":"Guinevere","last_name":"Gerraty","email":"ggerraty1p@indiegogo.com"},
                {"id":63,"first_name":"Bridie","last_name":"Casterton","email":"bcasterton1q@google.es"},
                {"id":64,"first_name":"Estrella","last_name":"Bligh","email":"ebligh1r@slideshare.net"},
                {"id":65,"first_name":"Ginevra","last_name":"Owbridge","email":"gowbridge1s@liveinternet.ru"},
                {"id":66,"first_name":"Ortensia","last_name":"Stonestreet","email":"ostonestreet1t@topsy.com"},
                {"id":67,"first_name":"Othelia","last_name":"Liffe","email":"oliffe1u@wsj.com"},
                {"id":68,"first_name":"Leif","last_name":"Erasmus","email":"lerasmus1v@spotify.com"},
                {"id":69,"first_name":"Zebulen","last_name":"Spykings","email":"zspykings1w@cmu.edu"},
                {"id":70,"first_name":"Phaidra","last_name":"Ainge","email":"painge1x@bloomberg.com"},
                {"id":71,"first_name":"Amara","last_name":"Bradnock","email":"abradnock1y@amazon.de"},
                {"id":72,"first_name":"Graig","last_name":"Hover","email":"ghover1z@google.com"},
                {"id":73,"first_name":"Sheree","last_name":"Corre","email":"scorre20@xing.com"},
                {"id":74,"first_name":"Arlie","last_name":"Oley","email":"aoley21@tamu.edu"},
                {"id":75,"first_name":"Loydie","last_name":"Dooly","email":"ldooly22@oaic.gov.au"},
                {"id":76,"first_name":"Marice","last_name":"Moorhouse","email":"mmoorhouse23@cyberchimps.com"},
                {"id":77,"first_name":"Moria","last_name":"Studde","email":"mstudde24@wufoo.com"},
                {"id":78,"first_name":"Alfreda","last_name":"Keggin","email":"akeggin25@go.com"},
                {"id":79,"first_name":"Douglass","last_name":"Mertgen","email":"dmertgen26@tinypic.com"},
                {"id":80,"first_name":"Claiborn","last_name":"Harses","email":"charses27@reuters.com"},
                {"id":81,"first_name":"Mano","last_name":"Trythall","email":"mtrythall28@forbes.com"},
                {"id":82,"first_name":"Creight","last_name":"Hessay","email":"chessay29@plala.or.jp"},
                {"id":83,"first_name":"Reeba","last_name":"Silver","email":"rsilver2a@163.com"},
                {"id":84,"first_name":"Tonia","last_name":"Easby","email":"teasby2b@dedecms.com"},
                {"id":85,"first_name":"Amara","last_name":"Winpenny","email":"awinpenny2c@marriott.com"},
                {"id":86,"first_name":"Skelly","last_name":"Ebbitt","email":"sebbitt2d@domainmarket.com"},
                {"id":87,"first_name":"Leonidas","last_name":"Woolger","email":"lwoolger2e@unesco.org"},
                {"id":88,"first_name":"Lory","last_name":"Bridgnell","email":"lbridgnell2f@yolasite.com"},
                {"id":89,"first_name":"Ethel","last_name":"Harower","email":"eharower2g@psu.edu"},
                {"id":90,"first_name":"Juditha","last_name":"Jakeway","email":"jjakeway2h@unc.edu"},
                {"id":91,"first_name":"Melisse","last_name":"Fancott,","email":"mfancott2i@aol.com"},
                {"id":92,"first_name":"Tad","last_name":"Bone","email":"tbone2j@wikimedia.org"},
                {"id":93,"first_name":"Lilas","last_name":"Tipton","email":"ltipton2k@dell.com"},
                {"id":94,"first_name":"Kathryne","last_name":"Tamburo","email":"ktamburo2l@biblegateway.com"},
                {"id":95,"first_name":"Umeko","last_name":"Croux","email":"ucroux2m@gov.uk"},
                {"id":96,"first_name":"Jessamyn","last_name":"Bergstrand","email":"jbergstrand2n@livejournal.com"},
                {"id":97,"first_name":"Dorisa","last_name":"Baglin","email":"dbaglin2o@webmd.com"},
                {"id":98,"first_name":"Marco","last_name":"Medcalf","email":"mmedcalf2p@blogger.com"},
                {"id":99,"first_name":"Sandra","last_name":"Groves","email":"sgroves2q@yale.edu"},
                {"id":100,"first_name":"Gwen","last_name":"Mesias","email":"gmesias2r@yelp.com"}]';
    return $response->write($miJson);
});

$app->get('/unJson/{id}/{nombre}/{apellido}/{email}', function ($request, $response, $args) {    
    
    return $response->write($args['id'] . $args['nombre'] .$args['apellido'] .$args['email']);
});

$app->get('/filtrar/{id}', function ($request, $response, $args) {    
    $miJson = '[{"id":1,"first_name":"Pito","last_name":"Hiorn","email":"khiorn0@discuz.net"},
                {"id":2,"first_name":"Pamella","last_name":"Casella","email":"pcasella1@whitehouse.gov"},
                {"id":3,"first_name":"Stanfield","last_name":"Joney","email":"sjoney2@shop-pro.jp"},
                {"id":4,"first_name":"Lucia","last_name":"Seagrove","email":"lseagrove3@paypal.com"},
                {"id":5,"first_name":"Dexter","last_name":"Witt","email":"dwitt4@disqus.com"},
                {"id":6,"first_name":"Lilian","last_name":"Cawthry","email":"lcawthry5@delicious.com"},
                {"id":7,"first_name":"Jacobo","last_name":"Scorey","email":"jscorey6@topsy.com"},
                {"id":8,"first_name":"Hasty","last_name":"Fehners","email":"hfehners7@upenn.edu"},
                {"id":9,"first_name":"Mathias","last_name":"McKelvey","email":"mmckelvey8@jiathis.com"},
                {"id":10,"first_name":"Rich","last_name":"MacKegg","email":"rmackegg9@cornell.edu"},
                {"id":11,"first_name":"Phelia","last_name":"Hince","email":"phincea@state.tx.us"},
                {"id":12,"first_name":"Staford","last_name":"Urry","email":"surryb@flavors.me"},
                {"id":13,"first_name":"Elayne","last_name":"Lewsley","email":"elewsleyc@e-recht24.de"},
                {"id":14,"first_name":"Roldan","last_name":"Ivell","email":"rivelld@twitter.com"},
                {"id":15,"first_name":"Cleve","last_name":"Pryor","email":"cpryore@ihg.com"},
                {"id":16,"first_name":"Reggy","last_name":"Alderton","email":"raldertonf@time.com"},
                {"id":17,"first_name":"Valentia","last_name":"Medford","email":"vmedfordg@si.edu"},
                {"id":18,"first_name":"Daniela","last_name":"Halgarth","email":"dhalgarthh@samsung.com"},
                {"id":19,"first_name":"Scarface","last_name":"Bidgood","email":"sbidgoodi@issuu.com"},
                {"id":20,"first_name":"Conn","last_name":"Storah","email":"cstorahj@mapquest.com"},
                {"id":21,"first_name":"Suzy","last_name":"Coupman","email":"scoupmank@angelfire.com"},
                {"id":22,"first_name":"Peggie","last_name":"Scarsbrook","email":"pscarsbrookl@ow.ly"},
                {"id":23,"first_name":"Cara","last_name":"Muge","email":"cmugem@tumblr.com"},
                {"id":24,"first_name":"Eddie","last_name":"Pesek","email":"epesekn@unicef.org"},
                {"id":25,"first_name":"Allister","last_name":"Harverson","email":"aharversono@smugmug.com"},
                {"id":26,"first_name":"Karola","last_name":"Simson","email":"ksimsonp@mac.com"},
                {"id":27,"first_name":"Avrom","last_name":"Hayden","email":"ahaydenq@wordpress.org"},
                {"id":28,"first_name":"Nicholle","last_name":"Fowlestone","email":"nfowlestoner@smh.com.au"},
                {"id":29,"first_name":"Rhodie","last_name":"Jeanes","email":"rjeaness@netvibes.com"},
                {"id":30,"first_name":"Elset","last_name":"Swalwel","email":"eswalwelt@reverbnation.com"},
                {"id":31,"first_name":"Fidole","last_name":"Dyson","email":"fdysonu@reddit.com"},
                {"id":32,"first_name":"Curran","last_name":"De Castri","email":"cdecastriv@dedecms.com"},
                {"id":33,"first_name":"Matilde","last_name":"Ainger","email":"maingerw@archive.org"},
                {"id":34,"first_name":"Nikolos","last_name":"Debell","email":"ndebellx@google.it"},
                {"id":35,"first_name":"Garvin","last_name":"Sich","email":"gsichy@tripod.com"},
                {"id":36,"first_name":"Silvana","last_name":"Mountfort","email":"smountfortz@ycombinator.com"},
                {"id":37,"first_name":"Sylvester","last_name":"Cokely","email":"scokely10@infoseek.co.jp"},
                {"id":38,"first_name":"Hedi","last_name":"Canario","email":"hcanario11@china.com.cn"},
                {"id":39,"first_name":"Leontyne","last_name":"Folkerd","email":"lfolkerd12@oakley.com"},
                {"id":40,"first_name":"Stoddard","last_name":"Wraxall","email":"swraxall13@tripadvisor.com"},
                {"id":41,"first_name":"Marcel","last_name":"Graveson","email":"mgraveson14@youtube.com"},
                {"id":42,"first_name":"Rhea","last_name":"Jacomb","email":"rjacomb15@icq.com"},
                {"id":43,"first_name":"Raine","last_name":"Quan","email":"rquan16@dot.gov"},
                {"id":44,"first_name":"Leigh","last_name":"Vant Hoff","email":"lvanthoff17@statcounter.com"},
                {"id":45,"first_name":"Tonie","last_name":"O Donohoe","email":"todonohoe18@gravatar.com"},
                {"id":46,"first_name":"Barbabas","last_name":"Feitosa","email":"bfeitosa19@nsw.gov.au"},
                {"id":47,"first_name":"Zabrina","last_name":"Kilsby","email":"zkilsby1a@hp.com"},
                {"id":48,"first_name":"Victoria","last_name":"Frigout","email":"vfrigout1b@bloglines.com"},
                {"id":49,"first_name":"Basia","last_name":"Trevallion","email":"btrevallion1c@washingtonpost.com"},
                {"id":50,"first_name":"Tirrell","last_name":"McDonand","email":"tmcdonand1d@quantcast.com"},
                {"id":51,"first_name":"Domingo","last_name":"Kivelle","email":"dkivelle1e@zimbio.com"},
                {"id":52,"first_name":"Deloris","last_name":"Sterte","email":"dsterte1f@bbb.org"},
                {"id":53,"first_name":"Avril","last_name":"Matissoff","email":"amatissoff1g@whitehouse.gov"},
                {"id":54,"first_name":"Forster","last_name":"Hemphrey","email":"fhemphrey1h@accuweather.com"},
                {"id":55,"first_name":"Martita","last_name":"Jeanon","email":"mjeanon1i@elpais.com"},
                {"id":56,"first_name":"Gilemette","last_name":"Gallihawk","email":"ggallihawk1j@miibeian.gov.cn"},
                {"id":57,"first_name":"Willyt","last_name":"Nassi","email":"wnassi1k@cdbaby.com"},
                {"id":58,"first_name":"Margret","last_name":"Georgeau","email":"mgeorgeau1l@last.fm"},
                {"id":59,"first_name":"Dannye","last_name":"Andreix","email":"dandreix1m@bing.com"},
                {"id":60,"first_name":"Merle","last_name":"Pollok","email":"mpollok1n@histats.com"},
                {"id":61,"first_name":"Anett","last_name":"Littlewood","email":"alittlewood1o@imageshack.us"},
                {"id":62,"first_name":"Guinevere","last_name":"Gerraty","email":"ggerraty1p@indiegogo.com"},
                {"id":63,"first_name":"Bridie","last_name":"Casterton","email":"bcasterton1q@google.es"},
                {"id":64,"first_name":"Estrella","last_name":"Bligh","email":"ebligh1r@slideshare.net"},
                {"id":65,"first_name":"Ginevra","last_name":"Owbridge","email":"gowbridge1s@liveinternet.ru"},
                {"id":66,"first_name":"Ortensia","last_name":"Stonestreet","email":"ostonestreet1t@topsy.com"},
                {"id":67,"first_name":"Othelia","last_name":"Liffe","email":"oliffe1u@wsj.com"},
                {"id":68,"first_name":"Leif","last_name":"Erasmus","email":"lerasmus1v@spotify.com"},
                {"id":69,"first_name":"Zebulen","last_name":"Spykings","email":"zspykings1w@cmu.edu"},
                {"id":70,"first_name":"Phaidra","last_name":"Ainge","email":"painge1x@bloomberg.com"},
                {"id":71,"first_name":"Amara","last_name":"Bradnock","email":"abradnock1y@amazon.de"},
                {"id":72,"first_name":"Graig","last_name":"Hover","email":"ghover1z@google.com"},
                {"id":73,"first_name":"Sheree","last_name":"Corre","email":"scorre20@xing.com"},
                {"id":74,"first_name":"Arlie","last_name":"Oley","email":"aoley21@tamu.edu"},
                {"id":75,"first_name":"Loydie","last_name":"Dooly","email":"ldooly22@oaic.gov.au"},
                {"id":76,"first_name":"Marice","last_name":"Moorhouse","email":"mmoorhouse23@cyberchimps.com"},
                {"id":77,"first_name":"Moria","last_name":"Studde","email":"mstudde24@wufoo.com"},
                {"id":78,"first_name":"Alfreda","last_name":"Keggin","email":"akeggin25@go.com"},
                {"id":79,"first_name":"Douglass","last_name":"Mertgen","email":"dmertgen26@tinypic.com"},
                {"id":80,"first_name":"Claiborn","last_name":"Harses","email":"charses27@reuters.com"},
                {"id":81,"first_name":"Mano","last_name":"Trythall","email":"mtrythall28@forbes.com"},
                {"id":82,"first_name":"Creight","last_name":"Hessay","email":"chessay29@plala.or.jp"},
                {"id":83,"first_name":"Reeba","last_name":"Silver","email":"rsilver2a@163.com"},
                {"id":84,"first_name":"Tonia","last_name":"Easby","email":"teasby2b@dedecms.com"},
                {"id":85,"first_name":"Amara","last_name":"Winpenny","email":"awinpenny2c@marriott.com"},
                {"id":86,"first_name":"Skelly","last_name":"Ebbitt","email":"sebbitt2d@domainmarket.com"},
                {"id":87,"first_name":"Leonidas","last_name":"Woolger","email":"lwoolger2e@unesco.org"},
                {"id":88,"first_name":"Lory","last_name":"Bridgnell","email":"lbridgnell2f@yolasite.com"},
                {"id":89,"first_name":"Ethel","last_name":"Harower","email":"eharower2g@psu.edu"},
                {"id":90,"first_name":"Juditha","last_name":"Jakeway","email":"jjakeway2h@unc.edu"},
                {"id":91,"first_name":"Melisse","last_name":"Fancott,","email":"mfancott2i@aol.com"},
                {"id":92,"first_name":"Tad","last_name":"Bone","email":"tbone2j@wikimedia.org"},
                {"id":93,"first_name":"Lilas","last_name":"Tipton","email":"ltipton2k@dell.com"},
                {"id":94,"first_name":"Kathryne","last_name":"Tamburo","email":"ktamburo2l@biblegateway.com"},
                {"id":95,"first_name":"Umeko","last_name":"Croux","email":"ucroux2m@gov.uk"},
                {"id":96,"first_name":"Jessamyn","last_name":"Bergstrand","email":"jbergstrand2n@livejournal.com"},
                {"id":97,"first_name":"Dorisa","last_name":"Baglin","email":"dbaglin2o@webmd.com"},
                {"id":98,"first_name":"Marco","last_name":"Medcalf","email":"mmedcalf2p@blogger.com"},
                {"id":99,"first_name":"Sandra","last_name":"Groves","email":"sgroves2q@yale.edu"},
                {"id":100,"first_name":"Gwen","last_name":"Mesias","email":"gmesias2r@yelp.com"}]';

    $objetoJson = json_decode($miJson);
    $unObjeto = "";  

    foreach ($objetoJson as $item) {
       
        if($item->id == $args['id']){
            $unObjeto = $item;
            break;
        }
            
        else
        {
            $unObjeto = $item;
        }
        
    }

    return $response->write("[" . json_encode($unObjeto) . "]"); //importante ponerle corchotes, para que el filtrado me vuelva como... 
                                                                //...un array y no me salta error al traerlo desde el SERVICE
});



$app->run();