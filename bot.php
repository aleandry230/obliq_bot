<?php

define('token', '5293482094:AAHEgVmLmXrUyE9UTQS-jVnNDDviHrW8-js');

include 'source.php';

if($text == "/start" || $text == "Change Language 🌍"){
    send($cid, "Hello @$username, choose your language first!
    
Use the menu below for choose your language.");

    if($text == "/start" || $text == "Change Language 🌍"){
        $keyboard = [
            ["Italiano 🇮🇹", "English 🇬🇧"],
            ["Español 🇪🇦"],
        ];
        $key = array(
            "resize_keyboard" => true,
            "keyboard" => $keyboard,
        );
        keyboard($key, "🇮🇹 Choose your language 🇬🇧", $cid);
    }
}
//------------------------------------------------------------------------------------------------------------












//-------------------------------------------------{ITALIANO}-------------------------------------------------

if($text == "Italiano 🇮🇹"){
    send($cid, "🇮🇹 Benvenuto $username nel WarehouseBot ufficiale di Øbliq!
Utilizza il Menù per visualizzare l'Inventario!

L'inventario è suddiviso in due categorie: 

▫️FOOTWEAR: qui troverai tutti i modelli di sneakers, suddivisi per modelli, e le corrispettive taglie disponibili.
*La categoria LIMITED EDITIONS è dedicata a tutte le collabs più esclusive. 

▫️STREETWEAR: qui troverai tutti i capi di abbigliamento, e le corrispettive taglie disponibili. 

📱 CONTATTI: visita il nostro sito web e la nostra pagina Instagram, scrivici in DM per ulteriori info.");
}

if($text == "Italiano" || $text == "Menù 🔙"){
    $keyboard = [
        ["Footwear  👟", "Streetwear  👕"],
        ["Contatti  📱","Change Language 🌍"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Menù principale", $cid);
}

//------------------------------------------------------------------------------------------------------------
//Lista Scarpe

if($text == "Footwear  👟" || $text == "Indietro ⬅"){
    $keyboard = [
        ["▫️DUNK", "▫️JORDAN", "▫️YEEZY"],
        ["▫️NEW BALANCE", "▫️LIMITED EDITIONS"],
        ["Menù 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Categorie", $cid);
}
//------------------------------------------------------------------------------------------------------------














//------------------------------------------------------------------------------------------------------------
//Lista Dunk


if($text == "▫️DUNK"){
    $keyboard = [
        ["▪️Dunk Low Retro Black and White", "▪️Dunk Low Wmns Black and White"],
        ["▪️Dunk Low Grey Fog"],
        ["Indietro ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "DUNK", $cid);
}

//Dunk Low Grey Fog

if($text == "▪️Dunk Low Grey Fog"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dlgf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Grey Fog 

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dlgf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkgf.png");
    }
}

//Dunk Low Retro Black and White

if($text == "▪️Dunk Low Retro Black and White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dlrbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Retro Black and White

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dlrbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low Wmns Black and White

if($text == "▪️Dunk Low Wmns Black and White"){
    $but = array(array(array("text" => "36", "url" => "www.google.com"),array("text" => "37.5", "url" => "www.facebook.it"),array("text" => "38.5", "url" => "www.google.com"),array("text" => "39", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dlbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Black and White

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dlbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//------------------------------------------------------------------------------------------------------------















//------------------------------------------------------------------------------------------------------------
//Lista Jordan

if($text == "▫️JORDAN"){
    $keyboard = [
        ["▪️Jordan 1 high OG Atmosphere (W)", "▪️Jordan 1 Mid Light Smoke Grey Anthracite"],
        ["Indietro ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "JORDAN", $cid);
}

//Air Jordan 1 Atmosphere

if($text == "▪️Jordan 1 high OG Atmosphere (W)"){
    $but = array(array(array("text" => "38", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 high OG Atmosphere (W)

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if($text == "▪️Jordan 1 Mid Light Smoke Grey Anthracite"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "j1mga"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 Mid Light Smoke Grey Anthracite

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}
//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista Yeezy

if($text == "▫️YEEZY"){
    $keyboard = [
        ["▪️Yeezy Foam Runner Vermillion", "▪️Yeezy Slide Pure"],
        ["Indietro ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "YEEZY", $cid);
}

//Yeezy Foam Runner Vermillion

if($text == "▪️Yeezy Foam Runner Vermillion"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-yfrv"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Foam Runner Vermillion

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-yfrv"){
        send($cbid, "https://obliqbot.000webhostapp.com/foamrunner.png");
    }
}
//Yeezy Slide Pure

if($text == "▪️Yeezy Slide Pure"){
    $but = array(array(array("text" => "46", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-ysp"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Slide Pure

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-ysp"){
        send($cbid, "https://obliqbot.000webhostapp.com/yslides.png");
    }
}

//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista New Balance

if($text == "▫️NEW BALANCE"){
    $keyboard = [
        ["▪️New Balance 550 White Grey"],
        ["Indietro ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "NEW BALANCE", $cid);
}

//New Balance 550 White Grey

if($text == "▪️New Balance 550 White Grey"){
    $but = array(array(array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-nbwg"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
New Balance 550 White Grey

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-nbwg"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
//Lista Limited Editions

if($text == "▫️LIMITED EDITIONS"){
    $keyboard = [
        ["▪️Dunk White and Black x SlamJam","▪️Dunk high Flash Lime x Ambush"],
        ["▪️Dunk Low Blue x Supreme","▪️Jordan 2 Low x Off White"],
        ["▪️Dunk Low x Off White Lot 24","▪️Dunk Low x Off White Lot 36"],
        ["Indietro ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "LIMITED EDITIONS", $cid);
}

//Dunk White and Black x SlamJam

if($text == "▪️Dunk White and Black x SlamJam"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dwbsj"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk White and Black x SlamJam

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dwbsj"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//Dunk high Flash Lime x Ambush

if($text == "▪️Dunk high Flash Lime x Ambush"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-daf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk high Flash Lime x Ambush

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-daf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkambush.png");
    }
}

//Dunk Low Blue x Supreme

if($text == "▪️Dunk Low Blue x Supreme"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-ndlsb"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Blue x Supreme

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-ndlsb"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low x Off White Lot 24

if($text == "▪️Dunk Low x Off White Lot 24"){
    $but = array(array(array("text" => "42.5", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dlow24"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 24

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dlow24"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto2.png");
    }
}

//Dunk Low x Off White Lot 36

if($text == "▪️Dunk Low x Off White Lot 36"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-dlow36"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 36

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-dlow36"){
        send($cbid, "https://obliqbot.000webhostapp.com/slot36.png");
    }
}

//Jordan 2 Low x Off White

if($text == "▪️Jordan 2 Low x Off White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "callback_data" => "it-aj2ow"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 2 Low x Off White

Ecco le misure disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "it-aj2ow"){
        send($cbid, "https://obliqbot.000webhostapp.com/aj1ow.png");
    }
}
//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
// Streetwear


if($text == "Streetwear  👕"){
    $keyboard = [
        ["▪️Supreme Box Logo hoodie Black", "▪️Supreme Box Logo Milan t-shirt White"],
        ["Menù 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "STREETWEAR", $cid);
}

//Supreme Box Logo Hoodie Black

if($text == "▪️Supreme Box Logo hoodie Black"){
    $but = array(array(array("text" => "L", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo hoodie Black

Ecco le taglie disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

//Supreme Box Logo Milan t-shirt White

if($text == "▪️Supreme Box Logo Milan t-shirt White"){
    $but = array(array(array("text" => "M", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MOSTRA FOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo Milan t-shirt White

Ecco le taglie disponibili:

➕➖➖➖➖➖➖➖➖➖➖➕");
}


//------------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------------
//Contatti
if($text == "Contatti  📱"){
    $but = array(array(array("text" => "INSTAGRAM  📷", "url" => "www.google.com"),array("text" => "WHATSAPP  📱", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "SITO WEB  🌍", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "Ecco I contatti disponibili:");
}



//------------------------------------------------------------------------------------------------------------
































































//-------------------------------------------------{ENGLISH}-------------------------------------------------

if($text == "English 🇬🇧"){
    send($cid, "🇬🇧 Welcome $username in the official Øbliq WarehouseBot!
Use the Menu to view the Inventory!

The inventory is divided into two categories: 

▫️FOOTWEAR: here you will find all the sneakers models, divided by models, and the corresponding sizes available.
* The LIMITED EDITIONS category is dedicated to all the most exclusive collabs. 

▫️STREETWEAR: here you will find all the clothing items, and the corresponding sizes available. 

📱 CONTACTS: visit our website and our Instagram page, write to us in DM for more info.");
}

if($text == "English" || $text == "Main Menu 🔙"){
    $keyboard = [
        ["Footwear   👟", "Streetwear 👕"],
        ["Contacts  📱", "Change Language 🌍"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Main menu", $cid);
}

//------------------------------------------------------------------------------------------------------------
//Lista Scarpe

if($text == "Footwear   👟" || $text == "Back ⬅"){
    $keyboard = [
        ["▫️ DUNK", "▫️ JORDAN", "▫️ YEEZY"],
        ["▫️ NEW BALANCE", "▫️ LIMITED EDITIONS"],
        ["Main Menu 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Categories", $cid);
}
//------------------------------------------------------------------------------------------------------------














//------------------------------------------------------------------------------------------------------------
//Lista Dunk


if($text == "▫️ DUNK"){
    $keyboard = [
        ["▪️ Dunk Low Retro Black and White", "▪️ Dunk Low Wmns Black and White"],
        ["▪️ Dunk Low Grey Fog"],
        ["Back ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "DUNK", $cid);
}

//Dunk Low Grey Fog

if($text == "▪️ Dunk Low Grey Fog"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dlgf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Grey Fog 

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dlgf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkgf.png");
    }
}

//Dunk Low Retro Black and White

if($text == "▪️ Dunk Low Retro Black and White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dlrbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Retro Black and White

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dlrbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low Wmns Black and White

if($text == "▪️ Dunk Low Wmns Black and White"){
    $but = array(array(array("text" => "36", "url" => "www.google.com"),array("text" => "37.5", "url" => "www.facebook.it"),array("text" => "38.5", "url" => "www.google.com"),array("text" => "39", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dlbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Black and White

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dlbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//------------------------------------------------------------------------------------------------------------















//------------------------------------------------------------------------------------------------------------
//Lista Jordan

if($text == "▫️ JORDAN"){
    $keyboard = [
        ["▪️ Jordan 1 high OG Atmosphere (W)", "▪️ Jordan 1 Mid Light Smoke Grey Anthracite"],
        ["Back ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "JORDAN", $cid);
}

//Air Jordan 1 Atmosphere

if($text == "▪️ Jordan 1 high OG Atmosphere (W)"){
    $but = array(array(array("text" => "38", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-j1hoa"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 high OG Atmosphere (W)

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-j1hoa"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

if($text == "▪️ Jordan 1 Mid Light Smoke Grey Anthracite"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-j1mga"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 Mid Light Smoke Grey Anthracite

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-j1mga"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}
//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista Yeezy

if($text == "▫️ YEEZY"){
    $keyboard = [
        ["▪️ Yeezy Foam Runner Vermillion", "▪️ Yeezy Slide Pure"],
        ["Back ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "YEEZY", $cid);
}

//Yeezy Foam Runner Vermillion

if($text == "▪️ Yeezy Foam Runner Vermillion"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-yfrv"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Foam Runner Vermillion

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-yfrv"){
        send($cbid, "https://obliqbot.000webhostapp.com/foamrunner.png");
    }
}
//Yeezy Slide Pure

if($text == "▪️ Yeezy Slide Pure"){
    $but = array(array(array("text" => "46", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-ysp"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Slide Pure

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-ysp"){
        send($cbid, "https://obliqbot.000webhostapp.com/yslides.png");
    }
}

//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista New Balance

if($text == "▫️ NEW BALANCE"){
    $keyboard = [
        ["▪️ New Balance 550 White Grey"],
        ["Back ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "NEW BALANCE", $cid);
}

//New Balance 550 White Grey

if($text == "▪️ New Balance 550 White Grey"){
    $but = array(array(array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-nbwg"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
New Balance 550 White Grey

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-nbwg"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
//Lista Limited Editions

if($text == "▫️ LIMITED EDITIONS"){
    $keyboard = [
        ["▪️ Dunk White and Black x SlamJam","▪️ Dunk high Flash Lime x Ambush"],
        ["▪️ Dunk Low Blue x Supreme","▪️ Jordan 2 Low x Off White"],
        ["▪️ Dunk Low x Off White Lot 24","▪️ Dunk Low x Off White Lot 36"],
        ["Back ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "LIMITED EDITIONS", $cid);
}

//Dunk White and Black x SlamJam

if($text == "▪️ Dunk White and Black x SlamJam"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dwbsj"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk White and Black x SlamJam

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dwbsj"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//Dunk high Flash Lime x Ambush

if($text == "▪️ Dunk high Flash Lime x Ambush"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-daf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk high Flash Lime x Ambush

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-daf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkambush.png");
    }
}

//Dunk Low Blue x Supreme

if($text == "▪️ Dunk Low Blue x Supreme"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-ndlsb"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Blue x Supreme

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-ndlsb"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low x Off White Lot 24

if($text == "▪️ Dunk Low x Off White Lot 24"){
    $but = array(array(array("text" => "42.5", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dlow24"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 24

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dlow24"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto2.png");
    }
}

//Dunk Low x Off White Lot 36

if($text == "▪️ Dunk Low x Off White Lot 36"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-dlow36"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 36

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-dlow36"){
        send($cbid, "https://obliqbot.000webhostapp.com/slot36.png");
    }
}

//Jordan 2 Low x Off White

if($text == "▪️ Jordan 2 Low x Off White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "callback_data" => "en-aj2ow"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 2 Low x Off White

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "en-aj2ow"){
        send($cbid, "https://obliqbot.000webhostapp.com/aj1ow.png");
    }
}
//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
// Streetwear


if($text == "Streetwear 👕"){
    $keyboard = [
        ["▪️ Supreme Box Logo hoodie Black", "▪️ Supreme Box Logo Milan t-shirt White"],
        ["Main Menu 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "STREETWEAR", $cid);
}

//Supreme Box Logo Hoodie Black

if($text == "▪️ Supreme Box Logo hoodie Black"){
    $but = array(array(array("text" => "L", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo hoodie Black

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

//Supreme Box Logo Milan t-shirt White

if($text == "▪️ Supreme Box Logo Milan t-shirt White"){
    $but = array(array(array("text" => "M", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "SHOW PHOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo Milan t-shirt White

Available sizes:

➕➖➖➖➖➖➖➖➖➖➖➕");
}


//------------------------------------------------------------------------------------------------------------


//------------------------------------------------------------------------------------------------------------
//Contatti
if($text == "Contacts  📱"){
    $but = array(array(array("text" => "INSTAGRAM  📷", "url" => "www.google.com"),array("text" => "WHATSAPP  📱", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "WEBSITE  🌍", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "Available contacts:");
}



//------------------------------------------------------------------------------------------------------------





















































//-------------------------------------------------{Español}-------------------------------------------------

if($text == "Español 🇪🇦"){
    send($cid, "🇪🇦 Bienvenido $username en el WarehouseBot official de Øbliq!
usas el Menù para ver El inventario!

El inventario esta dividido en dos categorias: 

▫️FOOTWEAR: haqui encontraràs Todos Los modelos de sneakers, subdividido para modelos, y las tallas correspondientes disponibiles.
*La categoria LIMITED EDITIONS es dedicada a todas las collaboraciones más exclusivas.

▫️STREETWEAR: aquí encontraràs todas las prendas de vestir, y las corrispectivas tallas disponibiles. 

📱 CONTACTS: visita el nuestro sitio web y la nuestra pagina Instagram, escribenos en DM para más informaciones.");
}

if($text == "Español" || $text == "Menú Principal 🔙"){
    $keyboard = [
        ["Footwear    👟", "Streetwear    👕"],
        ["Contactos  📱", "Change Language 🌍"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Menú Principal", $cid);
}

//------------------------------------------------------------------------------------------------------------
//Lista Scarpe

if($text == "Footwear    👟" || $text == "Regresar ⬅"){
    $keyboard = [
        ["▫️  DUNK", "▫️  JORDAN", "▫️  YEEZY"],
        ["▫️  NEW BALANCE", "▫️  LIMITED EDITIONS"],
        ["Menú Principal 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "Categorias", $cid);
}
//------------------------------------------------------------------------------------------------------------














//------------------------------------------------------------------------------------------------------------
//Lista Dunk


if($text == "▫️  DUNK"){
    $keyboard = [
        ["▪️  Dunk Low Retro Black and White", "▪️  Dunk Low Wmns Black and White"],
        ["▪️  Dunk Low Grey Fog"],
        ["Regresar ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "DUNK", $cid);
}

//Dunk Low Grey Fog

if($text == "▪️  Dunk Low Grey Fog"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dlgf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Grey Fog 

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dlgf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkgf.png");
    }
}

//Dunk Low Retro Black and White

if($text == "▪️  Dunk Low Retro Black and White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dlrbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Retro Black and White

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dlrbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low Wmns Black and White

if($text == "▪️  Dunk Low Wmns Black and White"){
    $but = array(array(array("text" => "36", "url" => "www.google.com"),array("text" => "37.5", "url" => "www.facebook.it"),array("text" => "38.5", "url" => "www.google.com"),array("text" => "39", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dlbw"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Black and White

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dlbw"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//------------------------------------------------------------------------------------------------------------















//------------------------------------------------------------------------------------------------------------
//Lista Jordan

if($text == "▫️  JORDAN"){
    $keyboard = [
        ["▪️  Jordan 1 high OG Atmosphere (W)", "▪️  Jordan 1 Mid Light Smoke Grey Anthracite"],
        ["Regresar ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "JORDAN", $cid);
}

//Air Jordan 1 Atmosphere

if($text == "▪️  Jordan 1 high OG Atmosphere (W)"){
    $but = array(array(array("text" => "38", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-j1hoa"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 high OG Atmosphere (W)

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-j1hoa"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

if($text == "▪️  Jordan 1 Mid Light Smoke Grey Anthracite"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-j1mga"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 1 Mid Light Smoke Grey Anthracite

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-j1mga"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}
//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista Yeezy

if($text == "▫️  YEEZY"){
    $keyboard = [
        ["▪️  Yeezy Foam Runner Vermillion", "▪️  Yeezy Slide Pure"],
        ["Regresar ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "YEEZY", $cid);
}

//Yeezy Foam Runner Vermillion

if($text == "▪️  Yeezy Foam Runner Vermillion"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-yfrv"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Foam Runner Vermillion

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-yfrv"){
        send($cbid, "https://obliqbot.000webhostapp.com/foamrunner.png");
    }
}
//Yeezy Slide Pure

if($text == "▪️  Yeezy Slide Pure"){
    $but = array(array(array("text" => "46", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-ysp"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Yeezy Slide Pure

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-ysp"){
        send($cbid, "https://obliqbot.000webhostapp.com/yslides.png");
    }
}

//------------------------------------------------------------------------------------------------------------
















//------------------------------------------------------------------------------------------------------------
//Lista New Balance

if($text == "▫️  NEW BALANCE"){
    $keyboard = [
        ["▪️  New Balance 550 White Grey"],
        ["Regresar ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "NEW BALANCE", $cid);
}

//New Balance 550 White Grey

if($text == "▪️  New Balance 550 White Grey"){
    $but = array(array(array("text" => "41", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-nbwg"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
New Balance 550 White Grey

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-nbwg"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
//Lista Limited Editions

if($text == "▫️  LIMITED EDITIONS"){
    $keyboard = [
        ["▪️  Dunk White and Black x SlamJam","▪️  Dunk high Flash Lime x Ambush"],
        ["▪️  Dunk Low Blue x Supreme","▪️  Jordan 2 Low x Off White"],
        ["▪️  Dunk Low x Off White Lot 24","▪️  Dunk Low x Off White Lot 36"],
        ["Regresar ⬅"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "LIMITED EDITIONS", $cid);
}

//Dunk White and Black x SlamJam

if($text == "▪️  Dunk White and Black x SlamJam"){
    $but = array(array(array("text" => "44", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dwbsj"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk White and Black x SlamJam

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dwbsj"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkslamjam.png");
    }
}

//Dunk high Flash Lime x Ambush

if($text == "▪️  Dunk high Flash Lime x Ambush"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-daf"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk high Flash Lime x Ambush

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-daf"){
        send($cbid, "https://obliqbot.000webhostapp.com/dunkambush.png");
    }
}

//Dunk Low Blue x Supreme

if($text == "▪️  Dunk Low Blue x Supreme"){
    $but = array(array(array("text" => "40", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-ndlsb"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low Blue x Supreme

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-ndlsb"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto1.png");
    }
}

//Dunk Low x Off White Lot 24

if($text == "▪️  Dunk Low x Off White Lot 24"){
    $but = array(array(array("text" => "42.5", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dlow24"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 24

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dlow24"){
        send($cbid, "https://obliqbot.000webhostapp.com/foto2.png");
    }
}

//Dunk Low x Off White Lot 36

if($text == "▪️  Dunk Low x Off White Lot 36"){
    $but = array(array(array("text" => "43", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "es-dlow36"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Dunk Low x Off White Lot 36

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-dlow36"){
        send($cbid, "https://obliqbot.000webhostapp.com/slot36.png");
    }
}

//Jordan 2 Low x Off White

if($text == "▪️  Jordan 2 Low x Off White"){
    $but = array(array(array("text" => "45", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "callback_data" => "-aj2ow"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Jordan 2 Low x Off White

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

if(callback($update)){
    if($cbdata == "es-aj2ow"){
        send($cbid, "https://obliqbot.000webhostapp.com/aj1ow.png");
    }
}
//------------------------------------------------------------------------------------------------------------

















//------------------------------------------------------------------------------------------------------------
// Streetwear


if($text == "Streetwear    👕"){
    $keyboard = [
        ["▪️  Supreme Box Logo hoodie Black", "▪️  Supreme Box Logo Milan t-shirt White"],
        ["Menú Principal 🔙"],
    ];
    $key = array(
        "resize_keyboard" => true,
        "keyboard" => $keyboard,
    );
    keyboard($key, "STREETWEAR", $cid);
}

//Supreme Box Logo Hoodie Black

if($text == "▪️  Supreme Box Logo hoodie Black"){
    $but = array(array(array("text" => "L", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo hoodie Black

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}

//Supreme Box Logo Milan t-shirt White

if($text == "▪️  Supreme Box Logo Milan t-shirt White"){
    $but = array(array(array("text" => "M", "url" => "www.google.com"),),);
    $but[] = array(array("text" => "MUESTRA FOTO", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "➕➖➖➖➖➖➖➖➖➖➖➕
    
Supreme Box Logo Milan t-shirt White

Tallas disponibles:

➕➖➖➖➖➖➖➖➖➖➖➕");
}


//------------------------------------------------------------------------------------------------------------


//------------------------------------------------------------------------------------------------------------
//Contatti
if($text == "Contactos  📱"){
    $but = array(array(array("text" => "INSTAGRAM  📷", "url" => "www.google.com"),array("text" => "WHATSAPP  📱", "url" => "www.facebook.it"),),);
    $but[] = array(array("text" => "SITIO WEB  🌍", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "Contactos disponibles:");
}



//------------------------------------------------------------------------------------------------------------









/*
if($text == "Inline"){
    $but = array(array(array("text" => "Bottone 1", "url" => "www.google.com"),),);
    inlineKeyboard($but, $cid, "Clicca questo pulsante per andare su google!");
}

if($text == "Inline2"){
    $but = array(array(array("text" => "Bottone 1", "url" => "www.google.com"),array("text" => "Bottone 2", "url" => "www.facebook.it"),),);
    inlineKeyboard($but, $cid, "Clicca uno di questi due pulsanti \nper andare su google o su facebook!");
}

if($text == "Inline3"){
    $but[] = array(array("text" => "Bottone 1", "url" => "www.google.com"),);
    $but[] = array(array("text" => "Bottone 2", "url" => "www.facebook.it"),);
    inlineKeyboard($but, $cid, "Clicca uno di questi due pulsanti \nper andare su google o su facebook!");
}



if($cbdata == "shoeslist"){
      $but = array(array(array("text" => "AF1", "callback_data" => "ciao1"),),);
      $but = array(array(array("text" => "Jordan Mid", "callback_data" => "ciao1"),),);
      inlineKeyboard($but, $cid, "Ecco la lista delle scarpe disponibili:");
  }
*/
