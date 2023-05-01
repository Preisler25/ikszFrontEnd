<?php

$object = (object) [
    'id' => "2",
    'name' => "Inkluzív nap a Néprajzi Múzeumban -",
    'descript' => "Kedves Diákok! Egy különleges és igazi közösségi
    szolgálat teljesítésére nyílik most lehetőségetek a Néprajzi Múzeumban, április 24-ig lehet jelentkezni! Inkluzív nap a
    Néprajzi Múzeumban Részletek 2023. május 3-án 14.30-17.00 között az Örökség Kultúrpolitikai Intézettel együttműködve a
    Néprajzi Múzeum MOZAIK Múzeumtúra Napot szervez, amelynek elsődleges célja az inklúzió. A múzeum fogyatékossággal élő és
    tipikus fejlődésű diákokat fogad programjaira. A tanulók vegyes csoportokban, ingyenes programokon vesznek majd részt a
    múzeum különböző kiállítási tereiben. Célunk, hogy a csoportok kapcsolatba kerüljenek egymással, miközben interaktív
    módon, közösen fedezik fel a múzeum kiállításait. A programok lehetőséget teremtenek a kortárs kapcsolatépítésre és a
    diákok szemléletének formálódására. Az IKSZ re jelentkezőknek az iskola és a múzeum együttműködési szerződése alapján
    igazolják a részvételt az IKSZ naplóban. Részvételi szándék jelzése április 24-ig! MOLNÁR József - múzeumpedagógusnál
    (+36 30 284 5209; Molnar.Jozsef@neprajz.hu). Az e-mailben mindenképp írjátok bele a nevet, osztályt, iskola nevét és egy
    telefonos elérhetőséget, e-mail címet. A jelentkezéses e-mailbe, kérlek, hogy másolatba tegyél be engem is:
    kulcsara@petrik.hu",
    'imgUrl' => "",
    'regdate' => "2023-04-19"
  ];

$object2 = (object) [
    'id' => "3",
    'name' => "teszt",
    'descript' => "dsadasdasd",
    'imgUrl' => "",
    'regdate' => "2023-04-29"
  ];


  header('Content-Type: application/json');
    echo json_encode(array($object, $object2));

?>