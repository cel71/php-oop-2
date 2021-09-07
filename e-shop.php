<?php

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, 
oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, 
l’utente dello shop inserisce una carta di credito...
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
*/

class Eshop {
    public $url = "www.nomesito.com";
    public $products = [];

    public function addProducts($product){
        $this->products[] = $product;
    }

    public function getProducts(){
        return $this->products;
    }
}

class Products {
    public $title;
    public $description;
    public $categories;
    public $price;
    public $amount;

    public function __construct($title, $description, $categories, $price, $amount){
        $this->title = $title;
        $this->description = $description;
        $this->categories = $categories;
        $this->price = $price;
        $this->amount = $amount;  
    }
}

class User {
    protected $name;
    protected $surname;
    protected $age;
    protected $email;
    protected $number;
    protected $city;
    protected $creditCard;

    public function __construct($name, $surname, $age, $email, $number, $city, $creditCard){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->email = $email;
        $this->number = $number;
        $this->city = $city;
        $this->creditCard = $creditCard;
    }   
}

class PremiumUser {
    public function __construct($name, $surname, $age, $email, $number, $city, $creditCard){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->email = $email;
        $this->number = $number;
        $this->city = $city;
        $this->creditCard = $creditCard;
    }   
}

$eshop = new Eshop();

$primo = new Products('computer', 'personal computer', 'Informatics', '500 Euro', 1);
$secondo = new Products('crema', 'crema idratante', 'beauty', '30 Euro', 2);
$terzo = new Products('palla', 'pallone da calcio', 'FreeTime', '10 Euro', 1);

$eshop->addProducts($primo);
$eshop->addProducts($secondo);
$eshop->addProducts($terzo);

var_dump($eshop->getProducts());

$nuovoUtente1 = new User('Mario', 'Rossi', 45, 'aaa.gmail.com', 345123, 'Roma', 6416841651);
$nuovoUtente2 = new User('Lara', 'Neri', 40, 'bbb.gmail.com', 789456, 'Torino', 49484684684);


var_dump($nuovoUtente1);
var_dump($nuovoUtente2);

$utentePremium1 = new PremiumUser('Franco', 'Bianchi', 75, 'ccc.gmail.com', 1111111, 'Milano', 46988555);
$utentePremium2 = new PremiumUser('Maria', 'Gialli', 44, 'ddd.gmail.com', 2222222, 'Palermo', 5456468464);

var_dump($utentePremium1);
var_dump($utentePremium2);

?>