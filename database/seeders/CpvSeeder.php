<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CpvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cpvs = "
            Produits agricoles, de l'élevage, de la pêche, de la sylviculture et produits connexes
            Produits agricoles et produits de l'horticulture
            Produits agricoles, produits de la culture maraîchère et de l'horticulture commerciale
            Graines
            Graines de soja
            Graines d'arachide
            Graines de tournesol
            Graines de coton
            Graines de sésame
            Graines de moutarde
            Graines de légumes
            Graines de fruits
            Graines de fleurs
            Tabacs non fabriqués
            Plantes utilisées pour la fabrication du sucre
            Betteraves sucrières
            Canne à sucre
            Paille et plantes fourragères
            Paille
            Plantes fourragères
            Matières premières végétales
            Matières premières végétales destinées à l'industrie textile
            Coton
            Jute
            Lin
            Caoutchouc naturel, latex naturel et produits connexes
            Caoutchouc naturel
            Latex naturel
            Produits en latex
            Plantes à usage spécifique
            Plantes utilisées en parfumerie ou en pharmacie, ou plantes à usage insecticide ou à usage similaire
            Plantes utilisées en parfumerie
            Plantes utilisées en pharmacie
            Plantes à usage insecticide
            Plantes à usage fongicide ou à usage similaire
            Graines de plantes à usage spécifique
            Produits horticoles et produits de pépinières
            Produits horticoles
            Plantes vivantes, bulbes, racines, boutures et greffons
            Fleurs coupées
            Compositions florales
            Plantes pour boissons et épices
            Plantes pour boissons
            Grains de café
            Théiers
            Maté
            Fèves de cacao
            Épices brutes
            Produits animaux et produits connexes
            Sperme de taureau
            Produits de l'élevage
            Miel naturel
            Escargots
            Produits alimentaires d'origine animale
            Cires
            Œufs
            Produits de la polyculture
            Fournitures pour l'agriculture
            Céréales, pommes de terre, légumes, fruits et noix
            Céréales et pommes de terre
            Céréales
            Blé
            Blé dur
            Blé tendre
            Maïs
            Riz
            Orge
            Seigle
            Avoine
            Malt
            Produits à graines
            Pommes de terre et légumes secs
            Pommes de terre
            Légumes secs à cosse et à gousse
            Légumes secs à cosse
            Lentilles
            Pois chiches
            Pois secs
            Légumes à gousse
            Légumes, fruits et noix
            Légumes
            Légumes-racines et légumes-tubercules
            Légumes-racines
            Betteraves
            Carottes
            Oignons
            Navets
            Légumes-tubercules
            Légumes-fruits
            Haricots
            Fèves
            Haricots verts
            Haricots d'Espagne
            Pois
            Petits pois
            Mange-tout
            Poivrons
            Tomates
            Courgettes
            Champignons
            Concombres
            Légumes à feuilles
            Laitues
            Feuilles de salade
            Artichauts
            Épinards
            Choux
            Choux blancs
            Choux-fleurs
            Brocolis
            Choux de Bruxelles
            Fruits et fruits à coque
            Fruits et fruits à coque tropicaux
            Fruits tropicaux
            Bananes
            Ananas
            Mangues
            Dattes
            Raisins secs
            Figues
            Avocats
            Kiwis
            Noix de coco
            Agrumes
            Citrons
            Oranges
            Pamplemousses
            Tangerines
            Citrons verts
            Fruits non tropicaux
            Baies
            Raisins secs de Corinthe
            Groseilles à maquereau
            Fraises
            Framboises
            Canneberges
            Pommes, poires et coings
            Pommes
            Poires
            Coings
            Fruits à noyau
            Abricots
            Pêches
            Cerises
            Prunes
            Raisins
            Raisins de table
            Raisins de cuve
            Olives
            Produits agricoles, de la chasse et de la pêche
            Poissons, crustacés et produits aquatiques
            Poissons
            Poissons plats
            Sole
            Plie
            Poissons de la famille des gatidés
            Morue
            Lieu
            Merlu
            Haddock
            Hareng
            Thon
            Merlan
            Blanquet
            Saumon
            Crustacés
            Huîtres
            Coquillages
            Invertébrés aquatiques
            Produits aquatiques
            Corail ou produits similaires
            Éponges naturelles
            Algues marines
            Algues
            Bétail, cheptel et petits animaux
            Bétail
            Bovins
            Veaux
            Cheptel
            Moutons
            Chèvres
            Chevaux
            Suidés
            Volaille vivante
            Petits animaux
            Lapins
            Lièvres
            Produits des animaux d'élévage
            Lait frais de brebis et de chèvre
            Lait de brebis
            Lait de chèvre
            Laine et poils
            Laine de tonte
            Poil
            Lait de vache frais
            Marques auriculaires pour animaux
            Marques auriculaires pour bovins
            Produits de la sylviculture et de l'exploitation forestière
            Bois
            Bois de conifères
            Bois tropical
            Bois de chauffage
            Bois brut
            Bois tendre
            Chutes de bois
            Copeaux de bois
            Sciure de bois
            Grumes
            Bois dur
            Bois d'œuvre
            Produits du bois
            Bois de mine
            Gommes
            Baumes
            Laque
            Liège
            Liège naturel
            Vannerie
            Sparterie
            Produits de la sylviculture
            Plantes, graminées, mousses ou lichens d'ornement
            Produits de pépinière
            Plantes
            Plantes à repiquer
            Bulbes de fleurs
            Arbustes
            Arbres
            Pâte à papier
            Pâte de bois
            Pâte de bois chimique
            Produits pétroliers, combustibles, électricité et autres sources d'énergie
            Combustibles
            Combustibles solides
            Charbon et combustibles à base de charbon
            Charbon
            Combustibles dérivés du charbon
            Charbon maigre
            Briquettes
            Combustibles fossiles
            Combustibles à base de bois
            Lignite et tourbe
            Lignite
            Tourbe
            Coke
            Combustibles gazeux
            Gaz de houille, gaz de ville ou gaz similaires
            Gaz de houille ou gaz similaires
            Gaz de ville
            Propane et butane
            Gaz propane
            Propane liquéfié
            Gaz butane
            Butane liquéfié
            Gaz naturel
            Pétrole et distillats
            Kérosène aviation
            Carburéacteurs de type kérosène
            Essence
            Essence sans plomb
            Essence au plomb
            Essence à l'éthanol
            Gaz de pétrole liquéfié (LPG)
            Gasoils
            Huile diesel
            Carburant diesel
            Carburant diesel (02)
            Carburant diesel (EN 590)
            Biodiesel
            Biodiesel (B20)
            Biodiesel (B100)
            Mazout
            Fioul domestique
            Huiles combustibles à basse teneur en soufre
            Produits pétroliers, charbon et huiles
            Préparations lubrifiantes
            Huiles lubrifiantes et agents lubrifiants
            Huiles pour moteurs
            Huiles pour compresseurs
            Huiles pour turbines
            Huiles pour engrenages
            Huiles pour réducteurs
            Huiles destinées aux systèmes hydrauliques et à d'autres usages
            Liquides à usage hydraulique
            Huiles de démoulage
            Huiles anticorrosives
            Huiles utilisées comme isolants électriques
            Liquides de frein
            Huiles blanches et paraffines liquides
            Huiles blanches
            Paraffines liquides
            Huiles minérales et préparations dérivées du pétrole
            Huiles légères
            Huiles minérales
            Huiles lubrifiantes pour traction
            Vaseline, cires de pétrole et essences spéciales
            Vaseline et cire de pétrole
            Vaseline
            Paraffine
            Cire de pétrole
            Résidus de pétrole
            Essences spéciales
            White-spirit
            Pétrole (brut)
            Huile et produits dérivés du charbon
            Schiste bitumineux ou kérobitumeux
            Produits dérivés du charbon
            Huile lourde de houille
            Électricité, chauffage, énergie solaire et nucléaire
            Électricité
            Vapeur, eau chaude et produits connexes
            Eau chaude
            Vapeur
            Chauffage urbain
            Chauffage fourni à grande distance
            Énergie solaire
            Panneaux solaires
            Capteurs solaires pour la production de chaleur
            Modules solaires photovoltaïques
            Installation solaire
            Combustibles nucléaires
            Uranium
            Plutonium
            Matériaux radioactifs
            Radio-isotopes
            Produits d'exploitation des mines, métaux de base et produits connexes
            Sable et argile
            Gravier, sable, pierre concassée et agrégats
            Sable
            Sable naturel
            Granulés, gravillons, sable fin, cailloux, gravier, pierraille et pierre concassée, mélanges de pierres, de grave et autres agrégats
            Cailloux et gravier
            Cailloux
            Gravier
            Agrégats
            Grave
            Pierraille et pierre concassée
            Ballast
            Granit concassé
            Basalte concassé
            Terre
            Terre végétale
            Sous-sol
            Gravillons
            Macadam, tarmacadam et sable bitumineux
            Macadam
            Tarmacadam
            Sable bitumineux
            Argile et kaolin
            Argile
            Kaolin
            Produits inorganiques chimiques et engrais minéraux
            Engrais minéraux
            Calcium naturel, phosphate aluminocalcique et sels de potassium naturel brut
            Calcium naturel
            Phosphates aluminocalciques
            Sels de potassium naturel brut
            Pyrites de fer
            Pyrites de fer non grillées
            Produits inorganiques chimiques
            Sel et chlorure de sodium pur
            Sel gemme
            Sel marin
            Sel concentré par évaporation et chlorure de sodium pur
            Saumure
            Produits connexes d'exploitation de mines et de carrières
            Pierres précieuses et semi-précieuses, pierre ponce, émeri, abrasifs naturels, autres minéraux et métaux précieux
            Pierres précieuses et semi-précieuses
            Pierres précieuses
            Poussière ou poudre de pierres précieuses
            Pierres semi-précieuses
            Poussière ou poudre de pierres semi-précieuses
            Diamants industriels, pierre ponce, émeri et autres abrasifs naturels
            Pierre ponce
            Diamants industriels
            Émeri
            Abrasifs naturels
            Minéraux, métaux précieux connexes et produits associés
            Minéraux
            Or
            Argent
            Platine
            Minerais de métaux et alliages
            Minerais de métaux
            Minerais de fer
            Minerais de métaux non ferreux
            Minerais de cuivre
            Minerais de nickel
            Minerais d'aluminium
            Minerais de métaux précieux
            Minerais de plomb
            Minerais de zinc
            Minerais d'étain
            Minerais d'uranium et de thorium
            Minerais d'uranium
            Minerais de thorium
            Minerais divers
            Alliages
            Ferroalliages
            Ferroalliages hors CECA
            Ferromanganèse
            Ferrochrome
            Ferronickel
            Acier
            Scories, laitier, déchets et débris ferreux
            Métaux de base
            Fer, plomb, zinc, étain et cuivre
            Fer
            Fonte brute
            Plomb
            Zinc
            Étain
            Cuivre
            Aluminium, nickel, scandium, titane et vanadium
            Aluminium
            Oxyde d'aluminium
            Nickel
            Scandium
            Titane
            Vanadium
            Chrome, manganèse, cobalt, yttrium et zirconium
            Chrome
            Manganèse
            Cobalt
            Yttrium
            Zirconium
            Molybdène, technétium, ruthénium et rhodium
            Molybdène
            Technétium
            Ruthénium
            Rhodium
            Cadmium, lutétium, hafnium, tantale et tungstène
            Cadmium
            Lutétium
            Hafnium
            Tantale
            Tungstène
            Iridium, gallium, indium, thallium et barium
            Iridium
            Gallium
            Indium
            Thallium
            Barium
            Césium, strontium, rubidium et calcium
            Césium
            Strontium
            Rubidium
            Calcium
            Potassium, magnésium, sodium et lithium
            Potassium
            Magnésium
            Sodium
            Lithium
            Niobium, osmium, rhénium et palladium
            Niobium
            Osmium
            Rhénium
            Palladium
            Produits minéraux non métalliques divers
            Produits abrasifs
            Pierres à meuler, pierres à broyer et meules
            Pierres à meuler
            Pierres à broyer
            Meules
            Poudre ou grains abrasifs
            Corindon artificiel
            Graphite artificiel
            Verre
            Fibres de verre
            Matières premières de récupération
            Matières premières métalliques de récupération
            Matières premières non métalliques de récupération
            Cendres et résidus contenant des métaux
            Produits alimentaires, boissons, tabac et produits connexes
            Produits de l'élevage, viande et produits à base de viande
            Viande
            Viande bovine
            Viande de bœuf
            Viande de veau
            Volaille
            Volaille fraîche
            Oies
            Dindes
            Poulets
            Canards
            Foies de volaille
            Foie gras
            Viande de porc
            Abats
            Viande d'agneau et de mouton
            Viande d'agneau
            Viande de mouton
            Viande de chèvre
            Viande de cheval, d'âne, de mule ou de bardot
            Viande de cheval
            Viande d'âne, de mule ou de bardot
            Viandes diverses
            Viande de lapin
            Viande de lièvre
            Gibier
            Cuisses de grenouilles
            Pigeons
            Chair de poisson
            Produits à base de viande
            Conserves et préparations à base de viande
            Produits à base de chair à saucisse
            Chair à saucisse
            Charcuterie
            Saucisses
            Boudin noir et autres saucisses à base de sang
            Saucisses de volaille
            Viande séchée, salée, fumée ou assaisonnée
            Jambon fumé
            Lard
            Salami
            Préparations à base de foie
            Pâté
            Préparations à base de foie d'oie ou de canard
            Produits à base de porc
            Jambon
            Boulettes de viande
            Plats préparés de porc
            Produits à base de volaille
            Produits à base de bœuf et de veau
            Boulettes de bœuf
            Viande de bœuf hachée
            Steaks hachés de bœuf
            Préparations à base de viande
            Poisson préparé et conserves de poisson
            Filets de poisson, foie et œufs ou laitance de poisson
            Filets de poisson
            Filets de poisson frais
            Œufs ou laitance de poisson
            Foie de poisson
            Poisson, filets de poisson et autre chair de poisson congelés
            Poisson congelé
            Produits congelés à base de poisson
            Poisson séché ou salé; poisson en saumure; poisson fumé
            Poisson séché
            Poisson salé
            Poisson en saumure
            Poisson fumé
            Conserves de poisson
            Poisson en conserve ou en boîte et autres poissons préparés ou en conserve
            Poisson pané ou autrement enrobé, en conserve ou en boîte
            Saumon en conserve
            Hareng préparé ou en conserve
            Sardines
            Thon en conserve
            Maquereaux
            Anchois
            Bâtonnets de poisson
            Préparations à base de poisson pané ou autrement enrobé
            Plats préparés de poisson
            Préparations à base de poisson
            Caviar et œufs de poissons
            Caviar
            Œufs de poissons
            Fruits de mer
            Crustacés congelés
            Crustacés préparés ou en conserve
            Produits à base de mollusques
            Fruits, légumes et produits connexes
            Pommes de terre et produits à base de pomme de terre
            Pommes de terre congelées
            Chips et pommes frites
            Pommes de terre coupées en dés, en tranches et autres pommes de terre congelées
            Produits à base de pommes de terre
            Purée de pommes de terre instantanée
            Pommes de terre préfrites
            Pommes chips
            Pommes chips aromatisées
            Produits apéritifs à base de pommes de terre
            Croquettes de pommes de terre
            Pommes de terre transformées
            Jus de fruits et de légumes
            Jus de fruits
            Jus d'orange
            Jus de pamplemousse
            Jus de citron
            Jus d'ananas
            Jus de raisin
            Jus de pomme
            Mélanges de jus non concentrés
            Jus concentrés
            Jus de légumes
            Jus de tomate
            Fruits et légumes transformés
            Légumes transformés
            Légumes frais ou congelés
            Légumes-racines transformés
            Légumes-tubercules transformés
            Haricots, pois, poivrons, tomates et autres légumes
            Haricots transformés
            Pois transformés
            Pois cassés
            Tomates transformées
            Champignons transformés
            Poivrons transformés
            Germes de soja
            Truffes
            Légumes à feuilles et choux
            Choux transformés
            Légumes à cosse transformés
            Légumes congelés
            Légumes en conserve et/ou en boîte
            Haricots à la sauce tomate
            Haricots blancs à la sauce tomate
            Tomates en conserve
            Tomates en boîte
            Purée de tomates
            Concentré de tomates
            Sauce tomate
            Champignons en boîte
            Olives transformées
            Légumes en boîte
            Choucroute en boîte
            Pois en boîte
            Haricots écossés en boîte
            Haricots entiers en boîte
            Asperges en boîte
            Olives en boîte
            Maïs doux
            Légumes ayant subi un traitement de conservation temporaire
            Légumes conservés dans le vinaigre
            Fruits et fruits à coque transformés
            Fruits transformés
            Pommes transformées
            Poires transformées
            Bananes transformées
            Rhubarbe
            Melons
            Confitures et marmelades; gelées de fruits; purées et pâtes de fruits ou de fruits à coque
            Marmelades
            Marmelade d'oranges
            Marmelade de citrons
            Gelées de fruits
            Pâtes de fruits
            Pâtes de fruits à coque
            Beurre d'arachide
            Purées de fruits
            Confitures
            Confiture d'abricots
            Confiture de mûres
            Confiture de cassis
            Confiture de cerises
            Confiture de framboises
            Confiture de fraises
            Fruits à coque transformés
            Fruits à coque grillés ou salés
            Conserves de fruits
            Fruits secs
            Raisins secs de Corinthe transformés
            Raisins transformés
            Sultanines
            Sous-produits végétaux
            Huiles et graisses animales ou végétales
            Huiles et graisses animales ou végétales brutes
            Huiles animales ou végétales
            Huiles végétales
            Huile d'olive
            Huile de sésame
            Huile d'arachide
            Huile de coco
            Huile de cuisson
            Huile de friture
            Graisses
            Graisses animales
            Graisses végétales
            Résidus solides de graisses ou huiles végétales
            Tourteaux
            Huiles et graisses raffinées
            Huiles raffinées
            Graisses raffinées
            Graisses ou huiles hydrogénées ou estérifiées
            Cires végétales
            Graisses comestibles
            Margarine et préparations similaires
            Margarine
            Margarine liquide
            Pâtes à tartiner allégées ou à faible teneur en matières grasses
            Produits laitiers
            Lait et crème fraîche
            Lait
            Lait pasteurisé
            Lait stérilisé
            Lait UHT
            Lait écrémé
            Lait demi-écrémé
            Lait entier
            Lait condensé
            Lait en poudre
            Crème fraîche
            Crème fraîche liquide
            Crème fraîche épaisse
            Crème épaisse
            Crème fraîche à fouetter
            Beurre
            Fromages
            Fromage de table
            Fromage frais
            Cottage cheese
            Fromage à pâte molle
            Feta
            Fromage râpé, en poudre, bleu et autre fromage
            Fromage à pâte bleue
            Cheddar
            Fromage râpé
            Parmesan
            Fromage à pâte dure
            Fromage à tartiner
            Produits laitiers divers
            Yaourt et autres produits laitiers fermentés
            Yaourt
            Yaourt nature
            Yaourt aromatisé
            Babeurre
            Caséine
            Lactose ou sirop de lactose
            Petit-lait
            Crème glacée et produits similaires
            Crème glacée
            Sorbet
            Produits de la minoterie, amidon et produits amylacés
            Produits de la minoterie
            Riz décortiqué
            Farine de céréales ou farine végétale et produits connexes
            Farine de blé
            Farine complète
            Farine de boulangerie
            Farine sans levure
            Farine de pâtisserie
            Farine fermentante
            Farine de céréales
            Farine de maïs
            Farine de riz
            Farines végétales
            Mélanges utilisés pour la préparation de produits de boulangerie
            Préparations pour gâteaux
            Préparations à cuire au four
            Produits de boulangerie
            Produits à base de grains de céréales
            Gruaux
            Produits céréaliers
            Céréales pour petit déjeuner
            Flocons de maïs
            Muesli ou équivalent
            Blé soufflé
            Flocons d'avoine
            Riz transformé
            Riz à grains longs
            Riz usiné
            Brisures de riz
            Son
            Amidons et produits amylacés
            Huile de maïs
            Glucose et produits à base de glucose, de fructose et produits à base de fructose
            Glucose et produits à base de glucose
            Glucose
            Sirop de glucose
            Fructose et produits à base de fructose
            Fructose
            Préparations à base de fructose
            Solutions de fructose
            Sirop de fructose
            Amidons et fécules
            Tapioca
            Semoule
            Poudre pour pudding
            Aliments pour animaux
            Aliments prêts à l'emploi pour animaux d'élevage et autres animaux
            Nourriture pour poissons
            Fourrage sec
            Aliments pour animaux de compagnie
            Produits alimentaires divers
            Produits de panification, pâtisserie fraîche et gâteaux
            Produits de panification
            Pain
            Petits pains
            Croissants
            Petites crêpes épaisses
            Produits de panification préparés
            Sandwichs
            Sandwichs préparés
            Pâtisserie et gâteaux
            Pâtisserie
            Tourtes
            Tourtes salées
            Tourtes sucrées
            Gâteaux
            Aliments pour petit déjeuner
            Biscottes et biscuits; pâtisserie et gâteaux de conservation
            Produits de panification grillés et pâtisserie
            Produits de panification grillés
            Pain grillé
            Pain croustillant dit Knaeckebrot
            Biscottes
            Biscuits sucrés
            Sucre et produits connexes
            Sucre
            Sucre blanc
            Sucre d'érable et sirop d'érable
            Mélasse
            Sirops de sucre
            Miel
            Déchets provenant de la fabrication du sucre
            Produits à base de sucre
            Desserts
            Fonds de tartes
            Cacao; chocolat et sucreries
            Cacao
            Pâte de cacao
            Beurre, graisse ou huile de cacao
            Poudre de cacao non sucrée
            Poudre de cacao sucrée
            Chocolat et sucreries
            Chocolat
            Produits à base de chocolat
            Boisson chocolatée
            Barres de chocolat
            Confiserie
            Bonbons
            Nougat
            Fruits, fruits à coque ou écorces de fruits confits au sucre
            Pâtes alimentaires
            Produits farinacés
            Pâtes alimentaires non cuites
            Pâtes alimentaires préparées et couscous
            Pâtes alimentaires préparées
            Pâtes alimentaires farcies
            Lasagnes
            Couscous
            Pâtes alimentaires en conserve
            Café, thé et produits connexes
            Café
            Café torréfié
            Café décaféiné
            Succédanés de café
            Thé
            Thé vert
            Thé noir
            Préparations de thé ou de maté
            Thé en sachets
            Infusions
            Condiments et assaisonnements
            Vinaigre; sauces; condiments composés; farine et poudre de moutarde; moutarde préparée
            Vinaigre et succédanés de vinaigre
            Vinaigre ou équivalent
            Sauces, condiments et assaisonnements composés
            Sauce soja
            Ketchup
            Moutarde
            Sauces
            Condiments composés
            Mayonnaise
            Pâtes à tartiner pour sandwichs
            Chutney
            Herbes et épices
            Poivre
            Épices
            Herbes
            Sel
            Gingembre
            Produits nutritionnels spéciaux
            Préparations alimentaires homogénéisées
            Produits diététiques
            Aliments pour nourrissons
            Produits alimentaires et produits secs divers
            Soupes et bouillons
            Soupes à base de viande
            Soupes à base de poisson
            Soupes composées
            Soupes
            Soupes instantanées
            Bouillons
            Fonds
            Bouillons instantanés
            Soupes de légumes
            Sucs et extraits d'origine végétale, matières peptiques et épaississants
            Sucs d'origine végétale
            Extraits d'origine végétale
            Épaississants
            Denrées sèches
            Préparations alimentaires
            Préparations pour desserts
            Préparations pour sauces
            Produits alimentaires transformés
            Repas végétariens
            Repas préparés
            Repas pour écoles
            Repas pour hôpitaux
            Plats préparés
            Casse-croûte
            Produits pour distributeurs automatiques
            Garnitures pour sandwichs
            Épicerie fine
            Aliments pour restauration rapide
            Hamburgers
            Produits surgelés
            Aliments en conserve et rations de campagne
            Rations de campagne
            Aliments en conserve
            Colis alimentaires
            Levure
            Levure chimique
            Boissons, tabac et produits connexes
            Boissons alcoolisées distillées
            Boissons spiritueuses
            Spiritueux
            Liqueurs
            Vins
            Vins non aromatisés
            Vin mousseux
            Vin de table
            Porto
            Madère
            Moût de raisin
            Sherry
            Lie de vin
            Cidre et autres vins à base de fruits
            Cidre
            Vins à base de fruits
            Boissons fermentées non distillées
            Vermouth
            Bière de malt
            Bière
            Bière blonde
            Drèches de brasserie ou de distillerie
            Boissons sans alcool
            Eau minérale
            Eau minérale plate
            Eau minérale gazeuse
            Eau à l'état solide
            Glace
            Neige
            Eaux minérales aromatisées
            Boissons non alcoolisées
            Sirops de fruits
            Lait chocolaté
            Tabac, produits à base de tabac et articles connexes
            Produits à base de tabac
            Cigares
            Cigarillos
            Cigarettes
            Tabac
            Tabac manufacturé
            Articles de bureau de tabac
            Papier à cigarettes et papier-filtre
            Papier à cigarettes
            Papier-filtre
            Machines agricoles
            Machines agricoles et sylvicoles pour la préparation ou la culture des sols
            Charrues ou herses à disques
            Herses, scarificateurs, cultivateurs, sarcleuses ou houes
            Semoirs, plantoirs ou repiqueurs
            Épandeurs de fumier
            Distributeurs d'engrais
            Rouleaux pour pelouses ou terrains de sports
            Matériel de jardinage divers
            Moissonneuses
            Faucheuses
            Tondeuses à gazon
            Tondeuses à gazon pour pelouses, parcs ou terrains de sports
            Machines de fenaison
            Presses à paille ou à fourrage
            Presses ramasseuses
            Moissonneuses-batteuses
            Machines de pulvérisation à usage agricole ou horticole
            Remorques et semi-remorques autochargeuses ou déchargeuses à usage agricole
            Remorques autochargeuses à usage agricole
            Remorques déchargeuses à usage agricole
            Semi-remorques autochargeuses à usage agricole
            Semi-remorques déchargeuses à usage agricole
            Machines spécialisées à usage agricole ou sylvicole
            Machines de nettoyage, de tri ou de calibrage d'œufs, de fruits ou d'autres produits
            Machines de nettoyage de produits agricoles
            Machines de nettoyage d'œufs
            Machines de nettoyage de fruits
            Machines de tri ou de calibrage de produits agricoles
            Machines de tri ou de calibrage d'œufs
            Machines de tri ou de calibrage de fruits
            Machines de nettoyage, de tri ou de calibrage de semences, de graines ou de légumes secs
            Trayeuses
            Machines de préparation d'aliments pour animaux
            Machines apicoles
            Machines avicoles
            Incubateurs et écloseries avicoles
            Tracteurs
            Tracteurs agricoles à conducteur accompagnant
            Tracteurs d'occasion
            Moteurs de traction
            Pièces pour machines agricoles et sylvicoles
            Pièces pour machines agricoles
            Pièces pour machines sylvicoles
            Vêtements, articles chaussants, bagages et accessoires
            Vêtements professionnels, vêtements de travail spéciaux et accessoires
            Vêtements professionnels
            Vêtements à usage industriel
            Combinaisons de travail
            Vêtements de travail spéciaux
            Vêtements d'aviateur
            Vestons d'aviateur
            Combinaisons d'aviateur
            Accessoires pour vêtements de travail
            Gants de travail
            Visières de sécurité
            Équipements de protection
            Vêtements d'extérieur
            Manteaux
            Pèlerines
            Capes
            Coupe-vent
            Vêtements de protection contre les intempéries
            Vêtements imperméables
            Pèlerines imperméables
            Anoraks
            Imperméables
            Vêtements de fonction
            Costumes (hommes); tailleurs (femmes)
            Ensembles
            Vestes et blazers
            Blazers
            Vestes
            Vêtements en tissu enduit ou imprégné
            Vêtements d'extérieur divers
            Robes
            Jupes
            Shorts
            Pantalons
            Pull-overs, cardigans et articles similaires
            Pull-overs
            Cardigans
            Sweat-shirts
            Gilets
            Articles d'habillement
            Sous-vêtements
            Combinaisons
            Caleçons
            Slips pour femmes
            Peignoirs de bain
            Bas
            Collants
            Chaussettes
            Vêtements de nuit
            Chemises de nuit
            Robes de chambre
            Pyjamas
            Maillots de corps
            Chemises de nuit pour femmes
            Soutiens-gorge, corsets, jarretelles et articles similaires
            Soutiens-gorge
            Corsets
            Jarretelles
            T-shirts et chemises
            T-shirts
            Chemises
            Chemises polo
            Vêtements spéciaux et accessoires
            Vêtements spéciaux
            Vêtements pour bébés
            Vêtements de sport
            Survêtements de sport
            Chemises de sport
            Combinaisons de ski
            Maillots de bain
            Accessoires d'habillement
            Mouchoirs
            Écharpes
            Cravates
            Gants
            Gants jetables
            Moufles
            Gants à crispin
            Ceintures
            Cartouchières
            Chapeaux et coiffures
            Chapeaux
            Coiffures et accessoires de coiffure
            Serre-tête
            Coiffures
            Bérets
            Calots de campagne
            Capuchons
            Képis
            Jugulaires pour coiffures
            Visières
            Coiffures de protection
            Coiffures de sécurité
            Casques
            Casques antichoc
            Casques pour cyclistes
            Casques de sécurité
            Fermetures (vêtements)
            Boutons
            Parties de boutons
            Épingles de sûreté
            Fermetures à glissière
            Bijouterie, montres et articles connexes
            Bijouterie et articles connexes
            Pierres précieuses pour bijouterie
            Diamants
            Rubis
            Émeraudes
            Opale
            Quartz
            Tourmaline
            Pièces de monnaie et médailles
            Pièces de monnaie
            Médailles
            Bijoux
            Perles
            Pièces d'orfèvrerie
            Objets en métal précieux
            Objets en pierres précieuses ou semi-précieuses
            Pièces d'argenterie
            Horlogerie personnelle
            Montres
            Verre à montres
            Montres-bracelets
            Chronomètres
            Cadeaux et prix
            Fourrure et articles en fourrure
            Articles en fourrure
            Pelleterie
            Vêtements en fourrure
            Articles en fourrure synthétique
            Fourrures
            Articles chaussants
            Chaussures autres que les chaussures de sport ou de protection
            Chaussures étanches
            Chaussures partiellement en caoutchouc ou en plastique
            Sandales à dessus caoutchouc ou plastique
            Bottes en caoutchouc
            Chaussures de ville à dessus caoutchouc ou plastique
            Tongs
            Chaussures à dessus cuir
            Sandales
            Pantoufles
            Chaussures de ville
            Chaussures à dessus textile
            Bottes
            Bottines
            Bottillons
            Bottes hautes
            Cuissardes
            Galoches
            Chaussures de sport
            Chaussures de ski
            Chaussures de ski de fond
            Chaussures d'entraînement
            Chaussures de montagne
            Chaussures de football
            Chaussures de protection
            Chaussures à embout de protection métallique
            Chaussures spéciales
            Chaussures d'aviateur
            Parties de chaussures
            Dessus de chaussures
            Semelles
            Talons
            Bagages, sellerie, sacs et sachets
            Sellerie
            Selles d'équitation
            Cravaches
            Fouets
            Bagages
            Valises
            Bourses et portefeuilles
            Bourses
            Portefeuilles
            Malles
            Porte-gourdes et étuis
            Porte-gourdes
            Étuis
            Trousses de toilette
            Sacs et sachets
            Sacs de voyage
            Sacs à dos
            Sacs de sports
            Sacs pour courrier ou colis
            Sacs postaux
            Sacoches
            Sacs à linge
            Sacs en textile
            Sacs d'emballage
            Sachets d'emballage
            Enveloppes rembourrées
            Sacs à main
            Produits en cuir et textiles, matériaux en plastique et en caoutchouc
            Cuir
            Peau de chamois
            Cuir de bovidé ou d'équidé
            Cuir d'ovin, de caprin ou de porcin
            Peau de mouton ou d'agneau
            Peau de chèvre ou de chevreau
            Cuir de porcin
            Cuir d'autres animaux, cuir reconstitué et autres cuirs
            Cuir d'autres animaux
            Cuir reconstitué
            Similicuir
            Cuir verni
            Bracelets de montre
            Articles en cuir utilisés dans les machines ou les appareils mécaniques
            Textiles et articles connexes
            Tissus
            Tissu synthétique
            Tissu mélangé
            Tissu en coton
            Coutil
            Denim
            Toile
            Articles en toile
            Popeline
            Sangle
            Sangles
            Tissu cardé
            Tissu de lin
            Linge
            Tissu spécial
            Velours
            Tissu éponge
            Tissu d'ameublement
            Tissu à rideaux
            Tissu de doublure
            Tissu tricoté ou crocheté
            Tricot
            Tissu de velours
            Tissu crocheté
            Étoffe
            Tissu non-tissé
            Laine, cuirs et peaux
            Laine
            Peaux
            Peaux et plumes d'oiseaux
            Fil textile
            Fibres textiles naturelles
            Fibres textiles artificielles
            Fil textile en fibres naturelles
            Fil de soie
            Fil de laine
            Fil de coton
            Fil de lin
            Fil à coudre en fibres naturelles
            Fil à coudre
            Fil à tricoter
            Fil en fibres textiles végétales
            Fil ou filé synthétique
            Filé synthétique
            Fil synthétique
            Fil à coudre synthétique
            Fil à tricoter synthétique
            Produits en caoutchouc et en plastique
            Produits en caoutchouc
            Chambres à air, bandes de roulement et flaps en caoutchouc
            Flaps
            Chambres à air
            Bandes de roulement
            Articles en caoutchouc non vulcanisé
            Tissus caoutchoutés
            Tissu pour cordée de pneumatique
            Ruban adhésif en tissu caoutchouté
            Caoutchouc régénéré
            Produits en plastique
            Produits en polystyrène
            Feuilles de polystyrène
            Plaques de polystyrène
            Résines
            Résine époxy
            Tubes en résine d'époxy
            Déchets de cuir, déchets textiles, déchets de caoutchouc et déchets de plastique
            Déchets de cuir
            Déchets textiles
            Déchets de caoutchouc
            Sacs et sachets à ordures en polyéthylène
            Caoutchouc et fibres synthétiques
            Caoutchouc synthétique
            Fibres synthétiques
            Câbles de fibres synthétiques
            Fil à haute ténacité
            Fil à texture simple
            Monofilament synthétique
            Fibres artificielles
            Fibres artificielles discontinues
            Polypropylène
            Fil texturé artificiel
            Imprimés et produits connexes
            Livres, brochures et dépliants imprimés
            Livres imprimés
            Livres scolaires
            Manuels scolaires
            Livres de bibliothèque
            Dictionnaires, cartes, livres de musique et autres livres
            Dictionnaires
            Atlas
            Cartes
            Plans cadastraux
            Cyanotypies
            Partitions
            Encyclopédies
            Publications
            Publications techniques
            Annuaires
            Dépliants
            Brochures
            Fascicules
            Journaux, revues spécialisées, périodiques et magazines
            Journaux
            Revues spécialisées
            Journaux officiels
            Périodiques
            Publications périodiques
            Magazines
            Cartes postales, cartes de vœux et autres imprimés
            Cartes postales
            Images
            Décalcomanies
            Dessins
            Photographies
            Cartes de vœux
            Cartes de Noël
            Timbres, formules de chèque, billets de banque, actions, publicité professionnelle, catalogues et manuels
            Timbres
            Timbres de Noël
            Nouveaux timbres
            Timbres-épargne
            Carnets de timbres-poste
            Papier timbré
            Billets de banque
            Formules de chèque
            Imprimés infalsifiables
            Passeports
            Formules de mandat de poste
            Vignettes automobiles
            Permis de conduire
            Cartes d'identité
            Bracelet d'identité
            Permis
            Cartes d'accès
            Imprimés sur commande
            Tickets
            Autocollants et bandes publicitaires
            Publicité professionnelle, catalogues commerciaux et manuels
            Catalogues
            Porte-liste
            Imprimés publicitaires
            Manuels
            Manuels informatiques
            Manuels d'instruction
            Manuels techniques
            Plaques ou cylindres d'impression, autre matériel d'imprimerie
            Plaques offset
            Matériel de gravure sèche
            Matériel d'estampage
            Encre
            Encre d'imprimerie
            Encre pour héliogravure
            Encre de Chine
            Registres, livres comptables, classeurs, formulaires et autres articles de papeterie imprimés en papier ou en carton
            Registres en papier ou en carton
            Livres comptables
            Carnets de quittances
            Calepins
            Blocs
            Bloc-notes
            Carnets de sténographie
            Carnets de Post-it
            Agendas ou mémentos personnels
            Carnets d'adresses
            Formulaires
            Formulaires électoraux
            Formulaires commerciaux
            Formulaires commerciaux en continu
            Formulaires commerciaux non continus
            Cahiers d'exercices
            Recharges pour cahiers d'exercices
            Feuilles d'exercices
            Albums pour échantillons
            Albums pour collections
            Carnets de timbres
            Albums de timbres
            Classeurs et accessoires pour classeurs
            Classeurs
            Chemises de classement
            Chemises à dossier
            Bacs à documents
            Imprimés divers
            Papiers à usage graphique, ni couchés ni enduits
            Papier journal
            Papier ou carton de fabrication artisanale
            Papier ou carton photosensible, thermosensible ou thermographique
            Papier ou carton photosensible
            Papier ou carton thermosensible
            Papier ou carton thermographique
            Papier ou carton ondulé
            Produits chimiques
            Gaz
            Gaz industriels
            Hydrogène, argon, gaz rares, azote et oxygène
            Argon
            Gaz rares
            Hélium
            Néon
            Gaz médicaux
            Hydrogène
            Azote
            Azote liquide
            Oxygène
            Composés oxygénés inorganiques
            Dioxyde de carbone
            Oxydes azotés
            Composés oxygénés inorganiques gazeux
            Air liquide et air comprimé
            Air liquide
            Air comprimé
            Colorants et pigments
            Oxydes, peroxydes et hydroxydes
            Oxyde et peroxyde de zinc, oxyde de titane, colorants et pigments
            Oxyde de zinc
            Peroxyde de zinc
            Oxyde de titane
            Oxydes et hydroxydes de chrome, de manganèse, de magnésium, de plomb et de cuivre
            Oxyde de chrome
            Oxyde de manganèse
            Oxyde de plomb
            Oxyde de cuivre
            Oxyde de magnésium
            Hydroxydes pour colorants et pigments
            Hydroxyde de chrome
            Hydroxyde de manganèse
            Hydroxyde de plomb
            Hydroxyde de cuivre
            Hydroxyde de magnésium
            Chaux hydratée
            Extraits tannants, extraits tinctoriaux, tannins et matières colorantes
            Extraits tinctoriaux
            Extraits tannants
            Tannins
            Matières colorantes
            Produits de tannage
            Produits chimiques organiques et inorganiques de base
            Produits chimiques inorganiques de base
            Éléments chimiques, acides inorganiques et composés
            Métalloïdes
            Phosphures
            Carbures
            Hydrures
            Nitrures
            Azotures
            Siliciures
            Borures
            Soufre raffiné
            Halogène
            Métaux alcalins
            Mercure
            Chlorure d'hydrogène, acides inorganiques, dioxyde de silicium et de soufre
            Acides inorganiques
            Acide sulfurique
            Acide phosphorique
            Acides polyphosphoriques
            Acide hexafluorosilicique
            Dioxyde de soufre
            Dioxyde de silicium
            Chlorure d'hydrogène
            Hydroxydes utilisés comme produits chimiques inorganiques de base
            Oxydes métalliques
            Pyrites et oxydes de fer
            Hydroxyde de sodium
            Soude caustique
            Soude liquide
            Composés du soufre
            Soufre
            Carbone
            Chlore
            Halogénures métalliques, hypochlorites, chlorates et perchlorates
            Halogénures métalliques
            Hexafluorosilicate de sodium
            Chlorures
            Chlorure d'aluminium
            Chlorure ferrique
            Polychlorure d'aluminium
            Chlorhydrate d'aluminium
            Hypochlorites et chlorates
            Chlorite de sodium
            Hypochlorite de sodium
            Sulfures, sulfates, nitrates, phosphates et carbonates
            Sulfures, sulfites et sulfates
            Sulfures divers
            Sulfure d'hydrogène
            Polysulfures
            Sulfates
            Thiosulfate de sodium
            Sulfate ferrique
            Sulfate d'aluminium
            Sulfate de sodium
            Sulfate de fer
            Sulfate de cuivre
            Phosphinates, phosphonates, phosphates et polyphosphates
            Hexamétaphosphate de sodium
            Phosphates
            Carbonates
            Carbonate de sodium
            Bicarbonate de sodium
            Nitrates
            Sels métalliques acides divers
            Permanganate de potassium
            Sels oxométalliques acides
            Produits chimiques inorganiques divers
            Eau lourde, autres isotopes et leurs composés
            Cyanure, oxyde de cyanure, fulminates, cyanates, silicates, borates, perborates, sels d'acides inorganiques
            Cyanures
            Oxyde de cyanure
            Fulminates
            Cyanates
            Peroxyde d'hydrogène
            Quartz piézoélectrique
            Composés de métaux des terres rares
            Silicates
            Silicate de sodium
            Borates et perborates
            Eau distillée
            Pierres synthétiques
            Pierres précieuses synthétiques
            Pierres semi-précieuses synthétiques
            Produits chimiques organiques de base
            Hydrocarbures
            Hydrocarbures saturés
            Hydrocarbures acycliques saturés
            Méthane
            Éthylène
            Propène
            Butène
            Acétylène
            Hydrocarbures cycliques saturés
            Hydrocarbures non saturés
            Hydrocarbures acycliques non saturés
            Hydrocarbures cycliques non saturés
            Benzène
            Toluène
            O-xylènes
            M-xylènes
            Styrène
            Éthylbenzène
            Autres dérivés halogénés d'hydrocarbures
            Tétrachloroéthylène
            Tétrachlorure de carbone
            Alcools, phénols, phénols-alcools et leurs dérivés halogénés, sulfonés, nitrés ou nitrosés, alcools gras industriels
            Alcools gras industriels
            Monoalcools
            Méthanol
            Éthanol
            Diols, polyalcools et dérivés
            Éthylène glycol
            Dérivés d'alcools
            Phénols et dérivés de phénols
            Alcool
            Alcool éthylique
            Acides gras monocarboxyliques industriels
            Huiles acides de raffinage
            Acides carboxyliques
            Acide acétique
            Acide peracétique
            Acides monocarboxyliques non saturés et leurs composés
            Esters d'acide méthacrylique
            Esters d'acide acrylique
            Acides aromatiques polycarboxyliques et carboxyliques
            Composés organiques à fonction azotée
            Composés à fonction aminée
            Amino-composés à fonction oxygénée
            Uréides
            Composés à fonction azotée
            Composés organosulfureux
            Aldéhyde, cétone, peroxydes organiques et éthers
            Composés à fonction aldéhyde
            Composés à fonction cétone et à fonction quinone
            Peroxydes organiques
            Oxyde d'éthylène
            Éthers
            Produits chimiques organiques divers
            Dérivés végétaux pour teinture
            Charbon de bois
            Huiles et produits de la distillation du goudron de houille, poix et brai de goudron à haute température
            Goudron de houille
            Créosote
            Poix
            Brai de goudron
            Produits à base de résine
            Lessives résiduelles provenant de la fabrication de la pâte à papier
            Engrais et composés azotés
            Engrais azotés
            Acide nitrique et sels
            Nitrate de sodium
            Acides sulfonitriques
            Ammoniac
            Ammoniac liquide
            Chlorure d'ammonium
            Sulfate d'ammonium
            Engrais phosphatés
            Engrais minéraux phosphatés
            Engrais chimiques phosphatés
            Engrais d'origine animale ou végétale
            Engrais divers
            Produits agrochimiques
            Pesticides
            Insecticides
            Herbicides
            Régulateurs de croissance végétale
            Désinfectants
            Rodenticides
            Fongicides
            Matières plastiques sous forme primaire
            Polymères d'éthylène sous forme primaire
            Polymères de propylène sous forme primaire
            Polymères de styrène sous forme primaire
            Polymères de vinyle sous forme primaire
            Polymères d'acétate de vinyle sous forme primaire
            Polymères acryliques sous forme primaire
            Polyesters sous forme primaire
            Polyamides sous forme primaire
            Résines uréiques sous forme primaire
            Résines aminiques sous forme primaire
            Silicones sous forme primaire
            Explosifs
            Explosifs préparés
            Poudres propulsives
            Combustibles au propergol
            Explosifs divers
            Dynamite
            TNT
            Nitroglycérine
            Fusées de signalisation, fusées paragrêle, signaux de brume et articles de pyrotechnie
            Cartouches-épouvantails sonores
            Feux d'artifice
            Mèches, détonateurs, amorceurs et détonateurs électriques
            Produits de chimie fine et produits de chimie variés
            Colles
            Gélatines
            Adhésifs
            Huiles essentielles
            Substances chimiques pour photographie
            Plaques et films pour photographie
            Émulsions à usage photographique
            Révélateurs pour photographie
            Fixateurs pour photographie
            Révélateurs pour radiologie
            Fixateurs pour radiologie
            Milieux de culture
            Renforçateurs d'image
            Préparations chimiques spéciales
            Graisses et lubrifiants
            Lubrifiants
            Boue de forage
            Graisse de silicone
            Fluides de forage
            Additifs pour huiles
            Poudre pour extincteurs d'incendie
            Produits extincteurs
            Charges pour extincteurs d'incendie
            Fluides hydrauliques
            Agents de dégivrage
            Produits antigel
            Graisses et huiles chimiquement modifiées
            Pâtes à modeler
            Cire dentaire
            Agents de finissage
            Charbon actif
            Charbon actif neuf
            Charbon actif régénéré
            Toilettes chimiques
            Peptones et substances protéiques
            Additifs chimiques
            Liants préparés pour moules ou noyaux de fonderie
            Additifs pour ciment, mortier ou béton
            Produits chimiques pour l'industrie du pétrole et du gaz
            Produits chimiques pour fond de trou de forage
            Agents floculants
            Produits chimiques à boue
            Ampoules à gel pour le bourrage d'explosifs
            Aérosols et produits chimiques sous forme de disque
            Aérosols
            Éléments chimiques en forme de disque
            Produits chimiques variés
            Liquides de radiateur
            Produits chimiques utilisés pour le traitement de l'eau
            Produits anticorrosion
            Glycérine
            Enzymes
            Machines, matériel et fourniture informatique et de bureau, excepté les meubles et logiciels
            Machines, matériel et fournitures de bureau, excepté ordinateurs, imprimantes et meubles
            Machines de traitement de texte
            Traitements de texte
            Photocopieurs et matériel d'impression offset
            Photocopieurs et appareils de thermocopie
            Photocopieurs
            Matériel de photocopie
            Matériel de reproduction
            Duplicateurs
            Télécopieurs
            Émetteurs numériques
            Duplicateurs numériques
            Machines d'impression offset de bureau
            Système d'impression offset numérique
            Matériel d'impression offset numérique
            Machines de bureau
            Oblitérateurs automatiques
            Distributeurs automatiques de billets de banque
            Duplicateurs à stencil
            Plieuses
            Perforateurs
            Machines à manipuler les pièces de monnaie
            Machines à trier les pièces de monnaie
            Machines à compter les pièces de monnaie
            Machines de mise en rouleaux de pièces de monnaie
            Pièces et accessoires de machines de bureau
            Unités de fusion
            Huile pour unités de fusion
            Chiffon de nettoyage pour l'unité de fusion
            Lampes pour unité de fusion
            Tampon de nettoyage de l'unité de fusion
            Filtres de nettoyage de l'unité de fusion
            Kits pour unité de fusion
            Tambours pour machines de bureau
            Cartouches d'agrafes
            Accessoires de scanner
            Endosseurs
            Bac d'alimentation de documents pour scanner
            Adaptateurs de transparents pour scanner
            Pièces et accessoires de photocopieurs
            Cartouches de toner
            Encre pour imprimantes laser/télécopieurs
            Encre pour photocopieurs
            Encre pour centres de calcul, de recherche et de documentation
            Matériel de bureau de poste
            Équipement de salle du courrier
            Plieuses de papier ou d'enveloppes
            Machines à mettre sous enveloppe
            Adressographes
            Machines à affranchir
            Machines à ouvrir le courrier
            Machines à cacheter le courrier
            Machines à oblitérer
            Timbreuses
            Matériel de tri
            Matériel de tri du courrier
            Machines à compter les billets de banque
            Trieuses
            Matériel pour envoi postal
            Matériel pour envoi postal en nombre
            Machines à calculer et machines comptables
            Machines à calculer
            Calculatrices de poche
            Calculatrices de bureau
            Calculatrices imprimantes
            Machines à additionner
            Machines comptables et caisses enregistreuses
            Machines comptables
            Caisses enregistreuses
            Machines du type machines à calculer
            Affranchisseuses
            Distributeurs automatiques de tickets
            Machines de comptage des véhicules
            Péage automatique
            Pièces et accessoires de machines à calculer
            Rouleaux pour machines à calculer
            Machines à écrire
            Machines à écrire électroniques
            Pièces et accessoires de machines à écrire
            Cartes magnétiques
            Cartes de crédit
            Cartes à puce
            Cartes accréditives
            Cartes pour l'achat de carburant
            Étiqueteuses
            Machines à dater ou à numéroter
            Machines à imprimer les documents d'identité
            Machines d'étiquetage
            Machines à produires des étiquettes
            Nécessaire pour lettrage
            Titreuse manuelle
            Machines à étiqueter automatiques
            Machines à étiqueter semi-automatiques
            Distributeurs d'étiquettes
            Machines à endosser et à rédiger les chèques
            Machines à endosser les chèques
            Machines à rédiger les chèques
            Machines, fournitures et équipement de bureau divers
            Équipement de bureau, excepté les meubles
            Équipement de classement
            Carrousels à cartes
            Porte-revues
            Presse-papiers
            Accessoires d'identification personnelle
            Rétroprojecteurs
            Déchiqueteuses
            Fournitures de bureau
            Effaceurs
            Produits d'encrage
            Tampons encreurs
            Encre pour machines d'impression
            Cartouches d'encre
            Stylos à bille
            Stylos à encre
            Feutres
            Stylos-feutres
            Marqueurs
            Stylos techniques
            Porte-plumes
            Crayons
            Porte-mines
            Mines de crayon de rechange
            Taille-crayons
            Porte-crayons
            Timbres dateurs
            Tampons à cacheter
            Tampons numéroteurs
            Tampons avec texte
            Recharges pour tampons à timbrer
            Porte-tampons de bureau
            Correcteurs
            Tableaux d'affichage
            Mètres-rubans
            Rubans encreurs
            Rubans pour machines à écrire
            Rubans pour imprimantes
            Rubans et rouleaux pour calculatrices
            Rubans pour télécopieurs
            Rubans pour caisses enregistreuses
            Fournitures pour reprographie
            Transparents pour rétroprojecteurs
            Planches à dessin
            Papeterie
            Étiquettes autocollantes
            Outils de correction
            Film ou ruban correcteur
            Liquide correcteur
            Stylos correcteurs
            Recharges de stylos correcteurs
            Effaceurs électriques
            Organisateurs et accessoires
            Organisateurs de tiroirs
            Plateaux ou organisateurs pour bureau
            Classeurs à dossiers suspendus
            Serre-livres
            Présentoir d'imprimés
            Supports pour agendas ou calendriers
            Boîte de rangement de dossiers
            Supports de feuillets pour prise de message
            Porte-copies
            Fournitures pour dessin
            Pistolets à dessin
            Pastilles, bandes et films à dessin
            Pastilles ou bandes à dessin
            Films à dessin
            Kits, ensembles et papiers à dessin
            Kits ou ensembles à dessin
            Papiers à dessin
            Protections de table à dessin
            Trace-lettres
            Rapporteurs d'angles
            Normographes
            Équerres en T et triangles
            Équerres en T
            Triangles
            Rabats de protection de plans de travail
            Tableaux
            Plannings muraux ou accessoires
            Tableaux-copieurs électroniques ou accessoires
            Fournitures de bureau ou accessoires
            Tableaux effaçables à sec ou accessoires
            Tableaux ou accessoires
            Tableaux d'affichage ou accessoires
            Kits de nettoyage de tableaux ou accessoires
            Supports ou rails d'accrochage
            Tableaux blancs et tableaux magnétiques
            Tableaux blancs
            Accessoires pour tableaux blancs
            Présentoirs pour tableaux blancs
            Présentoirs pour tableaux à feuilles mobiles
            Tableaux magnétiques
            Effaceurs pour tableaux magnétiques
            Systèmes de planification
            Plannings de réunions
            Carnets de rendez-vous ou recharges
            Boîtes à suggestions
            Petit matériel de bureau
            Agrafes, pointes, punaises
            Agrafes
            Pointes
            Punaises
            Classeurs à anneaux et trombones
            Classeurs à anneaux
            Trombones à papier
            Sébiles à trombones
            Ouvre-lettres, agrafeuses et perforateurs à trous
            Ouvre-lettres
            Agrafeuses
            Dégrafeuses
            Perforateurs à trous
            Éponge à humecter les timbres
            Cire à cacheter
            Accessoires pour cire à cacheter
            Papier et carton traités
            Papier et carton assemblés
            Papier à écrire
            Bloc de feuilles pour tableaux à feuilles mobiles
            Papier d'impression
            Papier autocopiant ou autre papier à copies
            Papier thermographique
            Papier pour photocopie et papier pour xérographie
            Papier pour photocopie
            Papier pour xérographie
            Carte pour impression
            Machines de loterie
            Machines à sous
            Articles de papeterie et autres articles en papier
            Papier carbone, papier autocopiant, papier stencil et papier non carboné
            Papier carbone
            Papier autocopiant
            Papier non carboné
            Papier stencil
            Enveloppes, cartes-lettres et cartes postales non illustrées
            Cartes-lettres
            Cartes postales non illustrées
            Enveloppes
            Kit d'expédition de courrier
            Papier estampé ou perforé
            Papier d'impression estampé ou perforé
            Papier à lettres estampé ou perforé
            Papier en continu pour imprimantes d'ordinateurs
            Formulaires en continu
            Papier gommé ou adhésif
            Papier autocollant
            Boîtes-classeurs, classe-lettres, boîtes de rangement et articles similaires
            Intercalaires de papeterie
            Articles de papeterie imprimés, excepté les formulaires
            Enveloppes imprimées
            Enveloppes à fenêtre imprimées
            Enveloppes sans fenêtre imprimées
            Enveloppes pour radiographies imprimées
            Papier à lettres
            Cartes de visite
            Porte-cartes professionnelles
            Papillons
            Coupons
            Étiquettes
            Étiquettes à codes-barres
            Étiquettes pour bagages
            Etiquettes antivol
            Chèques-repas
            Sous-main
            Tableaux horaires
            Emplois du temps muraux
            Calendriers
            Supports d'agendas
            Matériel et fournitures informatiques
            Machines de traitement des données (matériel)
            Unité centrale de traitement
            Superordinateur
            Matériel pour unité centrale
            Plates-formes informatiques
            Configurations informatiques
            Unité centrale de traitement (CPU)
            Matériel pour mini-ordinateurs
            Unités centrales pour mini-ordinateurs
            Ordinateurs personnels
            Ordinateurs portables
            Ordinateur tablette
            Ordinateur de bureau
            Unités centrales pour ordinateurs personnels
            Ordinateurs de poche
            Postes de travail
            Matériel pour micro-ordinateurs
            Unités centrales pour micro-ordinateurs
            Lecteurs magnétiques ou optiques
            Lecteurs optiques
            Scanners informatiques
            Matériel de reconnaissance optique de caractères
            Lecteurs de codes-barres
            Lecteurs de cartes magnétiques
            Lecteurs de cartes perforées
            Matériel de cartographie numérique
            Plans cadastraux numériques
            Matériel informatique
            Écrans et consoles d'ordinateurs
            Terminaux informatiques
            Consoles
            Écrans de visualisation
            Écrans plats
            Moniteurs à écran tactile
            Périphériques (appareils)
            Imprimantes et traceurs
            Imprimantes laser
            Imprimantes matricielles
            Imprimantes graphiques couleur
            Traceurs
            Imprimantes à jet d'encre
            Codeurs
            Unité centrale de commande
            Unités de mémoire et de lecture
            Unités de mémoire
            Unités de mémoire à carte magnétique
            Unités de mémoire à bande magnétique
            Unités de mémoire à disque magnétique
            Unités de disques souples
            Unités de disque dur
            Unités de mémoire à accès sélectif (MAS)
            Matrice redondante de disques indépendants (RAID)
            Unités de disque optique
            Lecteur et/ou graveur de CD
            Lecteur et/ou graveur de DVD
            Lecteur et/ou graveur de CD et de DVD
            Dérouleurs en continu
            Matériel de manipulation de cassettes
            Carrousels
            Dispositifs de stockage à mémoire flash
            Contrôleur de disques
            Lecteurs de cartes à puce
            Lecteurs d'empreintes digitales
            Lecteurs combinés de cartes à puces et d'empreintes digitales
            Supports de mémoire
            Disque magnétique
            Disques optiques
            Disques compacts (CD)
            Disques numériques polyvalents (DVD)
            Supports de stockage à mémoire
            Mémoire flash
            Bandes magnétiques
            Matériel informatique divers
            Matériel d'extension de mémoire
            Mémoire vive (RAM)
            Mémoire vive dynamique (DRAM)
            Mémoire vive statique (SRAM)
            Mémoire vive dynamique synchrone (SDRAM)
            Mémoire vive dynamique en bus (RDRAM)
            Mémoire vive graphique synchrone (SGRAM)
            Mémoire morte (ROM)
            Mémoire morte programmable (PROM)
            Mémoire morte reprogrammable (EPROM)
            Mémoire morte reprogrammable électroniquement (EEPROM)
            Matériel de traitement de données
            Pièces, accessoires et fournitures pour ordinateurs
            Parties et pièces d'ordinateurs
            Interfaces de réseau
            Bornes d'entrée
            Ports infrarouges de série
            Cartes informatiques
            Cartes électroniques
            Bus série universel (USB)
            Adaptateurs et interfaces PCMCIA (Personal Computer Memory Card International Association)
            Cartes accélératrices graphiques
            Cartes d'interface réseau
            Cartes audio
            Cartes mères
            Accessoires informatiques
            Écrans antireflet
            Tapis de souris
            Caches
            Caméra web
            Accessoires de nettoyage pour ordinateur
            Kits de nettoyage pour ordinateur
            Aspirateurs pneumatiques pressurisés
            Housses pour matériel informatique
            Arbres de montage mural pour moniteurs
            Mallettes de transport d'ordinateur portable
            Accessoires d'alimentation
            Appuie-poignets pour clavier
            Protège-claviers
            Fournitures informatiques
            Cartouches de polices de caractères pour imprimantes
            Disquettes
            Cartouches de bandes audionumériques (DAT)
            Cartouches de bandes linéaires numériques (DLT)
            Chargeurs de données
            Cartouches de bandes linéaires ouvertes (LTO)
            Cartouches d'enregistrement
            CD-ROM
            Accessoires de saisie de données
            Souris d'ordinateur
            Manches à balai
            Photostyles
            Boules de commande
            Tablettes graphiques
            Claviers d'ordinateurs
            Claviers programmables
            Claviers braille
            Capteurs électriques
            Unités d'entrée
            Matériel d'automatisation de bibliothèque
            Machines, appareils, équipements et consommables électriques; éclairage
            Moteurs, générateurs et transformateurs électriques
            Moteurs électriques
            Adaptateurs
            Générateurs
            Groupes électrogènes
            Groupes électrogènes à moteur à allumage par compression
            Convertisseurs
            Convertisseurs électriques rotatifs
            Groupes électrogènes à moteurs à allumage par étincelle
            Aérogénérateurs
            Éoliennes
            Turbines éoliennes
            Générateurs à turbines éoliennes
            Rotors de turbine
            Ferme éolienne
            Groupes générateurs
            Piles à combustible
            Générateur à turbine à vapeur et appareillage
            Générateurs à turbines
            Appareils de commande de générateurs à turbines
            Dynamos
            Générateur de secours
            Turbogénérateur
            Alternateurs
            Moteurs monophasés
            Actionneurs
            Anodes
            Moteurs polyphasés
            Tours de refroidissement
            Refroidisseurs d'eau
            Ballast pour lampes ou tubes à décharge
            Convertisseurs statiques
            Redresseurs
            Sources d'alimentation électrique ininterruptible
            Onduleurs
            Alimentation interruptible en courant
            Inducteurs
            Chargeurs
            Chargeurs de batterie
            Compresseur d'alimentation
            Turbocompresseur
            Pièces pour moteurs, générateurs et transformateurs électriques
            Pièces pour moteurs et générateurs électriques
            Systèmes d'excitation
            Systèmes de refroidissement de gaz
            Rotors de générateurs
            Systèmes d'eau primaire
            Systèmes d'huile d'étanchéité
            Systèmes d'eau de refroidissement de stators
            Pièces de générateurs de vapeur
            Pièces pour générateurs de gaz
            Systèmes de réglage de tension
            Pièces de transformateurs, d'inducteurs et de convertisseurs statiques
            Pièces de condenseurs
            Transformateurs
            Transformateurs à diélectrique liquide
            Transformateurs de tension
            Transformateur de mesure
            Transformateurs d'alimentation
            Appareils de distribution et de commande électriques
            Appareils électriques de commutation ou de protection de circuits électriques
            Tableaux et boîtes à fusibles
            Tableaux de commande électriques
            Tableaux de contrôle
            Boîtes à fusibles
            Fusibles
            Coupe-circuits
            Blocs à fusibles
            Fils fusibles
            Douilles de fusibles
            Disjoncteurs
            Disjoncteurs suspendus
            Testeurs de circuits
            Coupe-circuits magnétiques
            Coupe-circuits miniatures
            Équipement de distribution
            Boîtes de distribution
            Transformateurs de distribution
            Boîtiers de distribution par câble
            Système de distribution
            Appareillage de commutation
            Interrupteurs
            Sectionneurs
            Interrupteur de mise à la terre
            Interrupteurs de sécurité
            Commandes d'intensité d'éclairage
            Interrupteurs à tambour
            Interrupteurs à pression
            Interrupteurs à lÉvier
            Interrupteurs à glissière
            Interrupteurs de fin de course
            Déconnecteur
            Appareillage de commutation pour l'extérieur
            Sectionneur à fusible
            Tableaux électriques
            Tableaux de distribution
            Tableau moyenne tension
            Limiteurs de tension
            Parafoudre
            Équipement de protection contre la foudre
            Paratonnerre
            Limiteurs de surcharge
            Barres omnibus
            Boîtiers de protection
            Composants de circuits électriques
            Relais électriques
            Relais de puissance
            Relais polyvalents
            Relais à douille
            Relais à tension alternative
            Relais au mercure
            Relais retardés
            Relais de surcharge
            Douilles
            Connexions et éléments de contact
            Fiches et prises de courant
            Connecteurs coaxiaux
            Boîtes de raccordement
            Câbles de connexion
            Bornes
            Atténuateurs
            Boîtes de jonction
            Kits de raccordement de câbles
            Câbles prolongateurs
            Pièces pour appareils de distribution ou de commande électrique
            Fils et câbles isolés
            Canalisations
            Connexions de réseau
            Câbles de distribution électrique
            Lignes électriques
            Lignes électriques aériennes
            Câble basse et moyenne tension
            Câble basse tension
            Câble moyenne tension
            Câble haute tension
            Câble subaquatique
            Câble sous-marin
            Câble blindé
            Câble de signalisation
            Câbles coaxiaux
            Accessoires de câble, isolés
            Bobines de câbles, isolées
            Embranchements de câbles, isolés
            Jonctions de câbles, isolées
            Serre-garnitures de câbles, isolées
            Conducteurs électriques pour données et contrôle
            Conducteurs électriques pour systèmes de contrôle d'accès
            Accumulateurs, piles et batteries primaires
            Piles primaires
            Piles alcalines
            Batteries primaires
            Batteries au plomb
            Groupes de batteries
            Accumulateurs électriques
            Accumulateurs au plomb
            Accumulateurs au nickel-cadmium
            Accumulateurs au nickel-fer
            Accumulateurs au lithium
            Batteries
            Appareils d'éclairage et lampes électriques
            Lampes électriques à incandescence
            Phares scellés
            Lampes à incandescence à halogène
            Ampoules halogène, linéaires
            Ampoules halogène, bicontact
            Ampoules halogène, dichroïques
            Lampes à décharge
            Émetteurs ultraviolets
            Émetteurs infrarouges
            Lampes à arc
            Feux de signalisation
            Projecteurs
            Matériel d'éclairage de secours
            Lampes-tempête
            Bâton lumineux
            Luminaires de toiture
            Lampes à vapeur de mercure
            Projecteurs orientables
            Lampes à incandescence et lampes au néon
            Lampes à incandescence
            Lampes au néon
            Lampes et appareils d'éclairage
            Lampes
            Lampes de bureau
            Lampadaires
            Lampes électriques portatives
            Avertisseurs lumineux
            Torches
            Lampes électriques portatives rechargeables
            Lampes décoratives pour arbres de Noël
            Enseignes et plaques indicatrices lumineuses
            Enseignes au néon
            Panneaux à messages permanents
            Plaques indicatrices lumineuses
            Plafonniers ou appliques murales
            Appareils d'éclairage à fixer au plafond
            Scialytiques
            Plafonniers
            Accessoires d'appliques murales
            Appliques murales
            Spots
            Éclairage extérieur
            Lanternes
            Systèmes d'éclairage
            Éclairage de quai
            Éclairage domestique
            Eclairages sous-marin
            Pièces de lampes et d'appareils d'éclairage
            Ampoules
            Tubes d'éclairage
            Pièces de lampes et accessoires d'éclairage
            Lampes à tube
            Lampes à tube fluorescent
            Lampes à tube fluorescent compactes
            Lampes annulaires
            Lampes annulaires fluorescentes
            Lampes globe
            Lampes globe fluorescentes compactes
            Douilles de lampes
            Interrupteurs de lampes
            Interrupteurs de lampes fluorescentes
            Bobines de réactance de lampes
            Bobines de réactance de lampes fluorescentes
            Écran protecteur de lampe
            Bras de lampe
            Lampes fluorescentes
            Tubes fluorescents
            Ampoules et lampes fluorescentes
            Matériel électrique
            Matériel électrique pour moteurs et véhicules
            Jeux de câblage
            Câblage électrique préassemblé pour moteurs
            Moteurs de démarrage
            Matériel électrique de signalisation pour moteurs
            Clignotants
            Appareils de signalisation acoustique ou optique
            Avertisseurs d'effraction et d'incendie
            Systèmes de détection d'incendie
            Systèmes d'alarme incendie
            Systèmes avertisseurs d'effraction
            Aimants
            Machines et appareils à usage spécifique
            Appareils de détection électronique
            Détecteurs de tubes métalliques
            Détecteurs de mines
            Détecteurs de matières plastiques
            Détecteurs d'objets non métalliques
            Détecteurs de bois
            Accélérateurs de particules
            Accélérateurs linéaires
            Enregistreurs de données divers
            Billards électriques
            Pièces isolantes
            Ruban isolant
            Électrodes au carbone
            Pièces électriques de machines ou d'appareils
            Enveloppes de verre et tubes cathodiques
            Enveloppes en verre
            Tubes cathodiques
            Fournitures et accessoires électriques
            Accessoires électriques
            Contacts électriques
            Pompes électriques
            Circuits électriques
            Composants électriques
            Matériels électriques
            Rechargeurs
            Approvisionnement en électricité
            Coffres électriques
            Couvercles de coffret de branchement
            Tableaux d'instruments
            Instruments et équipement de commande et de contrôle
            Tables de mixage
            Panneaux à écran graphique
            Équipement moyenne tension
            Panneaux moyenne tension
            Équipement électrique aérien
            Supports de câbles aériens
            Équipement électrique de secours
            Systèmes électriques de secours
            Systèmes d'arrêt d'urgence
            Alimentation électrique de secours
            Équipement de sous-station
            Fournitures électroniques, électromécaniques et électrotechniques
            Équipement électronique
            Fournitures électroniques
            Composants électroniques
            Émetteurs-récepteurs
            Transducteurs
            Résistances
            Résistances électriques
            Électrodes
            Condensateurs électriques
            Condensateurs fixes
            Condensateurs variables ou réglables
            Batteries de condensateurs
            Réseaux de condensateurs
            Tableaux indicateurs électroniques
            Systèmes électroniques d'enregistrement des temps
            Pointeuse
            Valves et tubes
            Tubes cathodiques pour récepteurs de télévision
            Tubes pour caméras de télévision
            Tubes et équipement pour hyperfréquences
            Magnétrons
            Équipement à hyperfréquences
            Équipement hertzien
            Klystrons
            Tubes électroniques
            Tubes de récepteur ou d'amplificateur
            Pièces pour assemblages électroniques
            Pièces pour condensateurs électriques
            Pièces pour résistances électriques, rhéostats et potentiomètres
            Pièces pour valves et tubes électroniques
            Machines et appareils microélectroniques et microsystèmes
            Machines et appareils microélectroniques
            Circuits intégrés et microassemblages électroniques
            Cartes téléphoniques
            Cartes SIM
            Cartes à circuits intégrés
            Circuits intégrés électroniques
            Microassemblages
            Microprocesseurs
            Boîtiers de circuits intégrés
            Supports ou montures de circuits intégrés
            Capots de circuits intégrés
            Microsystèmes
            Circuits imprimés
            Cartes de circuits imprimés garnies
            Cartes de circuits imprimés non garnies
            Semi-conducteurs
            Cellules photovoltaïques
            Thyristors
            Diacs
            Triacs
            Coupleurs optiques
            Oscillateurs à quartz
            Diodes
            Diodes électroluminescentes
            Diodes micro-ondes ou diodes à petits signaux
            Diodes Zener
            Diodes Schottky
            Diodes tunnel
            Diodes photosensibles
            Diodes de puissance ou diodes solaires
            Diodes laser
            Diodes à radiofréquence (RF)
            Transistors
            Transistors photosensibles
            Transistors à effet de champ (FET)
            Transistors à effet de champ à oxdes métalliques (MOSFET)
            Puces à transistor
            Transistors bipolaires darlington ou transistors à radiofréquence (RF)
            Transistors unijonction
            Transistors bipolaires à grille isolée (IGBT)
            Transistors à effet de champ à jonction (JFET)
            Transistors bipolaires à jonction (BJT)
            Cristaux piézoélectriques montés
            Équipement électromécanique
            Équipement électrotechnique
            Fournitures électrotechniques
            Modules
            Équipements et appareils de radio, de télévision, de communication, de télécommunication et équipements connexes
            Appareils émetteurs de radiotéléphonie, de radiotélégraphie, de radiodiffusion et de télévision
            Matériel de radiodiffusion et de télévision
            Matériel de production pour radiodiffusion et télévision
            Appareils émetteurs de télévision sans appareils récepteurs
            Radiobalises
            Appareils de codage de signaux vidéo
            Appareils de transmission vidéo
            Appareils émetteurs de télévision
            Appareils émetteurs de radio avec appareils récepteurs
            Appareils de télévision en circuit fermé
            Matériel de visioconférence
            Postes d'amplification de fréquences radio
            Caméras de télévision en circuit fermé
            Système de surveillance en circuit fermé
            Radiotéléphones
            Talkies-walkies
            Caméras de télévision
            Téléphones mobiles
            Téléphones de voiture
            Ensembles mains-libres
            Téléphones GSM
            Téléphones mobiles mains-libres
            Téléphones mobiles mains-libres (sans fil)
            Matériel de transmission de données
            Appareils de transmission numérique
            Récepteurs de télévision et de radio et appareils d'enregistrement ou de reproduction du son ou de l'image
            Récepteurs de radiodiffusion
            Matériel de télévision et matériel audiovisuel
            Matériel de projection télévisée
            Appareils pour films et vidéo
            Équipement audiovisuel
            Matériel audiovisuel
            Équipement multimédia
            Moniteurs vidéo
            Moniteurs vidéo couleur
            Moniteurs vidéo monochrome
            Matériel vidéo
            Matériel de reproduction vidéo
            Système de surveillance vidéo
            Récepteurs de télévision
            Récepteurs de télévision couleur
            Récepteurs de télévision monochrome
            Matériel de télévision
            Antennes satellitaires
            Antennes de télévision
            Syntoniseurs vidéo
            Décodeurs de télévision numérique
            Appareils d'enregistrement et de reproduction audio et vidéo
            Plateaux pour phonographes
            Tourne-disques
            Lecteurs de cassettes
            Appareils de reproduction audio
            Enregistreurs
            Lecteur MP3
            Enregistreurs à bande magnétique
            Dictaphones
            Répondeurs téléphoniques
            Enregistreurs de son
            Appareils d'enregistrement ou de reproduction vidéo
            Magnétoscopes
            Caméscopes
            Appareils de reproduction vidéophonique
            Lecteurs vidéo
            Micros et haut-parleurs
            Micros
            Haut-parleurs
            Casques d'écoute
            Écouteurs
            Microphones et haut-parleurs
            Dispositifs acoustiques
            Matériel de sonorisation
            Mini-haut-parleurs
            Enceintes
            Tables de mixage en studio
            Système de compression de la parole
            Système de messagerie vocale
            Enregistreurs de voix
            Amplificateurs
            Amplificateurs d'audiofréquences
            Mégaphones
            Appareils récepteurs de radiotéléphonie ou de radiotélégraphie
            Récepteurs portables d'appel et de radiomessagerie
            Système d'enregistrement de voix
            Récepteurs radio
            Matériel radio
            Récepteurs de radiomessagerie
            Stations radio
            Relais hertzien
            Installations radio
            Équipement radio et de multiplexage
            Système de commande radio et téléphonique
            Radios portables
            Pièces pour matériel audio et vidéo
            Accessoires pour matériel audio et vidéo
            Matériel de montage vidéo
            Écrans
            Accessoires pour matériel audio
            Cassettes audio
            Antennes et réflecteurs
            Pièces pour matériel radio et radar
            Pièces détachées et accessoires pour radars
            Enregistrements sonores
            Disques
            Cassettes musicales
            Films
            Films de radiologie
            Films radiographiques
            Film diazo
            Films cinématographiques
            Pellicules photographiques
            Pellicules à développement instantané
            Films vidéo
            Cassettes vidéo
            Bandes vidéo
            Pellicule rétractable
            Matériel d'interphonie
            Réseaux
            Réseau local
            Réseau en anneau à jeton
            Réseau de communications
            Réseau de télécommunications
            Réseau internet
            Réseau intranet
            Réseau intégré
            Routeurs
            Réseau éthernet
            Réseau RNIS
            Réseau ISDX
            Réseaux multimédia
            Réseau radio
            Matériel de réseau
            Câblage de réseau
            Composants de réseau
            Nœuds de réseau
            Infrastructure de réseau
            Système d'exploitation de réseau
            Système de publication sur réseau
            Système de réseau
            Extension de réseau
            Matériel de réseau téléphonique
            Réseau à grande distance
            Matériel de télémétrie et équipement terminal
            Matériel de télémétrie
            Système de surveillance télémétrique
            Matériel de télémétrie et de commande
            Système de télématique
            Équipement terminal
            Plaquettes de connexion
            Boîtes de connexion
            Émulateurs de terminal
            Blocs terminaux
            Matériel de télécommunications
            Système de télécommunications sans fil
            Câbles et matériel de télécommunications
            Câbles de télécommunications
            Équipements de télécommunications
            Infrastructures de télécommunications
            Système de télécommunications
            Matériel de communication par satellite
            Matériel de transmission d'informations par satellite
            Antennes paraboliques
            Stations terrestres de satellites
            Plates-formes satellitaires
            Standards téléphoniques
            Matériel de standard téléphonique
            Tableaux de commutation téléphonique
            Commutateurs téléphoniques
            Matériel PABX
            Systèmes PABX
            Matériel de commutation téléphonique numérique
            Standards téléphoniques numériques
            Standards téléphoniques à vide
            Matériel téléphonique
            Câbles téléphoniques et matériel connexe
            Raccordements téléphoniques
            Centraux téléphoniques
            Casques d'écoute téléphonique
            Réseau téléphonique
            Câbles téléphoniques
            Appareils électriques pour téléphonie ou télégraphie par fil
            Combinés téléphoniques
            Téléphones sans fil
            Postes téléphoniques de secours
            Téléphones publics
            Matériel téléphonique pour cabines publiques
            Téléphones pour malvoyants
            Téléphones pour malentendants
            Téléimprimeurs
            Appareils de commutation téléphonique ou télégraphique
            Centraux téléphoniques numériques
            Multiplexeurs
            Appareils de commutation téléphonique
            Appareils de conversion de signaux audibles
            Modems
            Convertisseur de fréquence
            Matériel de codage
            Appareils télétexte
            Terminaux vidéotexte
            Télex
            Interphones
            Pièces détachées pour appareils électriques téléphoniques ou télégraphiques
            Matériaux à fibres optiques
            Connexions à fibres optiques
            Câbles à fibres optiques
            Câbles à fibres optiques pour la transmission d'informations
            Câbles de télécommunications à fibres optiques
            Câbles à fibres optiques pour la transmission de données
            Matériel de communications
            Infrastructure de communications
            Câbles de communications
            Câble de communications à conducteurs électriques multiples
            Câble de communications à conducteurs coaxiaux
            Câble de communications à usage spécifique
            Système de commande de communications
            Équipement de traitement de données
            Matériel de communication de données
            Câble de transmission de données
            Câble de transmission de données à conducteurs électriques multiples
            Câble de transmission de données à conducteurs coaxiaux
            Câble de transmission de données à usage spécifique
            Matériel de fax
            Accessoires et composants pour matériel de fax
            Supports de données
            Supports de données et de voix
            Supports d'informations
            Matériels médicaux, pharmaceutiques et produits de soins personnnels
            Équipements médicaux
            Matériel d'imagerie à usages médical, dentaire et vétérinaire
            Appareils de radiographie
            Table de radiologie
            Postes de travail de radiologie
            Machines à développer radiologiques
            Fluoroscopes
            Radiographie dentaire
            Instruments de radiographie
            Unité de résonance magnétique
            Gamma caméras
            Thermographes
            Appareils de mammographie
            Ostéodensitomètres
            Salle d'angiographie
            Fournitures pour l'angiographie
            Appareils d'angiographie
            Appareils d'angiographie numérique
            Fournitures pour l'angioplastie
            Appareils d'angioplastie
            Système de radiodiagnostic
            Matériel d'imagerie échographique, ultrasonore et Doppler
            Détecteur échocardiographique
            Échographe
            Scanographes ultrasoniques
            Doppler couleur
            Appareils Doppler
            Échoencéphalographes
            Échocardiographes
            Matériel d'imagerie à résonance magnétique
            Scanographes à résonance magnétique
            Scanographes à résonance magnétique nucléaire
            Appareils de spectroscopie
            Appareils de tomographie
            Tomodensitomètres
            Tomographes axiaux transverses couplés avec un ordinateur
            Systèmes d'enregistrement et appareils d'exploration
            Système d'enregistrement ambulatoire de longue durée
            Électroencéphalographes
            Appareils de scintigraphie
            Électromyographes
            Audiomètres
            Électrocardiogramme
            Équipement d'ophthalmologie
            Matériel pour exploration cardio-vasculaire
            Tensiomètre
            Appareils d'électrocardiographie
            Système de surveillance cardiaque
            Angiocardiographie
            Cardiographes
            Équipements et matériels de diagnostic et de radiodiagnostic
            Appareils de diagnostic
            Systèmes de diagnostic
            Appareils de diagnostic à ultrasons
            Fournitures pour diagnostic
            Bandelettes réactives
            Équipements de radiodiagnostic
            Matériels de radiodiagnostic
            Matériel pour exploration urologique
            Équipement pour stomatologie
            Équipement pour immuno-analyse
            Laser médical autre que chirurgical
            Instruments et appareils de dentisterie et de ses sous-spécialités
            Instruments dentaires
            Instruments de chirurgie dentaire
            Pinces, brosses, écarteurs et brunissoirs dentaires
            Pinces dentaires
            Brosses dentaires
            Écarteurs dentaires
            Brunissoirs dentaires
            Instruments de cryochirurgie dentaire, jauges de profondeur, élévateurs et excavateurs dentaires
            Instruments de cryochirurgie dentaire
            Jauges de profondeur dentaire
            Élévateurs dentaires
            Excavateurs dentaires
            Protections de doigt à usage dentaire et daviers
            Protections de doigt à usage dentaire
            Daviers
            Miroirs dentaires et alésoirs dentaires
            Miroirs dentaires
            Alésoirs dentaires
            Poinçons pour apex de la racine dentaire, instruments à détartrer et échelles dentaires
            Poinçons pour apex de la racine dentaire
            Instruments à détartrer
            Échelles dentaires
            Ciseaux et bistouris dentaires
            Ciseaux dentaires
            Bistouris dentaires
            Spatules dentaires, brucelles et spatules pour cire dentaire
            Spatules dentaires
            Brucelles dentaires
            Spatules pour cire dentaire
            Aiguilles dentaires à suture
            Instruments dentaires à usage unique
            Sonde dentaire
            Instrument d'extraction
            Forets dentaires
            Instrument d'obturation
            Implant utilisé en odontostomatologie
            Petit matériel pour empreintes dentaires
            Petit matériel d'endodontie
            Dispositifs orthodontiques
            Instrument rotatif et abrasif
            Petit matériel de prophylaxie dentaire
            Produits pour prothèses et rebasage
            Dentiers
            Consommables médicaux
            Consommables médicaux autres que chimiques à usage unique et consommables hématologiques
            Pansements; clips, sutures, ligatures
            Pansements
            Pansements adhésifs
            Sparadraps
            Bandages
            Gaze à usage médical
            Ouate médicale
            Tampons et compresses
            Ouate
            Compresses de gaze
            Compresses
            Clips, sutures, ligatures
            Sutures chirurgicales
            Agrafes chirurgicales
            Collecteurs d'aiguilles
            Collecteurs d'instruments pointus et tranchants
            Matériel de suture chirurgical
            Ligatures
            Hémostatiques résorbables
            Aiguilles à sutures
            Cathéters
            Cathéters à ballonnet
            Canules
            Dilatateur
            Accessoires de cathéter
            Dispositifs de ponction veineuse et de prélèvement sanguin
            Seringues
            Aiguilles à usage médical
            Aiguilles d'anesthésie
            Aiguilles à usage artériel
            Aiguilles de biopsie
            Aiguilles de dialyse
            Aiguillles à fistule
            Aiguilles de radiologie
            Aiguilles ventilées
            Aiguilles de péridurale
            Aiguillles d'amniocentèse
            Coupe-fil métallique et bistouri; gants de chirurgie
            Coupe-fil métallique et bistouri
            Bistouris et lames
            Gants de chirurgie
            Consommables hématologiques
            Produits sanguins
            Dérivés plasmatiques
            Coagulants sanguins
            Albumine
            Héparine
            Organes humains
            Sang humain
            Sang animal
            Collecteur et poches, drainage et kits
            Poches
            Poches à sang
            Poches à plasma
            Poches à urine
            Trousses médicales
            Kit d'incontinence
            Kits de prévention du sida
            Kits de secours
            Kits d'administration
            Kits de diagnostic
            Kits de dosage
            Filtres à plasma sanguin
            Drain
            Sondes
            Accessoires de drain
            Fournitures orthopédiques
            Béquilles
            Aides à la marche
            Minerves
            Chaussures orthopédiques
            Articulations artificielles
            Attelles
            Appareils pour fractures, broches et plaques
            Consommables dentaires
            Produits d'obturation dentaire
            Dents
            Dents artificielles en céramique
            Dents artificielles en résine acrylique
            Fond de cavité en ciment
            Hémostatique dentaire
            Produits d'hygiène dentaire
            Lancettes à saigner
            Appareils de radiothérapie, de mécanothérapie, d'électrothérapie et de physiothérapie
            Appareils et fournitures pour radiothérapie
            Appareils de gammathérapie
            Appareils de radiothérapie
            Spectrographes
            Fournitures pour radiothérapie
            Incubateurs
            Lithotriteur
            Appareils de mécanothérapie
            Équipement de physiothérapie
            Matériel pour tests psychologiques
            Oxygénothérapie et assistance respiratoire
            Masques pour gaz médicaux
            Masque pour oxygénothérapie
            Kits d'oxygène
            Tentes à oxygène
            Respirateurs médicaux
            Caissons hyperbares
            Barboteur pour oxygénothérapie
            Dispositif d'administration d'oxygène
            Installation d'oxygénothérapie
            Thérapie électrique, électromagnétique et mécanique
            Système électromagnétique
            Équipement pour électrothérapie
            Stimulateur
            Équipement ultraviolet à usage médical
            Matériel de thérapie mécanique
            Équipement infrarouge à usage médical
            Système de chimie clinique
            Techniques opératoires
            Installation d'électrochirurgie
            Appareils et instruments pour bloc opératoire
            Équipement pour bloc opératoire
            Instruments pour bloc opératoire
            Tente à usage médical
            Équipement pour cœlioscopie
            Colposcope
            Équipement pour cryochirurgie et cryothérapie
            Équipements et instruments pour dermatologie
            Éclairage opératoire
            Appareils d'endoscopie et d'endochirurgie
            Endoscopes
            Instruments de chirurgie
            Laser chirurgical
            Paniers à usage chirurgical
            Plateaux à usage chirurgical
            Conteneurs à usage chirurgical
            Systèmes de suivi et de traçabilité chirurgicaux
            Anesthésie et réanimation
            Instruments d'anesthésie et de réanimation
            Instruments pour l'anesthésie
            Masque d'anesthésie-réanimation
            Instruments de réanimation
            Masque laryngé d'anesthésie-réanimation
            Kits ou ensembles pour péridurale
            Appareils d'anesthésie et de réanimation
            Appareils d'anesthésie
            Appareils de réanimation
            Assistance fonctionnelle
            Appareils de suppléance rénale
            Appareils d'hémodialyse
            Filtres pour dialyse
            Moniteur individuel pour hémodialyse
            Multiposte pour hémodialyse
            Consommables rénaux
            Fluide rénal
            Consommables pour dialyse rénale
            Appareils de suppléance cardiaque
            Défibrillateur
            Système de stimulation cardiaque
            Stimulateur cardiaque
            Valves cardiaques
            Ventricule
            Pièces et accessoires pour stimulateurs cardiaques
            Piles pour stimulateurs cardiaques
            Appareils et instruments de chirurgie cardiaque
            Radiologie cardiaque
            Suppléance orthopédique
            Implants orthopédiques
            Prothèses orthopédiques
            Matériel d'ostéosynthèse
            Prothèses
            Implants chirurgicaux
            Prothèses vasculaires
            Prothèses cardiaques
            Implants mammaires
            Prothèses mammaires internes
            Prothèses mammaires externes
            Endoprothèses coronariennes
            Yeux artificiels
            Prothèses auditives
            Pièces et accessoires pour prothèses auditives
            Implant cochléaire
            Implant ORL
            Larynx artificiel
            Circulation extracorporelle (CEC)
            Oxygénateur
            Chauffage du sang et des fluides
            Appareils et instruments médicaux divers
            Dispositifs de stérilisation, de désinfection et d'hygiène
            Stérilisateur
            Autoclaves
            Mobilier médical
            Lits médicaux
            Lits orthopédiques
            Lits d'hôpital
            Lits à moteur
            Divans d'examen psychiatrique
            Lits spécialisés
            Chariots-brancards
            Tables médicales
            Tables d'examen
            Tables d'opération
            Mobilier médical, excepté lits et tables
            Dispositifs de traction et de suspension pour lits médicaux
            Porte-urinaux
            Potences de transfusion
            Mobilier pour bloc opératoire, excepté tables
            Mobilier pour cultures à des fins médicales
            Unités dentaires
            Fauteuils dentaires
            Éprouvettes
            Matériels de levage pour le secteur des soins de santé
            Véhicules pour handicapés physiques, fauteuils roulants et dispositifs assimilés
            Véhicules pour handicapés physiques et fauteuils roulants
            Véhicules pour handicapés physiques
            Fauteuils roulants
            Fauteuils roulants à énergie motrice
            Pièces et acccessoires de véhicules pour handicapés physiques et de fauteuils roulants
            Pièces et acccessoires de véhicules pour handicapés physiques
            Moteurs de véhicules pour handicapés physiques
            Dispositifs de direction de véhicules pour handicapés physiques
            Dispositifs de commande de véhicules pour handicapés physiques
            Châssis de véhicules pour handicapés physiques
            Pièces et accessoires pour fauteuils roulants
            Coussins pour fauteuils roulants
            Bâtis de fauteuils roulants
            Sièges pour fauteuils roulants
            Roues de fauteuils roulants
            Pneus pour chaises roulantes
            Appareils et instruments de transfusion et de perfusion
            Appareils et instruments pour perfusion
            Pompes à perfusion
            Fournitures pour perfusion
            Appareils et instruments pour transfusion
            Appareils de transfusion sanguine
            Matériels de transfusion sanguine
            Système de surveillance des patients
            Moniteurs
            Moniteurs respiratoires
            Poste central de surveillance
            Aides médicales
            Équipement pour personnes âgées
            Équipement pour handicapés
            Matériel informatique à usage médical
            Articles en papier à usage hospitalier
            Compresses en papier
            Sachets ou enveloppes en papier pour stérilisation
            Vêtements pour personnel médical
            Produits pharmaceutiques
            Médicaments des voies digestives et du métabolisme
            Médicaments contre les troubles liés à l'hyperacidité
            Médicaments contre les troubles gastro-intestinaux fonctionnels
            Laxatifs
            Antidiarrhéiques, anti-inflammatoires et anti-infectieux intestinaux
            Médicaments du diabète
            Insuline
            Vitamines
            Provitamines
            Suppléments minéraux
            Médicaments du sang, des organes hématopoïétiques et du système cardio-vasculaire
            Médicaments du sang et des organes hématopoïétiques
            Antithrombotiques
            Antihémorragiques
            Préparations antianémiques
            Substituts de plasma sanguin et solutions pour perfusions
            Médicaments du système cardio-vasculaire
            Médicaments utilisés en cardiologie
            Antihypertenseurs
            Diurétiques
            Vasculoprotecteurs
            Antihémorroïdaires à usage topique
            Bêta-bloquants
            Inhibiteurs calciques
            Médicaments agissant sur le système rénine-angiotensine
            Médicaments utilisés en dermatologie et pour le système squelettique et musculaire
            Médicaments utilisés en dermatologie
            Antifongiques à usage dermatologique
            Acides salicyliques
            Émollients et protecteurs
            Médicaments contre le psoriasis
            Antibiotiques et médicaments chimiothérapeutiques à usage dermatologique
            Corticostéroïdes à usage dermatologique et préparations dermatologiques
            Antiseptiques et désinfectants
            Préparations antiacnéiques
            Médicaments du système squelettique et musculaire
            Anti-inflammatoires et antirhumatismaux
            Myorelaxants
            Préparations contre la goutte
            Médicaments du système génito-urinaire et hormones
            Médicaments du système génito-urinaire et hormones sexuelles
            Anti-infectieux et antiseptiques gynécologiques
            Autres médicaments gynécologiques
            Hormones sexuelles et modulateurs de la fonction génitale
            Contraceptifs
            Contraceptifs oraux
            Contraceptifs chimiques
            Préparations hormonales systémiques, hormones sexuelles exclues
            Hormones hypophysaires, hypothalamiques et analogues
            Corticostéroïdes à usage systémique
            Thérapeutique thyroïdienne
            Anti-infectieux généraux à usage systémique, vaccins, antinéoplasiques et immunomodulateurs
            Anti-infectieux généraux à usage systémique
            Antibactériens à usage systémique
            Antimycosiques à usage systémique
            Antimycobactériens
            Antiviraux à usage systémique
            Immun-sérums et immunoglobulines
            Antisérums
            Immunoglobulines
            Vaccins
            Vaccins antidiphtérie, anticoqueluche et antitétanos
            Vaccins antidiphtérie et antitétanos
            Vaccins BCG (secs)
            Vaccins ROR (rougeole, oreillons, rubéole)
            Vaccins antityphus
            Vaccins antigrippe
            Vaccins antipolio
            Vaccins antihépatite B
            Vaccins à usage vétérinaire
            Antinéoplasiques et immunomodulateurs
            Antinéoplasiques
            Thérapeutique endocrine
            Immunosuppresseurs
            Médicaments du système nerveux et des organes sensoriels
            Médicaments du système nerveux
            Anesthésiques
            Analgésiques
            Antiépileptiques
            Antiparkinsoniens
            Psycholeptiques
            Psychoanaleptiques
            Autres médicaments du système nerveux
            Médicaments des organes sensoriels
            Médicaments ophtalmologiques
            Médicaments du système respiratoire
            Médicaments contre les maladies obstructives des voies respiratoires
            Médicaments de la toux et du rhume
            Antihistaminiques à usage systémique
            Articles de pharmacie
            Tétines, téterelles et articles similaires pour nourrissons
            Dalles en caoutchouc
            Butoirs en caoutchouc
            Médicaments divers
            Produits antiparasitaires, insecticides et insectifuges
            Antiprotozoaires
            Antihelminthiques
            Médicaments contre les ectoparasites, y compris scabicides, insecticides et insectifuges
            Solutions médicamenteuses
            Solutions pour infusions
            Produits de nutrition parentérale
            Solutions d'alimentation parentérale
            Produits d'alimentation entérale
            Solutions pour perfusions
            Solutions injectables
            Liquides intraveineux
            Solutions galéniques
            Solutions de glucose
            Solutions de dialyse
            Tous les autres produits thérapeutiques
            Toxines
            Succédanés de nicotine
            Traitement de l'addiction
            Agents diagnostiques
            Tous les autres produits non thérapeutiques
            Réactifs et produits de contraste
            Réactifs de groupage sanguin
            Réactifs pour analyses de sang
            Réactifs chimiques
            Réactifs isotopiques
            Réactifs de laboratoire
            Réactifs d'électrophorèse
            Réactifs d'urologie
            Produits de contraste à usage radiologique
            Préparations médicales, excepté consommables dentaires
            Préparations pour lavements
            Ciments de reconstruction osseuse
            Produits à usage clinique
            Cultures microbiologiques
            Glandes et leurs extraits
            Substances peptiques
            Produits de soins personnels
            Parfums, produits de toilette et condoms
            Parfums et produits de toilette
            Eaux de toilette
            Déodorants
            Antisudoraux
            Eaux de Cologne
            Fragrances
            Eau de rose
            Produits de maquillage
            Produits de manucure ou de pédicure
            Produits de beauté
            Coton-Tiges
            Kits de maquillage
            Serviettes personnelles à jeter
            Pommade pour les lèvres
            Tatouages
            Produits de soins de la peau
            Produits de protection solaire
            Gels de bain
            Bonnets de douche
            Crèmes ou lotions parapharmaceutiques
            Préparation et articles capillaires
            Shampooings
            Peignes
            Perruques
            Nécessaires de toilette
            Articles et préparations pour hygiène orale ou dentaire
            Brosses à dents
            Dentifrice
            Cure-dents
            Bain de bouche
            Bains de bouche rafraîchissants
            Fil dentaire
            Anneau dentaire, tétine, sucette
            Pastilles de produit de nettoyage pour appareils dentaires
            Kits d'hygiène dentaire
            Produits de rasage
            Crèmes à raser
            Savon
            Préservatifs
            Produits de soin pour les pieds
            Rasoirs et trousses de manucure ou de pédicure
            Rasoirs
            Lames de rasoir
            Rasoirs électriques
            Trousses de manucure ou de pédicure
            Trousses de manucure
            Accessoires de manucure
            Trousses de pédicure
            Accessoires de pédicure
            Barrettes
            Produits pour le soin des yeux et verres correcteurs
            Verres de contact
            Verres correcteurs
            Lentilles intra-oculaires
            Verres de lunettes
            Lotions pour verres de contact
            Lunettes de soleil
            Lunettes
            Montures de lunettes et logements d'oculaires
            Verre à lunettes
            Lunettes masques
            Lunettes de protection
            Montures et logements d'oculaires de lunettes de protection
            Produits de soins pour mains et ongles
            Produits de soins pour mains
            Produits nettoyants pour les mains
            Lotions pour mains ou lotions corporelles
            Produits désinfectants pour les mains
            Produits de soins pour les ongles
            Coupe-ongles
            Vernis à ongles
            Produits de soins pour bébés
            Langes jetables
            Coussinets d'allaitement
            Papier hygiénique, mouchoirs, essuie-mains et serviettes de table
            Papier hygiénique
            Mouchoirs en papier
            Essuie-mains en papier
            Serviettes de table en papier
            Articles en papier à usage sanitaire
            Produits en papier à usage sanitaire
            Serviettes hygiéniques ou tampons
            Couches en papier
            Articles jetables en papier
            Verrerie de laboratoire, d'hygiène ou de pharmacie
            Verrerie d'hygiène
            Verrerie de pharmacie
            Verrerie de laboratoire
            Équipement et fournitures pour autopsie et à usage mortuaire
            Instruments et fournitures pour dissection
            Ciseaux pour autopsie
            Trousses de dissection pour autopsie
            Pinces à dissection pour autopsie
            Sondes de localisation de balles pour autopsie
            Fils, aiguilles et agrafes pour incision pour autopsie
            Fils pour autopsie
            Aiguilles pour autopsie
            Agrafes pour incision, pour autopsie
            Sondes canelées pour autopsie
            Lames ou accessoires de scie pour autopsie
            Scies pour autopsie
            Planches ou blocs de dissection
            Trousses pour instruments ou accessoires de chirurgie pour autopsie
            Trousses enroulables pour instruments ou accessoires pour autopsie
            Équipement et fournitures pour autopsie
            Collecteurs de poussières d'os
            Housses de transport de corps
            Repose-têtes, plans durs ou balances suspendues pour autopsie
            Repose-têtes pour autopsie
            Plans durs pour autopsie
            Balances suspendues pour autopsie
            Kits maladies infectieuse pour autopsie
            Etiquettes ou bracelets d'identification pour autopsie
            Aspirateurs à liquides ou tubulures pour autopsie
            Thermomètres rectaux pour autopsie
            Redresseurs de doigts pour autopsie
            Kits de reconstitution des tissus
            Mobilier pour autopsie
            Stations de travail ou accessoires pour autopsie macroscopique
            Éviers ou accessoires pour autopsie
            Tables pour autopsie ou accessoires
            Tables d'autopsie
            Tables ou accessoires pour nécropsie
            Tables de dissection ou accessoires pour dissection d'animaux
            Stations de travail ou accessoires pour embaumement
            Stations de travail pour autopsie avec dispositif d'évacuation des liquides corporels ou accessoires
            Équipement et fournitures de transport et de conservation des cadavres
            Casiers de conservation des cadavres
            Dispositifs de transport de cadavres
            Chariots élévateurs pour les cadavres
            Armoires réfrigérées ou congélateurs pour morgue
            Chambres froides pour morgue
            Chariots pour autopsie
            Plateaux pour cadavres
            Élévateurs ou dispositifs de transfert pour cadavres
            Conteneurs de transport des corps
            Équipement et fournitures cliniques médico-légales
            Matériel de prise d'empreintes digitales pour autopsie
            Masques antiputréfaction
            Kits ou fournitures de dépistage sanguin pour autopsie
            Kits de prélèvement d'éléments biologiques
            Équipement et fournitures pour embaumement
            Injecteurs pour cavités pour embaumement
            Tubes de drainage de veine pour embaumement
            Traitements chimiques ou fluides pour embaumement
            Tubes pour injecteur d'embaumement
            Éviers ou accessoires pour embaumement
            Kits d'embaumement
            Aiguilles d'injecteur pour embaumement
            Couvre-yeux
            Matériel et fournitures mortuaires
            Tenues mortuaires
            Packs mortuaires
            Housses mortuaires
            Aspirateurs à usage mortuaire
            Agents de durcissement à usage mortuaire
            Équipement de transport et produits auxiliaires pour le transport
            Véhicules à moteur
            Voitures particulières
            Breaks et berlines
            Breaks
            Berlines
            Véhicules à quatre roues motrices
            Jeeps
            Véhicules tout terrain
            Quatre-quatre
            Véhicules à usage spécial
            Véhicules de secours
            Véhicules de sauvetage
            Véhicules à usage paramédical
            Ambulances
            Véhicules de transport de patients
            Voitures de police
            Fourgons cellulaires
            Véhicules pour services d'assistance sociale
            Minibus
            Autres véhicules particuliers
            Véhicules à moteur pour le transport de moins de dix personnes
            Véhicules de transport d'occasion
            Véhicules à moteur servant au transport de dix personnes ou plus
            Autobus et cars
            Autobus publics
            Autobus articulés
            Autobus à impériale
            Autobus à plancher surbaissé
            Autocars
            Véhicules à moteur servant au transport de marchandises
            Camionnettes à espace ouvert à l'arrière (pick-up)
            Traîneaux à moteur
            Camions articulés
            Camions-citernes
            Camions-citernes à essence
            Camions à carrosserie ouverte et à plate-forme
            Camions à carrosserie ouverte
            Camions à benne basculante
            Fourgons intégrés
            Fourgonnettes
            Fourgons tôlés
            Véhicules d'occasion servant au transport de marchandises
            Tracteurs routiers
            Châssis
            Châssis-cabines
            Châssis avec carrosseries
            Châssis complets
            Poids lourds
            Camions-grues et camions à plate-forme élévatrice
            Camions à plate-forme élévatrice
            Bacs-chargeurs
            Tombereaux
            Véhicules de service hivernal
            Véhicules automobiles à usage spécifique
            Tours de forage mobiles
            Véhicules des services de secours
            Véhicules de lutte contre l'incendie
            Camions de lutte contre l'incendie à échelle pivotante
            Fourgons pompe-tonne
            Véhicules d'incendie
            Dépanneuses
            Ponts mobiles
            Véhicules d'entretien routier
            Camions de vidange
            Saleuses
            Balayeuses
            Balayeuses aspiratrices
            Gravillonneuses
            Arroseuses de voirie
            Véhicules pour ordures et eaux usées
            Véhicules pour ordures
            Bennes à ordures
            Véhicules de compactage des ordures ménagères
            Camions-citernes pour eaux usées
            Véhicules utilitaires
            Chargeurs sur roues
            Véhicules d'avitaillement
            Tracteurs d'avions
            Porte-charges
            Chariots-cavaliers
            Bibliobus
            Caravanes résidentielles
            Véhicules électriques
            Autobus électriques
            Simulateurs
            Simulateurs de conduite
            Simulateurs de formation
            Carrosseries, remorques ou semi-remorques de véhicules
            Carrosseries de véhicules
            Carrosseries d'autobus, carrosseries d'ambulances et carrosseries de véhicules servant au transport de marchandises
            Carrosseries d'autobus
            Carrosseries d'ambulances
            Carrosseries de véhicules servant au transport de marchandises
            Remorques, semi-remorques et conteneurs mobiles
            Conteneurs mobiles à usage spécifique
            Unités mobiles de secours
            Unités mobiles d'intervention d'urgence
            Unité d'intervention en cas d'accident chimique
            Remorques et semi-remorques
            Semi-remorques
            Avitailleurs
            Remorques
            Remorques à usage général
            Remorques pour le transport de chevaux
            Unités mobiles sur remorques
            Remorques-citernes
            Remorques à échelle pivotante
            Remorques d'avitaillement
            Remorques à benne basculante
            Remorques et semi-remorques de type caravane
            Pièces détachées pour remorques, semi-remorques et autres véhicules
            Pièces pour remorques et semi-remorques
            Pièces pour autres véhicules
            Pièces détachées et accessoires pour véhicules et moteurs de véhicules
            Moteurs et pièces de moteurs (véhicules)
            Moteurs (véhicules)
            Moteurs à combustion interne pour véhicules à moteur et motocycles
            Moteurs à allumage par étincelles
            Moteurs à allumage par compression
            Pièces de moteurs
            Courroies de ventilateur
            Bougies d'allumage
            Radiateurs pour véhicules
            Pistons
            Joints d'étanchéité
            Bandes convoyeuses en caoutchouc
            Courroies de transmission en caoutchouc
            Pièces de rechange mécaniques, excepté moteurs et parties de moteurs
            Essieux et boîtes de vitesses
            Essieux
            Boîtes de vitesses
            Freins et pièces de freins
            Équipements de freins
            Freins à disque
            Garnitures de frein
            Plaquettes de frein
            Mâchoires de frein
            Roues, pièces détachées et accessoires
            Matériel d'équilibrage des roues
            Silencieux et tuyaux d'échappement
            Silencieux
            Tuyaux d'échappement
            Vérins pour véhicules, embrayages et pièces connexes
            Embrayages et pièces d'embrayages
            Vérins pour véhicules
            Volants, colonnes et boîtiers de direction
            Volants
            Colonnes et boîtiers de direction
            Bancs d'essai, kits de conversion de véhicules et ceintures de sécurité
            Bancs d'essai
            Kits de conversion de véhicules
            Ceintures de sécurité
            Pièces de rechanges pour poids lourds, camionnettes et automobiles
            Pneus pour charges légères et lourdes
            Pneus pour charges légères
            Pneus pour voitures
            Pneus pour fortes charges
            Pneus pour camions
            Pneus pour autobus
            Pneus pour véhicules agricoles
            Sièges pour aéronefs civils
            Sièges pour véhicules à moteur
            Accessoires pour tracteurs
            Motos, bicyclettes et side-cars
            Motos
            Pièces détachées et accessoires pour motos
            Side-cars
            Pièces détachées et accessoires pour side-cars
            Pneus pour motocycles
            Scooters et cycles à moteur auxiliaire
            Scooters
            Cycles à moteur auxiliaire
            Bicyclettes
            Bicyclettes sans moteur
            Pièces détachées et accessoires pour bicyclettes
            Pneus pour bicyclettes
            Navires et bateaux
            Navires
            Patrouilleurs maritimes
            Navires et bâtiments similaires servant au transport de personnes ou de marchandises
            Ferry-boats
            Paquebots de croisière
            Vraquiers
            Cargos
            Navires de marchandises
            Navires porte-conteneurs
            Navires transrouliers
            Navires-citernes
            Transbordeurs pour voitures
            Navires frigorifiques
            Navires de pêche, navires de sauvetage et autres navires spécialisés
            Navires de pêche
            Navires-usines
            Remorqueurs
            Dragues
            Docks de mer flottants
            Navires supports de plongée
            Grues flottantes
            Navires de production
            Navires d'exploration sismique
            Navires hydrographes
            Navires de lutte antipollution
            Bateaux de service d'incendie
            Bateaux de sauvetage
            Bateaux-phares
            Plates-formes de forage ou de production, flottantes ou submersibles
            Navires de forage
            Plates-formes de forage autoélévatrices
            Tours de forage pour plates-formes
            Plates-formes de forage flottantes
            Installation de production flottante
            Tours de forage semi-submersibles
            Plate-forme mobile
            Plate-forme offshore
            Plates-formes de forage
            Structures flottantes
            Bouées de marquage
            Radeaux pneumatiques
            Défenses d'accostage
            Bateaux
            Bateaux spécialisés
            Vedettes de surveillance
            Vedettes de patrouille douanière
            Vedettes de patrouille de police
            Canots de sauvetage
            Bateaux de plaisance et de sport
            Bateaux à voile
            Catamarans
            Embarcations de sauvetage
            Petits voiliers
            Petites embarcations
            Canots en fibres de verre
            Canots semi-rigides
            Embarcations pneumatiques
            Canots pneumatiques
            Canoës
            Embarcations à rames
            Bateaux à pédales
            Locomotives et matériel roulant de chemin de fer et de tramway et pièces détachées
            Locomotives et tenders de chemin de fer
            Locomotives
            Tenders de locomotives et funiculaires
            Tenders
            Funiculaires
            Matériel roulant
            Véhicules d'entretien ou de services des voies ferrées, et wagons de marchandises
            Wagons de marchandises
            Véhicules d'entretien ou de service des voies ferrées
            Voitures de chemin de fer et de tramway, trolleybus
            Voitures de tramway
            Voitures de chemin de fer
            Trolleybus
            Voitures à voyageurs
            Fourgons à bagages et fourgons spéciaux
            Pièces détachées pour locomotives ou matériel ferroviaire roulant, équipement de commande et de contrôle du trafic ferroviaire
            Pièces détachées pour locomotives ou matériel ferroviaire roulant
            Roues monobloc
            Tampons de choc et barres de traction
            Sièges pour matériel ferroviaire roulant
            Essieux, pneus et autres pièces détachées pour locomotives ou matériel ferroviaire roulant
            Équipement de commande et de contrôle du trafic ferroviaire
            Signalisation mécanique
            Équipement électrique de signalisation de chemin de fer
            Installations électriques de chemin de fer
            Éléments automobiles
            Aéronefs et spationefs
            Hélicoptères, aéronefs, spationefs et autres aéronefs à moteur
            Hélicoptères et avions
            Avions
            Avions à voilure fixe
            Aéronefs sans pilote
            Aéronefs pilotés
            Aéronefs à usage spécifique
            Hélicoptères
            Spationefs, satellites et dispositifs de lancement
            Spationefs
            Satellites
            Dispositifs de lancement de spationefs
            Ballons, dirigeables et autres aéronefs non motorisés
            Planeurs
            Deltaplane
            Ballons et dirigeables
            Ballons
            Dirigeables
            Pièces détachées pour aéronefs, spationefs et hélicoptères
            Pièces détachées pour aéronefs
            Moteurs d'aéronefs
            Turboréacteurs
            Turbopropulseurs
            Moteurs à réaction
            Pièces détachées pour moteurs d'aéronefs
            Pièces pour turboréacteurs ou turbopropulseurs
            Pièces détachées pour hélicoptères
            Pneus pour avions
            Équipements, appareils d'entraînement, simulateurs et pièces pour aéronefs et spationefs
            Équipement pour aéronefs
            Dispositifs de lancement d'aéronefs
            Systèmes de catapultage d'aéronefs
            Dispositifs d'arrêt de plate-forme d'appontage
            Simulateurs de vol
            Appareils au sol d'entraînement au vol
            Sachets pour mal de l'air
            Équipement de transport et pièces détachées divers
            Charrettes à chevaux ou à bras, autres véhicules nonautomoteurs, chariots à bagages et pièces détachées diverses
            Charrettes à chevaux ou à bras et autres véhicules nonautomoteurs
            Chariots à bras
            Chariots à bagages
            Poussettes
            Pièces détachées diverses
            Pneus usagés
            Pneus rechapés
            Pare-chocs
            Montres pour véhicules
            Serrures pour véhicules
            Cadenas pour bicyclettes
            Hélices de bateau
            Échelles pour véhicules de lutte contre l'incendie
            Ancres
            Équipement routier
            Équipement d'entretien routier
            Balayeuses de routes
            Balayeuses de pistes
            Matériel de marquage routier
            Marquage routier
            Billes de verre pour marquage routier
            Équipement de contrôle de la circulation routière
            Panneaux à messages variables
            Équipement de contrôle des parcs de stationnement
            Équipement de péage
            Sel de déneigement
            Mobilier routier
            Glissières de sécurité
            Séparateurs de voies
            Composants de barrières
            Clôtures
            Poteaux en bois
            Éléments de clôture
            Barrière antibruit
            Barrières de sécurité
            Clôtures de protection
            Garde-corps
            Dispositifs pare-avalanche
            Barrières pare-neige
            Mobilier urbain
            Balises
            Avertisseurs lumineux de danger
            Cônes de sécurité
            Poteaux d'arrêt d'autobus
            Bornes lumineuses
            Cônes routiers
            Fléchage
            Matériel de signalisation
            Poteaux de signalisation
            Conteneurs et poubelles de déchets
            Équipement d'éclairage public
            Lampadaires d'éclairage public
            Réverbères
            Lampes d'éclairage public
            Matériaux de construction autoroutière
            Équipement maritime
            Équipement pour port
            Installations d'amarrage
            Passerelles d'embarquement des passagers pour navires
            Échelles mobiles pour l'embarquement des passagers pour navires
            Simulateurs de passerelle d'embarquement
            Équipement de contrôle du trafic maritime
            Systèmes radars
            Matériel de navigation
            Pales d'hélices
            Équipement ferroviaire
            Rails et accessoires
            Barres
            Rails de chemin de fer
            Rails de tramway
            Pièces d'entretoisement
            Jonctions de voies
            Lames d'aiguilles de chemin de fer
            Équipement de signalisation
            Poteaux indicateurs
            Boîtiers de signalisation
            Système de surveillance de la marche des trains
            Système de réchauffage des aiguillages
            Machines d'alignement des voies
            Matériaux de construction ferroviaire et fournitures
            Matériaux de construction ferroviaire ferrées
            Rails
            Matériaux ferroviaires
            Éclisses et selles de rail
            Contre-rails
            Matériaux de construction de voies ferrées
            Rails d'alimentation en courant
            Lames d'aiguille, cœurs de croisement, tringles de manœuvre d'aiguille et pièces de croisement
            Lames d'aiguille
            Cœurs de croisement
            Tringles de manœuvre d'aiguille
            Pièces de croisement
            Crapauds ferroviaires, plaques d'écartement et traverses
            Crapauds ferroviaires
            Plaques d'écartement et traverses
            Sièges et cale-sièges
            Traverses et pièces pour traverses
            Traverses
            Pièces pour traverses
            Structures porteuses
            Plates-formes d'accès
            Équipement de manipulation des boues
            Installation de dessication des boues
            Dispositifs de levage de plate-forme hydraulique
            Passerelles d'accès
            Passerelles pour ferry
            Passerelles pour passagers
            Passerelles de service
            Dock flottant
            Unité de stockage flottante
            Équipement aéroportuaire
            Système de manutention des bagages
            Équipement de manutention des bagages
            Équipement de contrôle du trafic aérien
            Équipement de tour de contrôle
            Contrôle du trafic aérien
            Simulation du contrôle du trafic aérien
            Systèmes de contrôle du trafic aérien
            Formation au contrôle du trafic aérien
            Système d'atterrissage aux instruments (ILS)
            Radiophare d'alignement omnidirectionnel VHF Doppler (DVOR)
            Appareil de mesure des distances (DME)
            Radiogoniomètre et radiophare non directionnel
            Radiogoniomètre (RDF)
            Radiophare non directionnel (NDB)
            Système de communication aéroportuaire (COM)
            Système de surveillance d'aéroport et système d'éclairage
            Système de surveillance d'aéroport (SUR)
            Système d'éclairage aéroportuaire
            Passerelles et échelles mobiles d'embarquement des passagers pour avions
            Passerelles d'embarquement des passagers pour avions
            Échelles mobiles d'embarquement des passagers pour avions
            Équipement de surveillance de la circulation
            Caméras de contrôle de la vitesse
            Système de mesure du flux de la circulation
            Billets de transport
            Équipement de contrôle, de sécurité, de signalisation et d'éclairage
            Projecteurs d'intervention extérieure
            Panneaux de signalisation et panneaux de signalisation lumineux
            Panneaux de signalisation lumineux
            Panneaux de signalisation routière
            Indicateurs de rues
            Éclairage public
            Éclairage de tunnel
            Signalisation et éclairage maritimes
            Signalisation et éclairage de navigation fluviale
            Balisage et éclairage d'aérodrome
            Équipement de commande et de contrôle, de sécurité ou de signalisation des routes
            Feux de circulation
            Équipement de commande et de contrôle, de sécurité ou de signalisation des voies navigables
            Équipement de commande et de contrôle, de sécurité ou de signalisation de parking
            Équipement de commande et de contrôle, de sécurité ou de signalisation d'aéroport
            Enregistreurs de vol
            Éclairage d'aéroport
            Feux de balisage de piste
            Équipement de commande et de contrôle, de sécurité ou de signalisation d'installations portuaires
            Générateurs de signaux, séparateurs de signal d'antenne et machines de galvanoplastie
            Générateurs de signaux
            Séparateurs de signal d'antenne
            Machines de galvanoplastie
            Maquettes
            Maquettes d'avions
            Maquettes de bateaux
            Équipement de sécurité, de lutte contre l'incendie, de police et de défense
            Matériel de secours et de sécurité
            Équipement de lutte contre l'incendie, de sauvetage et de sécurité
            Matériel de lutte contre l'incendie
            Appareils respiratoires pour la lutte contre l'incendie
            Équipement de lutte contre l'incendie
            Appareils extincteurs
            Mousse pour extincteurs
            Extincteurs portatifs
            Équipement d'évacuation en cas d'incendie
            Système d'extinction d'incendie
            Outillage pour l'extinction d'incendie
            Mousse d'extinction d'incendie ou composés similaires
            Équipement de sauvetage et d'urgence
            Mannequins d'entraînement pour les urgences
            Douche de sécurité
            Douche oculaire
            Matériel de sécurité
            Équipement de sécurité de site
            Système de protection de réacteurs nucléaires
            Équipement de protection nucléaire, biologique, chimique et radiologique
            Équipement de sûreté nucléaire
            Installations de sécurité
            Vêtements de protection et de sécurité
            Vêtements de protection biologique et chimique
            Vêtements de protection radiologique et nucléaire
            Gilets de protection
            Gilets réfléchissants
            Vêtements ou ponchos de protection
            Chaussettes ou articles de bonneterie de protection
            Chemises ou pantalons de protection
            Serre-poignets de protection
            Blouses de protection
            Systèmes et appareils de surveillance et de sécurité
            Équipement de sécurité
            Vibreurs (sonores)
            Détecteur de fausse monnaie
            Accessoires de sécurité
            Sacs de sécurité
            Joints
            Marques
            Systèmes d'alarme
            Miroirs de sécurité convexes
            Détecteurs de radar
            Équipement d'identification du site
            Système à cartes magnétiques
            Équipement pour horaires flexibles
            Système de chronométrage
            Badges d'identification
            Systèmes vidéo d'identification
            Détecteurs de métal
            Système de surveillance
            Capteurs
            Capteurs biométriques
            Système de chronométrage ou système d'enregistrement du temps de travail
            Caméras de sécurité
            Équipement de lecture des codes-barres
            Équipement de police
            Cibles de tir
            Équipement antiémeutes
            Canons à eau
            Menottes
            Sirènes
            Répulsifs pour chiens
            Signalisation de police
            Panneaux d'information
            Panneaux indicateurs à messages variables
            Équipement de signalisation de carrefour
            Armes, munitions et pièces associées
            Armes diverses
            Epées, machettes, baïonnettes et lances
            Épées
            Machettes
            Baïonnettes
            Lances
            Pistolets à gaz
            Armes à feu
            Armes à feu légères
            Pistolets
            Fusils
            Mitrailleuses
            Artillerie
            Artillerie antiaérienne
            Artillerie automotrice
            Artillerie tractée
            Mortiers
            Obusier
            Munitions
            Munitions d'armes à feu et de guerre
            Balles
            Obus
            Grenades
            Mines terrestres
            Cartouches
            Munitions de guerre navale
            Torpilles
            Mines marines
            Munitions de guerre aérienne
            Bombes
            Roquettes
            Pièces pour armes à feu et munitions
            Pièces pour armes à feu légères
            Accessoires de tuyauterie en bronze à canon
            Pièces de lance-roquettes
            Pièces pour mortiers
            Véhicules militaires et pièces connexes
            Véhicules blindés militaires
            Chars de combat
            Chars de combat lourds
            Chars de combat légers
            Véhicules blindés de combat
            Véhicules de combat d'infanterie
            Véhicules blindés de transport de troupes
            Véhicules blindés de transport d'armes
            Véhicules de reconnaissance et de patrouille
            Véhicules de commandement et de liaison
            Pièces de véhicules militaires
            Pièces mécaniques de rechange pour véhicules militaires
            Moteurs et pièces de moteur pour véhicules militaires
            Pièces électroniques et électriques de rechange pour véhicules militaires
            Navires de guerre et pièces connexes
            Navires de guerre
            Navire de combat de surface
            Porte-avions
            Destroyers et frégates
            Corvettes et patrouilleurs
            Engins et navires amphibies
            Sous-marins
            Sous-marin stratégique à propulsion nucléaire
            Sous-marin d'attaque à propulsion nucléaire
            Sous-marin d'attaque à propulsion diesel
            Submersibles sans équipage
            Mouilleurs de mines et navires auxiliaires
            Chasseurs de mines/dragueurs de mines
            Navire de recherche auxiliaire
            Navire auxiliaire de recherche du renseignement
            Navires hôpital/cargo/pétrolier/ro-ro auxiliaires
            Pièces pour navires de guerre
            Pièces de rechange pour coque et pièces mécaniques pour navires de guerre
            Moteur et pièces de moteur pour navires de guerre
            Pièces électroniques et électriques de rechange pour navires de guerre
            Avions, missiles et spationefs militaires
            Avions militaires
            Avions de combat
            Chasseurs-bombardiers/Avions d'attaque au sol
            Bombardiers
            Avions militaires de transport
            Avions d'entraînement
            Avions de patrouille maritime
            Avions ravitailleurs
            Avions de reconnaissance
            Hélicoptères de combat
            Hélicoptères de lutte anti-sous-marine
            Hélicoptères de soutien
            Hélicoptères militaires de transport
            Hélicoptères de recherche et de sauvetage
            Véhicules aériens sans pilote
            Véhicules aériens de combat sans pilote
            Missiles
            Missiles stratégiques
            Missiles stratégiques antibalistiques
            Missiles balistiques intercontinentaux
            Missiles balistiques lancés par sous-marin
            Missiles balistiques à portée intermédiaire
            Missiles tactiques
            Missiles air-air
            Missiles sol-air
            Missiles antinavire
            Roquettes anti-sous-marin
            Missiles tactiques antibalistiques
            Missiles guidés antichar
            Missiles surface-air
            Missiles de croisière
            Missiles de croisière lancés par air/à partir du sol/à partir de la mer
            Spationefs militaires
            Satellites militaires
            Satellites de communication
            Satellites d'observation
            Satellites de navigation
            Pièces pour équipement aérospatial militaire
            Pièces de rechange structurelles et mécaniques pour équipement aérospatial militaire
            Moteurs et pièces de moteur pour équipement aérospatial militaire
            Pièces de rechange électriques et électroniques pour équipement aérospatial militaire
            Systèmes électroniques militaires
            Systèmes de commandement, de contrôle, de communication et d'informatique
            Systèmes de commandement, de contrôle et de communication
            Systèmes tactiques de commandement, de contrôle et de communication
            Renseignement, surveillance, acquisition d'objectifs et reconnaissance
            Système de renseignement électronique
            Radar
            Radar de défense aérienne
            Systèmes de guerre électronique et contre-mesures
            Simulateurs de combat
            Équipement individuel et de soutien
            Équipement individuel
            Uniformes de pompiers
            Uniformes de police
            Uniformes militaires
            Uniformes de combat
            Vestes de camouflage
            Tenues de combat
            Équipements de combat
            Casques militaires
            Couvre-casques
            Masques à gaz
            Vêtements pare-balles
            Gilets pare-balles
            Équipement de soutien
            Drapeaux
            Mât porte-drapeau
            Instruments de musique, articles de sport, jeux, jouets, articles pour artisanat, articles pour travaux artistiques et accessoires
            Instruments de musique et pièces pour instruments de musique
            Instruments de musique
            Instruments à clavier
            Pianos
            Accordéons
            Orgues musicaux
            Célestas
            Instruments à vent en cuivre
            Trompettes
            Trombones
            Soubassophones
            Saxophones
            Sifflet
            Bugles
            Saxhorns, bugles à pistons
            Mellophones
            Cors alto, baryton, flugel et français
            Cors alto
            Cors baryton
            Cors flugel
            Cors français
            Instruments à cordes
            Clavecins
            Clavicordes
            Guitares
            Violons
            Harpes
            Banjos
            Mandolines
            Violoncelles
            Basses
            Instruments à vent
            Clarinettes
            Hautbois
            Cornets et flûtes musicales
            Cornets musicaux
            Flûtes musicales
            Piccolos
            Cornemuse
            Harmonicas
            Mirlitons
            Cors anglais
            Ocarinas
            Instruments de musique à amplificateur électrique
            Synthétiseurs
            Instruments à percussion
            Cymbales
            Cloches
            Tambourins
            Castagnettes
            Tambours
            Xylophones
            Vibraphones
            Pièces et accessoires pour instruments de musique
            Accessoires pour instruments de musique
            Métronomes
            Anches
            Accessoires pour instruments à cordes
            Cordes ou médiators pour instrument
            Accessoires pour instruments à percussion
            Sacoches, étuis ou accessoires pour instruments de musique
            Trépieds ou porte-partitions pour instruments de musique
            Pièces pour instruments de musique
            Chevilles
            Boîtes ou mécanismes à musique
            Embouchures
            Sourdines
            Diapasons droits
            Baguettes de chef d'orchestre
            Support rembourré pour piccolo
            Articles et équipements de sport
            Équipements de sports de plein air
            Équipement d'hiver
            Équipement de ski et de planches à ski
            Bottes de ski
            Skis
            Bâtons de ski
            Fixations
            Planches à ski
            Tenues de ski
            Équipement de patinage et de hockey sur glace
            Rondelles de hockey
            Patins à glace
            Cannes de hockey
            Vêtements et équipements polaires
            Équipements de sports nautiques
            Skis nautiques
            Appareil respiratoire autonome de plongée et de snorkeling
            Compensateurs
            Bouteilles d'air comprimé
            Détendeurs
            Instruments ou accessoires de plongée
            Appareils respiratoires pour la plongée
            Tenues de plongée
            Combinaisons d'immersion
            Masques, palmes ou tubas
            Combinaisons de plongée
            Combinaisons étanches
            Équipement et accessoires pour le surf et la natation
            Planches à skis, kneeboards ou boogieboards
            Équipement pour planche à voile
            Planches de surf
            Lunettes ou palmes de natation
            Équipement pour parapente
            Articles de chasse et de pêche
            Articles de pêche
            Cannes à pêche
            Ligne de pêche
            Moulinets de pêche
            Leurres de pêche
            Appâts de pêche
            Plombs de pêche
            Articles de chasse
            Appeaux
            Appelants
            Ball-traps
            Canon d'arme à feu
            Articles de camping
            Matelas de camping
            Bacs à glace
            Trousses de réparation de tentes
            Réchauds de camping
            Glacières
            Combinaisons de survie
            Équipements d'athlétisme
            Équipements de loisirs
            Équipements de gymnastique
            Tapis de gymnastique
            Barres ou poutres de gymnastique
            Barres de gymnastique
            Poutres de gymnastique
            Cordes, anneaux ou espaliers de gymnastique
            Cordes de gymnastique
            Anneaux de gymnastique
            Espaliers de gymnastique
            Équipements de saut gymnastique
            Trampolines de gymnastique
            Équipement pour le travail de l'équilibre
            Équipement de boxe
            Rings de boxe
            Sacs de sable
            Gants de boxe
            Équipement de culture physique
            Équipement d'entraînement pour l'aérobique
            Tapis d'exercice
            Simulateur d'escalier
            Vélos d'exercice
            Rameurs
            Cordes à sauter
            Trampolines d'exercice
            Ballons d'exercice
            Équipement de step
            Appareils elliptiques
            Équipement d'haltérophilie et de musculation
            Haltères
            Barres à disques
            Machines de musculation des membres inférieurs et supérieurs
            Machines de musculation des membres inférieurs
            Machines de musculation des membres supérieurs
            Bancs et supports de poids
            Poids d'exercice
            Machines de Pilates
            Appareil pour musculation des mains
            Bandes et tubes de résistance
            Bandes de résistance
            Tubes de résistance
            Appareils multigym
            Équipement pour sports de plein air et sur courts
            Équipements pour sports de plein air
            Balles de base-ball
            Écrans arrière ou clôture pour le base-ball
            Bases de base-ball
            Battes de base-ball
            Aides à la frappe pour le base-ball
            Gants de base-ball
            Protections pour le base-ball ou le softball
            Hockey sur gazon
            Balles de hockey sur gazon
            Crosses de hockey sur gazon
            Ballons de football américain
            Traîneaux de blocage pour le football américain
            Tees de tir pour le football américain
            Mannequins d'entraînement pour le football américain
            Équipement pour le football au drapeau (flag-football)
            Balles du jeu de crosse
            Bâtons du jeu de crosse
            Lance-balles automatiques
            Ballons de football
            Matériel de marquage des terrains de football
            Équipement de protection pour le football
            Dispositifs d'entraînement pour le football
            Balles de softball
            Battes de softball
            Gants de softball
            Ballons de handball
            Équipements scolaires pour le handball
            Équipement pour sports de raquette et sur courts
            Équipement de badminton
            Volants de badminton
            Raquettes de badminton
            Ballons de basket-ball
            Ensemble complet de basket-ball
            Équipement de protection pour le hockey en salle
            Balles, grips et cordes pour le racquetball
            Balles de racquetball
            Grips de racquetball
            Cordes de racquetball
            Raquettes de racquetball
            Équipement de squash
            Balles de squash
            Raquettes de squash
            Équipement de tennis
            Balles de tennis
            Matériel de court de tennis
            Raquettes de tennis
            Aides à l'entraînement pour le tennis
            Balles et piquets de spirobole
            Balles de spirobole
            Piquets de spirobole
            Ballons de volley-ball
            Normes de volley-ball applicables aux gymnases
            Stockage des ballons et des filets de volley-ball
            Équipement d'athlétisme
            Javelots
            Sautoir
            Disque
            Poids à lancer
            Perches à sauter
            Haies
            Témoins
            Équipement pour jeux de tir et de table
            Équipement pour jeux de table
            Tables pour hockey sur coussins d'air ou accessoires
            Baby-foot
            Joueurs de rechange pour baby-foot
            Tables de baby-foot
            Queues de billard
            Équipement de jeu de palets
            Table de tennis
            Balles de tennis de table
            Raquettes de tennis de table
            Jeux de tir et équipement
            Équipement de tir à l'arc
            Bracelet pour le tir à l'arc
            Flèches de tir à l'arc
            Écrans arrière pour le tir à l'arc
            Cordes pour le tir à l'arc
            Arcs
            Gants d'archer
            Cibles sur pied pour le tir à l'arc
            Cibles pour le tir à l'arc
            Fléchettes
            Cibles à fléchettes
            Cibles à lancer
            Équipement de tir au pigeon
            Équipements pour le golf et le jeu de quilles
            Équipement de golf
            Sacs de golf
            Balles de golf
            Clubs de golf
            Tees de golf
            Housses pour clubs de golf
            Gants de golf
            Assujettisseurs de mottes
            Télémètres de golf
            Aide au putting
            Équipements pour le jeu de quilles
            Machines ou appareils pour l'équipement de loisir
            Machines d'entretien de la glace
            Tableaux d'affichage pour les informations sportives
            Jeux et jouets; attractions foraines
            Poupées
            Maisons de poupées
            Pièces ou accessoires pour poupées
            Marionnettes
            Théâtres de marionnettes
            Jouets
            Instruments de musique en jouets
            Jouets à roues
            Puzzles
            Jeux
            Jeux éducatifs
            Jeux de table
            Jeux classiques
            Jeux coopératifs
            Jeux de stratégie
            Jeux de mémoire
            Accessoires de jeux
            Jeux de loto
            Formulaire de loterie
            Kits de jeux
            Ballonnets et ballons
            Seaux-jouets
            Trains et véhicules-jouets, petits trains et petites voitures
            Petits trains
            Petites voitures
            Armes-jouets
            Jouets gonflables et à enfourcher
            Jouets gonflables
            Jouets à enfourcher
            Articles pour fêtes foraines, jeux de société ou jeux de salon
            Jeux de cartes
            Jeux vidéo
            Billards
            Boules de billard
            Craie de billard
            Queues de billard
            Triangles de billard
            Tables de billard
            Jeux à pièces de monnaie ou à jetons
            Manèges, balançoires, stands de tir et autres attractions foraines
            Balançoires
            Équipements pour terrain de jeux
            Balançoires pour terrain de jeux
            Matériels à grimper pour terrain de jeux
            Manèges pour terrain de jeux
            Toboggans pour terrain de jeux
            Balançoires à bascules pour terrain de jeux
            Tunnels pour terrain de jeux
            Bacs à sable pour terrain de jeux
            Gradins pour terrain de jeux
            Équipement pour l'escalade ou le grimper à la corde
            Équipement pour l'escalade
            Équipement pour le grimper à la corde
            Machines de jeu
            Fournitures pour travaux d'artisanat et travaux artistiques
            Fournitures pour travaux d'artisanat
            Fournitures pour travaux artistiques
            Pinceaux d'art
            Plumes à dessin
            Crayons de couleur
            Fusain
            Craies
            Pastels
            Papier simili-sulfurisé et autres articles en papier
            Papier simili-sulfurisé
            Papier-calque
            Papier cristal
            Papier transparent ou papier translucide
            Papier couché et papier d'artisanat
            Papier à dessin
            Papier pour cartographie
            Papier et carton multicouches
            Papier kraft
            Équipements de laboratoire, d'optique et de précision (excepté les lunettes)
            Instruments de navigation et de météorologie
            Instruments de navigation
            Matériel de radiogoniométrie
            Compas
            Accessoires pour compas
            Sextants
            Systèmes de positionnement à capacité globale (GPS ou équivalent)
            Sonars
            Sondeurs à écho
            Radars
            Matériel de surveillance radar
            Instruments de météorologie
            Anémomètres
            Baromètres
            Enregistreurs de précipitations ou d'évaporation
            Appareils de radiosondage
            Pluviographes
            Appareils d'observation en surface
            Appareils d'observation en surface des précipitations ou de l'évaporation
            Appareils d'observation en surface des radiations solaires
            Appareils d'observation en surface des températures ou de l'humidité
            Appareils d'observation en surface des vents
            Stations météorologiques
            Accessoires pour instruments météorologiques
            Instruments géologiques et géophysiques
            Boussoles de géologue
            Appareils de prospection géologique
            Systèmes d'information géographique (GIS ou équivalent)
            Instruments géophysiques électromagnétiques
            Instruments géophysiques de mesure de la gravité
            Instruments géophysique de mesure de la polarité induite (IP)
            Instruments géophysiques de magnétomètrie
            Instruments géophysiques pour la mesure de la résistivité
            Gravimètres
            Instruments et matériels de télémétrie, d'hydrographie, d'océanographie et d'hydrologie
            Appareils de télémétrie
            Instruments d'hydrographie
            Matériel de sismologie
            Théodolites
            Matériel de topographie
            Instruments de géodésie
            Instruments de mesure
            Balances de précision
            Balances électroniques et accessoires
            Balances analytiques électroniques
            Balances techniques électroniques
            Masses d'étalonnage
            Tables de dessin
            Machines de dessin
            Pantographes
            Règles à calcul
            Instruments à main pour la mesure de longueurs
            Équerres
            Instruments de mesure de grandeurs
            Appareils de mesure du rayonnement
            Enregistreurs à faisceaux d'électrons
            Dosimètres de rayonnement
            Instruments de mesure de grandeurs électriques
            Ampèremètres
            Voltmètres
            Compteurs Geiger
            Système de surveillance de la contamination
            Moniteurs de rayonnement
            Oscilloscopes
            Oscillographes
            Restauration
            Système de surveillance de la pollution
            Instruments de contrôle de propriétés physiques
            Instruments de comptage
            Hydromètres
            Thermomètres
            Pyromètres
            Hygromètres
            Psychromètres
            PHmètres
            Thermocouples
            Calorimètres
            Instruments de mesure du débit, du niveau et de la pression de liquides ou de gaz
            Débitmètres
            Compteurs à eau
            Débitmètres
            Matériel de mesure du niveau
            Matériel de mesure de la pression
            Indicateurs de pression
            Matériel de mesure et de contrôle
            Équipement pour mécanique des fluides
            Manomètres
            Viscosimètres
            Indicateurs de profondeur
            Appareils d'estimation des structures
            Appareil d'estimation des forces
            Pycnomètres
            Instruments de mesure de la tension superficielle
            Densitomètres
            Coulomètres
            Fluxmètres
            Rhéomètres
            Rotamètres
            Appareils de détection et d'analyse
            Appareils de détection
            Détecteurs de gaz
            Détecteurs de fumée
            Détecteurs d'erreurs
            Appareils d'analyses
            Analyseurs de gaz
            Chromatographes
            Chromatographes à gaz
            Analyseurs de fumée
            Spectromètres
            Spectromètre de masse
            Matériel de mesure des émissions
            Spectromètre à émission
            Analyseur de spectre
            Analyseurs
            Analyseurs d'expansion
            Matériel de mesure du son
            Sonomètres
            Analyseurs de la vitesse du son
            Matériel de mesure du bruit
            Décibelmètres
            Analyseurs de vibrations
            Analyseurs biochimiques
            Cytomètres
            Analyseurs de sang
            Analyseurs de lait
            Matériel biomédical
            Compte-globules
            Analyseur de chimie
            Analyseurs d'hématologie
            Analyseurs d'immunologie
            Détecteurs de fluides
            Agitateurs et accessoires
            Agitateurs mécaniques
            Corbeille pour flacons Erlenmeyer pour agitateurs
            Pinces à flacons Erlenmeyer pour agitateurs
            Supports pour entonnoirs de séparation
            Porte-pinces à flacons Erlenmeyer pour agitateurs
            Porte-boîtes de Petri pour agitateurs
            Porte-éprouvettes pour agitateurs
            Adaptateur pour flacons pour agitateurs
            Évaporateurs rotatifs
            Écran protecteur pour évaporateurs rotatifs
            Capteur de température d'ébullition pour évaporateurs rotatifs
            Régulateur de pression pour évaporateurs rotatifs
            Agitateurs d'incubation
            Plaques chauffantes
            Plaques chauffantes pour flacons
            Agitateurs magnétiques
            Thermorégulateurs pour agitateurs mécaniques avec plaques chauffantes
            Mélangeurs mécaniques
            Aubes pour mélangeurs mécaniques
            Homogénéisateurs à immersion
            Instruments de dispersion pour homogénéisateurs à immersion
            Désintégrateurs à ultrasons
            Sondes pour désintégrateurs à ultrasons
            Convertisseurs pour désintégrateurs à ultrasons
            Chambres à débit continu pour désintégrateurs à ultrasons
            Homogénéisateurs à lames rotatives
            Pipettes de laboratoire et accessoires
            Pipettes
            Embouts de pipettes
            Porte-pipettes
            Appareils de contrôle et d'essai
            Microscopes
            Microscopes électroniques
            Microscopes électroniques à balayage
            Microscopes électroniques à transmission
            Microscopes ioniques et monoculaires
            Microscopes ioniques
            Microscopes moléculaires
            Microscopes inversés et métallurgiques
            Microscopes inversés
            Microscopes métallurgiques
            Microscopes à fond noir et microscopes à sonde à balayage
            Microscopes à fond noir
            Microscopes à sonde à balayage
            Microscopes polarisants et microscopes à fluorescence
            Microscopes polarisants
            Microscope à fluorescence
            Microscopes composés monoculaires et/ou binoculaires
            Microscopes acoustiques et microscopes à projection
            Microscopes acoustiques
            Microscopes à projection
            Microscopes à grand champ, microscopes stéréoscopiques ou microscopes à dissection
            Microscopes à grand champ
            Microscopes stéréoscopiques ou microscopes à dissection
            Composés divers pour microscopes
            Illuminateurs pour microscopes
            Objectifs pour microscopes
            Accessoires photo ou vidéo pour microscopes
            Accessoires photo pour microscopes
            Accessoires vidéo pour microscopes
            Platines porte-objet automatisées pour microscopes
            Ampoules de rechange pour microscope de laboratoire
            Oculaires, condensateurs, collecteurs, platines porte-objet et housses de microscope
            Oculaires de microscope
            Condensateurs de microscope
            Collecteurs de microscope
            Tubes de microscope
            Platines porte-objet de microscope
            Housses de microscope
            Scanners
            Scintigraphes à pression
            Scintigraphes chromatographiques
            Dosimètres à chambre d'ionisation
            Dosimètres
            Systèmes standard de dosimétrie secondaire
            Dosimètres de fantômes
            Diffractographes
            Machines et appareils d'essai et de mesure
            Testeurs de soudabilité
            Appareils d'essai servo-hydrauliques
            Matériel de détection de gaz
            Détecteurs de stupéfiants
            Kits d'analyse de gaz
            Système de détection d'explosifs
            Détecteurs de bombes
            Système de dosimétrie
            Instruments pour véhicules
            Compteurs
            Compteurs d'énergie
            Compteurs électroniques
            Compteurs magnétiques
            Compteurs d'électricité
            Compteurs de production
            Compte-tours
            Indicateurs de vitesse pour véhicules
            Tachymètres
            Compteurs de taxi
            Stroboscopes
            Instruments et appareils de réglage et de contrôle
            Limiteurs de vitesse
            Appareils utilisant les rayonnements et destinés à des usages autres que médicaux
            Équipement de scanning pour le contrôle des bagages
            Équipement de contrôle aux rayons X
            Instruments d'optique
            Matériel de polarisation
            Appareils à fibres optiques
            Miroirs
            Filtres optiques
            Dispositifs d'aide optique
            Instruments d'astronomie et d'optique
            Jumelles
            Lunettes de vision nocturne
            Lunettes de visée
            Microscopes optiques
            Télescopes
            Instruments d'optique spécialisés
            Lasers
            Lasers industriels
            Dispositifs à cristaux liquides
            Périscopes
            Matériel de photographie
            Appareils photographiques
            Objectifs photographiques
            Corps d'appareils photographiques
            Appareils de reproduction pour la préparation de plaques ou de cylindres d'impression
            Appareils photographiques à développement instantané
            Caméras cinématographiques
            Appareils photographiques numériques
            Projecteurs cinématographiques
            Appareils de projection
            Projecteurs de diapositives
            Vidéoprojecteurs
            Agrandisseurs
            Réducteurs
            Appareils pour laboratoires photographiques
            Flashes
            Ampoules de flash
            Cubes flashes
            Agrandisseurs photographiques
            Appareils et matériel de développement de pellicules photographiques
            Écrans de projection
            Matériel pour microfilms et microfiches
            Matériel pour microfilms
            Lecteurs de microfilms
            Matériel pour microfiches
            Lecteurs de microfiches
            Matériel pour microformes
            Lecteurs de microformes
            Horloges de pointage et compteurs similaires; parcmètres
            Horloges de pointage
            Horodateurs
            Parcmètres
            Compteurs à jetons
            Minuteurs
            Interrupteurs horaires
            Équipement de commande des processus industriels et matériel de télécommande
            Équipement de commande des processus industriels
            Matériel de télécommande
            Appareils de radiotélécommande
            Sirènes télécommandées
            Instruments divers d'évaluation ou de test
            Matériel de vérification et de test d'hygiène
            Kits pour prélèvement manuels sur écouvillon
            Kits pour prélèvement automatiques sur écouvillon
            Équipement pour grains et aliments pour animaux
            Analyseurs de grains
            Compteurs de grains
            Analyseurs d'aliments
            Instruments de mesure de l'humidité
            Appareils de contrôle de l'humidité et de la température
            Appareils de mesure de l'humidité
            Instruments d'évaluation nucléaire
            Compteurs alpha
            Compteurs alpha beta
            Compteurs beta
            Compteurs beta gamma
            Compteurs gamma
            Kilovoltmètres
            Microanalyseurs de rayons X
            Matériel pour réaction en chaîne à la polymérase (PCR)
            Matériel pour réaction en chaîne à la polymérase en temps réel (RT-PCR)
            Éthylotest antidémarrage
            Simulateur de recherche, d'essai et scientifique et technique
            Meubles (y compris les meubles de bureau), aménagements, appareils électroménagers (à l'exclusion de l'éclairage) et produits de nettoyage
            Mobilier
            Sièges, chaises et articles assimilés, et pièces connexes
            Sièges
            Sièges pivotants
            Sièges de théâtre
            Sièges éjectables
            Chaises
            Chaises de salle à manger
            Sièges et chaises divers
            Fauteuils
            Canapés
            Banquettes
            Chaises longues
            Tabourets
            Bancs
            Repose-pieds
            Éléments de sièges
            Rembourrage
            Tables, armoires, bureaux et bibliothèques
            Bureaux et tables
            Bureaux
            Tables
            Armoires et bibliothèques
            Armoires
            Bibliothèques
            Mobilier de bureau
            Rayonnages de bureau
            Rayonnages d'archives
            Systèmes de classement
            Armoires de classement
            Meubles fichiers
            Dossiers suspendus
            Systèmes de carrousels
            Chariots de bureau
            Présentoirs
            Mobilier informatique
            Tables pour ordinateurs
            Tables de tri
            Casiers de tri
            Porte-manteaux
            Adoucisseurs d'eau
            Mobilier de maison
            Mobilier et agencement de cuisine
            Étagères
            Plans de travail
            Placards
            Cuisines équipées
            Hottes d'aspiration
            Mobilier de jardin
            Mobilier de chambre à coucher, mobilier de salle à manger et mobilier de salle de séjour
            Mobilier de chambre à coucher
            Lits, literie et tissus d'ameublement spéciaux
            Sommiers
            Matelas
            Tissus spéciaux d'ameublement
            Couvertures chauffantes
            Alèses en caoutchouc
            Lits d'enfant
            Mobilier de chambre à coucher autre que lits et literie
            Armoires-penderies
            Commodes
            Tables de chevet
            Mobilier de salle à manger
            Tables de salle à manger
            Mobilier de séjour
            Tables basses
            Mobilier de salle de bains
            Accessoires pour caves à vin
            Mobilier et équipements divers
            Mobilier divers
            Râteliers
            Établis
            Mobilier modulaire
            Rayonnages mobiles
            Mobilier de salle de conférence
            Porte-livres
            Équipements d'exposition
            Stands d'exposition
            Mobilier de bibliothèque
            Équipements de bibliothèque
            Mobilier d'accueil et de réception
            Éléments de meubles
            Mobilier scolaire
            Mobilier pour jardin d'enfants
            Matériel d'enseignement
            Matériel pédagogique
            Fournitures scolaires
            Matériels et appareils de formation
            Mobilier de magasin
            Vitrines
            Comptoirs
            Comptoirs de distribution de repas
            Unités de stockage
            Enseignes de magasin
            Mobilier de laboratoire
            Paillasses de laboratoire
            Papier peint et autres revêtements
            Revêtements muraux à base de papier ou de carton
            Papier peint
            Revêtements muraux en textile
            Revêtements de sol à base de papier ou de carton
            Aménagements
            Équipement de cuisine, articles de maison, articles ménagers et fournitures de restauration
            Équipement de cuisine
            Ustensiles de cuisine
            Vaisselle
            Tasses et verres
            Tasses
            Petites tasses
            Verres à boire
            Récipients pour aliments
            Bidons à eau
            Récipients isothermes
            Plateaux
            Égouttoirs
            Ustensiles de cuisson
            Égouttoirs à vaisselle
            Vaisselle de table
            Assiettes
            Plats
            Soucoupes
            Bols
            Décanteuses
            Gamelles en fer blanc
            Fournitures pour restauration
            Fournitures jetables pour restauration
            Couteaux et assiettes jetables
            Tasses jetables
            Plateaux pour repas
            Cuillères, fourchettes
            Cuillères
            Fourchettes
            Balais et brosses et autres articles de divers types
            Balais
            Brosses
            Pinceaux de peintre en bâtiment
            Balais et brosses et autres produits de nettoyage ménager
            Brosses de toilette
            Éponges
            Seaux
            Poubelles
            Pelles à poussière
            Briquets, articles en matières inflammables, articles de pyrotechnie, allumettes et combustibles liquides ou gaz combustibles liquéfiés
            Briquets
            Alliages pyrophoriques
            Allumettes
            Gaz pour briquets
            Articles de pyrotechnie
            Bougies
            Bouteille, bocaux et flacons
            Bouteilles
            Bocaux
            Flacons
            Bonbonnes, casiers à bouteilles, fioles et bobines
            Casiers à bouteilles
            Bonbonnes et fioles
            Bonbonnes
            Fioles
            Bobines
            Aiguilles à coudre et à tricoter, et dés à coudre
            Aiguilles à coudre ou à tricoter
            Aiguilles à coudre
            Aiguilles à tricoter
            Dés à coudre
            Produit à usage spécial
            Caisses à compost
            Jetons
            Cabines de peinture
            Bornes de neige
            Coutellerie
            Couteaux et ciseaux
            Couteaux
            Couteaux de table
            Couteaux de cuisine
            Couteaux universels
            Ciseaux
            Horlogerie
            Horloges
            Réveils
            Horloges murales
            Verre à horloges
            Plateaux de réception et matériel de bureau
            Plateaux de réception
            Matériel de bureau
            Accessoires de bureau
            Accessoires pour classeurs ou fichiers
            Crochets et œillets
            Articles religieux
            Aménagements divers
            Fournitures pour blanchisserie
            Ardoises d'écolier et tableaux à écrire ou à dessiner ou instruments
            Tableaux noirs
            Éponges à effacer pour tableaux noirs
            Ardoises d'écolier
            Instruments de dessin
            Instruments d'écriture
            Règles
            Produits artificiels
            Fruits artificiels
            Fleurs artificielles
            Gazon artificiel
            Pelouse artificielle
            Bijouterie de fantaisie
            Appareils et équipement de démonstration
            Produits d'information et de promotion
            Parapluies et parasols, cannes et cannes-sièges
            Parasols
            Parapluies
            Cannes-sièges
            Cannes de marche
            Pièces, garnitures et accessoires de parapluies, parasols, cannes et articles similaires
            Articles funéraires
            Cercueils
            Fournitures de caserne
            Statuettes, ornements, cadres pour photographies ou images et miroirs
            Cadres pour photographies
            Cadres pour images
            Vases
            Statuettes
            Ornements
            Globes
            Trophées
            Aquariums
            Éléments décoratifs divers
            Arbre de Noël
            Verrerie
            Ampoules en verre
            Verre de sécurité
            Miroirs en verre
            Équipement divers
            Équipement de restauration
            Petit matériel de restauration
            Matériel pour la préparation des aliments
            Machines à couper la viande
            Matériel de cantine
            Équipement hôtelier
            Équipement de cuisine industrielle
            Équipement de restaurant
            Matériel de désinfection
            Équipement de réseau à gaz
            Équipement pour pression du gaz
            Équipement de réseau d'assainissement
            Matériel de scellement
            Installations de distribution d'eau
            Articles textiles
            Articles textiles ménagers
            Couvertures et plaids
            Couvertures
            Plaids
            Linge de lit
            Draps
            Housses de couettes
            Protège-matelas
            Édredons
            Taies d'oreillers
            Taies de traversins
            Linge de table
            Nappes
            Serviettes de table
            Linge de toilette et de cuisine
            Serviettes de toilette
            Torchons
            Essuie-mains en rouleau
            Distributeurs automatiques de serviettes
            Gants de toilette
            Rideaux, tentures, lambrequins et stores en textile
            Rideaux
            Pare-fumée
            Tentures
            Lambrequins
            Stores
            Stores d'intérieur
            Stores en textile
            Stores vénitiens
            Jalousies
            Articles d'ameublement
            Articles textiles d'ameublement
            Coussins
            Oreillers
            Linge d'hôpital
            Champs opératoires
            Draps pour salle d'opération
            Articles textiles confectionnés
            Bâches imperméables, voiles pour bateaux, planches à voile ou chars à voile, auvents, stores, tentes et articles de camping
            Bâches imperméables, auvents et stores
            Bâches imperméables
            Marquises
            Rideaux pare-soleil
            Toiles de camouflage
            Voiles
            Articles de camping en textile
            Matelas pneumatiques
            Lits de camp
            Tentes
            Sacs de couchage
            Sacs de couchage en plume ou en duvet
            Parachutes
            Parachutes dirigeables
            Rotochutes
            Articles textiles manufacturés divers
            Chiffons à poussière
            Éléments filtrants en tissu
            Gilets de sauvetage
            Couvertures ignifuges
            Moustiquaires
            Torchons à vaisselle
            Ceintures de sauvetage
            Torchons de nettoyage
            Torchons à polir
            Tapis, paillassons et carpettes
            Tapis
            Revêtement de sol à points noués
            Revêtement de sol tissé
            Revêtement de sol touffeté
            Dalles de moquette
            Revêtement de sol en textile
            Paillassons
            Carpettes
            Revêtement de sol industriel en textile
            Cordages, cordes, ficelles et filets divers
            Cordage, corde, ficelle et filets
            Ficelles, cordages et câbles
            Corde
            Cordage
            Cordon
            Ficelle
            Filets en textile
            Filets à mailles nouées
            Élingues
            Chiffons
            Articles en non-tissé
            Articles textiles divers
            Tulle, dentelle, rubanerie, passementerie et broderie
            Rubanerie, passementerie
            Ruban
            Bande textile
            Étiquettes et badges en textile
            Étiquettes en textile
            Badges en textile
            Insignes
            Passementerie d'ornement
            Galons
            Épaulettes
            Tissu à mailles
            Feutre
            Textile de rembourrage, fils, tissus et articles textiles utilisés à des fins techniques
            Rembourrage textile
            Fil métallisé
            Tissu de fils métalliques
            Tissu imprégné, enduit ou recouvert
            Articles textiles à usage technique
            Tuyaux en textile
            Bandes convoyeuses en textile
            Conduites d'aération
            Produits textiles matelassés
            Appareils ménagers
            Appareils ménagers électriques
            Appareils électrodomestiques pour la cuisine
            Réfrigérateurs et congélateurs
            Réfrigérateurs-congélateurs
            Congélateurs
            Congélateurs-bahuts
            Congélateurs ménagers
            Congélateurs-armoires
            Congélateurs industriels
            Réfrigérateurs
            Machines pour la préparation des aliments
            Robots ménagers
            Mixeurs pour aliments
            Appareils électrothermiques
            Cafetières électriques
            Théières électriques
            Grille-pain électriques
            Chauffe-plats
            Gaufriers
            Fours
            Fours électriques
            Fours à micro-ondes
            Rôtissoires, plaques de cuisson, plaques chauffantes et réchauds
            Rôtissoires
            Foyers de cuisson
            Plaques de cuisson
            Réchauds
            Ouvre-boîtes
            Appareils électrodomestiques pour soins corporels
            Tondeuses à cheveux
            Appareils de coiffure
            Sèche-cheveux
            Sèche-mains
            Appareils électrodomestiques de nettoyage; fers à repasser
            Lave-vaisselle
            Lave-linge et sèche-linge
            Lave-linge et sèche-linge combinés
            Unité de séchage et de pressage
            Compacteurs d'ordures ménagères
            Machines d'entretien des sols
            Machines de nettoyage des sols
            Cireuses
            Aspirateurs
            Accessoires pour aspirateurs
            Fers à repasser électriques
            Fers à vapeur
            Hottes de ventilation ou de recyclage
            Aérateurs
            Ventilateurs d'aspiration
            Chauffe-eau et chauffage de bâtiment; équipement de plomberie
            Distributeurs électriques d'eau chaude ou chauffe-eau à accumulation et thermoplongeurs
            Équipement de chauffage
            Matériel de chauffage central
            Résistances de chauffage électrique
            Appareils électriques de chauffage au sol
            Appareils électriques de chauffage des locaux
            Équipement de plomberie
            Pièces pour appareils électroménagers
            Ventilateurs et appareils de conditionnement d'air
            Ventilateurs
            Appareils de conditionnement d'air
            Appareils ménagers non électriques
            Appareils ménagers de cuisson ou de chauffage
            Appareils ménagers de cuisson
            Réfrigérateurs à gaz
            Réchauffeurs d'air ou distributeurs d'air chaud non électriques
            Réchauffeurs d'air
            Déshydrateurs d'air
            Séchoirs à air comprimé
            Chauffe-eau instantanés ou à accumulation non électriques
            Appareils à gaz
            Radiateurs à gaz
            Pièces pour poêles, cuisinières, chauffe-plats et appareils ménagers
            Pièces pour poêles
            Pièces pour cuisinières
            Pièces pour chauffe-plats
            Produits de nettoyage et produits à polir
            Préparations odoriférantes et cires
            Parfums et désodorisants d'intérieur
            Désodorisants d'intérieur
            Appareils distributeurs de désodorisants d'intérieur
            Produits d'assainissement de l'air
            Désodorisants
            Cirages et crèmes
            Produits d'entretien des sols
            Produits d'entretien des chaussures
            Cires à encaustiquer
            Sciures de balayage
            Agents d'étanchéité
            Pâtes et poudres à récurer
            Agents organiques tensioactifs
            Produits nettoyants à l'ammoniac
            Produits nettoyants à la soude caustique
            Produits de nettoyage
            Préparations nettoyantes
            Dispersants
            Détergents
            Détergents pour lave-vaisselle
            Agents dégraissants
            Digesteurs de graisses
            Agents nettoyants
            Solutions de rinçage
            Produits nettoyants pour sols
            Produits nettoyants pour écrans
            Produits nettoyants pour automobiles
            Produits nettoyants pour les toilettes
            Distributeur de savon automatique
            Produits pour lave-vaisselle
            Poudre pour lave-vaisselle
            Produits antipoussière
            Solutions de nettoyage pour bijoux
            Eau collectée et purifiée
            Eau brute
            Eau potable
            Eau non potable
            Machines industrielles
            Machines de production et d'utilisation de la puissance mécanique
            Turbines et moteurs
            Moteurs (puissance motrice)
            Moteurs hors-bord pour propulsion navale
            Installations de turbines
            Turbines à vapeur d'eau
            Turbines hydrauliques
            Roues hydrauliques
            Turbines à gaz
            Équipements de turbines
            Instruments pour turbines
            Pièces pour turbines
            Pièces pour turbines à vapeur d'eau
            Plaques d'assise
            Caissons
            Systèmes de refroidissement à air avec condensateurs
            Systèmes à huile lubrifiante
            Séparateurs d'humidité
            Déshumidificateurs
            Dispositifs rotatifs
            Rotors
            Lames
            Vireurs
            Pièces pour turbines hydrauliques
            Pièces pour turbines à gaz
            Systèmes d'admission d'air
            Module d'injection à gaz
            Systèmes à gaz combustibles
            Pièces pour roues hydrauliques
            Pompes et compresseurs
            Machines et moteurs hydrauliques ou pneumatiques
            Cylindres hydrauliques ou pneumatiques
            Moteurs hydrauliques (véhicules)
            Moteurs pneumatiques (véhicules)
            Moteurs hydrauliques (puissance motrice)
            Moteurs pneumatiques (puissance motrice)
            Pompes
            Pompes à liquides
            Pompes pour la lutte contre l'incendie
            Dispositifs de ravitaillement d'hélicoptères
            Pompes à eau
            Pompes de refroidissement
            Pompes à eau de refroidissement
            Pompes à huile
            Pompes à essence
            Pompes à béton
            Pompes à mouvement rectiligne alternatif pour liquides
            Groupes hydrauliques
            Pompes à eaux d'égouts
            Pompes de dosage
            Surpresseurs à liquides
            Pompes centrifuges et élévateurs à liquides
            Pompes à usage médical
            Pompes à usage nutritionnel
            Pompes pour perfusion
            Élévateurs à liquides
            Pompes centrifuges
            Pompes rotatives
            Pompes à vide
            Pompes à air
            Pompes à roue
            Pompes de laboratoire et accessoires
            Pompes péristaltiques
            Compresseurs
            Compresseurs à gaz
            Compresseurs rotatifs
            Compresseurs pour équipements frigorifiques
            Compresseurs d'air
            Compresseurs d'air portés
            Turbocompresseurs
            Compresseurs à mouvement rectiligne alternatif
            Dispositif à air comprimé
            Compresseurs centrifuges
            Compresseurs pour aviation civile
            Pièces pour pompes, compresseurs, machines ou moteurs
            Pièces pour machines ou moteurs
            Pièces pour machines pneumatiques
            Pièces pour machines ou moteurs hydrauliques
            Pièces pour moteurs à réaction
            Pièces pour pompes ou élévateurs à liquides
            Pièces pour pompes à essence, pompes à main et pompes à béton
            Pièces pour pompes à essence
            Pièces pour pompes à main
            Pièces pour pompes à béton
            Pièces pour pompes à mouvement rectiligne alternatif
            Pièces pour groupes hydrauliques
            Pièces pour pompes de dosage
            Pièces pour pompes à mouvement rectiligne rotatif
            Pièces pour pompes centrifuges
            Pièces pour pompes à air ou à vide, compresseurs d'air ou à gaz
            Pièces pour pompes à air
            Pièces pour pompes à vide
            Pièces pour compresseurs d'air
            Pièces pour compresseurs à gaz
            Robinets, vannes et dispositifs similaires
            Robinets et vannes
            Vannes définies selon leur fonction
            Vannes pour radiateurs de chauffage central
            Robinets-vannes
            Régulateurs de température
            Soupapes de détente, de régulation, de retenue ou de sûreté
            Soupapes de détente
            Soupapes de régulation
            Vannes de maîtrise des crues
            Vannes de commande de processus
            Soupapes de retenue
            Clapets de non-retour
            Soupapes de sécurité
            Soupapes d'arrêt
            Vannes de colonnes montantes
            Hydrants
            Robinets de bouteilles de gaz
            Vannes définies selon leur fabrication
            Vannes à pâte
            Vannes de conduites forcées
            Robinets à vanne
            Robinets à soupape
            Vannes à pointeau
            Robinets à tournant sphérique
            Robinets à boisseau
            Robinets à papillon
            Robinets à membrane
            Tiroirs de distribution
            Soupapes à clapet
            Arbres de Noël et autres assemblages de vannes
            Arbres de Noël de forage
            Manifolds de duses
            Assemblages de vannes
            Robinets ou vannes pour installations sanitaires
            Pièces pour robinets et vannes
            Commandes de soupapes
            Commandes de soupapes électriques
            Commandes de soupapes hydrauliques
            Commandes de soupapes pneumatiques
            Pièces pour robinets
            Pièces pour vannes
            Engrenages, éléments d'engrenage et d'entraînement
            Engrenages, éléments d'engrenage et d'entraînement cylindriques
            Arbres de transmission, arbres à cames et vilebrequins
            Arbres de transmission
            Arbres à cames
            Vilebrequins
            Boîtes de roulements
            Engrenages
            Volants et poulies
            Treuils
            Embrayages
            Palans
            Accouplements d'arbres
            Joints cardan
            Pièces pour éléments d'engrenage et d'entraînement
            Pièces pour éléments d'engrenage
            Pièces pour éléments d'entraînement
            Réacteurs nucléaires et pièces détachées
            Réacteurs nucléaires
            Pièces détachées de réacteurs nucléaires
            Systèmes de refroidissement du réacteur
            Pièces détachées de cuves de réacteurs nucléaires
            Installations de chaudières
            Appareils de production d'eau chaude
            Chaudières génératrices de vapeur
            Générateurs de vapeur
            Installations auxiliaires pour chaudières
            Condenseurs de vapeur
            Machines utilisées pour le traitement des aliments, des boissons et du tabac et pièces accessoires
            Machines de traitement des aliments, des boissons et du tabac
            Machines de laiterie
            Écrémeuses centrifuges
            Machines de traitement des céréales ou des légumes secs
            Machines utilisées dans la fabrication de boissons alcoolisées ou à base de fruits
            Fours de cuisson, séchoirs pour produits agricoles et matériel de cuisson ou de chauffage
            Fours de cuisson
            Grils
            Séchoirs pour produits agricoles
            Machines pour la préparation ou la fabrication industrielle d'aliments ou de boissons
            Machines à couper les aliments
            Machines à trancher le pain
            Machines à trancher le lard
            Machines de traitement des aliments
            Machines pour la fabrication des pâtes alimentaires
            Machines de traitement du tabac
            Pièces pour machines de traitement des aliments, des boissons et du tabac
            Pièces pour machines de traitement des aliments
            Pièces pour machines de laiterie
            Pièces pour trayeuses
            Pièces pour machines de traitement des boissons
            Pièces pour machines de traitement du tabac
            Fourneaux, incinérateurs et fours industriels ou de laboratoire
            Brûleurs pour l'alimentation des foyers
            Incinérateurs de déchets
            Fours de fusion
            Fours à usages non domestiques
            Fours industriels
            Fours crématoires
            Pièces pour brûleurs, fourneaux ou fours
            Matériel de levage et de manutention et pièces détachées
            Matériel de levage et de manutention
            Palans et treuils
            Machines d'extraction, treuils à usage souterrain et cabestans
            Machines d'extraction et treuils à usage souterrain
            Machines d'extraction
            Treuils à usage souterrain
            Cabestans
            Crics et appareils de levage pour véhicules
            Systèmes de levage intégrés
            Vérins hydrauliques
            Vérins pneumatiques
            Vérins mécaniques
            Appareils de levage pour véhicules
            Grues, portiques mobiles et chariots équipés d'une grue
            Grues
            Grues portuaires
            Grues de quai
            Grues empileuses
            Grues à conteneurs
            Grues à tour
            Ponts roulants
            Grue roulante
            Portique roulant
            Portiques de levage
            Portiques mobiles
            Grues sur portique
            Grues montées sur véhicule
            Grues pour camions
            Ponts-grues
            Chariots élévateurs, chariots de manutention, tracteurs à plate-forme utilisés dans les gares
            Chariots élévateurs
            Chariot élévateurs
            Chariots de manutention
            Chariots équipés de matériel de manutention
            Tracteurs à plate-forme utilisés dans les gares
            Engins de transport indépendants
            Équipement pour véhicules de secours
            Ascenseurs, skips, monte-charges, escaliers mécaniques et trottoirs roulants
            Ascenseurs
            Dispositifs de levage pour baignoire
            Monte-charges
            Dispositifs mécaniques de levage
            Skips
            Dispositifs de levage de bennes
            Dispositifs de levage
            Escaliers mécaniques
            Trottoirs roulants
            Élévateurs et convoyeurs
            Élévateurs ou convoyeurs pneumatiques
            Convoyeurs
            Élévateurs ou transporteurs à godets à action continue
            Élévateurs ou transporteurs à courroie à action continue
            Convoyeurs blindés de taille pour mines
            Équipement pour transporteur
            Bandes convoyeuses
            Machines de levage, manutention, chargement ou déchargement
            Pousse-wagons et chariots-transbordeurs de mine
            Monorails ou remonte-pentes
            Monorail suspendu
            Télésièges
            Remonte-pentes
            Matériel d'enlèvement de torchères
            Carrousels de stockage et de recherche
            Équipement mécanique de manutention
            Machines de chargement ou de manutention
            Matériel de chargement
            Matériel de déchargement
            Chariots à prise latérale
            Matériel de manutention de conteneurs
            Pièces pour matériel de levage et de manutention
            Pièces pour grues
            Pièces pour chariots de manutention
            Pièces pour ascenseurs, skips ou escaliers mécaniques
            Pièces pour ascenseurs
            Pièces pour skips
            Pièces pour escaliers mécaniques
            Pièces pour trottoirs roulants
            Pièces pour transporteurs
            Pièces pour convoyeurs à bande
            Pièces pour convoyeurs à godets
            Pièces pour machines d'extraction et autre matériel de levage ou de manutention
            Godets, pelles, grappins et grips pour grues ou excavateurs
            Matériel de réfrigération et de ventilation
            Échangeurs de chaleur, matériel de climatisation et de réfrigération et matériel de filtration
            Échangeurs de chaleur et appareils de liquéfaction de l'air ou d'autres gaz
            Échangeurs de chaleur
            Pompes à chaleur
            Appareils de liquéfaction de l'air ou d'autres gaz
            Installations de climatisation
            Machines de climatisation de type fenêtre
            Machines de climatisation de type mural
            Unités de climatisation
            Appareils de climatisation pour véhicules
            Pièces pour machines de climatisation
            Registres
            Volets d'aération
            Matériel de réfrigération et de congélation
            Matériel de congélation
            Matériel de réfrigération
            Présentoirs frigorifiques
            Comptoirs frigorifiques
            Matériel industriel de réfrigération
            Machines et appareils de filtration ou de purification des gaz
            Épurateurs électrostatiques d'air et de gaz
            Appareils de filtration
            Filtres à air
            Filtres à gaz
            Chaudière de chauffage urbain
            Matériel de ventilation
            Matériel de désenfumage
            Ventilateurs à usages non domestiques
            Pièces pour ventilateurs
            Pièces pour matériel de réfrigération et de congélation et pompes à chaleur
            Pièces pour matériel de réfrigération
            Pièces pour matériel de congélation
            Pièces pour pompes à chaleur
            Machines-outils
            Machines-outils à laser et centres d'usinage
            Machines-outils à usage spécifique
            Centre d'usinage
            Centre d'usinage à broche horizontale
            Centre d'usinage à broche verticale
            Tours, machines à aléser et à fraiser
            Tours
            Tour CNC
            Machines à fileter ou à tarauder
            Fraiseuses
            Machines-outils pour le travail des métaux
            Machines-outils de finissage des métaux
            Machines à commande numérique pour le travail des métaux
            Machines à cintrer, à plier, à dresser ou à aplanir
            Machines à forger
            Machines à estamper
            Presses
            Presses hydrauliques
            Machines-outils à percer, à aléser ou à fraiser les métaux
            Machines-outils à percer les métaux
            Machines-outils à aléser les métaux
            Machines-outils à fraiser les métaux
            Centre d'usinage pour le travail des métaux
            Machines-outils à travailler les matériaux durs, excepté les métaux
            Machines-outils pour le travail de la pierre, de la céramique, du béton ou du verre
            Machines-outils pour le travail de la pierre
            Machines-outils pour le travail de la céramique
            Machines-outils pour le travail du béton
            Machines-outils pour le travail du verre
            Machines-outils pour le travail du bois, de l'os, du liège, du caoutchouc dur ou du plastique dur
            Machines-outils pour le travail du bois
            Machines-outils pour le travail de l'os
            Machines-outils pour le travail du liège
            Machines-outils pour le travail du caoutchouc dur
            Machines-outils pour le travail du plastique dur
            Outils à main pneumatiques ou à moteur
            Outils à main pneumatiques
            Outils à main électromécaniques
            Outils pour le brasage tendre, le brasage fort et le soudage, machines et matériel pour la trempe superficielle et la projection à chaud
            Matériel de brasage tendre et de brasage fort
            Matériel de brasage tendre
            Matériel de brasage fort
            Matériel de soudage
            Matériel de soudage électrique
            Matériel de soudage non électrique
            Machines pour la trempe superficielle
            Matériel de fusion
            Matériel de fusion pour plastique
            Machines de projection métallique
            Pièces et accessoires de machines-outils
            Supports pour outils
            Porte-outils de laboratoire
            Porte-éprouvettes pour bains
            Porte-pièces pour machines-outils
            Appareils diviseurs spéciaux pour machines-outils
            Pièces et accessoires de machines-outils pour le travail des métaux
            Pièces et accessoires de machines-outils pour le travail des matériaux durs
            Pièces pour scies articulées
            Pièces pour outils à main
            Pièces pour outils pneumatiques
            Machines pour l'industrie du textile, de l'habillement et du cuir
            Machines pour l'industrie textile
            Machines de traitement de matières textiles synthétiques
            Métiers à filer le textile
            Métiers à tisser
            Machines à tricoter
            Machines à coudre
            Machines à laver, machines de nettoyage à sec et sèche-linge de blanchisserie
            Installation de lavage
            Matériel de lavage
            Machines à laver
            Machines de nettoyage à sec
            Sèche-linge
            Matériel de repassage et de pliage du linge
            Matériel de pliage du linge
            Machines de finissage textile
            Machines à repasser
            Presses à repasser
            Pièces pour machines de l'industrie du textile et de l'habillement
            Machines de fabrication du papier ou du carton
            Pièces pour machines de fabrication du papier ou du carton
            Machines diverses à usage général et à usage spécial
            Appareils de distillation, de filtration ou de rectification
            Machines et appareils de filtration ou de purification de liquides
            Machines et appareils de filtration de liquides
            Appareils de filtration des boues de forage
            Hydrocyclones
            Appareils de filtration ou de purification de boissons
            Machines et appareils de filtration ou de purification de l'eau
            Appareils de filtration de l'eau
            Appareils de désaération
            Appareils de purification de l'eau
            Appareils de dessalement
            Matériel pour installation de filtration
            Filtres à huile, filtres à essence et filtres à air
            Filtres à huile
            Filtres à essence
            Filtres à aspiration d'air
            Matériel de recyclage
            Machines de nettoyage de bouteilles, machines d'emballage, de pesage et de pulvérisation
            Machines de nettoyage, de remplissage, d'emballage ou de conditionnement de bouteilles ou autres récipients
            Machines de nettoyage ou de séchage de bouteilles ou autres récipients
            Machines de remplissage ou de fermeture de bouteilles, de boîtes ou autres récipients
            Machines d'emballage ou de conditionnement
            Machines de cerclage
            Machines d'emballage
            Machines de conditionnement
            Machines de pesage et balances
            Machines de pesage
            Balances
            Bascules
            Balances de magasin
            Bascules continues
            Balances de vérification
            Machines à jet de vapeur ou de sable
            Matériel de pulvérisation
            Pistolets marqueurs
            Appareils mécaniques de projection, de dispersion ou de pulvérisation
            Appareils de dispersion de gaz
            Matériel de décontamination
            Appareils de nettoyage à eau sous pression
            Appareils de nettoyage à haute pression
            Appareils de désodorisation
            Centrifugeuses, machines de calandrage ou distributeurs automatiques
            Centrifugeuses
            Centrifugeuse de laboratoire et accessoires
            Centrifugeuses fixées au plancher
            Centrifugeuses de table
            Réducteurs pour centrifugeuses
            Équipement rotatif pour centrifugeuses
            Machines de calandrage
            Machines à laminer
            Distributeurs automatiques
            Distributeurs automatiques d'articles d'hygiène
            Distributeurs automatiques de timbres
            Distributeurs automatiques de produits
            Machines pour le traitement thermique de matériaux
            Machines pour le traitement thermique de gaz
            Fours et accessoires
            Étuves à vide
            Bains thermostatiques et accessoires
            Bobines de réfrigération
            Bains ultrasoniques
            Thermostats à immersion
            Refroidisseurs à immersion
            Circulateurs réfrigérés et circulateurs réfrigérés/chauffants
            Refroidisseurs/recycleurs
            Circulateurs à haute température
            Circulateurs chauffants
            Couvercles de bains
            Pièces pour machines à usage général
            Pièces pour centrifugeuses
            Pièces pour machines de calandrage
            Pièces pour machines à laminer
            Pièces pour machines de filtrage
            Pièces pour machines de purification
            Pièces pour machines de pulvérisation
            Poids pour machines de pesage
            Lave-vaisselle à usage non ménager
            Systèmes de commande et de contrôle, équipement d'impression et de graphisme, matériel bureautique et matériel de traitement de l'information
            Système de commande et de contrôle
            Système de contrôle des accès
            Système Scada ou équivalent
            Système de localisation de véhicules
            Système d'expédition
            Équipement d'impression et de graphisme
            Système d'impression sur feuille
            Presse à imprimer
            Postes de travail graphique
            Hectographes
            Machines à graver
            Presse à monnaie
            Matériel bureautique
            Matériel de traitement de l'information
            Système de gestion d'entrepôt
            Système de dépôt
            Unité de contrôle
            Unité de commande à distance numérique
            Distributeurs
            Distributeurs de boissons
            Distributeurs d'articles d'hygiène
            Dérouleurs de papier hygiénique
            Pièces pour lave-vaisselle et machines de nettoyage, de remplissage, d'emballage ou de conditionnement
            Pièces pour lave-vaisselle
            Pièces pour machines de nettoyage
            Pièces pour machines de remplissage
            Pièces pour machines d'emballage
            Pièces pour machines de conditionnement
            Générateurs de gaz
            Générateurs d'ozone
            Machines diverses à usage spécifique
            Machines à papier, d'imprimerie et de reliure et parties de machines
            Machines à relier
            Machines à brocher
            Machines à imprimer
            Machines d'impression offset
            Machines de composition
            Imprimantes de tickets
            Système de photocomposition
            Séchoirs pour bois, pâte à papier, papier ou carton
            Pièces pour machines à imprimer ou à relier
            Matériel électrique à usage spécifique
            Cage de Faraday
            Chambre anéchoïde
            Absorbant électromagnétique
            Machines pour l'industrie chimique
            Chlorateurs
            Installation de dosage
            Machines pour le travail du caoutchouc ou du plastique
            Machines pour la fabrication de fenêtres et encadrements en plastique
            Machines pour le travail du plastique
            Accessoires pour le contrecollage
            Contrecolleuses
            Machines à nettoyer diverses
            Tunnel de lavage
            Machines à nettoyer les plages
            Machines de traitement des eaux usées
            Dilacérateurs
            Dilacérateurs pour le traitement des eaux usées
            Presses à eaux usées
            Racloirs
            Mélangeurs
            Filtres à eaux usées
            Matériel d'oxygénation
            Précipitateurs
            Lits de sédimentation
            Équipement de traitement des boues
            Matériel pour pipelines
            Machines d'inspection de la surface intérieure de pipelines
            Machines de nettoyage de la surface intérieure de pipelines
            Robots industriels
            Système de levage de palettes
            Système de récupération de palettes
            Aspirateurs et cireuses à usage non ménager
            Aspirateurs à usage non ménager
            Cireuses à usage non ménager
            Pièces pour aspirateurs à usage non ménager
            Pièces pour cireuses à usage non ménager
            Équipement minier, équipement pour l'exploitation de carrières, matériel de construction
            Équipement minier
            Haveuses à charbon ou à roche, tunneliers et machines de forage ou de fonçage
            Machines de forage de puits
            Outils d'exploitation des têtes de puits
            Connecteurs de colonnes montantes
            Matériel d'achèvement de puits
            Matériel d'intervention sur puits
            Matériel d'essais de puits
            Appareils pour bloc obturateur de puits (BOP)
            Haveuses à charbon ou à roche
            Tunneliers
            Machines de percement
            Taupes
            Matériel de forage de roches
            Machines de fonçage
            Matériel de forage
            Plates-formes de production offshore
            Matériel offshore
            Unité de forage offshore
            Matériel de forage pétrolier
            Machines de forage
            Tour de forage
            Foreuses
            Matériel de tubage
            Dispositifs de suspension pour colonne de tubage perdue
            Matériel de plate-forme pétrolière
            Unités sur patins
            Modules montés sur patins
            Machines pour champs de pétrole
            Pompes submersibles
            Équipement sous-marin
            Systèmes de contrôle sous-marin
            Équipement de fonds de puits
            Soutènements miniers mobiles à commande hydraulique
            Machines de terrassement et d'excavation et pièces détachées
            Machines de terrassement
            Bulldozers
            Bouteurs biais
            Niveleuses-régleuses et niveleuses-surfaceuses
            Niveleuses automotrices
            Machines décapeuses
            Machines à bourrer
            Chargeuses à benne frontale
            Chargeuses à benne frontale à pelle rétrocaveuse
            Chargeuses à benne frontale sans pelle rétrocaveuse
            Pelles mécaniques, excavateurs, chouleurs et machines de mines
            Pelles mécaniques
            Chouleurs mécaniques
            Machines excavatrices
            Excavateurs mécaniques
            Machines et équipement pour la construction
            Machines de génie civil
            Sonnettes de battage
            Machines de revêtement routier
            Engins de nivelage
            Épandeuses de gravillons
            Machines de pavage
            Rouleaux pour routes
            Rouleaux mécaniques
            Chasse-neige et balayeuses soufflantes
            Chasse-neige
            Balayeuses soufflantes
            Machines pour l'arrachage des pieux
            Compacteurs
            Machines pour la pose de câbles
            Équipement de construction
            Matériel de suspension de pont
            Matériel de démantèlement
            Matériel d'irrigation
            Matériel de drainage
            Équipement de piscine
            Équipement de parcs et de terrains de jeux
            Matériel d'entretien de terrains
            Matériel préfabriqué
            Installations hydrauliques
            Matériel hydraulique
            Ensembles d'équipement
            Machines de traitement des minéraux et de formage des moules de fonderie
            Machines de traitement des minéraux
            Machines de tri et de criblage
            Mélangeuses de gravier et de bitume
            Mélangeuses de béton ou mortier
            Mélangeuses de ciment
            Rectifieuses
            Pulvérisateurs de charbon
            Moules de fonderie
            Machines de formage des moules de fonderie
            Véhicules à chenilles
            Pièces pour machines pour les industries excavatrices et la construction
            Pièces pour machines de forage
            Pièces pour machines de forage de puits
            Bouchons de support
            Trépans industriels
            Pivots de forage
            Foreurs en fer
            Tables rotatives
            Supports de conduites de boues
            Équipement de raccordement
            Pièces de machines d'extraction de puits
            Suspensions de cuvelage
            Équipements de suspension pour colonne de tubage perdue
            Tensionneurs de riser de production
            Têtes de puits
            Équipement de raccordement de riser de production
            Système de commande de tête de puits
            Équipement pour têtes de puits
            Systèmes de levage d'appareils de forage
            Pièces pour haveuses à charbon ou à roche
            Pièces pour haveuses à charbon
            Pièces pour haveuses à roche
            Pièces pour tunneliers
            Pièces pour machines de traitement de minerais
            Pièces pour machines de fonçage
            Pièces pour excavateurs
            Machines de métallurgie et pièces associées
            Machines à laminer les métaux
            Pièces pour machines à laminer les métaux
            Machines à couler
            Pièces pour machines à couler
            Équipement d'atelier
            Équipement pour le travail du bois
            Ponceuses
            Matériel de sciage
            Matériel de cordonnerie
            Outils à moteur
            Matériel de forge
            Matériaux et structures de construction; produits auxiliaires pour la construction (à l'exception des appareils électriques)
            Matériaux de construction et articles connexes
            Matériaux de construction
            Matériaux de bâtiment
            Briques
            Ciment
            Ciment de forage
            Céramique
            Peintures et revêtements muraux
            Isolants et pièces isolantes
            Isolants
            Isolants éléctriques
            Matériaux d'isolation thermique
            Pièces isolantes électriques
            Verre isolant
            Blocs de pavage
            Carreaux
            Mortier (construction)
            Dalles en céramique
            Structures de construction diverses
            Abris
            Éléments d'abris
            Sections profilées
            Revêtements de sol
            Revêtements de sol rigides
            Faux planchers
            Linoléum
            Parquet
            Cloisons
            Murs de cloisonnement
            Toit
            Charpentes de toit
            Soutènements de toit
            Fermes de toit
            Matériaux pour toiture
            Bardeaux
            Isolation acoustique
            Solives
            Matériaux de construction routière
            Matériaux de pavage
            Dalles de pavage
            Pierres de pavage
            Cailloux pour l'empierrement des routes
            Dalles
            Matériaux enrobés
            Matériaux routiers enrobés
            Enrobés routiers
            Produits d'enrobage
            Perles de verre
            Bitume et asphalte
            Bitume
            Asphalte
            Matériaux de réparation routière
            Matériaux de surfaçage routier
            Enduit superficiel
            Matériaux d'entretien routier
            Matériaux d'entretien routier hivernal
            Béton
            Béton prêt à l'emploi
            Produits en béton
            Pieux en béton
            Conduites et raccords en béton
            Dalles en béton
            Infrastructures de bâtiment
            Conduits
            Matériel de plomberie et de chauffage
            Matériel de plomberie
            Matériel de chauffage
            Volets roulants
            Claires-voies
            Systèmes de pulvérisation d'eau
            Monte-personnes d'escalier
            Stores d'extérieur
            Auvents
            Aménagements intérieurs de bâtiment
            Rails pour rideaux et tentures
            Rails pour rideaux
            Dispositifs de protection contre le soleil
            Conduites d'égouts
            Chambres à eaux d'égouts
            Éléments d'aqueducs
            Bouchons en fer ductile
            Raccords angulaires
            Produits connexes aux matériaux de construction
            Canalisation
            Canalisation électrique
            Charpentes
            Palettes
            Poteaux (construction)
            Pipelines, tuyauterie, conduites, gainage, tubage et articles connexes
            Pipelines
            Gazoducs
            Réseaux de distribution de gaz
            Canalisations d'eau
            Pipelines subaquatiques
            Pipelines sous-marins
            Conduites à haute pression
            Conduites à basse pression
            Râcleurs de conduites
            Dispositifs de lancement de râcleurs
            Dispositifs de réception de râcleurs
            Sas pour râcleurs
            Tuyauterie
            Accessoires de tuyauterie
            Conduites de distribution
            Conduites de déversement
            Trous d'homme en grès vitrifié
            Conduites d'eau potable
            Tuyaux et raccords
            Conduites
            Tuyaux d'assèchement
            Tuyaux de drainage
            Système de drainage
            Conduites de chauffage à distance
            Conduites de chauffage
            Canalisations d'égouts
            Conduites à vapeur et à eau
            Conduites basse pression
            Conduites de distribution et accessoires
            Raccords de tuyauterie
            Colliers de serrage pour tuyaux
            Raccords pour tuyaux
            Joints de tuyauterie
            Joints isolants
            Gainage et tubage
            Gainage
            Tubage
            Matériel tubulaire
            Tubes et raccords
            Tuyaux, conduites ascendantes et manchons
            Tuyaux
            Tuyaux de forage
            Conduites ascendantes
            Conduites ascendantes souples
            Manchons
            Conduites de pétrole à grande distance
            Accessoires de tuyauterie divers
            Raccords
            Brides
            Adaptateurs de brides
            Brides et colliers de réparation
            Coudes, pièces en T et accessoires de tuyauterie
            Coudes
            Plaques, tôles, bandes et feuilles connexes aux matériaux de construction
            Plaques (construction)
            Tôles (construction)
            Bandes
            Feuilles
            Panneaux
            Films (construction)
            Matériaux de construction divers
            Matériaux divers de construction en bois
            Contreplaqué
            Bois stratifié
            Panneaux de particules
            Panneaux de fibres
            Bois densifié
            Panneaux de parquet
            Autres matériaux de construction divers
            Mousse de PVC
            Clous
            Produits structurels
            Structures et pièces structurelles
            Bâtiments préfabriqués
            Bâtiments modulaires préfabriqués
            Cabines
            Cellules
            Hôpital de campagne
            Cuisines de campagne
            Serres
            Produits structurels et pièces structurelles, à l'exception des bâtiments préfabriqués
            Pont
            Sections de pont
            Structures de pont
            Tours, mâts en treillis, derricks et pylônes
            Derricks
            Mâts de forage
            Mâts de forage statiques
            Pylônes, poteaux et piquets
            Pylônes
            Pylônes pour lignes électriques
            Socles pour pylônes
            Poteaux pour lignes électriques aériennes
            Poteaux
            Poteaux électriques
            Piquets
            Tours en métal
            Châteaux d'eau
            Poutres
            Mâts
            Pylônes de radio ou de télévision
            Pylônes de radio
            Pylônes de télévision
            Mâts en treillis
            Structures et pièces
            Échafaudages
            Contre-fiches cintrées
            Trépieds cintrés
            Supports
            Brides d'attache pour tuyaux
            Équipement pour échafaudages
            Colliers de serrage cintrés
            Structures d'échafaudage
            Supports pour tuyauterie
            Structures diverses
            Abris d'autobus
            Cabines téléphoniques
            Écrans de sécurité
            Pièces structurelles
            Revêtement métallique
            Vannes
            Portes d'écluse
            Écluses de vidange
            Portes d'écluse de vidange
            Palplanches
            Rideaux de palplanches
            Angles et sections
            Angles
            Sections
            Menuiserie pour la construction
            Fenêtres, portes et articles connexes
            Fenêtres
            Encadrements de fenêtres
            Double vitrage
            Portes-fenêtres
            Portes
            Panneaux de portes
            Encadrements de portes
            Portes moustiquaires
            Seuils de porte
            Portes coupe-feu
            Portes coulissantes
            Portes de garage
            Portails
            Portails d'entrée
            Volets
            Seuils
            Charpenterie pour la construction
            Panneaux de clôture prêts à poser
            Poutres de toiture en bois
            Escaliers
            Câble, fil métallique et produits connexes
            Articles en fils métalliques
            Toron tressé
            Fil de fer pour clôture
            Fil de fer barbelé
            Filet en métal
            Clôture en treillis métallique
            Toile métallique
            Fil machine
            Accessoires de soudage
            Matériaux de soudage
            Matériaux de brasage tendre ou de brasage fort
            Matériaux de brasage tendre
            Matériaux de brasage fort
            Quincaillerie
            Enclumes
            Forge portative
            Grilles
            Articles de quincaillerie
            Serrurerie
            Ferronnerie
            Élingues en fer ou en acier
            Conducteurs
            Câbles et produits connexes
            Câble
            Accessoires pour câble
            Conduites de câble
            Raccords de câbles
            Gaines de câble
            Attaches pour câble
            Barres, tiges, fils et profilés pour la construction
            Barres (construction)
            Tiges
            Fil métallique
            Profilés
            Produits fabriqués divers et éléments connexes
            Articles de salle de bains et de cuisine
            Appareils sanitaires
            Robinets
            Baignoires
            Lavabos
            Receveurs de douche
            Bidets
            Lunettes, abattants, cuvettes et réservoirs de chasse d'eau de WC
            Sièges de WC
            Abattants de WC
            Cuvettes de WC
            Réservoirs de chasse d'eau
            Urinoirs
            Produits utilisés dans la construction
            Coffres, cassettes de sûreté et portes blindés ou armés
            Coffres-forts
            Portes blindées ou armées
            Coffres de valeurs
            Consignes et coffres
            Consignes
            Coffres
            Coffres à valeurs
            Coffrets de sécurité
            Coffres à documents
            Caisses pour argent liquide
            Boîtes à lettres
            Article divers
            Cloches
            Échelles
            Escaliers pliants
            Escabeaux
            Équipement de manutention de marchandises
            Plates-formes de manutention de marchandises
            Accessoires en câble pour la manutention de marchandises
            Panneaux de signalisation et articles connexes
            Plaques indicatrices
            Plaques d'adresse
            Éléments de trous d'homme
            Couvercles de bouches d'incendie
            Boîtes de délimitation
            Cadres de trous d'homme
            Couvercles de trous d'homme
            Plaques d'égouts
            Couvercles d'accès
            Barreaux d'échelle en fer pour trous d'homme
            Poinçons en métal
            Timbres en caoutchouc
            Formes
            Anodes sacrifiées
            Coffrets-compteurs et ruban
            Coffrets-compteurs
            Ruban adhésif
            Bande réfléchissante
            Anneaux, joints, bracelets, baguettes et masses de scellement
            Anneaux élastiques
            Anneaux de renfort autoadhésifs
            Joints en caoutchouc
            Bracelets en caoutchouc
            Masses de scellement
            Baguettes en plastique
            Plaques de blindage
            Plaques de recouvrement
            Paliers de roulement
            Microbilles
            Roulements à rouleaux
            Acier doux
            Flans de monnaie
            Boîtes réceptrices de monnaie
            Étançons et étais miniers
            Étançons
            Étançons miniers
            Étais miniers
            Chenilles
            Produits en fonte
            Équipements divers de protection contre l'incendie
            Échelles à plate-forme
            Échelles d'incendie
            Dispositifs de protection contre l'incendie
            Tuyaux d'incendie
            Bouches d'incendie
            Outils, serrures, clés, charnières, fermoirs, chaînes et ressorts
            Outils
            Outils à main
            Bêches et pelles
            Bêches
            Pelles
            Fourches de jardinage
            Pioches, pics, houes, râteaux et râteaux de plage
            Pioches
            Pics
            Houes
            Râteaux
            Râteaux de plage
            Haches
            Scies à main
            Lames de scies à main
            Outils à main divers
            Burins
            Pinces
            Pinces à sertir
            Marteaux
            Mâchoires pour fil métallique
            Clés de serrage
            Outils pour travaux routiers
            Pointes à poinçonner le revêtement routier
            Limes ou râpes
            Tournevis
            Trépans, embouts de tournevis et autres accessoires
            Trépans
            Embouts de tournevis
            Porte-outils
            Boîtes à outils
            Outils à pédale
            Manches d'outils et pièces d'outils
            Manches d'outils
            Pièces d'outils
            Serrures, clés et charnières
            Cadenas et serrures divers
            Serrures
            Serrures de portes
            Verrous de sécurité électroniques
            Verrous de sécurité renforcés
            Serrures pour mobilier
            Cadenas et chaînes
            Cadenas
            Fermoirs, pièces pour serrures et clés
            Fermoirs
            Clés
            Pièces pour cadenas
            Pièces pour serrures
            Charnières, ferrures et raccords
            Charnières
            Ferrures
            Raccords
            Attaches
            Attaches filetées
            Vis à bois
            Crochets à vis ou bagues à pas de vis
            Vis autotaraudeuses
            Boulons
            Ensembles de raccordements à brides
            Boulons et vis
            Tire-fonds et vis
            Écrous
            Articles filetés en fer ou en acier
            Attaches non filetées
            Rivets
            Rondelles
            Goupilles
            Éclisses en acier
            Attaches en cuivre
            Chaînes
            Chaîne à articulations
            Éléments de chaîne
            Ressorts
            Citernes, réservoirs, conteneurs; radiateurs et chaudières de chauffage central
            Citernes, réservoirs, conteneurs et cuves sous pression
            Citernes
            Cylindres à air
            Cylindres à air comprimé
            Appareils respiratoires
            Réservoirs de stockage
            Réservoirs à huile
            Réservoirs à boues
            Cuves à eau
            Réservoirs
            Bouteilles de gaz liquéfié
            Bouteilles de gaz
            Réservoirs à gaz
            Grands conteneurs
            Silos
            Conteneurs réfrigérés
            Citernes à eau
            Conteneurs à marchandises standard
            Conteneurs de stockage
            Conteneurs à eau
            Conteneurs sur roues
            Bennes à déchets
            Conteneurs à déchets
            Tonneaux en métal
            Caisses de stockage
            Système de stockage de conteneurs
            Machines à empiler
            Cuves sous pression
            Cuves sous pression en acier
            Fûts en métal
            Fûts de déchets
            Boîtiers
            Cartons
            Compartiments pour compteurs
            Boîtiers préfabriqués
            Conteneurs légers, bouchons, couvercles pour conteneurs, cuves et couvercles
            Conteneurs légers
            Bouchons, couvercles pour conteneurs, cuves et couvercles
            Bouchons
            Obturateurs à vis
            Couvercles pour conteneurs
            Couvercles
            Capsules en plastique
            Boîtes métalliques
            Boîtes pour aliments
            Cuves
            Autres conteneurs
            Caisses
            Enrouleurs de câbles
            Caisses à claire-voie
            Tonneaux en bois
            Caisses-palettes
            Radiateurs et chaudières pour chauffage central et pièces détachées
            Radiateurs et chaudières
            Radiateurs
            Radiateurs pour chauffage central
            Radiateurs non électriques pour chauffage central
            Pièces détachées de radiateurs pour chauffage central
            Chaudières
            Chaudières à eau
            Chaudières pour chauffage central
            Pièces détachées de chaudières pour chauffage central
            Systèmes de récupération de chaleur
            Équipement de récupération de chaleur
            Peintures, vernis et mastics
            Peintures
            Peinture de marquage routier
            Peintures à usage artistique
            Émail et peintures transparentes
            Peintures à l'huile et à l'eau
            Peintures à l'huile
            Peintures à l'eau
            Peintures scolaires
            Assortiments de couleurs
            Couleurs pour signalisation
            Articles pour peintres et tapissiers
            Vernis
            Mastics, matières de charge, ciment de scellement et diluants
            Mastics, matières de charge, ciment de scellement
            Mastics
            Matières de charge
            Ciment de scellement
            Coulis de ciment
            Solvants
            Décapant
            Diluants
            Pierre de construction, chaux, gypse et ardoise
            Pierre de construction
            Marbre et pierre calcaire de construction
            Marbre
            Travertin
            Pierres de construction diverses
            Granit
            Grès
            Basalte
            Bordures
            Pierre calcaire, gypse et craie
            Pierre calcaire et gypse
            Gypse
            Chaux
            Chaux en poudre
            Pierre calcaire
            Craie et dolomie
            Craie
            Dolomie
            Ardoise
            Travaux de construction
            Travaux de préparation de chantier
            Travaux de démolition de bâtiments et travaux de terrassement
            Travaux de démolition, travaux de préparation et de dégagement de chantier
            Travaux de démolition
            Travaux de préparation et de dégagement de chantier
            Travaux de démolition à l'explosif et travaux de déblaiement consécutifs
            Travaux de démolition à l'explosif
            Travaux de déblaiement
            Travaux de dégagement de chantier
            Travaux d'enlèvement de gravats
            Travaux de débroussaillage
            Travaux de stabilisation des sols
            Travaux d'assèchement des sols
            Travaux d'étude géotechnique
            Travaux de préparation de sites miniers
            Travaux préparatoires de viabilité
            Travaux d'aménagement du terrain
            Travaux de démantèlement
            Travaux de démantèlement d'installations militaires
            Travaux de démantèlement d'installations de sécurité
            Travaux de fouille et de terrassement
            Travaux de creusement de tranchées
            Travaux de décapage de terre
            Travaux de décapage de terre végétale
            Travaux de remblayage et de mise en condition du terrain
            Travaux de remblayage
            Travaux de mise en condition du terrain
            Travaux de mise en état du chantier
            Travaux de décontamination du sol
            Remise en valeur de terrains vagues
            Travaux de remise en état du terrain
            Travaux d'excavation
            Travaux de fossoyage
            Travaux de fouille en excavation
            Dressement de talus
            Talutage
            Travaux d'excavation sur sites archéologiques
            Travaux de terrassement
            Déblai-remblai
            Travaux d'aménagement paysager
            Travaux d'aménagement paysager d'espaces verts
            Travaux d'aménagement paysager de parcs
            Travaux d'aménagement paysager de jardins
            Travaux d'aménagement paysager de jardins sur les toits
            Travaux d'aménagement paysager de cimetières
            Travaux d'aménagement paysager de terrains de sport et d'aires de loisirs
            Travaux d'aménagement paysager de terrains de golf
            Travaux d'aménagement paysager de terrains d'équitation
            Travaux d'aménagement paysager de terrains de jeux
            Travaux d'aménagement paysager de routes et d'autoroutes
            Travaux d'aménagement paysager d'aéroports
            Travaux de chantier
            Travaux de sondage et de forage de reconnaissance
            Travaux de sondage expérimental
            Travaux de forage de reconnaissance
            Travaux de construction complète ou partielle et travaux de génie civil
            Travaux de construction de bâtiments
            Travaux de construction d'immeubles collectifs et de maisons individuelles
            Travaux de construction de maisons
            Travaux de construction de logements-foyers
            Travaux de construction complète de maisons
            Travaux de construction de salles de bains
            Travaux de construction de porches
            Travaux de construction d'immeubles collectifs
            Travaux de construction d'appartements
            Travaux de construction de bâtiments multifonctionnels
            Travaux de développement urbain
            Travaux de construction de saunas
            Travaux de construction de bâtiments destinés aux loisirs, aux sports, à la culture, à l'hébergement et de restaurants
            Construction d'équipements pour les loisirs
            Travaux de construction de centres de loisirs
            Travaux de construction de parcs à thèmes
            Travaux de construction de parcs d'attractions
            Installation récréative
            Travaux de construction de cinémas
            Travaux de construction de casinos
            Travaux de construction de bâtiments de loisirs
            Travaux de construction de centres de divertissements
            Travaux de construction de centres récréatifs
            Travaux de construction de billetteries
            Ouvrages de protection contre le soleil
            Travaux de construction d'installations sportives
            Travaux de construction d'installations sportives monovalentes
            Travaux de construction de patinoires
            Travaux de construction de piscines
            Travaux de marquage sportif
            Travaux de construction d'installations sportives polyvalentes
            Travaux de construction d'ouvrages pour terrain de sports
            Travaux de construction de gymnases
            Travaux de construction d'installations de sports d'hiver
            Travaux de construction de stades
            Travaux de construction de palais des sports
            Installation de vestiaires
            Réparation et entretien d'infrastructures sportives
            Travaux de construction de bâtiments à usage artistique et culturel
            Travaux de construction de bâtiments destinés aux expositions
            Travaux de construction de galeries d'art
            Travaux de construction de parcs des expositions
            Travaux de construction de musées
            Travaux de construction de monuments historiques ou de mémoriaux
            Travaux de construction de bâtiments destinés aux activités artistiques
            Travaux de construction d'auditoriums
            Travaux de construction de theâtres
            Travaux de construction de bibliothèques
            Travaux de construction de bibliothèques multimédia
            Travaux de construction de salle de conférences
            Bâtiments présentant un intérêt historique ou architectural particulier
            Travaux de construction de monuments préhistoriques
            Travaux de construction de monuments industriels
            Travaux de construction de palais
            Travaux de construction de châteaux
            Travaux de construction de bâtiments religieux
            Travaux de construction d'églises
            Hôtels et restaurants
            Travaux de construction de bâtiments destinés à l'hébergement
            Travaux de construction d'hôtels
            Travaux de construction de foyers
            Travaux de construction de logements pour séjours de courte durée
            Travaux de construction de restaurants et d'établissements similaires
            Travaux de construction de restaurants
            Travaux de construction de cantines
            Travaux de construction de cafétarias
            Transformation de cuisines ou de restaurants
            Travaux de construction de pavillons
            Travaux de construction de locaux commerciaux, d'entrepôts et de bâtiments industriels, de bâtiments liés aux transports
            Travaux de construction de locaux commerciaux
            Travaux de construction de magasins
            Travaux de construction de centres commerciaux
            Travaux de construction de boutiques
            Travaux de construction de bureaux de poste
            Travaux de construction de banques
            Travaux de construction de marchés
            Travaux de construction de marchés couverts
            Travaux de construction de marchés à ciel ouvert
            Travaux de construction d'immeubles de bureaux
            Travaux de construction d'entrepôts et de bâtiments industriels
            Entrepôts frigorifiques
            Travaux de construction d'entrepôts
            Travaux de construction de dépôts
            Travaux de construction d'abattoirs
            Travaux de construction de bâtiments agricoles
            Travaux de construction de granges
            Travaux de construction d'étables
            Travaux de construction de bâtiments industriels
            Travaux de construction d'unités industrielles
            Travaux de construction d'ateliers
            Travaux de construction d'entrepôts de marchandises
            Travaux de construction de stations de recyclage
            Travaux de construction d'installations de compostage
            Bâtiments liés aux activités de transport
            Travaux de construction de bâtiments liés aux transports routiers
            Travaux de construction de gares routières
            Travaux de construction de parkings à étages
            Travaux de construction de bâtiments d'aire de services
            Travaux de construction de dépôts d'autobus
            Travaux de construction d'abris-bus
            Travaux d'installation de passerelles
            Travaux de construction de bâtiments liés aux transports ferroviaires
            Travaux de construction de gares de chemin de fer
            Travaux de construction de terminaux ferroviaires
            Travaux de construction de bâtiments liés aux transports aériens
            Travaux de construction de bâtiments aéroportuaires
            Travaux de construction de tours de contrôle d'aéroport
            Travaux d' installation de comptoirs d'enregistrement d'aéroport
            Travaux de construction de bâtiments liés aux transports par voie d'eau
            Travaux de construction de terminaux de ferry
            Travaux de construction de terminaux Ro-Ro
            Travaux de construction de bâtiments liés à plusieurs modes de transport
            Travaux de construction de hangars d'entretien
            Travaux de construction de dépôts de service
            Travaux d'installation de passerelles pour passagers
            Installation de locaux pour le personnel
            Travaux de construction d'établissements d'enseignement et de centres de recherche
            Travaux de construction de jardins d'enfants
            Travaux de construction de bâtiments scolaires
            Travaux de construction d'écoles primaires
            Travaux de construction d'écoles secondaires
            Travaux de construction d'écoles spécialisées
            Construction d'établissements d'enseignement supérieur
            Travaux de construction de collèges professionnels
            Travaux de construction de collèges techniques
            Construction de bâtiments universitaires
            Travaux de construction d'instituts polytechniques
            Travaux de construction d'amphithéâtres
            Travaux de construction de laboratoires de langues
            Travaux de construction de centres de formation continue
            Construction de centres de recherche
            Travaux de construction de bâtiments de laboratoire
            Travaux de construction d'équipements de recherche et d'essai
            Installations scientifiques
            Travaux d'installation de salles blanches
            Travaux de construction de stations météorologiques
            Travaux de construction de cité universitaire
            Travaux de construction de halls d'entrée
            Construction d'équipements de formation
            Travaux de construction de bâtiments liés à la santé et aux services sociaux, de crématoriums et de toilettes publiques
            Travaux de construction de bâtiments liés à la santé
            Travaux de construction de spas
            Travaux de construction de bâtiments médicaux spécialisés
            Travaux de construction de cliniques
            Travaux de construction d'équipements hospitaliers
            Travaux de construction de salles d'opération
            Travaux de construction d'unités de soins intensifs
            Travaux de construction de salles de dépistage et de diagnostic
            Travaux de construction de salles de dépistage
            Travaux de construction de salles de radioscopie
            Travaux de construction de salles de pathologie
            Travaux de construction de salles de médecine légale
            Travaux de construction de salles de cathétérisme
            Construction de bâtiments pour les services sociaux
            Travaux de construction de foyers et de structures d'accueil à caractère social
            Travaux de construction de maisons de retraite
            Travaux de construction de centres de soins
            Travaux de construction de foyers résidentiels
            Travaux de construction de foyers pour enfants
            Travaux de construction d'établissements sociaux, excepté foyers et structures d'accueil à caractère social
            Travaux de construction de foyers de jour
            Travaux de construction de centres administratifs
            Travaux de construction de crématorium
            Cimetière
            Toilettes publiques
            Travaux de construction de bâtiments destinés aux institutions d'ordre public ou aux services de secours et de bâtiments militaires
            Travaux de construction de bâtiments destinés aux institutions d'ordre public ou aux services de secours
            Travaux de construction de bâtiments destinés aux institutions d'ordre public
            Travaux de construction de commissariats de police
            Travaux de construction de tribunaux
            Travaux de construction de prisons
            Édifices parlementaires et salles de réunion publiques
            Travaux de construction de bâtiments destinés aux services de secours
            Travaux de construction de centres de secours des sapeurs-pompiers
            Travaux de construction de centres ambulanciers
            Travaux de construction de postes de secours en montagne
            Travaux de construction de postes de secours en mer
            Travaux de construction de bâtiments des services de secours
            Travaux de construction de postes de garde-côtes
            Travaux de construction de postes de secours et de sauvetage
            Travaux de construction de phares
            Abris de protection
            Travaux de construction de bâtiments et d'installations militaires
            Travaux de construction de bunkers militaires
            Travaux de construction d'abris militaires
            Travaux de construction de défenses en tranchée
            Travaux de construction de bâtiments gonflables
            Ouvrages d'art et de génie civil
            Travaux de construction de ponts et de tunnels, de puits et de passages souterrains
            Travaux de construction de ponts
            Travaux de construction de ponts
            Travaux de construction de ponts routiers
            Travaux de construction de ponts de chemin de fer
            Travaux de construction de passerelles pour piétons
            Travaux de construction de ponts en fer
            Travaux de construction de ponts en acier
            Travaux de construction de ponts à bascule
            Travaux de construction de ponts pour conduites
            Travaux de rénovation de ponts
            Travaux de construction de viaducs
            Travaux de construction de viaducs routiers
            Travaux de construction de viaducs ferroviaires
            Travaux de construction de tunnels, de puits et de passages souterrains
            Excavations couvertes ou partiellement couvertes
            Passage inférieur
            Excavations ferroviaires couvertes ou partiellement couvertes
            Excavations routières couvertes ou partiellement couvertes
            Ponceaux
            Puits
            Travaux de construction de tunnels
            Travaux de construction de tunnels routiers
            Travaux de construction de tunnels ferroviaires
            Travaux de construction de tunnels pour piétons
            Travaux de construction de tunnels pour canal
            Travaux de construction de tunnels sous-fluviaux
            Travaux de construction de tunnels sous-marins
            Percement de tunnels
            Travaux de construction de revêtements de tunnels
            Ouvrages souterrains autres que tunnels, puits et passages souterrains
            Travaux de construction d'ouvrages de génie civil, excepté ponts, tunnels, puits et passages souterrains
            Travaux de construction d'usines de traitement des déchets
            Travaux de construction de décharges
            Travaux de génie militaire
            Travaux de génie pour installations de sécurité
            Travaux de construction d'ouvrages
            Assemblage de structures en métal
            Installation de structures en métal
            Ossatures
            Ossatures métalliques
            Travaux de gros œuvre
            Travaux de construction de parkings
            Travaux de construction de parkings souterrains
            Travaux de construction de parkings de dissuasion
            Travaux de construction de stations radar
            Structures en béton armé
            Travaux de construction de chenils
            Travaux de construction d'aires de service
            Travaux de construction d'aires de service d'autoroute
            Travaux de construction de stations-services
            Assemblage et montage de structures préfabriquées
            Constructions préfabriquées
            Éléments et composants préfabriqués
            Éléments préfabriqués
            Composants préfabriqués
            Travaux de construction de pipelines, de lignes de communication et d'énergie, d'autoroutes, de routes, d'aérodromes et de voies ferrées; travaux de nivelage
            Travaux de construction de pipelines, de lignes de communications et de lignes électriques
            Travaux généraux de construction pour pipelines
            Travaux de pose de conduites
            Travaux de démontage et de remplacement de pipelines
            Installation de réseau de conduites
            Travaux de remplacement de pipelines
            Travaux de construction d'oléoducs et de gazoducs
            Travaux de construction d'oléoducs
            Travaux de construction de gazoducs
            Travaux de construction de canalisations d'alimentation en gaz
            Gazomètres
            Ouvrages annexes pour la distribution de gaz
            Travaux de construction de conduites d'eau et de canalisations d'eaux usées à grande distance
            Travaux de construction de lignes électriques
            Travaux de canalisations d'air comprimé
            Travaux relatifs à des circuits pneumatiques de distribution de courrier
            Travaux de construction de lignes de communications
            Ouvrages annexes de pipelines et de câbles
            Ouvrages annexes pour canalisations d'eau
            Travaux d'irrigation
            Travaux de construction de canalisations d'irrigation
            Travaux de construction de canalisations d'eaux pluviales
            Travaux de construction de réseaux de chauffage urbain
            Installations de chauffage
            Travaux de construction de stations de transfert thermique
            Travaux relatifs aux conduites d'alimentation en eau
            Travaux de remise à neuf de conduites d'eau
            Travaux de construction de stations de pompage
            Travaux de construction de châteaux d'eau
            Travaux de construction de châteaux d'eau pour l'eau potable
            Ouvrages annexes pour lignes électriques
            Construction de lignes aériennes
            Travaux de construction de sous-stations
            Sous-station de transformation
            Travaux de construction de lignes téléphoniques et de lignes de communications et ouvrages annexes
            Travaux de construction de lignes téléphoniques
            Lignes téléphoniques pour bornes d'appel d'urgence
            Lignes de télédistribution par câble
            Montage d'antennes
            Ouvrages annexes de télédiffusion
            Ouvrages annexes de télécommunications
            Travaux de construction de stations de base de téléphonie mobile
            Travaux de construction d'égouts
            Travaux d'assainissement
            Travaux de construction de canalisations d'eaux usées
            Travaux de construction de stations d'épuration des eaux usées
            Station de traitement des eaux usées
            Station de traitement des boues
            Travaux de construction de stations de pompage des eaux usées
            Travaux de construction d'émissaires
            Travaux de traitement de l'eau
            Station de pompage des eaux résiduaires
            Travaux de construction de conduites d'eaux d'égouts
            Travaux de construction pour système de drainage
            Travaux de drainage et travaux de surface
            Ouvrages de drainage
            Travaux de construction de tuyaux de drainage
            Travaux de construction de bassins d'eaux pluviales
            Travaux d'installations sanitaires
            Station de transfert des déchets
            Travaux de construction, de fondation et de revêtement d'autoroutes, de routes
            Travaux de construction d'autoroutes, de routes
            Travaux de construction d'autoroutes
            Travaux de construction de routes
            Travaux de construction de routes principales
            Travaux de construction de rocades
            Travaux de construction de routes secondaires
            Travaux de construction d'artères de grande circulation
            Travaux de construction d'intersections de routes
            Travaux de construction de carrefours dénivelés
            Travaux de construction de carrefours en T
            Travaux de construction de carrefours giratoires
            Travaux de construction de routes transversales
            Travaux de construction de routes nationales
            Travaux de construction d'autoroutes aériennes
            Entretien des routes nationales
            Travaux routiers
            Travaux d'entretien routier
            Travaux de réparation de routes
            Travaux de construction de passages supérieurs
            Ouvrages de modération du trafic
            Chemins et autres aires empierrées
            Travaux de construction de chemins piétonniers
            Travaux de construction de pistes cyclables
            Travaux de revêtement divers
            Travaux de revêtement d'autoroutes
            Travaux de revêtement de routes
            Travaux de marquage routier
            Travaux de pavage et de resurfaçage de chaussées
            Travaux de resurfaçage de chaussées
            Travaux de construction de routes à deux chaussées séparées
            Travaux de construction de routes à chaussée unique
            Travaux de construction de routes d'accès
            Travaux de construction de bretelles
            Travaux de construction de revêtements de surface
            Entretien des accotements
            Travaux de revêtements, excepté revêtements de chaussées
            Travaux de resurfaçage
            Travaux de revêtement de rues
            Travaux de revêtement de chemins piétonniers
            Travaux de construction de voies piétonnes
            Travaux de construction de passages supérieurs pour piétons
            Travaux de construction de zones piétonnes
            Travaux de marquage d'emplacements de parking
            Pose de barrières routières
            Installation de panneaux de signalisation
            Installation de bollards
            Installation de dispositifs de sécurité
            Installation de mobilier urbain
            Installation de signalisation routière
            Travaux de fondation d'autoroutes, de routes, de rues et de chemins piétonniers
            Travaux de fondation d'autoroutes
            Travaux de fondation de routes
            Travaux de fondation de rues
            Travaux de fondation de chemins piétonniers
            Travaux de construction de voies ferrées et de systèmes de transport par câble
            Ouvrages ferroviaires
            Chemin de fer interurbain
            Travaux de construction de chemins de fer urbain
            Travaux de construction de dépôts ferroviaires
            Démolition de voies ferrées
            Travaux de construction de remblais de chemin de fer
            Travaux de signalisation ferroviaire
            Travaux de construction de voies
            Ouvrages ferroviaires urbains
            Ouvrages pour le tramway
            Ouvrages pour le métro
            Chemin de fer partiellement souterrain
            Transport ferroviaire souterrain de passagers
            Station de métro
            Travaux de construction de lignes de tramway
            Travaux de construction de dépôts de tramway
            Travaux de construction d'arrêts de tramway
            Travaux de construction de voies ferrées urbaines
            Travaux de construction de ballasts
            Travaux de construction des passages à niveau
            Travaux de construction de caténaires
            Travaux de construction de sous-stations électriques à usage ferroviaire
            Travaux de construction d'ateliers de chemin de fer
            Travaux de construction de postes de sectionnement
            Systèmes de transport par câble
            Systèmes de transport par câble avec cabines
            Travaux de construction de remonte-pente
            Travaux de construction de télésièges
            Funiculaire
            Travaux de construction de téléphériques
            Travaux de construction de terrains d'aviation, de pistes d'envol et d'atterrissage et d'aires de manœuvre
            Travaux de construction d'aéroports
            Travaux de construction de terrains d'aviation
            Travaux de revêtement de terrains d'aviation
            Travaux de construction de pistes d'envol et d'atterrissage
            Resurfaçage de pistes d'envol et d'atterrissage
            Travaux de construction d'aires de manœuvre pour avions
            Travaux de construction de pistes de roulement
            Travaux de revêtement de pistes de roulement
            Travaux de construction d'aires de stationnement pour avions
            Travaux de nivelage
            Travaux de nivelage pour équipements sportifs divers
            Travaux de nivelage de terrains de sports
            Travaux de nivelage de terrains de golf
            Travaux de nivelage de courts de tennis
            Travaux de nivelage de champs de courses
            Travaux de nivelage de pistes
            Travaux de réparation de terrains de sports
            Travaux de nivelage d'installations récréatives
            Travaux de nivelage d'aires de jeu pour enfants
            Travaux de nivelage de zoos
            Travaux de nivelage de jardins
            Travaux de nivelage de parcs
            Travaux de réparation d'espaces de loisir
            Travaux de nivelage pour cimetières
            Travaux de construction de scènes
            Travaux de construction d'ouvrages hydrauliques
            Travaux de construction de ports
            Travaux de construction de quais
            Travaux de construction in situ de terminaux offshore
            Travaux de construction de jetées
            Travaux de construction de docks
            Travaux de construction de môles
            Installation de matériel d'éclairage portuaire
            Travaux de construction d'installations de loisirs nautiques
            Travaux de construction d'installations de sports nautiques
            Travaux de construction de voies de mise à l'eau
            Travaux de construction de marinas
            Travaux de construction de ports de plaisance
            Ouvrages de défense des côtes
            Ouvrages de protection des falaises
            Travaux de stabilisation des falaises
            Travaux de construction de brise-lames
            Travaux de construction de digues de mer
            Travaux de consolidation des plages
            Travaux de construction d'ouvrages de défense maritimes
            Travaux d'endiguement
            Travaux de construction de murs de quai
            Ouvrages maritimes
            Installations maritimes
            Jetées
            Ouvrages de dragage et de pompage pour installations de traitement des eaux
            Ouvrages de régularisation des cours d'eau et de maîtrise des crues
            Construction de murs de rive
            Travaux de protection des berges
            Ouvrages de protection contre les inondations
            Entretien de digues
            Travaux de construction de promenades
            Travaux de construction de chemins de planches
            Travaux de construction de barrages, de canaux, de canaux d'irrigation et d'aqueducs
            Travaux de construction de voies navigables
            Construction de canaux
            Travaux de construction de canaux d'irrigation
            Travaux de construction de canaux de drainage
            Voies navigables, excepté canaux
            Travaux de construction d'aqueducs
            Travaux de construction de barrages et d'ouvrages fixes similaires
            Travaux de construction de barrages
            Travaux de construction de murs de barrage
            Travaux de renforcement de barrage
            Travaux de construction de déversoirs
            Travaux de construction de digues
            Travaux de construction de barrages statiques
            Travaux de construction de réservoirs
            Travaux de construction d'ouvrages hydromécaniques
            Travaux de construction d'écluses de canal
            Travaux de construction de cales sèches
            Travaux de construction de docks flottants
            Travaux de construction d'appontements
            Travaux de construction de barrages mobiles
            Travaux de construction d'usines, d'exploitations minières et d'unités de fabrication et de bâtiments pour l'industrie du pétrole et du gaz
            Travaux de construction de centrales électriques et de centrales thermiques
            Travaux de construction de centrales électriques
            Travaux de construction de centrales nucléaires
            Travaux de construction d'un réacteur nucléaire
            Travaux de construction de centrales hydroélectriques
            Travaux de construction de centrales thermiques
            Travaux de construction de centrales géothermiques
            Travaux de construction de centrales alimentées au bois
            Travaux de construction d'unités de production d'air comprimé
            Travaux de construction de tours de refroidissement
            Installations à énergie éolienne
            Travaux de construction de centrales de chauffage
            Travaux de construction de centrales de cogénération
            Travaux de construction d'usines génératrices de vapeur
            Travaux de construction de centrales de production d'électricité alimentées au gaz de décharge
            Travaux de construction de centrales de chauffage urbain
            Travaux de construction de stations de traitement des eaux usées, de stations d'épuration et d'usines d'incinération des ordures ménagères
            Travaux de construction de stations d'épuration
            Travaux de construction de centrales mobiles
            Travaux de construction d'installations de traitement des eaux
            Installations de sédimentation
            Digesteurs de boues
            Installations de criblage
            Travaux de dragage et de pompage
            Travaux d'enrochement
            Travaux de construction de stations de traitement de l'eau potable
            Travaux de construction de stations de traitement des eaux usées
            Équipement de station d'épuration
            Travaux de construction d'installations de déshydratation des boues
            Travaux de construction d'installations de manutention du charbon
            Matériel pour installation de purification
            Travaux de construction de stations de purification de l'eau
            Travaux de construction d'usines d'incinération des ordures ménagères
            Travaux de construction d'usines de traitement chimique
            Travaux de construction d'installations de déminéralisation
            Travaux de construction d'installations de désulfuration
            Travaux de construction d'installations de distillation ou de rectification
            Travaux de construction d'installations de distillation d'eau
            Travaux de construction d'installations de distillation d'alcool
            Travaux de construction d'usines pétrochimiques
            Travaux de construction d'usines pharmaceutiques
            Travaux de construction d'installations de déionisation
            Travaux de construction d'installations de digestion
            Travaux de construction d'usines de compostage
            Travaux de construction d'exploitations minières et d'unités de fabrication
            Travaux de construction d'exploitations minières
            Travaux de construction de bâtiments de puits
            Travaux de construction d'usines de production
            Travaux de construction pour l'industrie du pétrole et du gaz
            Travaux de construction de Plates-formes de production
            Travaux de construction de puits d'extraction
            Travaux de construction d'installations pour plate-formes
            Travaux de construction d'installations de surface
            Travaux de construction de raffineries de pétrole
            Travaux de construction de terminaux pétroliers
            Travaux de construction de terminaux à gaz
            Travaux de montage
            Travaux de montage offshore
            Travaux de montage à terre
            Démolition de Plates-formes pétrolières
            Travaux de forage et d'exploration
            Intervention au tube enroulé sur puits sous pression
            Travaux de construction d'usines de gazéificaton du charbon
            Travaux de construction d'unités de production de gaz
            Réparation et entretien d'équipements
            Réparation et entretien de station d'épuration
            Réparation et entretien de station de purification
            Réparation et entretien de centrales thermiques
            Modernisation d'installations
            Travaux de couverture et travaux d'autres corps de métier spécialisés
            Travaux de charpente et de couverture et travaux connexes
            Travaux de charpente
            Travaux de couverture et de peinture de toiture
            Travaux de couverture
            Travaux de couverture en tuiles
            Travaux de couverture en ardoises
            Travaux de couverture métallique
            Travaux de couverture en bardeaux bitumés
            Travaux de couverture de panneaux solaires
            Travaux de peinture de couverture et autres travaux d'application d'enduits
            Travaux de peinture de toiture
            Travaux de pose d'enduit sur couverture en ciment
            Travaux de garnissage et de pose de gouttières
            Travaux de garnissage
            Travaux de pose de gouttières
            Travaux de revêtement
            Travaux d'isolation de toiture
            Travaux d'étanchéification
            Réparation et entretien de toiture
            Réparation de toiture
            Travaux d'entretien de toiture
            Travaux de corps de métier spécialisés autres que travaux de couverture
            Travaux d'installation d'échafaudages
            Travaux de démontage d'échafaudages
            Travaux de montage d'échafaudages
            Travaux de fondation et forage de puits de captage
            Travaux de fondation
            Battage de pieux
            Travaux de coffrage
            Parois moulées en tranchée
            Forage de puits de captage
            Travaux de bétonnage
            Travaux de mise en œuvre de béton armé
            Travaux de gros œuvre en béton
            Ragréages
            Travaux de chape
            Travaux de réparation d'ouvrages en béton
            Travaux d'injection de ciment
            Travaux de mise en œuvre de béton non armé
            Travaux de cimentation
            Travaux d'enrobage de béton
            Travaux d'assemblage d'ossatures métalliques
            Travaux d'assemblage d'ossatures métalliques de bâtiment
            Travaux d'assemblage d'ossatures métalliques d'ouvrage
            Installation de dispositifs d'amarrage en mer
            Travaux de forage sous-marin
            Travaux de fabrication de ponts
            Travaux de fabrication de modules offshore
            Travaux de fabrication de treillis de plate-forme
            Travaux de fabrication de piles
            Travaux de maçonnerie et de briquetage
            Maçonnerie de pierres
            Taille de pierres
            Maçonnerie de pierres de taille
            Travaux de briquetage
            Maçonnerie de parement
            Travaux de maçonnerie
            Travaux de construction spécialisés divers
            Cheminées industrielles
            Murs de soutènement
            Construction de fourneaux
            Travaux d'amélioration de l'environnement
            Travaux de bardage
            Travaux de désamiantage
            Transformation des métaux
            Soudage
            Remise en état de bâtiments dégradés
            Travaux de transformation de bâtiments
            Travaux d'entretien de fresques
            Travaux d'extension de bâtiments
            Travaux de balcon
            Travaux d'équipement du bâtiment
            Travaux d'équipement électrique
            Travaux de câblage et d'installations électriques
            Travaux de câblage électrique
            Travaux d'installations électriques
            Travaux d'installation de systèmes d'alarme et d'antennes
            Travaux d'installation de systèmes avertisseurs d'incendie
            Travaux d'installation de systèmes avertisseurs d'effraction
            Travaux d'installation d'antennes
            Installations de paratonnerre
            Travaux d'installation de paratonnerre
            Travaux d'installation d'antennes de télévision
            Travaux d'installation d'antennes radio
            Travaux d'installation d'ascenseurs et d'escaliers mécaniques
            Travaux d'installation d'ascenseurs
            Travaux d'installation d'escaliers mécaniques
            Travaux d'installation de trottoirs roulants
            Installation de matériel de télécommunications
            Installation de centraux téléphoniques
            Installation de standards téléphoniques
            Installation de lignes téléphoniques
            Installation d'infrastructures de câblage
            Installation de câblage
            Installation de câblage informatique
            Travaux d'installation de chauffage électrique et d'autres équipements électriques de bâtiment
            Installations électrotechniques
            Travaux relatifs aux turbines
            Installations d'alimentation électrique
            Installations haute tension
            Installations moyenne tension
            Installations basse tension
            Travaux d'installation de postes de sectionnement
            Travaux d'installation de systèmes d'illumination et de signalisation
            Installation d'appareils d'éclairage extérieur
            Installation de matériel d'éclairage public
            Installation de matériel de signalisation
            Installation de matériel de contrôle du trafic routier
            Installation de panneaux lumineux de signalisation
            Installation de feux de circulation
            Installation de balisage
            Installation de matériel de signalisation aéroportuaire
            Installation de matériel de signalisation portuaire
            Autres travaux d'installation électrique
            Travaux d'installation électrique de matériel de pompage
            Travaux d'installation électrique de transformateurs
            Travaux d'installation électrique d'appareils de distribution
            Travaux d'installation électrique de matériel de filtration
            Travaux d'isolation
            Travaux d'isolation thermique
            Travaux d'isolation acoustique
            Travaux de pose de plaques de plâtre
            Travaux de plomberie
            Travaux d'installation de matériel de chauffage, de ventilation et de climatisation
            Travaux d'installation de chauffage central
            Travaux d'installation de chaudières
            Travaux d'installation de matériel de ventilation et de climatisation
            Travaux d'installation de ventilation
            Travaux d'installation de ventilation extérieure
            Travaux d'installation de matériel de climatisation
            Travaux d'installation de matériel de climatisation partielle de l'air
            Travaux d'installation de matériel de refroidissement
            Travaux d'installation de matériel de réfrigération
            Travaux de plomberie et de pose de conduits d'évacuation
            Travaux d'installation de distribution d'eau
            Travaux de pose de conduits d'évacuation
            Travaux d'installation d'appareils sanitaires
            Travaux d'installation du gaz
            Travaux d'installation de régulateurs de gaz
            Travaux d'installation de compteurs à gaz
            Travaux d'installation de clôtures, de garde-corps et de dispositifs de sécurité
            Pose de garde-corps
            Pose de clôtures
            Travaux d'installation de dispositifs de prévention contre les incendies
            Travaux d'ignifugation
            Travaux d'installation de dispositifs d'extinction d'incendie
            Travaux d'installation de dispositifs d'extinction d'incendie au CO2
            Travaux d'installation d'extincteurs
            Travaux d'installation de systèmes de pulvérisation d'eau
            Installations mécaniques
            Travaux d'installation en construction mécanique
            Travaux de parachèvement de bâtiment
            Travaux de plâtrerie
            Travaux de menuiserie et de charpenterie
            Travaux de menuiserie
            Pose de portes et de fenêtres et d'éléments accessoires
            Pose d'encadrements de portes et de fenêtres
            Pose d'encadrements de portes
            Pose d'encadrements de fenêtres
            Pose de seuils
            Poses de portes et de fenêtres
            Pose de portes
            Pose de fenêtres
            Pose de menuiseries métalliques, excepté portes et fenêtres
            Travaux de cloisonnement
            Installation de volets
            Travaux d'installation de stores
            Travaux d'installation de vélums
            Travaux d'installation de volets roulants
            Mise en place de plafonds suspendus
            Installation de grilles
            Installation de portails
            Travaux d'installation de menuiseries non métalliques
            Installation de cuisines équipées
            Installation de cloisons
            Installation de meubles encastrés
            Ferrage
            Travaux de charpenterie
            Ouvrages en bois
            Revêtement de sols et de murs
            Carrelages
            Carrelage de sols
            Carrelage mural
            Travaux de pose de revêtement de sols et de murs et pose de papiers peints
            Travaux de pose de revêtements de sols
            Travaux de pose de sols
            Travaux de pose de revêtements de sols souples
            Pose de pavage
            Pose de parquets
            Pavage en bois
            Travaux d'installation de faux plancher
            Planchers techniques pour salles informatiques
            Travaux de revêtements de sols
            Travaux de pose de revêtements muraux et de papiers peints
            Travaux de revêtement mural
            Travaux de pose de papier peint
            Travaux de peinture et de vitrerie
            Travaux de vitrerie
            Travaux d'application de revêtements de protection
            Travaux de peinture
            Travaux de peinture de bâtiments
            Travaux de peinture et de revêtement de protection de structures
            Travaux de peinture de structures
            Travaux de pose d'une nouvelle couche de peinture
            Travaux de décapage
            Travaux d'application de revêtements anticorrosion
            Travaux de galvanisation
            Travaux de protection des surfaces
            Travaux de façade
            Autres travaux de parachèvement de bâtiment
            Travaux de décoration
            Travaux d'ornementation
            Travaux de lambrissage
            Jardins intérieurs
            Travaux de nettoyage extérieur de bâtiments
            Nettoyage, au sable, des parties extérieures des bâtiments
            Travaux de remise en état et de remise à neuf
            Travaux de remise en état
            Travaux de restructuration
            Travaux de réfection
            Location de machines et de matériel de construction et de génie civil avec opérateur
            Location de grues avec opérateur
            Location de matériel de terrassement avec opérateur
            Logiciels et systèmes d'information
            Logiciels pour l'industrie
            Logiciels de points de vente (POS)
            Logiciel de commande vol
            Logiciels de contrôle du trafic aérien
            Logiciels de soutien au sol et de test pour l'aviation
            Logiciels de support au sol pour l'aviation
            Logiciels de test pour l'aviation
            Logiciels de contrôle du trafic ferroviaire
            Logiciels de contrôle industriel
            Système de contrôle informatique
            Logiciels de bibliothèque
            Système de gestion de bibliothèque
            Logiciels de vérification de conformité
            Logiciels médicaux
            Logiciels pédagogiques
            Logiciels de réseau d'internet et d'intranet
            Logiciels de gestion de réseau
            Logiciels d'interconnectivité de plates-formes
            Logiciels de serveur mémoire à disques
            Logiciels d'amélioration du système d'exploitation
            Logiciels de système d'exploitation de réseau
            Logiciels pour développeurs réseau
            Logiciels d'émulation de terminaux pour connectivité au réseau
            Logiciels de traitement des transactions
            Logiciels de traitement des transactions d'ordinateur central
            Logiciels de traitement des transaction de mini-ordinateur
            Logiciels de traitement des transactions de micro-ordinateur
            Logiciels de gestion des licences
            Logiciels réseau divers
            Logiciel de passerelle
            Logiciels de serveur de disques compacts (CD)
            Logiciels d'administration
            Logiciels de serveur de transactions
            Logiciels de commutation ou de routage
            Logiciels de multiplexeur
            Logiciels de serveur de communications
            Logiciels de passerelle
            Logiciels pour internet et intranet
            Logiciels de navigation sur l'internet
            Logiciels de serveur web
            Logiciels de courrier électronique
            Logiciels d'édition de pages web
            Logiciels de création de documents, de dessin, de synthèse d'images, de planification et de productivité
            Logiciels de création de documents
            Logiciel de gestion des documents
            Système de gestion de documents
            Electronic publishing software package: logiciels de PAO
            Logiciels de reconnaissance optique de caractères (OCR)
            Système de lecture optique
            Logiciels de reconnaissance vocale
            Logiciels de microédition
            Logiciels de présentation
            Logiciels de traitement de texte
            Logiciels de scanner
            Vérificateurs orthographiques
            Logiciels de dessin et de synthèse d'images
            Logiciels de CAO
            Système de CAO
            Logiciels graphiques
            Computer aided manufacturing (CAM) software package: logiciels de PAO
            Logiciels de tracé de diagrammes
            Logiciels d'élaboration de formulaires
            Logiciel de cartographie
            Système de cartographie numérique
            Logiciels de dessin et de peinture
            Logiciels de traitement de l'image
            Système d'imagerie et d'archivage
            Logiciels de planification et de productivité
            Logiciels de gestion de projets
            Logiciels de planification
            Logiciels de gestion des contacts
            Logiciels de transactions commerciales et de transactions personnelles
            Logiciels de gestion des investissements et d'établissement des déclarations fiscales
            Logiciels de gestion des investissements
            Logiciels d'établissement des déclarations fiscales
            Logiciels de gestion des installations et suites logicielles
            Logiciels de gestion des installations
            Suites logicielles
            Logiciels de gestion des stocks
            Logiciels d'analyse financière et logiciels comptables
            Logiciels d'analyse financière
            Logiciels pour systèmes financiers
            Logiciels comptables
            Système comptable
            Système de facturation
            Logiciels de gestion de la relation clientèle
            Logiciels de gestion des temps de travail et des ressources humaines
            Logiciels de planification des ressources de l'entreprise
            Logiciels analytiques, scientifiques, mathématiques ou prévisionnels
            Logiciels analytiques ou scientifiques
            Logiciels mathématiques ou prévisionnels
            Logiciels statistiques
            Logiciels de vente aux enchères
            Logiciels de vente, de marketing et de veille économique
            Logiciels de vente ou de marketing
            Logiciels de veille économique
            Logiciels de passation de marchés
            Logiciels de communications et multimédias
            Logiciels de communications
            Logiciels de communication par ordinateur
            Logiciels de réponse vocale interactive
            Logiciels de modem
            Logiciel de télécommande
            Logiciels de vidéoconférence
            Logiciels d'échange
            Logiciels de TI
            Logiciels d'émulation
            Logiciels de gestion de mémoire
            Logiciels multimédias
            Logiciel musical ou d'édition sonore
            Logiciels de clavier virtuel
            Logiciels de bases de données et d'exploitation
            Systèmes de bases de données
            Logiciels de bases de données
            Système de gestion de bases de données
            Gestion électronique de données (GED)
            Système de saisie de données
            Systèmes d'exploitation
            Logiciels de système d'exploitation d'unité centrale
            Logiciels de système d'exploitation de mini-ordinateur
            Logiciels de système d'exploitation de micro-ordinateur
            Logiciels de système d'exploitation d'ordinateur personnel
            Systèmes d'exploitation de systèmes ouverts
            Logiciels de groupage
            Logiciels de système d'exploitation en temps réel
            Architecture microcanal
            Logiciels utilitaires
            Logiciels de copie de sécurité ou de récupération
            Logiciels de codes-barres
            Logiciels de sécurité
            Logiciels de sécurité des fichiers
            Logiciels de sécurité des données
            Logiciels de traduction de langues étrangères
            Logiciels de chargement des supports d'enregistrement
            Logiciels de protection antivirus
            Logiciels antivirus
            Utilitaires généraux, utilitaires de compression et utilitaires d'impression
            Utilitaires généraux
            Utilitaires de compression
            Utilitaires d'impression
            Logiciels d'impression différée
            Logiciels de gestion de système, de stockage et de gestion de contenu
            Logiciels de gestion de systèmes
            Logiciels de gestion de stockage
            Logiciels de gestion de contenu
            Logiciels de vérification des versions
            Systèmes d'information et serveurs
            Systèmes d'information
            Système de courrier électronique
            Systèmes d'information dans le domaine financier
            Système d'information des passagers
            Tableaux électroniques
            Système d'information des passagers en temps réel
            Systèmes d'information dans le domaine médical
            Système d'information dans le domaine de l'infirmerie
            Système d'administration relatif aux patients
            Système de gestion de salles d'opération
            Système d'information clinique
            Système case-mix
            Serveurs
            Serveurs de réseau
            Serveurs informatiques
            Serveurs de fichiers
            Serveurs d'imprimantes
            Serveurs web
            Logiciels et systèmes informatiques divers
            Logiciels de jeux vidéo, de généalogie et économiseurs d'écran
            Logiciels de jeux vidéo
            Jeux pour la famille
            Économiseurs d'écran
            Logiciels de bureautique
            Système d'automatisation
            Logiciels de formation et de divertissement
            Logiciels de formation
            Logiciels de divertissement
            Logiciels de création de patrons et de calendriers
            Logiciels de création de patrons
            Logiciels de création de calendriers
            Systèmes de localisation de bateaux et systèmes de sonorisation
            Système de localisation de bateaux
            Systèmes de sonorisation
            Pilotes et logiciels de système
            Pilotes éthernet
            Pilotes de cartes graphiques
            Logiciels d'imprimerie
            Logiciels de création de carnets d'adresses
            Logiciels d'élaboration d'étiquettes
            Langages de programmation et outils
            Logiciels de compilation
            Logiciels de gestion de la configuration
            Logiciels de développement
            Outils d'interface utilisateur graphique (GUI)
            Langages de programmation
            Logiciels d'essai de programmes
            Logiciels de débogage
            Logiciels de tableurs et logiciels de mise à jour
            Logiciels de tableurs
            Services de réparation et d'entretien
            Services de réparation et d'entretien de véhicules et d'équipements associés et services connexes
            Services de réparation et d'entretien de véhicules à moteur et d'équipements connexes
            Services de gestion, de réparation et d'entretien de parc de véhicules
            Services de gestion de parc de véhicules
            Services d'assistance pour parc de véhicules
            Services de réparation et d'entretien de voitures
            Services de réparation de voitures
            Services de réparation de carrosseries de véhicules
            Services de réparation de carrosserie
            Services de remplacement de pare-brise
            Services d'entretien de voitures
            Services de lavage de voitures et services similaires
            Services de réparation et d'entretien d'autobus
            Services de réparation d'autobus
            Services d'entretien d'autobus
            Services de réparation et d'entretien de camions
            Services de réparation de camions
            Services d'entretien de camions
            Services de réparation et d'entretien de motos
            Services de réparation de motos
            Services d'entretien de motos
            Services de réparation et d'entretien de pièces spéciales de véhicules
            Services de réparation de systèmes électriques
            Services de réparation et d'entretien de freins et de pièces de freins de véhicules
            Services de réparation et d'entretien de boîtes de vitesses de véhicules
            Services de réparation et d'entretien de transmissions de véhicules
            Services de réparation de pneus, y compris montage et équilibrage
            Services de rechapage de pneus
            Services de réparation et d'entretien de moteurs de démarrage
            Services de conversion et de remise en état de véhicules
            Services de conversion de véhicules à moteur
            Services de conversion d'ambulances
            Services de remise en état de véhicules
            Services de secours routier
            Services de dépannage de voitures
            Services de remorquage de véhicules
            Services de dépannage de véhicules commerciaux
            Services de dépannage d'autobus
            Services de dépannage de véhicules à moteur
            Services de dépannage de motos
            Démolition de véhicules
            Services de réparation, d'entretien et services connexes relatifs au matériel de transport aérien, ferroviaire, routier et maritime
            Services de réparation, d'entretien et services connexes relatifs aux aéronefs et à d'autres équipements
            Services de réparation et d'entretien d'aéronefs
            Services d'entretien d'aéronefs
            Services de réparation d'aéronefs
            Services de réparation et d'entretien de moteurs d'aéronefs
            Services d'entretien de moteurs d'aéronefs
            Services de réparation de moteurs d'aéronefs
            Services de remise en état d'aéronefs
            Services de remise en état de moteurs d'aéronefs
            Services de réparation et d'entretien d'hélicoptères
            Services de réparation, d'entretien et services connexes liés au transport ferroviaire et à d'autres équipements
            Services de réparation et d'entretien de locomotives
            Services de réparation et d'entretien de boîtes de transmission de locomotives
            Services de réparation et d'entretien de transmissions de locomotives
            Services de réparation et d'entretien d'essieux montés de locomotives
            Services de réparation et d'entretien de freins et de pièces de freins de locomotives
            Services de réparation et d'entretien de matériel roulant
            Services de réparation et d'entretien d'amortisseurs
            Services de remise en état de locomotives
            Services de remise en état de matériel roulant
            Services de remise en état de sièges pour matériel roulant
            Services de remise en état de voitures à voyageurs
            Services d'entretien de voies ferrées
            Démolition de matériel roulant
            Services de réparation, d'entretien et services connexes relatifs au transport routier et à d'autres équipements
            Entretien d'installations d'éclairage public et de feux de signalisation
            Services d'entretien de l'éclairage public
            Mise en état d'exploitation d'installations d'éclairage public
            Services d'entretien des installations de signalisation
            Services de réparation, d'entretien et services connexes relatifs au transport maritime et à d'autres équipements
            Services de réparation et d'entretien de bateaux
            Services de réparation de navires
            Services de réparation de ferrys
            Services de conversion de bateaux
            Démolition de bateaux
            Services de remise en état de navires ou de bateaux
            Services de modernisation de bateaux
            Entretien d'équipement portuaire
            Services de mise en cale sèche
            Services d'entretien de bouées
            Services de réparation et d'entretien de structures flottantes
            Services de réparation et d'entretien de Plates-formes flottantes
            Services de réparation, d'entretien et services connexes relatifs aux ordinateurs personnels, au matériel de bureau, au matériel de télécommunications et au matériel audiovisuel
            Maintenance et réparation de machines de bureau
            Maintenance et réparation de machines comptables de bureau
            Maintenance et réparation de machines à calculer et de machines comptables
            Maintenance et réparation de matériel informatique
            Maintenance et réparation d'unités centrales
            Maintenance d'unités centrales
            Réparation d'unités centrales
            Maintenance et réparation de mini-ordinateurs
            Maintenance de mini-ordinateurs
            Réparation de mini-ordinateurs
            Maintenance et réparation de matériel de réseau informatique
            Maintenance de matériel de réseau informatique
            Réparation de matériel de réseau informatique
            Maintenance et réparation de micro-ordinateurs
            Maintenance de micro-ordinateurs
            Réparation de micro-ordinateurs
            Maintenance et réparation de matériel de technologies de l'information
            Maintenance de matériel de technologies de l'information
            Réparation de matériel de technologies de l'information
            Maintenance et réparation de matériel de reprographie
            Services de réparation de photocopieurs
            Services d'entretien de photocopieurs
            Services de réparation et d'entretien de télécopieurs
            Services de réparation et d'entretien de répondeurs téléphoniques
            Maintenance et réparation de distributeurs automatiques de tickets
            Maintenance et réparation de composteurs de billets
            Services de réparation et d'entretien d'ordinateurs personnels
            Services de réparation d'ordinateurs personnels
            Services d'entretien d'ordinateurs personnels
            Maintenance et réparation de périphériques d'ordinateur
            Maintenance de périphériques d'ordinateur
            Réparation de périphériques d'ordinateur
            Services d'assistance pour ordinateurs personnels
            Services de maintenance de systèmes
            Services de maintenance préventive
            Services d'entretien de matériel de télécommunications
            Services de réparation et d'entretien de lignes de télécommunications
            Services d'entretien d'infrastructures de télécommunications
            Services d'entretien de matériel de radiocommunications
            Services de réparation et d'entretien d'émetteurs radio
            Réparation et entretien d'appareils de radiotéléphonie
            Services de réparation et d'entretien de matériel de téléphonie et de télégraphie par fil
            Services de réparation et d'entretien de matériel de téléphonie par fil
            Entretien de réseau téléphonique
            Modernisation de standards téléphoniques
            Services de réparation et d'entretien de standards téléphoniques
            Services de réparation et d'entretien d'appareils téléphoniques
            Services de réparation et d'entretien de matériel de télégraphie par fil
            Services de réparation et d'entretien de matériel de télex par fil
            Entretien de systèmes de communications
            Services de réparation et d'entretien de matériel audiovisuel et d'optique
            Services de réparation et d'entretien de matériel de télévision
            Services de réparation et d'entretien de matériel vidéotexte
            Services de réparation et d'entretien d'émetteurs de télévision
            Services de réparation et d'entretien de matériel audio
            Services de réparation et d'entretien de matériel vidéo
            Services de réparation et d'entretien de matériel d'optique
            Services de réparation et d'entretien de matériel photographique
            Services de réparation et d'entretien de matériel cinématographique
            Services de réparation et d'entretien de matériel médical et de matériel de précision
            Services de réparation et d'entretien d'appareils de mesure, d'essai et de contrôle
            Services de réparation et d'entretien d'appareils de mesure
            Services de réparation et d'entretien de compteurs à eau
            Services de réparation et d'entretien de compteurs à gaz
            Services de réparation et d'entretien de compteurs d'électricité
            Services de réparation et d'entretien de tachymètres
            Services de réparation et d'entretien d'instruments de mesure du temps industriels
            Services de réparation et d'entretien d'appareils d'essai
            Services de réparation et d'entretien d'appareils de contrôle
            Services de réparation et d'entretien de matériel de détection de gaz
            Services de réparation et d'entretien d'installations d'extinction d'incendie
            Services de réparation et d'entretien de matériel médical et chirurgical
            Services de réparation et d'entretien de matériel médical
            Services de réparation et d'entretien de chaises roulantes
            Services de réparation et d'entretien de matériel de radiologie
            Services de réparation et d'entretien de matériel chirurgical
            Services de réparation et d'entretien de matériel de précision
            Services de réparation et d'entretien de montres
            Services de réparation et d'entretien d'horloges
            Services d'étalonnage
            Services de réparation et d'entretien de pompes, de vannes, de robinets, de conteneurs en métal et de machines
            Services de réparation et d'entretien de pompes, de vannes, de robinets et de conteneurs en métal
            Services de réparation et d'entretien de pompes
            Services de réparation et d'entretien de pompes à liquide
            Services de réparation et d'entretien de pompes à gaz
            Services de réparation et d'entretien de vannes
            Services de réparation et d'entretien de robinets
            Services de réparation et d'entretien de conteneurs en métal
            Services de réparation et d'entretien de citernes
            Services de réparation et d'entretien de réservoirs
            Services de réparation de gainage
            Services de réparation et d'entretien de machines
            Services de réparation et d'entretien de machines non électriques
            Services de réparation et d'entretien de chaudières
            Services d'entretien d'appareils à gaz
            Services de réparation et d'entretien de compresseurs
            Services de réparation et d'entretien de grues
            Services de réparation et d'entretien de grues derricks
            Services de démontage de derricks
            Services de réparation et d'entretien de machines et d'appareils électriques et de matériel connexe
            Services de réparation et d'entretien de moteurs électriques
            Services de réparation et d'entretien de transformateurs
            Services de réparation et d'entretien de générateurs
            Services de réparation et d'entretien de matériel de distribution électrique
            Services de réparation et d'entretien des matériels de défense et de sécurité
            Services de réparation et d'entretien du matériel de sécurité
            Services de réparation et d'entretien des armes à feu et des munitions
            Services de réparation et d'entretien des véhicules militaires
            Services de réparation et d'entretien des navires de guerre
            Services de réparation et d'entretien des aéronefs, des missiles et des spationefs militaires
            Services de réparation et d'entretien des systèmes électroniques militaires
            Services de réparation et d'entretien d'installations de bâtiments
            Services de réparation et d'entretien d'installations électriques et mécaniques de bâtiment
            Services de réparation et d'entretien d'installations électriques de bâtiment
            Services de réparation et d'entretien d'installations mécaniques de bâtiment
            Services de réparation et d'entretien de chauffage central
            Mise en état d'exploitation d'installations de chauffage
            Services de réparation et d'entretien de groupes de réfrigération
            Services de réparation et d'entretien d'escaliers mécaniques
            Services d'entretien d'ascenseurs
            Réparation et entretien de toilettes publiques
            Services divers d'entretien et de réparation
            Services de réparation de bijoux
            Services de réparation d'articles en cuir
            Services de réparation de bottes
            Services de réparation de chaussures
            Services de réparation de vêtements et d'articles textiles
            Services de réparation et d'entretien d'armes et de systèmes d'arme
            Services de réparation et d'entretien d'armes
            Services de réparation et d'entretien de systèmes d'arme
            Services de réparation et d'entretien de meubles
            Services de réparation et d'entretien d'instruments de musique
            Services de réparation et d'entretien d'équipements de terrains de jeux
            Services de réparation et d'entretien de matériel d'hôtellerie et de restauration
            Services de réparation et d'entretien de matériel d'hôtellerie
            Services de réparation et d'entretien de matériel pour restaurants
            Services de réparation et d'entretien de matériel de restauration
            Services de réparation et d'entretien de matériel de camping
            Services d'installation (à l'exception des logiciels)
            Services d'installation de matériel électrique et mécanique
            Services d'installation de matériel électrique
            Services d'installation de moteurs électriques, de générateurs et de transformateurs
            Services d'installation de moteurs électriques
            Services d'installation de générateurs
            Services d'installation de transformateurs
            Services d'installation de matériel de distribution et de commande électriques
            Services d'installation de matériel de distribution électrique
            Services d'installation de matériel de commande électrique
            Services d'installation de matériel mécanique
            Services d'installation de matériel de culture physique (fitness)
            Services d'installation de mâts porte-drapeau
            Services d'installation de générateurs à vapeur, de turbines, de compresseurs et de brûleurs
            Services d'installation de générateurs à vapeur
            Services d'installation de turbines
            Services d'installation de turbines à gaz
            Services d'installation de compresseurs
            Services d'installation de fourneaux
            Services d'installation de brûleurs
            Services d'installation d'incinérateurs de déchets
            Services d'installation de moteurs
            Services d'installation de moteurs à essence
            Services d'installation de moteurs diesel
            Services d'installation de moteurs de matériel ferroviaire
            Services d'installation de moteurs de véhicules
            Services d'installation de moteurs de navires
            Services d'installation de moteurs d'aéronefs
            Services d'installation de matériel de mesure, de contrôle, d'essai et de navigation
            Services d'installation de matériel de mesure
            Services d'installation de matériel de mesure du temps
            Services d'installation de matériel d'enregistrement des présences
            Services d'installation d'horloges de pointage
            Services d'installation de parcmètres
            Services d'installation de matériel météorologique
            Services d'installation de matériel géologique
            Services d'installation de matériel de contrôle
            Services d'installation d'appareils d'enregistrement automatiques pour aéroports
            Services d'installation de matériel d'essai
            Services d'installation de matériel de navigation
            Services d'installation de matériel de communications
            Services d'installation de matériel radio, de télévision, audio et vidéo
            Services d'installation de matériel radio
            Services d'installation de matériel de télévision
            Services d'installation de matériel audio
            Services d'installation de matériel vidéo
            Services d'installation d'émetteurs radio et de télévision
            Services d'installation d'émetteurs radio
            Services d'installation d'émetteurs de télévision
            Services d'installation d'appareils de radiotéléphonie
            Services d'installation de matériel de téléphonie par fil
            Services d'installation de matériel de télégraphie par fil
            Services d'installation de matériel médical et chirurgical
            Services d'installation de matériel médical
            Services d'installation de matériel d'imagerie
            Services d'installation de matériel de dentisterie et de ses sous-spécialités
            Services d'installation de matériel de radiothérapie
            Services d'installation de matériel de mécanothérapie
            Services d'installation de matériel d'électrothérapie
            Services d'installation de matériel de physiothérapie
            Services d'installation de matériel chirurgical
            Services d'installation de matériel de laboratoire
            Services d'installation de machines et d'équipements
            Services d'installation de machines et d'équipements à usage général
            Services d'installation de matériel de levage et de manutention, excepté ascenseurs et escaliers mécaniques
            Services d'installation de matériel de levage
            Services d'installation de grues
            Services d'installation de matériel de manutention
            Services d'installation de nacelles de nettoyage des façades
            Services d'installation de matériel de manutention spécial
            Services d'installation de machines diverses à usage général
            Services d'installation de machines et d'appareils de filtration ou de purification de liquides
            Services d'installation de machines et d'appareils de filtration ou de purification de l'eau
            Services d'installation de machines agricoles et sylvicoles
            Services d'installation de machines agricoles
            Services d'installation de machines sylvicoles
            Services d'installation de machines-outils
            Services d'installation de machines et d'équipements à usage spécifique
            Services d'installation de machines utilisées dans les mines, les carrières, la construction et la métallurgie
            Services d'installation de machines utilisées dans les mines
            Services d'installation de machines utilisées dans les carrières
            Services d'installation de machines utilisées dans la construction
            Services d'installation de machines utilisées dans la métallurgie
            Services d'installation de machines de traitement des aliments, des boissons et du tabac
            Services d'installation de machines de traitement des aliments
            Services d'installation de machines de traitement des boissons
            Services d'installation de machines de traitement du tabac
            Services d'installation de machines pour la fabrication de textile, de vêtements et de cuir
            Services d'installation de machines pour la fabrication textile
            Services d'installation de machines pour la fabrication de vêtements
            Services d'installation de machines pour la fabrication du cuir
            Services d'installation de machines à laver, de machines de nettoyage à sec et de sèche-linge de blanchisserie
            Services d'installation de machines pour la fabrication du papier et du carton
            Services d'installation de machines pour la fabrication du papier
            Services d'installation de machines pour la fabrication du carton
            Services d'installation de boîtes à lettres publiques
            Services d'installation de systèmes d'arme
            Services d'installation d'ordinateurs et de matériel de bureau
            Services d'installation d'ordinateurs et de matériel de traitement de l'information
            Services d'installation d'ordinateurs
            Services d'installation de matériel informatique
            Services d'installation d'écrans et de tableaux d'affichage des départs et des arrivées d'avions
            Services d'installation d'écrans et de tableaux d'affichage des départs et des arrivées de trains
            Services d'installation de matériel de traitement de l'information
            Services d'installation de matériel de bureau
            Services d'installation de matériel de protection contre l'incendie
            Services d'installation de conteneurs en métal
            Services d'installation de citernes
            Services d'installation de réservoirs
            Services d'installation de systèmes de guidage et de commande
            Services d'hôtellerie, de restauration et de commerce au détail
            Services d'hôtellerie
            Services d'hébergement hôtelier
            Services de réunions et de conférences organisés dans des hôtels
            Autres services d'hôtellerie
            Campings et autre hébergement non hôtelier
            Services d'hébergement en auberge de jeunesse
            Services de terrain de camping
            Services d'aire de caravanage
            Services de centres aérés et de centres de vacances
            Services de centres aérés
            Services de centres de vacances
            Services de colonies de vacances
            Services de location de meublés pour des séjours de courte durée
            Services des wagons-lits
            Services prestés par les établissements proposant des chambres avec petit-déjeuner
            Services de restaurant et services de personnel en salle
            Services de serveurs de restaurant
            Services de serveurs de restaurant pour clientèle restreinte
            Services de serveurs de restaurant sans restriction d'accès
            Services de distribution de repas
            Services de préparation de repas
            Services d'élaboration (cuisson) de repas
            Services de cafétéria
            Services de débits de boissons
            Services de gestion de bars
            Services de cantine et service traiteur
            Services de cantine
            Services de cantine et autres services de cafétéria pour clientèle restreinte
            Services de gestion de cantine
            Services traiteur
            Service traiteur pour ménages
            Services de repas livrés à domicile
            Services de livraison de repas
            Service traiteur pour entreprises de transport
            Services traiteur pour autres entreprises ou autres institutions
            Services de restauration scolaire
            Service traiteur pour écoles
            Services de vente au détail
            Services de transport (à l'exclusion du transport des déchets)
            Services de transport routier
            Services de transport routier public
            Services de taxi
            Services spécialisés de transport routier de passagers
            Transport non régulier de passagers
            Transport de passagers par véhicules à traction animale
            Transport routier postal
            Services de transport de colis
            Location de véhicules de transport de personnes avec chauffeur
            Location de voitures particulières avec chauffeur
            Location d'autobus et d'autocars avec chauffeur
            Location de véhicules de transport de marchandises avec chauffeur
            Location de camions avec chauffeur
            Location de véhicules industriels avec chauffeur
            Location de camionnettes avec chauffeur
            Services de transport ferroviaire
            Services de transport ferroviaire public
            Transport ferroviaire postal
            Services de transport par pipeline
            Services de transport aérien
            Services de transport aérien régulier
            Services de transport aérien régulier du courrier
            Services de transport aérien non régulier
            Services de transport aérien non régulier du courrier
            Services de charter
            Location de matériel de transport aérien avec équipage
            Location d'aéronefs avec équipage
            Location d'aéronefs à voilure fixe avec équipage
            Location d'hélicoptères avec équipage
            Services aériens et services connexes
            Services de pulvérisation par voie aérienne
            Services de lutte aérienne contre les incendies de forêt
            Services de secours aérien
            Services aéronavals de sauvetage
            Services d'exploitation d'aéronefs
            Services de pilotage
            Services d'exploitation d'avions
            Services de transport spatial
            Services de lancement de satellites
            Services de charges utiles expérimentales
            Services de transport par voie d'eau
            Services de transport par ferry
            Transport de courrier par voie d'eau
            Services de navires câbliers
            Opérations de transport maritime
            Location de matériel de transport par voie d'eau avec équipage
            Location de vaisseaux avec équipage
            Location de navires de mer avec équipage
            Location de bateaux de navigation intérieure avec équipage
            Services de navires antipollution
            Services de navires transporteurs de charges lourdes
            Services de navires de secours
            Services de navires de ravitaillement offshore
            Location de bateaux avec équipage
            Services d'appui et services auxiliaires dans le domaine des transports, services des agences de voyages
            Services de manutention et d'entreposage de cargaisons
            Services de manutention de cargaisons
            Services de manutention de conteneurs
            Services de manutention de bagages
            Services de manutention des bagages des passagers
            Services de rassemblement des bagages
            Services de stockage et d'entreposage
            Services de stockage et de récupération
            Services de stockage
            Services de stockage de gaz
            Services d'entreposage
            Services d'agences de voyages, de voyagistes et d'assistance aux touristes
            Services d'agences de voyages et services similaires
            Organisation de voyages à forfait
            Vente de billets de voyages à forfait
            Services d'information touristique
            Services de guides touristiques
            Services de voyages
            Services de gestion de voyages
            Services d'agences de transport
            Services d'agences de transport de marchandises
            Services de courtage maritime
            Services d'agences portuaires et d'agences d'expédition
            Services de préparation de documents de transport
            Services d'appui dans le domaine des transports terrestres, maritimes et aériens
            Services d'appui dans le domaine des transports terrestres
            Services d'appui dans le domaine des transports ferroviaires
            Services de surveillance de la marche des trains
            Services d'ateliers mobiles
            Services d'appui dans le domaine des transports routiers
            Services de gares routières
            Services d'exploitation des autoroutes
            Services de péage autoroutier
            Services d'exploitation de ponts et de tunnels
            Services d'exploitation de ponts
            Services de péage de pont
            Services d'exploitation de tunnels
            Services de péage de tunnel
            Services de parc de stationnement
            Services de pont-bascule
            Services de ravitaillement de véhicules
            Services de la circulation routière
            Services de surveillance de la circulation routière
            Services d'appui dans le domaine des transports par voie d'eau
            Services d'exploitation de ports et de voies navigables et services connexes
            Services de mise en soute
            Services d'exploitation portuaire
            Services d'exploitation des voies navigables
            Services de ravitaillement de navires
            Services d'exploitation de terminaux passagers
            Services de pilotage de navires
            Services d'accostage
            Services de navigation
            Services de positionnement en mer
            Services de positionnement de bateaux-phares
            Services de bateaux-phares
            Services de positionnement de bouées
            Services de balisage
            Services de phares
            Services de sauvetage et de renflouage
            Services de sauvetage de navires
            Services des bateaux de sauvegarde
            Services de renflouage de navires
            Services d'assistance divers dans le domaine des transports par voie d'eau
            Services d'enregistrement des navires
            Services de navires brise-glaces
            Services de stockage en navire
            Services d'affrètement de navires
            Services de désarmement de navires
            Services d'exploitation de navires
            Services de mise à l'eau de navires
            Services d'engins inhabités télécommandés
            Services des navires de pêche
            Services des navires de recherche
            Services de bateau manipulateur d'ancre
            Services de remorquage et de poussage de bateaux
            Services de remorquage
            Services de poussage
            Services d'appui dans le domaine des transports aériens
            Services d'exploitation d'aéroport
            Services de coordination des créneaux aéroportuaires
            Services de contrôle du trafic aérien
            Services d'avitaillement
            Services de hangar
            Services des postes et télécommunications
            Services postaux et services de courrier
            Services postaux
            Services postaux relatifs aux journaux et aux périodiques
            Services postaux relatifs aux lettres
            Services postaux relatifs aux colis
            Services de guichets de bureaux de poste
            Location de boîtes aux lettres
            Services de poste restante
            Services de courrier
            Services multimodaux de courrier
            Services de distribution de courrier
            Services de livraison de colis
            Services de courrier et de messagerie interne des administrations
            Services de télécommunications
            Services de téléphonie et de transmission de données
            Services de cabines téléphoniques publiques
            Services de téléphonie locale
            Services de téléphonie interurbaine
            Services de téléphonie mobile
            Services de messages courts (SMS)
            Services de messagerie améliorés (EMS)
            Services de messagerie multimédia (MMS)
            Services WAP (Wireless Application Protocol)
            Services GPRS (Services généraux de radiocommunication par paquets)
            Services EDGE (Enhanced Data rates for GSM Evolution)
            Services UMTS (système de télécommunications mobiles universelles)
            Services de fourniture de publiphone
            Services de fourniture de cartes de téléphone prépayées
            Services des réseaux téléphoniques commerciaux partagés
            Services des réseaux téléphoniques commerciaux spécialisés
            Services de location de circuits par satellite
            Services de commutateurs téléphoniques
            Location de lignes terrestres de communication
            Services de téléphonie IP
            Services de messagerie et d'information électroniques
            Services de messagerie électronique
            Services d'échange de données électroniques
            Services de courrier électronique
            Services de télex
            Services de télégraphie
            Services d'information électronique
            Services d'information à valeur ajoutée
            Services de télétexte
            Services de télécommunications, excepté téléphone et transmission de données
            Services d'interconnexion
            Services de télétravail
            Services de radiomessagerie
            Services de téléconférence
            Services de télécommunications air-sol
            Services de télématique
            Services de télécommunications intégrés
            Retransmission de programmes de télévision et de radio
            Retransmission de programmes de télévision
            Retransmission de programmes de radio
            Services publics
            Distribution d'eau et services connexes
            Distribution d'eau
            Distribution d'eau potable
            Exploitation d'une station d'épuration d'eau
            Services de déminéralisation de l'eau
            Services de dessalement de l'eau
            Services d'adoucissement de l'eau
            Exploitation de l'alimentation en eau
            Distribution de gaz et services connexes
            Distribution de gaz
            Distribution d'électricité et services connexes
            Distribution d'électricité
            Exploitation d'installations électriques
            Autres sources d'approvisionnement en énergie et leur distribution
            Exploitation d'une centrale électrique
            Services de lecture de compteurs
            Services financiers et d'assurance
            Services bancaires et d'investissement
            Services bancaires
            Services de banques centrales
            Services de dépôts
            Services de concession de crédit
            Services de concession de micro-crédits
            Services de leasing financier
            Services de virements internationaux
            Services bancaires d'investissement et services connexes
            Services de fusions-acquisitions
            Services de financement des entreprises et de capital-risque
            Services de courtage et services liés de titres et marchandises
            Services de courtage de titres
            Services d'investissement des fonds de pension
            Services de courtage de marchandises
            Services de traitement d'opérations et services de compensation
            Services de gestion de portefeuilles
            Services de gestion des fonds de pension
            Services d'administration des marchés financiers
            Services de gestion des marchés financiers
            Services de vente au détail par le biais de marché électronique
            Services de réglementation des marchés financiers
            Services de fiducie et de garde
            Services de fiducie
            Services de garde
            Services de conseils financiers, services de traitement des transactions financières et services de chambres de compensation
            Services de conseils financiers
            Services de traitement des transactions financières et services de chambre de compensation
            Services de change
            Services de courtage d'emprunts
            Services d'assurance et services de retraite
            Services d'assurance
            Services d'assurance vie
            Services d'assurances accidents et maladie
            Services d'assurance accidents
            Services d'assurance maladie
            Services d'assurance maladie volontaire
            Services d'assurance médicale
            Services d'assurance défense et recours et service d'assurance tous risques chantier
            Services d'assurance défense et recours
            Services d'assurance tous risques chantier
            Services d'assurance fret et services connexes
            Services d'assurance transport
            Services d'assurance de véhicules à moteur
            Services d'assurance maritime, aérienne et de transports d'autre type
            Services d'assurance de matériel ferroviaire
            Services d'assurance d'aéronefs
            Services d'assurance de bateaux
            Services d'assurance fret
            Services d'assurance dommages ou pertes
            Services d'assurance incendie
            Services d'assurance de biens
            Services d'assurance intempéries et pertes financières
            Services d'assurance intempéries
            Services d'assurance pertes financières
            Services d'assurance pertes pécuniaires
            Services d'assurance responsabilité civile
            Services d'assurance responsabilité civile automobile
            Services d'assurance responsabilité civile aviation
            Services d'assurance responsabilité civile bateaux
            Services d'assurance responsabilité civile générale
            Services d'assurance de responsabilité professionnelle
            Services d'assurance crédit et cautionnement
            Services d'assurance crédit
            Services d'assurance cautionnement
            Services d'assurance gestion des risques
            Services de courtage et services d'agence dans le secteur des assurances
            Services de courtage en assurances
            Services d'agences d'assurances
            Services de règlement des déclarations de sinistre
            Services d'assurance d'installations techniques, services d'assurance auxiliaire, services de règlement d'avaries, services de règlement de sinistres, services des actuaires et services d'administration des droits de sauvetage
            Services d'assurance de plate-forme de pétrole et de gaz
            Services d'assurance d'installations techniques
            Services d'assurance auxiliaire
            Services de conseil en assurances
            Services de règlement d'avaries
            Services de règlement des sinistres
            Services des actuaires
            Services d'administration des droits de sauvetage
            Services de retraite
            Services de retraite individuelle
            Services de retraite collective
            Services de conseil en matière de fonds de pension
            Services d'administration des fonds de pension
            Services de trésorerie
            Services de réassurance
            Services de réassurance vie
            Services de réassurance accidents et maladie
            Services immobiliers
            Services immobiliers propres
            Services de promotion immobilière
            Promotion de biens immobiliers à usage résidentiel
            Promotion de biens immobiliers à usage non résidentiel
            Achat et vente de biens immobiliers
            Services de vente ou d'achat d'immeubles
            Services de vente d'immeubles
            Services d'achat d'immeubles
            Services de vente ou d'achat de terrains
            Services de vente de terrains
            Services de vente de terrains libres
            Services d'achat de terrains
            Services d'achat de terrains libres
            Vente de biens immobiliers
            Vente de biens immobiliers à usage résidentiel
            Vente de biens immobiliers à usage non résidentiel
            Services de location de biens immobiliers propres
            Services de crédit-bail ou de location de biens immobiliers propres
            Services de crédit-bail ou de location de propriétés résidentielles propres
            Services de crédit-bail ou de location de propriétés non résidentielles propres
            Services d'agence immobilière prestés pour le compte de tiers
            Services de location ou de vente d'immeubles
            Services de location ou de vente d'immeubles à usage résidentiel
            Services de location ou de vente de terrains
            Services de location de terrains
            Services de location ou de vente de terrains libres
            Services de gestion de biens immobiliers pour le compte de tiers
            Services d'immobilier résidentiel
            Services de gestion d'institutions
            Services d'immobilier non résidentiel
            Services de gestion de terrains
            Services de gestion de biens immobiliers à usage commercial
            Services relatifs à l'immobilier industriel
            Services de logement
            Services de multipropriété
            Services d'architecture, services de construction, services d'ingénierie et services d'inspection
            Services d'architecture
            Services de conseil en architecture
            Services de création architecturale
            Services d'architecte pour les bâtiments
            Services d'architecte pour la conception d'ouvrages extérieurs
            Services de cartographie des zones urbaines
            Services de cartographie des zones rurales
            Services d'architecte pour des travaux d'extension de bâtiment
            Services d'organisation de concours d'architecture
            Services d'architecture, d'ingénierie et de planification
            Études de faisabilité, service de conseil, analyse
            Préparation du projet et de la conception, estimation des coûts
            Projets de plans (systémes et intégration)
            Calcul des coûts, contrôle des coûts
            Plans d'approbation, plans d'exécution et spécifications
            Détermination et listage des quantités nécessaires à la construction
            Supervision des travaux de construction
            Supervision du projet et documentation
            Services d'architecture, d'ingénierie et de métrage
            Services d'architecture et de métrage vérification
            Services d'ingénierie
            Services de conseil en matière d'ingénierie et de construction
            Services de conseil en génie civil
            Services d'assistance en génie civil
            Services de conseil en matière de systèmes de transport
            Services de conseil en matière d'autoroutes
            Services d'ingénierie autoroutière
            Services d'ingénierie ferroviaire
            Services d'ingénierie aéroportuaire
            Services de conseil en matière d'infrastructure
            Services de conseil en ingénierie de la construction
            Services de conseil en ingénierie de l'environnement
            Services de conseil en matière de lutte contre le bruit
            Services de conseil en insonorisation et en acoustique intérieure
            Étude d'impact sur l'environnement pour la construction
            Évaluation des risque et dangers pour la construction
            Normes environnementales pour la construction
            Indicateurs environnementaux pour la construction
            Services d'étude d'impact sur l'environnement (EIA) pour la construction
            Surveillance environnementale pour la construction
            Énergie et services connexes
            Services d'électricité
            Services de gestion de l'énergie
            Services de conseil en rendement énergétique
            Services de physique thermique pour la construction
            Installations techniques de bâtiment
            Services de conseil en gros œuvre
            Services de conseil en bâtiment
            Services de conseil en installations techniques de bâtiment
            Services de métré de bâtiments
            Services d'inspection et de vérification de bâtiment
            Inspection du système de ventilation
            Services de conseil en télécommunications
            Services de conseil en protection et contrôle des risques
            Services de conseil en protection et contrôle en matière d'incendie et d'explosion
            Services de santé et de sécurité
            Services de conseil en matière de santé et de sécurité
            Services de conseil et de consultation en ingénierie
            Services pour les techniques d'éclairage naturel et artificiel
            Services de témoins experts
            Services de conception technique
            Services de conception technique des installations mécaniques et électriques de bâtiments
            Services relatifs aux aspects économiques de la construction
            Services de conception des systèmes de chauffage
            Services de conseil en matière de plomberie
            Services de conseil en matière de ventilation
            Services de conception technique pour la construction d'ouvrages de génie civil
            Services d'estimatif pour travaux de génie civil
            Services de conception de pipelines
            Services de conception de ponts
            Services de conception de barrages
            Services de conception technique pour installations de transport
            Services de conception technique pour processus et production industriels
            Services de conception de réseaux d'énergie électrique
            Services de conception technique d'usines
            Services d'état estimatif
            Services de conception de fondations
            Services auxiliaires de bâtiment
            Services de conception des structures portantes
            Services de vérification de la conception des structures portantes
            Services divers d'ingénierie
            Services d'ingénierie en matière de boues de forage
            Services d'ingénierie géotechnique
            Services d'ingénierie mécanique
            Services d'ingénierie mécanique et électrique
            Études techniques
            Services d'assistance dans le domaine de l'ingénierie
            Services d'ingénierie relatifs à la corrosion
            Services intégrés d'ingénierie
            Services scientifiques et techniques dans le domaine de l'ingénierie
            Services de prospection géologique et géophysique et autre prospection scientifique
            Services de préparation et d'analyse de carottage
            Services de conseil en géologie et en géophysique
            Services de conseil géophysique
            Services de conseil en géologie
            Services d'analyses micropaléontologiques
            Services d'interprétation pétrophysique
            Services d'étude du sol
            Services de prévisions météorologiques
            Services de météorologie
            Services de climatologie
            Services d'hydrométéorologie
            Services de prospection scientifique
            Services de prospection géophysique
            Levés géophysiques de sites archéologiques
            Services de prospection géologique
            Services topographiques et services de radiesthésie
            Services topographiques
            Levés topographiques de sites archéologiques
            Services de radiesthésie
            Services de géologie, d'océanographie et d'hydrologie
            Services de géologie
            Services de photogéologie
            Services de géologie stratigraphique
            Services d'exploration géologique
            Services archéologiques
            Services d'océanographie et d'hydrologie
            Services d'océanographie des estuaires
            Services d'océanographie physique
            Services de levés bathymétriques
            Services d'exploration sous-marine
            Services de levés souterrains
            Services de sismique
            Services de levés sismographiques
            Services d'acquisition de données sismiques
            Services de collecte de données sismiques
            Services de traitement des données sismiques
            Services d'enregistrement magnétométrique
            Services de levés en surface
            Services de levés hydrographiques
            Services de levés dimensionnels
            Services d'établissement de cartes
            Services de cartographie numérique
            Services de cartographie aérienne
            Services cadastraux
            Services d'hydrographie
            Services de cartographie maritime
            Services d'arpentage
            Services de photogrammétrie
            Services d'arpentage cadastral
            Services techniques
            Services de contrôle technique
            Services d'assistance technique
            Services d'appui technique
            Services de planification technique
            Services d'urbanisme et d'architecture paysagère
            Services d'urbanisme
            Services d'architecture paysagère
            Services d'architecture des jardins
            Services relatifs à la construction
            Services de reconnaissance sur le site
            Services de conduite des travaux
            Services de conduite de chantier
            Services de conseil en construction
            Services de gestion de la construction
            Services de gestion de projets de construction
            Services de travaux de forge
            Services d'essais techniques, services d'analyses et services de conseil
            Services d'essais et d'analyses de la composition et de la pureté
            Services d'analyses
            Services d'analyse technique ou services de conseil
            Services de contrôle et d'essais techniques
            Services d'inspection technique
            Services de contrôle de machines
            Services de contrôle technique automobile
            Services de contrôle technique de bâtiments
            Services de contrôle technique d'ouvrages de génie civil
            Services d'inspection dans le domaine de la sécurité maritime
            Services d'essais d'étanchéité
            Services de contrôle du débit
            Services d'inspection des ponts
            Services d'inspection des barrages
            Service de contrôle des voies ferrées
            Service d'inspection routière
            Service d'inspection des pistes
            Services d'essais techniques
            Services d'essai de vannes
            Services d'essais non destructifs
            Services de surveillance et de contrôle
            Services d'inspection industrielle
            Services de contrôle de qualité industriel
            Services de conseil en matière d'approvisionnement en eau et services de conseil en matière de déchets
            Services de laboratoire
            Services de technologies de l'information, conseil, développement de logiciels, internet et appui
            Services de conseil en matériel informatique
            Services de conseil en sélection de matériel informatique
            Services de conseil en reprise des applications informatiques en cas d'interruption accidentelle
            Services de conseil en aménagement de site informatique
            Services de conseil en essai d'acceptation de matériel informatique
            Services de conseil en audit informatique et services de conseil en matériel informatique
            Services de programmation et de conseil en logiciels
            Services de programmation de progiciels
            Services de programmation de systèmes et de logiciels utilitaires
            Services de programmation de logiciels d'application
            Services de développement de logiciels spécifiques à l'industrie
            Services de développement de logiciels de points de vente (POS)
            Services de développement de logiciels de commande de vol
            Services de développement de logiciels de contrôle du trafic aérien
            Services de développement de logiciels de soutien au sol et de test pour l'aviation
            Services de développement de logiciels de soutien au sol pour l'aviation
            Services de développement de logiciels de test pour l'aviation
            Services de développement de logiciels de contrôle du trafic ferroviaire
            Services de développement de logiciels de contrôle industriel
            Services de développement de logiciels de bibliothèques
            Services de développement de logiciels de vérification de conformité
            Services de développement de logiciels médicaux
            Services de développement de logiciels pédagogiques
            Services de développement de logiciels de gestion de réseau, d'internet et d'intranet
            Services de développement de logiciels de gestion de réseau
            Services de développement de logiciels d'interconnectivité de plates-formes
            Services de développement de logiciels de serveur à mémoire optique à disques
            Services de développement de logiciels d'amélioration des systèmes d'exploitation
            Services de développement de logiciels de gestion des systèmes d'exploitation réseau
            Services de développement de logiciels de développement de réseaux
            Services de développement de logiciels d'émulation de terminaux de connectivité au réseau
            Services de développement de logiciels transactionnels
            Services de développement de logiciels de gestion des licences
            Services de développement de logiciels de gestion de réseau divers
            Services de développement de logiciels de gestion d'internet et d'intranet
            Services de développement de logiciels de navigation sur l'internet
            Services de développement de logiciels de serveurs web
            Services de développement de logiciels de courrier électronique
            Services de développement de logiciels d'édition de pages web
            Services de développement de logiciels de création de documents, de dessin, de traitement de l'image, d'ordonnancemennt et de productivité
            Services de développement de logiciels de création de documents
            Services de développement de logiciels de gestion de documents
            Services de développement de logiciels d'édition électronique
            Services de développement de logiciels de reconnaissance optique de caractères (OCR)
            Services de développement de logiciels de reconnaissance vocale
            Services de développement de logiciels de PAO
            Services de développement de logiciels de présentation
            Services de développement de logiciels de traitement de texte
            Services de développement de logiciels de scanner
            Services de développement de logiciels de dessin et de traitement de l'image
            Services de développement de logiciels de conception assistée par ordinateur (CAO)
            Services de développement de logiciels graphiques
            Services de développement de logiciels de production assistée par ordinateur (PAO)
            Services de développement de logiciels de tracé de diagrammes
            Services de développement de logiciels d'élaboration de formulaires
            Services de développement de logiciels de cartographie
            Services de développement de logiciels de dessin et de peinture
            Services de développement de logiciels de traitement de l'image
            Services de développement de logiciels de planification et de productivité
            Services de développement de logiciels de gestion de projet
            Services de développment de logiciels de planification
            Services de développement de logiciels de gestion des contacts
            Services de développement de logiciels transactionnels commerciaux et personnels
            Services de développement de logiciels de gestion des investissements et de préparation de déclarations de revenus
            Services de développement de logiciels de gestion des investissements
            Services de développement de logiciels de préparation de déclarations de revenus
            Services de développement de logiciels d'infogérance et services de développement de suites logicielles
            Services de développement de logiciels d'infogérance
            Services de développement de suites logicielles
            Services de développement de logiciels de gestion des stocks
            Services de développement de logiciels d'analyse financière et de logiciels comptables
            Services de développement de logiciels d'analyse financière
            Services de développement de logiciels financiers
            Services de développement de logiciels comptables
            Services de développement de logiciels de gestion des relations clientèle (CRM)
            Services de développement de logiciels d'enregistrement des horaires ou de logiciels de gestion des ressources humaines
            Services de développement de logiciels de planification des ressources de l'entreprise (ERP)
            Services de développement de logiciels analytiques, scientifiques, mathématiques ou prévisionnels
            Services de développement de logiciels analytiques ou scientifiques
            Services de développement de logiciels mathématiques ou prévisionnels
            Services de développement de logiciels statistiques
            Services de développement de logiciels de vente aux enchères
            Services de développement de logiciels de vente, de marketing et de veille économique
            Services de développement de logiciels de vente ou de marketing
            Services de développement de logiciels de veille économique
            Services de développement de logiciels de passation de marchés
            Services de développement de logiciels de communication et de logiciels multimédia
            Services de développement de logiciels de communication
            Services de développement de logiciels de communication de bureau
            Services de développement de logiciels de réponse vocale interactive
            Services de développement de logiciels pour modem
            Services de développement de logiciels d'accès à distance
            Services de développement de logiciels de vidéoconférence
            Services de développement de logiciels d'échange
            Services de développement de logiciels de technologies de l'information
            Services de développement de logiciels d'émulation
            Services de développement de logiciels de gestion de mémoire
            Services de développement de logiciels multimédias
            Services de développement de logiciels d'édition musicale ou sonore
            Services de développement de logiciels de clavier virtuel
            Services de développement de logiciels de bases de données et de logiciels d'exploitation
            Services de développement de logiciels de bases de données
            Services de développement de logiciels de système d'exploitation d'unité centrale
            Services de développement de logiciels de système d'exploitation de mini-ordinateur
            Services de développement de logiciels de système d'exploitation de micro-ordinateur
            Services de développement de logiciels de système d'exploitation d'ordinateur personnel
            Services de développement de logiciels de groupage
            Services de développement de logiciels de gestion du système d'exploitation en temps réel
            Services de développement de logiciels utilitaires
            Services de développement de logiciels de copie de sécurité ou de récupération
            Services de développement de logiciels de codes-barres
            Services de développement de logiciels de sécurité
            Services de développement de logiciels de sécurité des fichiers
            Services de développement de logiciels de sécurité des données
            Services de développement de logiciels de traduction de langues étrangères
            Services de développement de logiciels de chargement des supports d'enregistrement
            Services de développement de logiciels de protection contre les virus
            Services de développement de logiciels antivirus
            Services de développement de logiciels utilitaires généraux, de compression et d'impression
            Services de développement de logiciels utilitaires généraux
            Services de développement de logiciels utilitaires d'impression
            Services de développement de logiciels de gestion des systèmes, de stockage et de contenu
            Services de développement de logiciels de gestion des systèmes
            Services de développement de logiciels de gestion de stockage
            Services de développement de logiciels de gestion de contenu
            Services de développement de logiciels de vérifications des versions
            Services de développement de logiciels divers et systèmes informatiques
            Services de développement de logiciels de jeu vidéo, de jeux pour la famille et d'économiseurs d'écran
            Services de développement de logiciels de jeux vidéo
            Services de développement de logiciels de bureautique
            Services de développement de logiciels de formation et de divertissement
            Services de développement de logiciels de formation et de divertissement
            Services de développement de logiciels de divertissement
            Services de développement de logiciels de création de patrons et de gestion des calendriers
            Services de développement de logiciels de création de patrons
            Services de développement de logiciels de gestion des calendriers
            Services de développement de logiciels de gestion des pilotes et de systèmes
            Services de développement de logiciels d'impression
            Services de développement de logiciels de création de carnets d'adresses
            Services de développement de logiciels d'élaboration d'étiquettes
            Services de développement de langages de programmation et d'outils
            Services de développement de logiciels de compilation
            Services de développement de logiciels de gestion de la configuration
            Services de développement de logiciels de développement
            Services de développement de logiciels d'essai de programmes
            Services de développement de logiciels de débogage
            Services de développement de logiciels de tableur et d'amélioration de tableur
            Services de développement de logiciels de tableur
            Services de conseil en systèmes informatiques et conseils techniques
            Services de conseil en analyse d'exploitation
            Services d'analyse stratégique et de planification de systèmes ou de technologies de l'information
            Services d'analyse stratégique de systèmes ou de technologies de l'information
            Services de planification de systèmes ou de technologies de l'information
            Services de technologies de l'information
            Services d'analyse des exigences de la technologie de l'information
            Services de conseil en gestion de projet
            Services de planification de la mise en application de systèmes
            Services de planification de l'assurance qualité des systèmes
            Services d'évaluation et d'analyse de l'assurance qualité des systèmes
            Services de conseil en essai d'acceptation de logiciels d'exploitation
            Services de conseil en intégration de logiciels
            Services de conseil en intégration de matériel informatique
            Services de développement de logiciels personnalisés
            Développement de logiciels pour applications militaires
            Développement de logiciels transactionnels et de logiciels personnalisés
            Services d'analyses et de programmation de systèmes
            Services de spécification de cibles de projets critiques
            Services de modélisation de projets
            Services de programmation
            Services de prototypage
            Services contractuels d'analyse et de programmation de systèmes
            Services de conseil en systèmes informatiques
            Services de maintenance des systèmes et services d'assistance
            Services de reprise des applications informatiques en cas d'interruption accidentelle
            Services d'archivage informatique
            Services d'aide aux utilisateurs et services d'assistance
            Services d'aide aux utilisateurs
            Services d'assistance relative aux systèmes
            Services d'essais de logiciels
            Services d'essais de systèmes
            Services relatifs aux logiciels
            Services d'assistance relative aux logiciels
            Services de développement de logiciels
            Services d'implémentation de logiciels
            Services de reproduction de logiciels
            Services de configuration de logiciels
            Services de conseil en logiciels
            Services de maintenance et de réparation de logiciels
            Maintenance de logiciels de technologies de l'information
            Réparation de logiciels de technologies de l'information
            Services de fourniture de logiciels
            Services de commutation de données
            Services de traitement de données
            Services informatiques de tabulation
            Services de conversion de données
            Services de traitement par lots
            Services informatiques d'exploitation en temps partagé
            Services de saisie de données
            Services de préparation de données
            Services de reconnaissance optique de caractères
            Services de capture de données
            Services de collecte et de collation de données
            Services de gestion et d'assistance relatifs aux réseaux de données
            Services d'assistance relative aux réseaux informatiques
            Services de gestion de réseaux informatiques
            Services d'analyse de données
            Services de stockage de données
            Services de transmission de données
            Services de fourniture de données
            Services de bases de données
            Services de bases de données à valeur ajoutée
            Services de gestion de données
            Services de normalisation et de classification des contenus et des données
            Services internet
            Services de fournisseurs
            Fournisseur de services internet (ISP)
            Fournisseur de services de courrier électronique
            Services de conception de sites WWW (World Wide Web)
            Fournisseurs de moteurs de recherche sur le web
            Services d'hébergement pour l'exploitatuion de sites WWW
            Fournisseurs de services applicatifs
            Noms de domaine internet
            Services de développement de l'internet
            Services de développement des applications client internet ou intranet
            Services de développement des applications serveur internet ou intranet
            Services informatiques
            Services de gestion relatifs à l'informatique
            Services de logiciels de gestion de réseau
            Services de gestion de documents
            Services de bureautique
            Services de gestion des installations informatiques
            Services de gestion d'installations impliquant des activités informatiques
            Services de gestion d'installations pour le développement de systèmes informatiques
            Services de gestion d'installations pour la maintenance de systèmes informatiques
            Services de mise à jour d'ordinateurs
            Services d'extension informatique
            Services d'extension de mémoire
            Services informatiques professionnels
            Développement d'accords de niveau de service
            Services d'assistance et de conseils informatiques
            Services d'assistance informatique
            Services d'assistance technique informatique
            Services de réseaux informatiques
            Services de réseau local
            Services de réseau à grande distance
            Services d'audit informatique et services d'essai informatique
            Services d'audit informatique
            Services d'essai informatique
            Services de secours informatique et services informatiques de conversion de catalogues
            Services de secours informatique
            Services informatiques de conversion de catalogues
            Services de recherche et développement et services de conseil connexes
            Services de recherche et développement expérimental
            Services de recherche
            Services de laboratoire de recherche
            Services de recherche marine
            Services de développement expérimental
            Services de conseil en recherche et développement
            Services de conseil en recherche
            Services de conseil en développement
            Conception et exécution dans le domaine de la recherche et du développement
            Services de recherche et développement en matière de matériels de sécurité et de défense
            Recherche et technologie militaires
            Étude de préfaisabilité et démonstration technique
            Développement de matériel de sécurité
            Développement d'armes à feu et de munitions
            Développement de véhicules militaires
            Développement de navires de guerre
            Développement d'aréonefs, de missiles et de spationefs militaires
            Développement de systèmes électroniques militaires
            Test et évaluation
            Test et évaluation de matériel de sécurité
            Test et évaluation des armes à feu et des munitions
            Test et évaluation des véhicules militaires
            Test et évaluation des navires de guerre
            Test et évaluation des aéronefs, des missiles et des spationefs militaires
            Test et évaluation des systèmes électroniques militaires
            Services de l'administration publique, de la défense et de la sécurité sociale
            Services de l'administration publique
            Services d'administration générale
            Services du législatif et de l'exécutif
            Services de l'exécutif
            Services du législatif
            Services administratifs relatifs aux activités des entreprises
            Services administratifs relatifs aux projets de développement
            Services administratifs d'agences
            Services administratifs de l'enseignement
            Services administratifs de la santé
            Services administratifs du logement
            Services administratifs récréatifs, culturels et religieux
            Services administratifs dans le secteur du tourisme
            Services d'appui aux pouvoirs publics
            Services des pouvoirs publics
            Services généraux de personnel pour les pouvoirs publics
            Prestations de services pour la collectivité
            Affaires étrangères et autres services
            Services des affaires étrangères
            Services diplomatiques
            Services consulaires
            Services liés à l'aide économique aux pays étrangers
            Services liés à l'aide militaire aux pays étrangers
            Services de défense
            Services de la défense
            Services de protection civile
            Services de la justice
            Services judiciaires
            Services administratifs des tribunaux
            Services liés à la détention ou à la réhabilitation de criminels
            Services d'incarcération
            Services d'escorte de prisonniers
            Services de l'administration pénitentiaire
            Services de réinsertion
            Services de sécurité et d'ordre public
            Services de sécurité publique
            Services de police
            Services d'ordre et de droit publics
            Services d'ordre public
            Services d'huissier de justice
            Services d'incendie et de secours
            Services d'incendie
            Services de lutte contre l'incendie
            Services de prévention des incendies
            Services de lutte contre les incendies de forêt
            Services de sauvetage
            Services de sécurité sociale obligatoire
            Services de prestations
            Indemnités de maladie
            Indemnités de maternité
            Indemnités d'invalidité
            Indemnités d'incapacité temporaire
            Indemnités de chômage
            Régimes de pensions des fonctionnaires de l'État
            Prestations familiales
            Allocations familiales
            Services relatifs à l'industrie du pétrole et du gaz
            Services professionnels relatifs à l'industrie du gaz
            Services relatifs à l'extraction du gaz
            Services de regazéification
            Services de plongée liés à l'extraction du gaz
            Services de plongée liés à l'extraction du pétrole
            Services professionnels relatifs à l'industrie pétrolière
            Services liés à l'extraction du pétrole
            Services de suspension de la colonne perdue
            Services de chemisage
            Services de chemisage d'essai
            Services de chemisage à l'emplacement du puits
            Services de diagraphie des boues de forage
            Services de forage
            Services de forage liés à l'extraction du gaz
            Services de forage offshore
            Services de forage par turbine
            Services de forage par turbine spiralée
            Services de carottage
            Services de positionnement d'appareils de forage
            Services de cuvelage et de tubage de puits
            Services de cuvelage de puits
            Services de fourniture de personnel pour le cuvelage de puits
            Services de planification pour le cuvelage de puits
            Services de fraisage pour le cuvelage de puits
            Services d'achèvement du cuvelage de puits
            Services de cimentation de puits
            Services de cimentation en colonne de tubage perdue
            Services de cimentation des obturateurs
            Services de cimentation mousse
            Services de forage de puits et de production
            Services de forage de puits
            Services de contrôle de forage de puits
            Services d'extraction des tubes de forage de puits
            Services de dévissage des trains de tiges pour forage de puits
            Services de forage des trous de rat
            Services de suivi de forage de puits
            Services de suivi des appareils de forage de puits
            Services de diagraphie des sondages
            Services de diagraphie de puits tubé
            Services de diagraphie de puits non tubé
            Autres services de diagraphie
            Services de gestion de puits
            Services d'assistance relative aux puits
            Services d'essais de puits
            Services d'essais de fracturation de puits
            Services d'inspection ou d'essais de puits
            Services d'essais des équipement de puits
            Services de tubage
            Services d'achèvement de puits
            Services de bouchage de puits
            Services de positionnement de puits
            Services onshore et offshore
            Services onshore
            Services offshore
            Services d'installation offshore
            Services offshore de navires ravitailleurs
            Services de fond de puits
            Services de diagraphie en fond de puits
            Services de pompage de fond de puits
            Services d'enregistrement de fond de puits
            Services d'élargissement de fond de puits
            Services de forage de fond de puits
            Services de contrôle des vibrations de fond de puits
            Services d'outillage de fond de puits
            Services d'outillage pétrolier de fond de puits
            Services de contrôle de pipelines
            Services agricoles, sylvicoles, horticoles, d'aquaculture et d'apiculture
            Services agricoles
            Services liés à la production agricole
            Location de matériel agricole avec opérateur
            Location de faucheuses ou de matériel agricole avec opérateur
            Services de compostage
            Services sylvicoles
            Services de débardage
            Services liés au débardage
            Services d'exploitation forestière
            Transport de grumes dans les forêts
            Services de défrichement
            Services d'abattage d'arbres
            Services d'élagage
            Plantation d'arbres par ensemencement
            Services d'imprégnation du bois
            Services liés à la sylviculture
            Services de gestion des forêts
            Services de gestion des ressources forestières
            Services de lutte contre les animaux nuisibles de la forêt
            Services d'administration forestière
            Services d'inventaire forestier
            Services de surveillance ou d'évaluation des forêts
            Services de boisement
            Services d'extension forestière
            Services de gestion de pépinières de forêt
            Services de planification sectorielle de la forêt
            Services horticoles
            Réalisation et entretien d'espaces verts
            Entretien de pelouses décoratives ou d'agrément
            Services d'enlèvement des mauvaises herbes
            Services de désherbage
            Services d'entretien de parcs
            Services d'entretien de terrains
            Services d'engazonnement
            Services d'ensemencement
            Entretien de pelouses sportives
            Services d'exposition florale
            Élagage des arbres et taille des haies
            Élagage des arbres
            Taille des haies
            Services zoologiques
            Services d'élevage
            Services de propagation du gibier
            Services liés à la chasse
            Services de pose de pièges
            Services liés à la pêche
            Services liés à l'aquaculture
            Services liés à la mariculture
            Services liés à l'ostréiculture
            Services liés à la conchyliculture
            Services liés à la crevetticulture
            Services liés à la pisciculture
            Services liés à l'apiculture
            Services aux entreprises: droit, marketing, conseil, recrutement, impression et sécurité
            Services juridiques
            Services de conseils et de représentation juridiques
            Services de conseil juridique
            Services de représentation légale
            Services de représentation des parties prenantes
            Services de conseils en matière de brevets et de droits d'auteurs
            Services de conseils en matière de droits d'auteur
            Services de conseils en matière de droits d'auteurs de logiciels
            Services de documentation et de certification juridiques
            Services de documentation
            Services de certification
            Services de certification de signature électronique
            Services de conseils et d'information juridiques
            Services de comptabilité, services d'audit et services fiscaux
            Services de comptabilité et d'audit
            Services de comptabilité
            Services comptables
            Services de gestion des salaires
            Services d'enregistrement des ventes et des achats
            Services d'établissement d'états financiers
            Services d'audit
            Services d'audit financier
            Services de notation en matière de gouvernance d'entreprise
            Services d'audit interne
            Services de contrôle légal des comptes
            Services de vérification des fraudes
            Services de vérification comptable
            Services fiscaux
            Services de conseils fiscaux
            Services de préparation des déclarations d'impôts
            Services de courtage des douanes
            Études de marché et recherche économique; sondages et statistiques
            Services d'études de marchés
            Services d'études
            Services de conception d'études
            Services de réalisation d'enquêtes
            Services d'enquête téléphonique
            Services d'analyses d'enquêtes
            Services de recherche économique
            Services d'évaluation de l'impact économique
            Services de test de marché
            Services d'évaluation des performances
            Étude de faisabilité
            Services de recherche sociale
            Services de sondages d'opinion
            Services statistiques
            Services de publicité et de marketing
            Services de publicité
            Services de conseils en publicité
            Services de gestion publicitaire
            Services de campagne publicitaire
            Services de publicité par voie aérienne
            Services de marketing
            Services de marketing direct
            Services de promotion
            Services à la clientèle
            Services d'enquête auprès des consommateurs
            Services d'enquête sur la satisfaction des consommateurs
            Services après-vente
            Programme de fidélisation du client
            Services d'enchères
            Services d'enchères électroniques
            Conseil en affaires et en gestion et services connexes
            Services de conseil en affaires et en gestion
            Services de conseil en gestion générale
            Services de conseil en développement des entreprises
            Services de conseil en gestion financière
            Services de conseil en gestion du marketing
            Services de conseil en gestion des ressources humaines
            Services de conseil en gestion de la production
            Services de conseil en conception
            Services de relations publiques
            Services de gestion des relations publiques
            Services de conseil en relations publiques
            Services de conseil en matière de sécurité
            Services de conseil en matière d'acquisitions
            Services de conseil et d'évaluation
            Services relatifs à la gestion
            Services de gestion de projets autres que pour les travaux de construction
            Services de supervision de projets autres que pour les travaux de construction
            Services de conception de projets autres que pour les travaux de construction
            Services d'arbitrage et de conciliation
            Services de gestion de crise
            Services d'appui bureautiques
            Services de répondeur téléphonique
            Services de standard téléphonique
            Centre d'appels
            Services de reprographie
            Services de photocopie
            Services de traduction
            Services d'interprétation
            Services de dactylographie, de traitement de texte et de publication assistée par ordinateur
            Services de dactylographie
            Services de traitement de texte
            Services de publication assistée par ordinateur
            Services de classement
            Services d'établissement de listes d'adresses et services d'envoi
            Services d'envoi
            Services de recrutement
            Services de placement de personnel
            Services de recherche d'emplois
            Services de placement de personnel de bureau
            Services de déplacement d'employés
            Services de mise à disposition de personnel, y compris de personnel temporaire
            Services de mise à disposition de personnel de bureau
            Services de mise à disposition de personnel d'aide à domicile
            Services de mise à disposition de personnel commercial ou industriel
            Services de mise à disposition de personnel infirmier
            Services de mise à disposition de personnel médical
            Services de gestion du personnel, excepté services de placement et de mise à disposition
            Services du personnel et des salaires
            Services de formation de personnel
            Services de développement du personnel
            Services d'orientation professionnelle
            Services de centres d'évaluation en vue du recrutement
            Services d'enquête et de sécurité
            Services de sécurité
            Services de surveillance d'installations d'alarme
            Services de gardiennage
            Services de surveillance
            Services de localisation
            Services de recherche de fugitifs
            Services de patrouille
            Services de fourniture de badges d'identification
            Services d'enquêtes
            Services d'agences de détectives
            Services de graphologie
            Services d'analyse des déchets
            Services d'impression et services connexes
            Services d'impression
            Services d'impression numérique
            Services d'impression de billets de banque
            Services relatifs à l'impression
            Services de finition d'imprimés
            Services de correction d'épreuves
            Services de composition
            Services de préparation de plaques d'impression
            Services de photogravure
            Services de composition typographique
            Services de lithographie
            Services de conception graphique
            Services d'impression et de livraison
            Services d'impression et de distribution
            Services divers aux entreprises et services connexes
            Services de holdings de gestion
            Services de conditionnement et services connexes
            Services de conditionnement
            Conception de modèles
            Services de décoration d'intérieur
            Services d'architecture d'intérieur
            Services d'assistance à la conception
            Services de conception de mobilier
            Services des agences de recouvrement
            Services de péage
            Services d'organisation d'expositions, de foires et de congrès
            Services d'organisation de séminaires
            Services d'organisation d'événements
            Services d'organisation d'événements culturels
            Services d'organisation de festivals
            Services d'organisation de fêtes
            Services d'organisation de défilés de mode
            Services d'organisation de foires et d'expositions
            Services d'organisation de ventes aux enchères
            Services photographiques et services connexes
            Services photographiques
            Services de photographie publicitaire
            Services de photographie aérienne
            Services de photographie spécialisée
            Services de photographie en fond de trou
            Services de photographie sous-marine
            Services de microfilmage
            Services de radiographie
            Services de photographie en studio
            Services de développement de photographies
            Services de restauration, de copie et de retouche de photographies
            Services d'édition
            Services de reliure et de finition
            Services de finition de livres
            Services de reliure
            Services d'édition de dictionnaires de langue
            Services d'édition de dictionnaires de langue régionale
            Services d'abonnement
            Services divers aux entreprises
            Services de contrôle des stocks
            Services de réception
            Services de gestion d'immeubles et d'installations
            Services de gestion d'installations
            Services de gestion des contrats
            Services de gestion de bibliothèque
            Services d'archivage
            Services de catalogage
            Services d'organisation économique
            Gestion des documents
            Services de voyages d'affaires
            Services d'accompagnement professionnel
            Services de scanning et services de facturation
            Services de scanning
            Services de facturation
            Services d'enseignement et de formation
            Services d'enseignement primaire
            Services d'enseignement préscolaire
            Services d'enseignement secondaire
            Services d'enseignement secondaire technique et professionnel
            Services d'enseignement secondaire technique
            Services d'enseignement secondaire professionnel
            Services d'enseignement supérieur
            Services de formation pour la jeunesse
            Services de formation médicale
            Services de formation en matière de sécurité
            Services d'enseignement spécialisé
            Services d'éducation des adultes et autres services d'enseignement
            Services scolaires divers
            Services des auto-écoles
            Services d'épreuves de conduite automobile
            Cours de conduite
            Services des écoles d'aviation
            Services des écoles de voile
            Services des écoles de plongée
            Services des écoles de ski
            Services d'enseignement par voie électronique
            Services d'enseignement de niveau universitaire pour adultes
            Exploitation d'un centre d'enseignement
            Services de formation
            Services de formation spécialisée
            Services de formation du personnel
            Services de dressage de chiens
            Services d'écoles d'équitation
            Installations de formation
            Services relatifs aux programmes de formation
            Séminaires de formation
            Services de formation professionnelle
            Services de formation industrielle et technique
            Services de formation industrielle
            Services de formation technique
            Services de formation en gestion
            Services de formation et de familiarisation dans le domaine de l'informatique
            Services de formation informatique
            Cours d'informatique
            Services de formation dans le domaine de l'environnement
            Services de formation dans le domaine de la sécurité
            Services de formation dans le domaine de la santé et des premiers secours
            Services de formation dans le domaine de la santé
            Services de formation dans le domaine des premiers secours
            Services de formation pour l'épanouissement de la personnalité
            Fourniture de cours de langues
            Services d'aide pédagogique
            Services de formation dans le domaine des équipements militaires et de sécurité
            Formation et simulation dans le domaine des équipements de sécurité
            Formation et simulation dans le domaine des armes à feu et des munitions
            Formation et simulation dans le domaine des véhicules militaires
            Formation et simulation dans le domaine des navires de guerre
            Formation et simulation dans le domaines des aéronefs, des missiles et des spationefs militaires
            Formation et simulation dans le domaine des systèmes électroniques militaires
            Services de santé et services sociaux
            Services de santé
            Services hospitaliers et services connexes
            Services hospitaliers
            Services hospitaliers de chirurgie
            Services hospitaliers de médecine
            Services hospitaliers de gynécologie
            Services de fertilisation in vitro
            Services hospitaliers d'obstétrique
            Services hospitaliers de rééducation
            Services hospitaliers de psychiatrie
            Services d'orthèse
            Services d'oxygénothérapie
            Services de pathologie
            Services d'analyses de sang
            Services d'analyses bactériologiques
            Services hospitaliers de dialyse
            Services d'appui hospitalier
            Services de literie hospitalière
            Services de soins ambulatoires
            Services de pratique médicale et services connexes
            Services de pratique médicale
            Services prestés par les médecins généralistes
            Services prestés par les médecins spécialistes
            Services prestés par les gynécologues ou les obstétriciens
            Services prestés par les néphrologues ou services prestés par les neurologues
            Services prestés par les cardiologues ou services prestés par les pneumologues
            Services prestés par les cardiologues
            Services prestés par les pneumologues
            Services prestés par les ORL ou les audiologistes
            Services prestés par les gastro-entérologues et les gériatres
            Services prestés par les gastro-entérologues
            Services prestés par les gériatres
            Services prestés par les psychiatres ou les psychologues
            Services à domicile pour les personnes souffrant de perturbations psychologiques
            Services prestés par les ophthalmologues, les dermatologues et les orthopédistes
            Services prestés par les ophthalmologues
            Services prestés par les dermatologues
            Services prestés par les orthopédistes
            Services prestés par les pédiatres ou urologues
            Services prestés par les pédiatres
            Services prestés par les urologues
            Services prestés par les chirurgiens spécialistes
            Services de soins dentaires et services connexes
            Services de soins dentaires
            Services d'orthodontie
            Services de chirurgie orthodontique
            Services de santé divers
            Services prestés par le personnel médical
            Services prestés par les sages-femmes
            Services prestés par le personnel infirmier
            Services de soins médicaux à domicile
            Services de dialyse et de soins médicaux à domicile
            Services de conseil prestés par le personnel infirmier
            Services paramédicaux
            Services de physiothérapie
            Services d'homéopathie
            Services d'hygiène
            Livraison à domicile d'articles pour incontinents
            Services ambulanciers
            Services d'équipement de santé extrahospitalier
            Services de soins infirmiers de foyers
            Services prestés par les laboratoires médicaux
            Services prestés par les banques de sang
            Services prestés par les banques de sperme
            Services prestés par les banques d'organes
            Services de médecine du travail
            Services d'analyses médicales
            Services de pharmacie
            Services d'imagerie médicale
            Services prestés par les opticiens
            Services d'acupuncture et de chiropraxie
            Services d'acupuncture
            Services de chiropraxie
            Services vétérinaires
            Services d'animalerie
            Services d'action sociale et services connexes
            Services d'action sociale
            Services d'action sociale avec hébergement
            Services sociaux pour les personnes âgées
            Services sociaux pour les personnes handicapées
            Services sociaux pour les enfants et les adolescents
            Services sociaux sans hébergement
            Services de foyers de jour
            Services de crèches et garderies d'enfants
            Services de foyers de jour pour enfants et adolescents handicapés
            Livraison de provisions à domicile
            Services d'orientation et de conseil professionnel
            Services d'orientation
            Services de conseil professionnel
            Services de planning familial
            Services sociaux non prestés par les institutions résidentielles
            Services de réhabilitation
            Services de réhabilitation professionnelle
            Services sociaux
            Services sociaux administratifs
            Programme d'action communale
            Services médico-sociaux
            Services d'évacuation des eaux usées et d'élimination des déchets, services d'hygiénisation et services relatifs à l'environnement
            Services des eaux usées
            Services de collecte des eaux usées
            Services de traitement des eaux usées
            Services d'élimination des eaux usées
            Services de traitement pour puisards
            Services de traitement pour fosses septiques
            Services de vidange de puisards ou de fosses septiques
            Services de curage des égouts
            Service de gestion du réseau d'assainissement
            Exploitation d'une station de traitement des eaux d'égout
            Services d'inspection des égouts et services de conseil en matière de traitement des eaux usées
            Services d'inspection des égouts
            Services de conseil en traitement des eaux usées
            Services liés aux déchets et aux ordures
            Élimination et traitement des ordures
            Services de collecte des ordures
            Services de collecte de déchets solides urbains
            Services de collecte des ordures ménagères
            Services de collecte des déchets sauvages
            Services de collecte du papier
            Services de transport des ordures ménagères
            Services de traitement et d'élimination des ordures ménagères et des déchets non dangereux
            Services d'élimination des ordures ménagères
            Services d'élimination de déchets solides urbains
            Services d'incinération des ordures ménagères
            Services d'évacuation de cendres
            Traitement et évacuation de résidus liquides
            Services d'élimination des boues
            Services de transport des boues
            Services de traitement des boues
            Services d'évacuation des boues
            Services de recyclage des ordures ménagères
            Services relatifs aux déchets radioactifs, toxiques, médicaux et dangereux
            Services de traitement des déchets radioactifs
            Collecte de déchets radioactifs
            Services de stockage des déchets radioactifs
            Élimination de déchets radioactifs
            Transport de déchets radioactifs
            Transport de déchets radioactifs de faible activité
            Transport de déchets radioactifs d'activité intermédiaire
            Colis de déchets radioactifs
            Colis de déchets radioactifs de faible activité
            Colis de déchets radioactifs d'activité intermédiaire
            Services concernant les sols contaminés
            Enlèvement de sols contaminés
            Élimination de sols contaminés
            Services de traitement de sols contaminés
            Nettoyage et traitement du sol
            Services d'élimination de déchets toxiques, excepté déchets radioactifs et sols contaminés
            Services d'élimination d'armes et de munitions
            Services de neutralisation des bombes
            Services de dragage de mines
            Services relatifs aux déchets médicaux
            Services de collecte de déchets hospitaliers
            Services d'élimination de déchets hospitaliers
            Services d'enlèvement de déchets biologiques
            Services de collecte, de transport et d'élimination de déchets hospitaliers
            Exploitation d'une décharge
            Services de gestion de décharges contrôlées
            Services de gestion de terrils de charbon
            Services de gestion de décharges
            Services de propreté et d'hygiénisation en milieu urbain ou rural, et services connexes
            Services de voirie et services de balayage des rues
            Services de voirie
            Services de balayage des rues
            Services de déneigement
            Services de déverglaçage
            Services de nettoyage et de vidange des avaloirs
            Services de nettoyage des avaloirs
            Services de vidange des avaloirs
            Services de désamiantage
            Services d'enlèvement du plomb
            Services de désinfection et désinfestation en milieu rural ou urbain
            Services de nettoyage de plages
            Services d'enlèvement des graffitis
            Services relatifs à l'environnement
            Gestion environnementale
            Évaluation de l'impact sur l'environnement autre que pour la construction
            Évaluation des risques et dangers autre que pour la construction
            Normes environnementales autres que pour la construction
            Analyse des indicateurs environnementaux autres que pour la construction
            Services d'évaluation de l'impact sur l'environnement (EIA) autres que pour la construction
            Surveillance de l'environnement autre que pour la construction
            Planification environnementale
            Planification de la mise en valeur de l'environnement urbain
            Planification de la stratégie de conservation de la forêt
            Planification de la stratégie de conservation maritime
            Services de gestion des ressources naturelles et de planification de la stratégie de conservation
            Création ou planification d'institutions environnementales
            Services de conseils environnementaux
            Services de conseils en matière d'approvisionnement en eau et de gestion des eaux usées autres que pour la construction
            Contrôle de la conformité aux normes environnementales
            Systèmes d'information environnementale
            Services corporatifs de contrôle de la conformité aux normes environnementales
            Services sectoriels de contrôle de la conformité aux nornes environnementales
            Services de contrôle de la conformité aux normes environnementales pour activités spécifiques
            Services de contrôle de la qualité environnementale
            Services de contrôle de la sécurité environnementale
            Services de recherche de la pollution
            Services de recherche en matière de pollution par produits chimiques et par hydrocarbures
            Recherche sur un site d'usine à gaz
            Recherche sur un site d'usine à produits chimiques ou sur un site de déchets de raffinerie de pétrole
            Autres services de recherche en matière de pollution
            Recherche sur un site de dépôt d'hydrocarbures ou de terminal pétrolier
            Recherche sur un site industriel
            Recherche sur un site contenant des déchets industriels
            Recherche sur un site d'usine de traitement du bois
            Recherche sur un site d'installation de nettoyage chimique à sec
            Recherche sur un site de fonderie
            Recherche sur un site d'usine de recyclage
            Recherche sur un site d'usine de traitement des aliments
            Protection environnementale
            Services de sécurité environnementale
            Services de protection du paysage
            Service de protection de l'ozone
            Services de protection contre la contamination de l'alimentation humaine ou de l'alimentation animale
            Services de protection des ressources génétiques
            Services de protection contres les matières toxiques
            Services de radioprotection
            Services de protection des espèces menacées de disparition
            Services de protection contre les risques ou dangers naturels
            Réhabilitation environnementale
            Réhabilitation de site industriel
            Services de décontamination environnementale
            Services de mise en valeur des sols
            Recherche, surveillance et réhabilitation de la pollution
            Services liés à la pollution atmosphérique
            Gestion de la qualité de l'air
            Services de contrôle et de gestion de la pollution atmosphérique transfrontalière
            Achats de crédits d'émission de CO2
            Services de protection contre la pollution atmosphérique
            Services de surveillance ou de mesure de la pollution atmosphérique
            Services de détection de gaz toxiques
            Surveillance du méthane
            Services de surveillance du dioxyde de carbone
            Surveillance des particules atmosphériques
            Services de surveillance de l'appauvrissement en ozone
            Pollution des sols
            Services de protection contre la pollution des sols
            Services d'enlèvement des sols pollués
            Traitement et réhabilitation des sols pollués
            Services de conseil contre la pollution des sols
            Cartographie de la pollution des sols
            Mesure et surveillance de la pollution des sols
            Évaluation de la pollution par les engrais organiques
            Évaluation de la pollution par les pesticides
            Évaluation de la pollution par les nitrates et les phosphates
            Évaluation de la pollution par les nitrates
            Évaluation de la pollution par les phosphates
            Services liés à la pollution de l'eau
            Services de surveillance et de lutte contre la pollution des eaux de surface
            Services de réhabilitation de la pollution des eaux de surface
            Services de protection de la pollution des eaux de surface
            Services de traitement des eaux de surface
            Services de drainage de la pollution des eaux de surface
            Services de gestion ou de lutte contre la pollution transfrontalière des eaux
            Services de surveillance et de lutte contre la pollution de la nappe phréatique
            Services de drainage de la pollution de la nappe phréatique
            Traitement et réhabilitation de la pollution de la nappe phréatique
            Services de recherche, de surveillance et de réhabilitation des polluants
            Services liés à la pollution par hydrocarbures
            Services de surveillance de l'écoulement accidentel d'hydrocarbures
            Services de lutte contre les déversements accidentels d'hydrocarbures
            Services de réhabilitation de l'écoulement accidentel d'hydrocarbures
            Services liés à la pollution sonore
            Services de lutte contre le bruit
            Services de protection contre la pollution sonore
            Services de surveillance de la pollution sonore
            Services de conseil contre la pollution sonore
            Services liés à la pollution par des matières toxiques
            Services de surveillance des matières toxiques
            Services de réhabilitation des matières toxiques
            Services de nettoyage et d'hygiène
            Services de nettoyage
            Services de nettoyage de logements, de bâtiments et de vitres
            Services de nettoyage de logements
            Services de nettoyage de bâtiments
            Services de nettoyage de vitres
            Services de nettoyage par soufflage de structures tubolaires
            Services de nettoyage de cuves et de réservoirs
            Services de nettoyage de cuves
            Services de nettoyage de réservoirs
            Services de nettoyage de parkings
            Services de nettoyage de fourneaux et de cheminées
            Services de nettoyage de matériel téléphonique
            Services de nettoyage de matériel de transport
            Services de nettoyage de poubelles
            Services de nettoyage de matériel de bureau, de bureaux, des écoles
            Services de nettoyage de matériel de bureau
            Services de nettoyage de bureaux
            Services de nettoyage des écoles
            Services d'hygiénisation d'installations
            Services de désinfection et de désinfestation
            Services de lutte contre les parasites
            Services de dératisation
            Services de fumigation
            Services récréatifs, culturels et sportifs
            Services cinématographiques et services vidéo
            Services de production de films cinématographique et de vidéos et services connexes
            Services de production cinématographique et vidéo
            Production de films et de vidéos à usage pédagogique
            Production de films et de vidéos publicitaires, de propagande et d'information
            Production de films publicitaires
            Production de vidéos publicitaires
            Production de films de propagande
            Production de vidéos de propagande
            Production de films d'information
            Production de vidéos d'information
            Production de films et de vidéos de divertissement
            Production de films de divertissement
            Production de vidéos de divertissement
            Services liés à la production de films cinématographiques ou de vidéos
            Services de distribution de films cinématographiques et de vidéos
            Services de distribution de vidéos
            Services de distribution de films cinématographiques
            Services de projection de films cinématographiques
            Services de projection de vidéos
            Services de radio et de télévision
            Services de radio
            Services de production radiophonique
            Services de systèmes radiophoniques à petite échelle
            Services de studio ou de matériel radiophonique
            Services généraux de radiophonie mobile (GMRS)
            Services radio familiaux (FRS)
            Services généraux de radiophonie mobile/Services radio familiaux (GMRS/FRS)
            Services de télévision
            Services de production télévisuelle
            Services de télévision en circuit fermé
            Services de télévision numérique
            Services de télévision interactive
            Services de télédiffusion de films à la demande
            Services de téléprogrammation
            Services de radio et de télévision par câble
            Services bilatéraux internationaux et de lignes louées privées internationales
            Services de télévision par câble
            Services de divertissement
            Services de création et d'interprétation d'œuvres artistiques et littéraires
            Œuvres d'art
            Services artistiques
            Services de divertissement prestés par les metteurs en scène de théâtre, les chœurs, les ensembles musicaux et les orchestres
            Services de divertissement prestés par les metteurs en scène de théâtre
            Services de divertissement prestés par les chœurs
            Services de divertissement prestés par les ensembles musicaux
            Services de divertissement prestés par les orchestres
            Services prestés par les auteurs, les compositeurs, les sculpteurs et les artistes
            Services prestés par les auteurs
            Services d'agences de rédaction
            Services relatifs à la préparation de manuels de formation
            Services prestés par les rédacteurs techniques
            Services prestés par les compositeurs
            Services prestés par les sculpteurs
            Services prestés par les artistes
            Services prestés par les artistes indépendants
            Services prestés par les disk-jockeys
            Services d'exploitation de salles de spectacles
            Services de zones récréatives
            Services de fêtes foraines et de parcs d'attractions
            Services de fêtes foraines
            Services de parcs d'attractions
            Services d'animation pour enfants
            Services de plages
            Services relatifs à la danse et aux divertissements
            Services de cirques
            Services d'écoles de danse
            Services d'écoles de danse de salon
            Services d'écoles de danse de discothèque
            Services de jeux et de paris
            Services de jeux
            Services d'exploitation de la loterie
            Services d'exploitation de casinos
            Services de paris
            Services d'exploitation de machines pour les paris mutuels
            Services prestés par les bookmakers
            Services pyrotechniques
            Services prestés par les techniciens du son
            Services d'agences de presse
            Services de bibliothèques, archives, musées et autres services culturels
            Services de bibliothèques et archives
            Services de bibliothèques
            Services d'archives
            Services de destruction d'archives
            Services de musées et de préservation des sites historiques et des services connexes
            Services de musées
            Services d'exposition dans les musées
            Services de conservation des objets exposés et des spécimens
            Services de conservation des objets exposés
            Services de conservation des spécimens
            Services de conservation des sites et des monuments historiques
            Services de conservation des sites historiques
            Services de conservation des monuments historiques
            Services de jardins botaniques et zoologiques et des réserves naturelles
            Services de jardins botaniques
            Services de jardins zoologiques
            Services de réserves naturelles
            Services de préservation de la vie sauvage
            Services sportifs
            Services d'exploitation d'installations sportives
            Services liés au sport
            Services de promotion de manifestations sportives
            Services d'organisation de manifestations sportives
            Services de cybercafé
            Autres services communautaires, sociaux et personnels
            Services des organisations associatives
            Services fournis par des organisations commerciales, professionnelles et spécialisées
            Services fournis par des organisations commerciales
            Services prestés par les organisations professionnelles
            Services fournis par des organisations spécialisées
            Services de sûreté nucléaire
            Services prestés par les organisations syndicales
            Services divers prestés par les organisations associatives
            Services religieux
            Services prestés par les organisations politiques
            Services prestés par les organisations sociales
            Services d'appui relatifs au développement de l'esprit civique et aux équipements collectifs
            Services prestés par les associations de jeunes
            Services de conseil en matière d'égalité des chances
            Services divers
            Services de blanchisserie et de nettoyage à sec
            Services de ramassage de linge
            Services de gestion de blanchisserie
            Services d'exploitation de blanchisserie
            Services de nettoyage de textile
            Services d'imprégnation de textile
            Services de nettoyage de fourrures
            Services de coloration
            Services de repassage
            Services de teinture
            Services de coiffure et de soins de beauté
            Services de coiffure
            Services de coiffeurs pour hommes
            Services de soins de beauté
            Services de soins de beauté, de manucure et de pédicure
            Services de soins cosmétiques
            Services de manucure
            Services de pédicure
            Services de maquillage
            Services de soins corporels
            Services de bains turcs
            Services de stations thermales
            Services de massage
            Services de mieux-être
            Services d'entraînement, d'exercices ou d'aérobic
            Services d'hébergement et de bureau
            Services d'hébergement
            Services de gestion de l'hébergement
            Services ménagers
            Services de portier
            Services de conciergerie
            Services de gardien d'immeuble
            Services relatifs à l'environnement de travail
            Services relatifs aux équipements collectifs
            Services de gestion de parkings
            Services de parkings
            Services de mise en œuvre des règles de stationnement
            Services marins
            Services relatifs à l'océanologie
            Services de gestion portuaire
            Services d'appui de base maritimes
            Services de plongée
            Services funéraires et services connexes
            Services funéraires
            Services d'inhumation et de crémation
            Services d'inhumation
            Services d'entretien de cimetières
            Services de crémation
            Services de pompes funèbres
            Services de chenils
            Autres services
            Services de déclassement
            Services de déplacement
            Services de confection sur mesure
            Services de tapisserie
            Services de serrurerie
            Services d'accordage d'instruments
            Ménages privés employant du personnel
            Services d'employés commerciaux et d'ouvriers industriels
            Services d'employés commerciaux
            Services d'ouvriers industriels
            Services de main-d'œuvre pour les particuliers
            Service de personnel intérimaire pour les particuliers
            Services de personnel de bureau pour les particuliers
            Services de personnel temporaire pour les particuliers
            Services d'aide à domicile
            Services domestiques
            Services prestés par des organisations et des organismes extra-territoriaux
            Services spécifiques aux organisations et aux organismes internationaux
        "; 

        $codes = "
            03000000-1
            03100000-2
            03110000-5
            03111000-2
            03111100-3
            03111200-4
            03111300-5
            03111400-6
            03111500-7
            03111600-8
            03111700-9
            03111800-0
            03111900-1
            03112000-9
            03113000-6
            03113100-7
            03113200-8
            03114000-3
            03114100-4
            03114200-5
            03115000-0
            03115100-1
            03115110-4
            03115120-7
            03115130-0
            03116000-7
            03116100-8
            03116200-9
            03116300-0
            03117000-4
            03117100-5
            03117110-8
            03117120-1
            03117130-4
            03117140-7
            03117200-6
            03120000-8
            03121000-5
            03121100-6
            03121200-7
            03121210-0
            03130000-1
            03131000-8
            03131100-9
            03131200-0
            03131300-1
            03131400-2
            03132000-5
            03140000-4
            03141000-1
            03142000-8
            03142100-9
            03142200-0
            03142300-1
            03142400-2
            03142500-3
            03143000-5
            03144000-2
            03200000-3
            03210000-6
            03211000-3
            03211100-4
            03211110-7
            03211120-0
            03211200-5
            03211300-6
            03211400-7
            03211500-8
            03211600-9
            03211700-0
            03211900-2
            03212000-0
            03212100-1
            03212200-2
            03212210-5
            03212211-2
            03212212-9
            03212213-6
            03212220-8
            03220000-9
            03221000-6
            03221100-7
            03221110-0
            03221111-7
            03221112-4
            03221113-1
            03221114-8
            03221120-3
            03221200-8
            03221210-1
            03221211-8
            03221212-5
            03221213-2
            03221220-4
            03221221-1
            03221222-8
            03221230-7
            03221240-0
            03221250-3
            03221260-6
            03221270-9
            03221300-9
            03221310-2
            03221320-5
            03221330-8
            03221340-1
            03221400-0
            03221410-3
            03221420-6
            03221430-9
            03221440-2
            03222000-3
            03222100-4
            03222110-7
            03222111-4
            03222112-1
            03222113-8
            03222114-5
            03222115-2
            03222116-9
            03222117-6
            03222118-3
            03222120-0
            03222200-5
            03222210-8
            03222220-1
            03222230-4
            03222240-7
            03222250-0
            03222300-6
            03222310-9
            03222311-6
            03222312-3
            03222313-0
            03222314-7
            03222315-4
            03222320-2
            03222321-9
            03222322-6
            03222323-3
            03222330-5
            03222331-2
            03222332-9
            03222333-6
            03222334-3
            03222340-8
            03222341-5
            03222342-2
            03222400-7
            03300000-2
            03310000-5
            03311000-2
            03311100-3
            03311110-6
            03311120-9
            03311200-4
            03311210-7
            03311220-0
            03311230-3
            03311240-6
            03311300-5
            03311400-6
            03311500-7
            03311600-8
            03311700-9
            03312000-9
            03312100-0
            03312200-1
            03312300-2
            03313000-6
            03313100-7
            03313200-8
            03313300-9
            03313310-2
            03320000-8
            03321000-5
            03321100-6
            03321200-7
            03322000-2
            03322100-3
            03322200-4
            03322300-5
            03323000-9
            03324000-6
            03325000-3
            03325100-4
            03325200-5
            03330000-3
            03331000-0
            03331100-1
            03331200-2
            03332000-7
            03332100-8
            03332200-9
            03333000-4
            03340000-6
            03341000-3
            03400000-4
            03410000-7
            03411000-4
            03412000-1
            03413000-8
            03414000-5
            03415000-2
            03416000-9
            03417000-6
            03417100-7
            03418000-3
            03418100-4
            03419000-0
            03419100-1
            03419200-2
            03420000-0
            03421000-7
            03422000-4
            03430000-3
            03431000-0
            03432000-7
            03432100-8
            03440000-6
            03441000-3
            03450000-9
            03451000-6
            03451100-7
            03451200-8
            03451300-9
            03452000-3
            03460000-2
            03461000-9
            03461100-0
            09000000-3
            09100000-0
            09110000-3
            09111000-0
            09111100-1
            09111200-2
            09111210-5
            09111220-8
            09111300-3
            09111400-4
            09112000-7
            09112100-8
            09112200-9
            09113000-4
            09120000-6
            09121000-3
            09121100-4
            09121200-5
            09122000-0
            09122100-1
            09122110-4
            09122200-2
            09122210-5
            09123000-7
            09130000-9
            09131000-6
            09131100-7
            09132000-3
            09132100-4
            09132200-5
            09132300-6
            09133000-0
            09134000-7
            09134100-8
            09134200-9
            09134210-2
            09134220-5
            09134230-8
            09134231-5
            09134232-2
            09135000-4
            09135100-5
            09135110-8
            09200000-1
            09210000-4
            09211000-1
            09211100-2
            09211200-3
            09211300-4
            09211400-5
            09211500-6
            09211600-7
            09211610-0
            09211620-3
            09211630-6
            09211640-9
            09211650-2
            09211700-8
            09211710-1
            09211720-4
            09211800-9
            09211810-2
            09211820-5
            09211900-0
            09220000-7
            09221000-4
            09221100-5
            09221200-6
            09221300-7
            09221400-8
            09222000-1
            09222100-2
            09230000-0
            09240000-3
            09241000-0
            09242000-7
            09242100-8
            09300000-2
            09310000-5
            09320000-8
            09321000-5
            09322000-2
            09323000-9
            09324000-6
            09330000-1
            09331000-8
            09331100-9
            09331200-0
            09332000-5
            09340000-4
            09341000-1
            09342000-8
            09343000-5
            09344000-2
            14000000-1
            14200000-3
            14210000-6
            14211000-3
            14211100-4
            14212000-0
            14212100-1
            14212110-4
            14212120-7
            14212200-2
            14212210-5
            14212300-3
            14212310-6
            14212320-9
            14212330-2
            14212400-4
            14212410-7
            14212420-0
            14212430-3
            14213000-7
            14213100-8
            14213200-9
            14213300-0
            14220000-9
            14221000-6
            14222000-3
            14300000-4
            14310000-7
            14311000-4
            14311100-5
            14311200-6
            14311300-7
            14312000-1
            14312100-2
            14320000-0
            14400000-5
            14410000-8
            14420000-1
            14430000-4
            14450000-0
            14500000-6
            14520000-2
            14521000-9
            14521100-0
            14521140-2
            14521200-1
            14521210-4
            14522000-6
            14522100-7
            14522200-8
            14522300-9
            14522400-0
            14523000-3
            14523100-4
            14523200-5
            14523300-6
            14523400-7
            14600000-7
            14610000-0
            14611000-7
            14612000-4
            14612100-5
            14612200-6
            14612300-7
            14612400-8
            14612500-9
            14612600-0
            14612700-1
            14613000-1
            14613100-2
            14613200-3
            14614000-8
            14620000-3
            14621000-0
            14621100-1
            14621110-4
            14621120-7
            14621130-0
            14622000-7
            14630000-6
            14700000-8
            14710000-1
            14711000-8
            14711100-9
            14712000-5
            14713000-2
            14714000-9
            14715000-6
            14720000-4
            14721000-1
            14721100-2
            14722000-8
            14723000-5
            14724000-2
            14725000-9
            14730000-7
            14731000-4
            14732000-1
            14733000-8
            14734000-5
            14735000-2
            14740000-0
            14741000-7
            14742000-4
            14743000-1
            14744000-8
            14750000-3
            14751000-0
            14752000-7
            14753000-4
            14754000-1
            14755000-8
            14760000-6
            14761000-3
            14762000-0
            14763000-7
            14764000-4
            14765000-1
            14770000-9
            14771000-6
            14772000-3
            14773000-0
            14774000-7
            14780000-2
            14781000-9
            14782000-6
            14783000-3
            14784000-0
            14790000-5
            14791000-2
            14792000-9
            14793000-6
            14794000-3
            14800000-9
            14810000-2
            14811000-9
            14811100-0
            14811200-1
            14811300-2
            14812000-6
            14813000-3
            14814000-0
            14820000-5
            14830000-8
            14900000-0
            14910000-3
            14920000-6
            14930000-9
            15000000-8
            15100000-9
            15110000-2
            15111000-9
            15111100-0
            15111200-1
            15112000-6
            15112100-7
            15112110-0
            15112120-3
            15112130-6
            15112140-9
            15112300-9
            15112310-2
            15113000-3
            15114000-0
            15115000-7
            15115100-8
            15115200-9
            15117000-1
            15118000-8
            15118100-9
            15118900-7
            15119000-5
            15119100-6
            15119200-7
            15119300-8
            15119400-9
            15119500-0
            15119600-1
            15130000-8
            15131000-5
            15131100-6
            15131110-9
            15131120-2
            15131130-5
            15131134-3
            15131135-0
            15131200-7
            15131210-0
            15131220-3
            15131230-6
            15131300-8
            15131310-1
            15131320-4
            15131400-9
            15131410-2
            15131420-5
            15131490-6
            15131500-0
            15131600-1
            15131610-4
            15131620-7
            15131640-3
            15131700-2
            15200000-0
            15210000-3
            15211000-0
            15211100-1
            15212000-7
            15213000-4
            15220000-6
            15221000-3
            15229000-9
            15230000-9
            15231000-6
            15232000-3
            15233000-0
            15234000-7
            15235000-4
            15240000-2
            15241000-9
            15241100-0
            15241200-1
            15241300-2
            15241400-3
            15241500-4
            15241600-5
            15241700-6
            15241800-7
            15242000-6
            15243000-3
            15244000-0
            15244100-1
            15244200-2
            15250000-5
            15251000-2
            15252000-9
            15253000-6
            15300000-1
            15310000-4
            15311000-1
            15311100-2
            15311200-3
            15312000-8
            15312100-9
            15312200-0
            15312300-1
            15312310-4
            15312400-2
            15312500-3
            15313000-5
            15320000-7
            15321000-4
            15321100-5
            15321200-6
            15321300-7
            15321400-8
            15321500-9
            15321600-0
            15321700-1
            15321800-2
            15322000-1
            15322100-2
            15330000-0
            15331000-7
            15331100-8
            15331110-1
            15331120-4
            15331130-7
            15331131-4
            15331132-1
            15331133-8
            15331134-5
            15331135-2
            15331136-9
            15331137-6
            15331138-3
            15331140-0
            15331142-4
            15331150-3
            15331170-9
            15331400-1
            15331410-4
            15331411-1
            15331420-7
            15331423-8
            15331425-2
            15331427-6
            15331428-3
            15331430-0
            15331450-6
            15331460-9
            15331461-6
            15331462-3
            15331463-0
            15331464-7
            15331465-4
            15331466-1
            15331470-2
            15331480-5
            15331500-2
            15332000-4
            15332100-5
            15332140-7
            15332150-0
            15332160-3
            15332170-6
            15332180-9
            15332200-6
            15332230-5
            15332231-2
            15332232-9
            15332240-8
            15332250-1
            15332260-4
            15332261-1
            15332270-7
            15332290-3
            15332291-0
            15332292-7
            15332293-4
            15332294-1
            15332295-8
            15332296-5
            15332300-7
            15332310-0
            15332400-8
            15332410-1
            15332411-8
            15332412-5
            15332419-4
            15333000-1
            15400000-2
            15410000-5
            15411000-2
            15411100-3
            15411110-6
            15411120-9
            15411130-2
            15411140-5
            15411200-4
            15411210-7
            15412000-9
            15412100-0
            15412200-1
            15413000-6
            15413100-7
            15420000-8
            15421000-5
            15422000-2
            15423000-9
            15424000-6
            15430000-1
            15431000-8
            15431100-9
            15431110-2
            15431200-0
            15500000-3
            15510000-6
            15511000-3
            15511100-4
            15511200-5
            15511210-8
            15511300-6
            15511400-7
            15511500-8
            15511600-9
            15511700-0
            15512000-0
            15512100-1
            15512200-2
            15512300-3
            15512900-9
            15530000-2
            15540000-5
            15541000-2
            15542000-9
            15542100-0
            15542200-1
            15542300-2
            15543000-6
            15543100-7
            15543200-8
            15543300-9
            15543400-0
            15544000-3
            15545000-0
            15550000-8
            15551000-5
            15551300-8
            15551310-1
            15551320-4
            15551500-0
            15552000-2
            15553000-9
            15554000-6
            15555000-3
            15555100-4
            15555200-5
            15600000-4
            15610000-7
            15611000-4
            15612000-1
            15612100-2
            15612110-5
            15612120-8
            15612130-1
            15612150-7
            15612190-9
            15612200-3
            15612210-6
            15612220-9
            15612300-4
            15612400-5
            15612410-8
            15612420-1
            15612500-6
            15613000-8
            15613100-9
            15613300-1
            15613310-4
            15613311-1
            15613313-5
            15613319-7
            15613380-5
            15614000-5
            15614100-6
            15614200-7
            15614300-8
            15615000-2
            15620000-0
            15621000-7
            15622000-4
            15622100-5
            15622110-8
            15622120-1
            15622300-7
            15622310-0
            15622320-3
            15622321-0
            15622322-7
            15623000-1
            15624000-8
            15625000-5
            15626000-2
            15700000-5
            15710000-8
            15711000-5
            15712000-2
            15713000-9
            15800000-6
            15810000-9
            15811000-6
            15811100-7
            15811200-8
            15811300-9
            15811400-0
            15811500-1
            15811510-4
            15811511-1
            15812000-3
            15812100-4
            15812120-0
            15812121-7
            15812122-4
            15812200-5
            15813000-0
            15820000-2
            15821000-9
            15821100-0
            15821110-3
            15821130-9
            15821150-5
            15821200-1
            15830000-5
            15831000-2
            15831200-4
            15831300-5
            15831400-6
            15831500-7
            15831600-8
            15832000-9
            15833000-6
            15833100-7
            15833110-0
            15840000-8
            15841000-5
            15841100-6
            15841200-7
            15841300-8
            15841400-9
            15842000-2
            15842100-3
            15842200-4
            15842210-7
            15842220-0
            15842300-5
            15842310-8
            15842320-1
            15842400-6
            15850000-1
            15851000-8
            15851100-9
            15851200-0
            15851210-3
            15851220-6
            15851230-9
            15851250-5
            15851290-7
            15860000-4
            15861000-1
            15861100-2
            15861200-3
            15862000-8
            15863000-5
            15863100-6
            15863200-7
            15864000-2
            15864100-3
            15865000-9
            15870000-7
            15871000-4
            15871100-5
            15871110-8
            15871200-6
            15871210-9
            15871230-5
            15871250-1
            15871260-4
            15871270-7
            15871273-8
            15871274-5
            15871279-0
            15872000-1
            15872100-2
            15872200-3
            15872300-4
            15872400-5
            15872500-6
            15880000-0
            15881000-7
            15882000-4
            15884000-8
            15890000-3
            15891000-0
            15891100-1
            15891200-2
            15891300-3
            15891400-4
            15891410-7
            15891500-5
            15891600-6
            15891610-9
            15891900-9
            15892000-7
            15892100-8
            15892200-9
            15892400-1
            15893000-4
            15893100-5
            15893200-6
            15893300-7
            15894000-1
            15894100-2
            15894200-3
            15894210-6
            15894220-9
            15894300-4
            15894400-5
            15894500-6
            15894600-7
            15894700-8
            15895000-8
            15895100-9
            15896000-5
            15897000-2
            15897100-3
            15897200-4
            15897300-5
            15898000-9
            15899000-6
            15900000-7
            15910000-0
            15911000-7
            15911100-8
            15911200-9
            15930000-6
            15931000-3
            15931100-4
            15931200-5
            15931300-6
            15931400-7
            15931500-8
            15931600-9
            15932000-0
            15940000-9
            15941000-6
            15942000-3
            15950000-2
            15951000-9
            15960000-5
            15961000-2
            15961100-3
            15962000-9
            15980000-1
            15981000-8
            15981100-9
            15981200-0
            15981300-1
            15981310-4
            15981320-7
            15981400-2
            15982000-5
            15982100-6
            15982200-7
            15990000-4
            15991000-1
            15991100-2
            15991200-3
            15991300-4
            15992000-8
            15992100-9
            15993000-5
            15994000-2
            15994100-3
            15994200-4
            16000000-5
            16100000-6
            16110000-9
            16120000-2
            16130000-5
            16140000-8
            16141000-5
            16150000-1
            16160000-4
            16300000-8
            16310000-1
            16311000-8
            16311100-9
            16320000-4
            16330000-7
            16331000-4
            16340000-0
            16400000-9
            16500000-0
            16510000-3
            16520000-6
            16530000-9
            16540000-2
            16600000-1
            16610000-4
            16611000-1
            16611100-2
            16611200-3
            16612000-8
            16612100-9
            16612200-0
            16613000-5
            16620000-7
            16630000-0
            16640000-3
            16650000-6
            16651000-3
            16700000-2
            16710000-5
            16720000-8
            16730000-1
            16800000-3
            16810000-6
            16820000-9
            18000000-9
            18100000-0
            18110000-3
            18113000-4
            18114000-1
            18130000-9
            18132000-3
            18132100-4
            18132200-5
            18140000-2
            18141000-9
            18142000-6
            18143000-3
            18200000-1
            18210000-4
            18211000-1
            18212000-8
            18213000-5
            18220000-7
            18221000-4
            18221100-5
            18221200-6
            18221300-7
            18222000-1
            18222100-2
            18222200-3
            18223000-8
            18223100-9
            18223200-0
            18224000-5
            18230000-0
            18231000-7
            18232000-4
            18233000-1
            18234000-8
            18235000-5
            18235100-6
            18235200-7
            18235300-8
            18235400-9
            18300000-2
            18310000-5
            18311000-2
            18312000-9
            18313000-6
            18314000-3
            18315000-0
            18316000-7
            18317000-4
            18318000-1
            18318100-2
            18318200-3
            18318300-4
            18318400-5
            18318500-6
            18320000-8
            18321000-5
            18322000-2
            18323000-9
            18330000-1
            18331000-8
            18332000-5
            18333000-2
            18400000-3
            18410000-6
            18411000-3
            18412000-0
            18412100-1
            18412200-2
            18412300-3
            18412800-8
            18420000-9
            18421000-6
            18422000-3
            18423000-0
            18424000-7
            18424300-0
            18424400-1
            18424500-2
            18425000-4
            18425100-5
            18440000-5
            18441000-2
            18443000-6
            18443100-7
            18443300-9
            18443310-2
            18443320-5
            18443330-8
            18443340-1
            18443400-0
            18443500-1
            18444000-3
            18444100-4
            18444110-7
            18444111-4
            18444112-1
            18444200-5
            18450000-8
            18451000-5
            18451100-6
            18452000-2
            18453000-9
            18500000-4
            18510000-7
            18511000-4
            18511100-5
            18511200-6
            18511300-7
            18511400-8
            18511500-9
            18511600-0
            18512000-1
            18512100-2
            18512200-3
            18513000-8
            18513100-9
            18513200-0
            18513300-1
            18513400-2
            18513500-3
            18520000-0
            18521000-7
            18521100-8
            18522000-4
            18523000-1
            18530000-3
            18600000-5
            18610000-8
            18611000-5
            18612000-2
            18613000-9
            18620000-1
            18800000-7
            18810000-0
            18811000-7
            18812000-4
            18812100-5
            18812200-6
            18812300-7
            18812400-8
            18813000-1
            18813100-2
            18813200-3
            18813300-4
            18814000-8
            18815000-5
            18815100-6
            18815200-7
            18815300-8
            18815400-9
            18816000-2
            18820000-3
            18821000-0
            18821100-1
            18822000-7
            18823000-4
            18824000-1
            18830000-6
            18831000-3
            18832000-0
            18832100-1
            18840000-9
            18841000-6
            18842000-3
            18843000-0
            18900000-8
            18910000-1
            18911000-8
            18912000-5
            18913000-2
            18920000-4
            18921000-1
            18923000-5
            18923100-6
            18923200-7
            18924000-2
            18925000-9
            18925100-0
            18925200-1
            18929000-7
            18930000-7
            18931000-4
            18931100-5
            18932000-1
            18933000-8
            18933100-9
            18934000-5
            18935000-2
            18936000-9
            18937000-6
            18937100-7
            18938000-3
            18939000-0
            19000000-6
            19100000-7
            19110000-0
            19120000-3
            19130000-6
            19131000-3
            19132000-0
            19133000-7
            19140000-9
            19141000-6
            19142000-3
            19143000-0
            19144000-7
            19160000-5
            19170000-8
            19200000-8
            19210000-1
            19211000-8
            19211100-9
            19212000-5
            19212100-6
            19212200-7
            19212300-8
            19212310-1
            19212400-9
            19212500-0
            19212510-3
            19220000-4
            19230000-7
            19231000-4
            19240000-0
            19241000-7
            19242000-4
            19243000-1
            19244000-8
            19245000-5
            19250000-3
            19251000-0
            19251100-1
            19252000-7
            19260000-6
            19270000-9
            19280000-2
            19281000-9
            19282000-6
            19283000-3
            19400000-0
            19410000-3
            19420000-6
            19430000-9
            19431000-6
            19432000-3
            19433000-0
            19434000-7
            19435000-4
            19435100-5
            19435200-6
            19436000-1
            19440000-2
            19441000-9
            19442000-6
            19442100-7
            19442200-8
            19500000-1
            19510000-4
            19511000-1
            19511100-2
            19511200-3
            19511300-4
            19512000-8
            19513000-5
            19513100-6
            19513200-7
            19514000-2
            19520000-7
            19521000-4
            19521100-5
            19521200-6
            19522000-1
            19522100-2
            19522110-5
            19600000-2
            19610000-5
            19620000-8
            19630000-1
            19640000-4
            19700000-3
            19710000-6
            19720000-9
            19721000-6
            19722000-3
            19723000-0
            19724000-7
            19730000-2
            19731000-9
            19732000-6
            19733000-3
            22000000-0
            22100000-1
            22110000-4
            22111000-1
            22112000-8
            22113000-5
            22114000-2
            22114100-3
            22114200-4
            22114300-5
            22114310-8
            22114311-5
            22114400-6
            22114500-7
            22120000-7
            22121000-4
            22130000-0
            22140000-3
            22150000-6
            22160000-9
            22200000-2
            22210000-5
            22211000-2
            22211100-3
            22212000-9
            22212100-0
            22213000-6
            22300000-3
            22310000-6
            22312000-0
            22313000-7
            22314000-4
            22315000-1
            22320000-9
            22321000-6
            22400000-4
            22410000-7
            22411000-4
            22412000-1
            22413000-8
            22414000-5
            22420000-0
            22430000-3
            22440000-6
            22450000-9
            22451000-6
            22452000-3
            22453000-0
            22454000-7
            22455000-4
            22455100-5
            22456000-1
            22457000-8
            22458000-5
            22459000-2
            22459100-3
            22460000-2
            22461000-9
            22461100-0
            22462000-6
            22470000-5
            22471000-2
            22472000-9
            22473000-6
            22500000-5
            22510000-8
            22520000-1
            22521000-8
            22600000-6
            22610000-9
            22611000-6
            22612000-3
            22800000-8
            22810000-1
            22813000-2
            22814000-9
            22815000-6
            22816000-3
            22816100-4
            22816200-5
            22816300-6
            22817000-0
            22819000-4
            22820000-4
            22821000-1
            22822000-8
            22822100-9
            22822200-0
            22830000-7
            22831000-4
            22832000-1
            22840000-0
            22841000-7
            22841100-8
            22841200-9
            22850000-3
            22851000-0
            22852000-7
            22852100-8
            22853000-4
            22900000-9
            22990000-6
            22991000-3
            22992000-0
            22993000-7
            22993100-8
            22993200-9
            22993300-0
            22993400-1
            24000000-4
            24100000-5
            24110000-8
            24111000-5
            24111100-6
            24111200-7
            24111300-8
            24111400-9
            24111500-0
            24111600-1
            24111700-2
            24111800-3
            24111900-4
            24112000-2
            24112100-3
            24112200-4
            24112300-5
            24113000-9
            24113100-0
            24113200-1
            24200000-6
            24210000-9
            24211000-6
            24211100-7
            24211200-8
            24211300-9
            24212000-3
            24212100-4
            24212200-5
            24212300-6
            24212400-7
            24212500-8
            24212600-9
            24212610-2
            24212620-5
            24212630-8
            24212640-1
            24212650-4
            24213000-0
            24220000-2
            24221000-9
            24222000-6
            24223000-3
            24224000-0
            24225000-7
            24300000-7
            24310000-0
            24311000-7
            24311100-8
            24311110-1
            24311120-4
            24311130-7
            24311140-0
            24311150-3
            24311160-6
            24311170-9
            24311180-2
            24311200-9
            24311300-0
            24311310-3
            24311400-1
            24311410-4
            24311411-1
            24311420-7
            24311430-0
            24311440-3
            24311450-6
            24311460-9
            24311470-2
            24311500-2
            24311510-5
            24311511-2
            24311520-8
            24311521-5
            24311522-2
            24311600-3
            24311700-4
            24311800-5
            24311900-6
            24312000-4
            24312100-5
            24312110-8
            24312120-1
            24312121-8
            24312122-5
            24312123-2
            24312130-4
            24312200-6
            24312210-9
            24312220-2
            24313000-1
            24313100-2
            24313110-5
            24313111-2
            24313112-9
            24313120-8
            24313121-5
            24313122-2
            24313123-9
            24313124-6
            24313125-3
            24313126-0
            24313200-3
            24313210-6
            24313220-9
            24313300-4
            24313310-7
            24313320-0
            24313400-5
            24314000-8
            24314100-9
            24314200-0
            24315000-5
            24315100-6
            24315200-7
            24315210-0
            24315220-3
            24315230-6
            24315240-9
            24315300-8
            24315400-9
            24315500-0
            24315600-1
            24315610-4
            24315700-2
            24316000-2
            24317000-9
            24317100-0
            24317200-1
            24320000-3
            24321000-0
            24321100-1
            24321110-4
            24321111-1
            24321112-8
            24321113-5
            24321114-2
            24321115-9
            24321120-7
            24321200-2
            24321210-5
            24321220-8
            24321221-5
            24321222-2
            24321223-9
            24321224-6
            24321225-3
            24321226-0
            24321300-3
            24321310-6
            24321320-9
            24322000-7
            24322100-8
            24322200-9
            24322210-2
            24322220-5
            24322300-0
            24322310-3
            24322320-6
            24322400-1
            24322500-2
            24322510-5
            24323000-4
            24323100-5
            24323200-6
            24323210-9
            24323220-2
            24323300-7
            24323310-0
            24323320-3
            24323400-8
            24324000-1
            24324100-2
            24324200-3
            24324300-4
            24324400-5
            24325000-8
            24326000-5
            24326100-6
            24326200-7
            24326300-8
            24326310-1
            24326320-4
            24327000-2
            24327100-3
            24327200-4
            24327300-5
            24327310-8
            24327311-5
            24327320-1
            24327330-4
            24327400-6
            24327500-7
            24400000-8
            24410000-1
            24411000-8
            24411100-9
            24412000-5
            24413000-2
            24413100-3
            24413200-4
            24413300-5
            24420000-4
            24421000-1
            24422000-8
            24430000-7
            24440000-0
            24450000-3
            24451000-0
            24452000-7
            24453000-4
            24454000-1
            24455000-8
            24456000-5
            24457000-2
            24500000-9
            24510000-2
            24520000-5
            24530000-8
            24540000-1
            24541000-8
            24542000-5
            24550000-4
            24560000-7
            24570000-0
            24580000-3
            24590000-6
            24600000-0
            24610000-3
            24611000-0
            24611100-1
            24612000-7
            24612100-8
            24612200-9
            24612300-0
            24613000-4
            24613100-5
            24613200-6
            24615000-8
            24900000-3
            24910000-6
            24911000-3
            24911200-5
            24920000-9
            24930000-2
            24931000-9
            24931200-1
            24931210-4
            24931220-7
            24931230-0
            24931240-3
            24931250-6
            24931260-9
            24950000-8
            24951000-5
            24951100-6
            24951110-9
            24951120-2
            24951130-5
            24951200-7
            24951210-0
            24951220-3
            24951230-6
            24951300-8
            24951310-1
            24951311-8
            24951400-9
            24952000-2
            24952100-3
            24953000-9
            24954000-6
            24954100-7
            24954200-8
            24955000-3
            24956000-0
            24957000-7
            24957100-8
            24957200-9
            24958000-4
            24958100-5
            24958200-6
            24958300-7
            24958400-8
            24959000-1
            24959100-2
            24959200-3
            24960000-1
            24961000-8
            24962000-5
            24963000-2
            24964000-9
            24965000-6
            30000000-9
            30100000-0
            30110000-3
            30111000-0
            30120000-6
            30121000-3
            30121100-4
            30121200-5
            30121300-6
            30121400-7
            30121410-0
            30121420-3
            30121430-6
            30122000-0
            30122100-1
            30122200-2
            30123000-7
            30123100-8
            30123200-9
            30123300-0
            30123400-1
            30123500-2
            30123600-3
            30123610-6
            30123620-9
            30123630-2
            30124000-4
            30124100-5
            30124110-8
            30124120-1
            30124130-4
            30124140-7
            30124150-0
            30124200-6
            30124300-7
            30124400-8
            30124500-9
            30124510-2
            30124520-5
            30124530-8
            30125000-1
            30125100-2
            30125110-5
            30125120-8
            30125130-1
            30130000-9
            30131000-6
            30131100-7
            30131200-8
            30131300-9
            30131400-0
            30131500-1
            30131600-2
            30131700-3
            30131800-4
            30132000-3
            30132100-4
            30132200-5
            30132300-6
            30133000-0
            30133100-1
            30140000-2
            30141000-9
            30141100-0
            30141200-1
            30141300-2
            30141400-3
            30142000-6
            30142100-7
            30142200-8
            30144000-0
            30144100-1
            30144200-2
            30144300-3
            30144400-4
            30145000-7
            30145100-8
            30150000-5
            30151000-2
            30152000-9
            30160000-8
            30161000-5
            30162000-2
            30163000-9
            30163100-0
            30170000-1
            30171000-8
            30172000-5
            30173000-2
            30174000-9
            30175000-6
            30176000-3
            30177000-0
            30178000-7
            30179000-4
            30180000-4
            30181000-1
            30182000-8
            30190000-7
            30191000-4
            30191100-5
            30191110-8
            30191120-1
            30191130-4
            30191140-7
            30191200-6
            30191400-8
            30192000-1
            30192100-2
            30192110-5
            30192111-2
            30192112-9
            30192113-6
            30192121-5
            30192122-2
            30192123-9
            30192124-6
            30192125-3
            30192126-0
            30192127-7
            30192130-1
            30192131-8
            30192132-5
            30192133-2
            30192134-9
            30192150-7
            30192151-4
            30192152-1
            30192153-8
            30192154-5
            30192155-2
            30192160-0
            30192170-3
            30192200-3
            30192300-4
            30192310-7
            30192320-0
            30192330-3
            30192340-6
            30192350-9
            30192400-5
            30192500-6
            30192600-7
            30192700-8
            30192800-9
            30192900-0
            30192910-3
            30192920-6
            30192930-9
            30192940-2
            30192950-5
            30193000-8
            30193100-9
            30193200-0
            30193300-1
            30193400-2
            30193500-3
            30193600-4
            30193700-5
            30193800-6
            30193900-7
            30194000-5
            30194100-6
            30194200-7
            30194210-0
            30194220-3
            30194300-8
            30194310-1
            30194320-4
            30194400-9
            30194500-0
            30194600-1
            30194700-2
            30194800-3
            30194810-6
            30194820-9
            30194900-4
            30195000-2
            30195100-3
            30195200-4
            30195300-5
            30195400-6
            30195500-7
            30195600-8
            30195700-9
            30195800-0
            30195900-1
            30195910-4
            30195911-1
            30195912-8
            30195913-5
            30195920-7
            30195921-4
            30196000-9
            30196100-0
            30196200-1
            30196300-2
            30197000-6
            30197100-7
            30197110-0
            30197120-3
            30197130-6
            30197200-8
            30197210-1
            30197220-4
            30197221-1
            30197300-9
            30197310-2
            30197320-5
            30197321-2
            30197330-8
            30197400-0
            30197500-1
            30197510-4
            30197600-2
            30197610-5
            30197620-8
            30197621-5
            30197630-1
            30197640-4
            30197641-1
            30197642-8
            30197643-5
            30197644-2
            30197645-9
            30198000-3
            30198100-4
            30199000-0
            30199100-1
            30199110-4
            30199120-7
            30199130-0
            30199140-3
            30199200-2
            30199210-5
            30199220-8
            30199230-1
            30199240-4
            30199300-3
            30199310-6
            30199320-9
            30199330-2
            30199340-5
            30199400-4
            30199410-7
            30199500-5
            30199600-6
            30199700-7
            30199710-0
            30199711-7
            30199712-4
            30199713-1
            30199720-3
            30199730-6
            30199731-3
            30199740-9
            30199750-2
            30199760-5
            30199761-2
            30199762-9
            30199763-6
            30199770-8
            30199780-1
            30199790-4
            30199791-1
            30199792-8
            30199793-5
            30200000-1
            30210000-4
            30211000-1
            30211100-2
            30211200-3
            30211300-4
            30211400-5
            30211500-6
            30212000-8
            30212100-9
            30213000-5
            30213100-6
            30213200-7
            30213300-8
            30213400-9
            30213500-0
            30214000-2
            30215000-9
            30215100-0
            30216000-6
            30216100-7
            30216110-0
            30216120-3
            30216130-6
            30216200-8
            30216300-9
            30220000-7
            30221000-4
            30230000-0
            30231000-7
            30231100-8
            30231200-9
            30231300-0
            30231310-3
            30231320-6
            30232000-4
            30232100-5
            30232110-8
            30232120-1
            30232130-4
            30232140-7
            30232150-0
            30232600-0
            30232700-1
            30233000-1
            30233100-2
            30233110-5
            30233120-8
            30233130-1
            30233131-8
            30233132-5
            30233140-4
            30233141-1
            30233150-7
            30233151-4
            30233152-1
            30233153-8
            30233160-0
            30233161-7
            30233170-3
            30233180-6
            30233190-9
            30233300-4
            30233310-7
            30233320-0
            30234000-8
            30234100-9
            30234200-0
            30234300-1
            30234400-2
            30234500-3
            30234600-4
            30234700-5
            30236000-2
            30236100-3
            30236110-6
            30236111-3
            30236112-0
            30236113-7
            30236114-4
            30236115-1
            30236120-9
            30236121-6
            30236122-3
            30236123-0
            30236200-4
            30237000-9
            30237100-0
            30237110-3
            30237120-6
            30237121-3
            30237130-9
            30237131-6
            30237132-3
            30237133-0
            30237134-7
            30237135-4
            30237136-1
            30237140-2
            30237200-1
            30237210-4
            30237220-7
            30237230-0
            30237240-3
            30237250-6
            30237251-3
            30237252-0
            30237253-7
            30237260-9
            30237270-2
            30237280-5
            30237290-8
            30237295-3
            30237300-2
            30237310-5
            30237320-8
            30237330-1
            30237340-4
            30237350-7
            30237360-0
            30237370-3
            30237380-6
            30237400-3
            30237410-6
            30237420-9
            30237430-2
            30237440-5
            30237450-8
            30237460-1
            30237461-8
            30237470-4
            30237475-9
            30237480-7
            30238000-6
            31000000-6
            31100000-7
            31110000-0
            31111000-7
            31120000-3
            31121000-0
            31121100-1
            31121110-4
            31121111-1
            31121200-2
            31121300-3
            31121310-6
            31121320-9
            31121330-2
            31121331-9
            31121340-5
            31122000-7
            31122100-8
            31124000-1
            31124100-2
            31124200-3
            31126000-5
            31127000-2
            31128000-9
            31130000-6
            31131000-3
            31131100-4
            31131200-5
            31132000-0
            31140000-9
            31141000-6
            31150000-2
            31151000-9
            31153000-3
            31154000-0
            31155000-7
            31156000-4
            31157000-1
            31158000-8
            31158100-9
            31158200-0
            31158300-1
            31160000-5
            31161000-2
            31161100-3
            31161200-4
            31161300-5
            31161400-6
            31161500-7
            31161600-8
            31161700-9
            31161800-0
            31161900-1
            31162000-9
            31162100-0
            31170000-8
            31171000-5
            31172000-2
            31173000-9
            31174000-6
            31200000-8
            31210000-1
            31211000-8
            31211100-9
            31211110-2
            31211200-0
            31211300-1
            31211310-4
            31211320-7
            31211330-0
            31211340-3
            31212000-5
            31212100-6
            31212200-7
            31212300-8
            31212400-9
            31213000-2
            31213100-3
            31213200-4
            31213300-5
            31213400-6
            31214000-9
            31214100-0
            31214110-3
            31214120-6
            31214130-9
            31214140-2
            31214150-5
            31214160-8
            31214170-1
            31214180-4
            31214190-7
            31214200-1
            31214300-2
            31214400-3
            31214500-4
            31214510-7
            31214520-0
            31215000-6
            31216000-3
            31216100-4
            31216200-5
            31217000-0
            31218000-7
            31219000-4
            31220000-4
            31221000-1
            31221100-2
            31221200-3
            31221300-4
            31221400-5
            31221500-6
            31221600-7
            31221700-8
            31223000-5
            31224000-2
            31224100-3
            31224200-4
            31224300-5
            31224400-6
            31224500-7
            31224600-8
            31224700-9
            31224800-0
            31224810-3
            31230000-7
            31300000-9
            31310000-2
            31311000-9
            31320000-5
            31321000-2
            31321100-3
            31321200-4
            31321210-7
            31321220-0
            31321300-5
            31321400-6
            31321500-7
            31321600-8
            31321700-9
            31330000-8
            31340000-1
            31341000-8
            31342000-5
            31343000-2
            31344000-9
            31350000-4
            31351000-1
            31400000-0
            31410000-3
            31411000-0
            31420000-6
            31421000-3
            31422000-0
            31430000-9
            31431000-6
            31432000-3
            31433000-0
            31434000-7
            31440000-2
            31500000-1
            31510000-4
            31511000-1
            31512000-8
            31512100-9
            31512200-0
            31512300-1
            31514000-2
            31515000-9
            31516000-6
            31517000-3
            31518000-0
            31518100-1
            31518200-2
            31518210-5
            31518220-8
            31518300-3
            31518500-5
            31518600-6
            31519000-7
            31519100-8
            31519200-9
            31520000-7
            31521000-4
            31521100-5
            31521200-6
            31521300-7
            31521310-0
            31521320-3
            31521330-6
            31522000-1
            31523000-8
            31523100-9
            31523200-0
            31523300-1
            31524000-5
            31524100-6
            31524110-9
            31524120-2
            31524200-7
            31524210-0
            31527000-6
            31527200-8
            31527210-1
            31527260-6
            31527270-9
            31527300-9
            31527400-0
            31530000-0
            31531000-7
            31531100-8
            31532000-4
            31532100-5
            31532110-8
            31532120-1
            31532200-6
            31532210-9
            31532300-7
            31532310-0
            31532400-8
            31532500-9
            31532510-2
            31532600-0
            31532610-3
            31532700-1
            31532800-2
            31532900-3
            31532910-6
            31532920-9
            31600000-2
            31610000-5
            31611000-2
            31612000-9
            31612200-1
            31612300-2
            31612310-5
            31620000-8
            31625000-3
            31625100-4
            31625200-5
            31625300-6
            31630000-1
            31640000-4
            31642000-8
            31642100-9
            31642200-0
            31642300-1
            31642400-2
            31642500-3
            31643000-5
            31643100-6
            31644000-2
            31645000-9
            31650000-7
            31651000-4
            31660000-0
            31670000-3
            31671000-0
            31671100-1
            31671200-2
            31680000-6
            31681000-3
            31681100-4
            31681200-5
            31681300-6
            31681400-7
            31681410-0
            31681500-8
            31682000-0
            31682100-1
            31682110-4
            31682200-2
            31682210-5
            31682220-8
            31682230-1
            31682300-3
            31682310-6
            31682400-4
            31682410-7
            31682500-5
            31682510-8
            31682520-1
            31682530-4
            31682540-7
            31700000-3
            31710000-6
            31711000-3
            31711100-4
            31711110-7
            31711120-0
            31711130-3
            31711131-0
            31711140-6
            31711150-9
            31711151-6
            31711152-3
            31711154-0
            31711155-7
            31711200-5
            31711300-6
            31711310-9
            31711400-7
            31711410-0
            31711411-7
            31711420-3
            31711421-0
            31711422-7
            31711423-4
            31711424-1
            31711430-6
            31711440-9
            31711500-8
            31711510-1
            31711520-4
            31711530-7
            31712000-0
            31712100-1
            31712110-4
            31712111-1
            31712112-8
            31712113-5
            31712114-2
            31712115-9
            31712116-6
            31712117-3
            31712118-0
            31712119-7
            31712200-2
            31712300-3
            31712310-6
            31712320-9
            31712330-2
            31712331-9
            31712332-6
            31712333-3
            31712334-0
            31712335-7
            31712336-4
            31712340-5
            31712341-2
            31712342-9
            31712343-6
            31712344-3
            31712345-0
            31712346-7
            31712347-4
            31712348-1
            31712349-8
            31712350-8
            31712351-5
            31712352-2
            31712353-9
            31712354-6
            31712355-3
            31712356-0
            31712357-7
            31712358-4
            31712359-1
            31712360-1
            31720000-9
            31730000-2
            31731000-9
            31731100-0
            32000000-3
            32200000-5
            32210000-8
            32211000-5
            32220000-1
            32221000-8
            32222000-5
            32223000-2
            32224000-9
            32230000-4
            32231000-1
            32232000-8
            32233000-5
            32234000-2
            32235000-9
            32236000-6
            32237000-3
            32240000-7
            32250000-0
            32251000-7
            32251100-8
            32252000-4
            32252100-5
            32252110-8
            32260000-3
            32270000-6
            32300000-6
            32310000-9
            32320000-2
            32321000-9
            32321100-0
            32321200-1
            32321300-2
            32322000-6
            32323000-3
            32323100-4
            32323200-5
            32323300-6
            32323400-7
            32323500-8
            32324000-0
            32324100-1
            32324200-2
            32324300-3
            32324310-6
            32324400-4
            32324500-5
            32324600-6
            32330000-5
            32331000-2
            32331100-3
            32331200-4
            32331300-5
            32331500-7
            32331600-8
            32332000-9
            32332100-0
            32332200-1
            32332300-2
            32333000-6
            32333100-7
            32333200-8
            32333300-9
            32333400-0
            32340000-8
            32341000-5
            32342000-2
            32342100-3
            32342200-4
            32342300-5
            32342400-6
            32342410-9
            32342411-6
            32342412-3
            32342420-2
            32342430-5
            32342440-8
            32342450-1
            32343000-9
            32343100-0
            32343200-1
            32344000-6
            32344100-7
            32344110-0
            32344200-8
            32344210-1
            32344220-4
            32344230-7
            32344240-0
            32344250-3
            32344260-6
            32344270-9
            32344280-2
            32350000-1
            32351000-8
            32351100-9
            32351200-0
            32351300-1
            32351310-4
            32352000-5
            32352100-6
            32352200-7
            32353000-2
            32353100-3
            32353200-4
            32354000-9
            32354100-0
            32354110-3
            32354120-6
            32354200-1
            32354300-2
            32354400-3
            32354500-4
            32354600-5
            32354700-6
            32354800-7
            32360000-4
            32400000-7
            32410000-0
            32411000-7
            32412000-4
            32412100-5
            32412110-8
            32412120-1
            32413000-1
            32413100-2
            32415000-5
            32416000-2
            32416100-3
            32417000-9
            32418000-6
            32420000-3
            32421000-0
            32422000-7
            32423000-4
            32424000-1
            32425000-8
            32426000-5
            32427000-2
            32428000-9
            32429000-6
            32430000-6
            32440000-9
            32441000-6
            32441100-7
            32441200-8
            32441300-9
            32442000-3
            32442100-4
            32442200-5
            32442300-6
            32442400-7
            32500000-8
            32510000-1
            32520000-4
            32521000-1
            32522000-8
            32523000-5
            32524000-2
            32530000-7
            32531000-4
            32532000-1
            32533000-8
            32534000-5
            32540000-0
            32541000-7
            32542000-4
            32543000-1
            32544000-8
            32545000-5
            32546000-2
            32546100-3
            32547000-9
            32550000-3
            32551000-0
            32551100-1
            32551200-2
            32551300-3
            32551400-4
            32551500-5
            32552000-7
            32552100-8
            32552110-1
            32552120-4
            32552130-7
            32552140-0
            32552150-3
            32552160-6
            32552200-9
            32552300-0
            32552310-3
            32552320-6
            32552330-9
            32552400-1
            32552410-4
            32552420-7
            32552430-0
            32552500-2
            32552510-5
            32552520-8
            32552600-3
            32553000-4
            32560000-6
            32561000-3
            32562000-0
            32562100-1
            32562200-2
            32562300-3
            32570000-9
            32571000-6
            32572000-3
            32572100-4
            32572200-5
            32572300-6
            32573000-0
            32580000-2
            32581000-9
            32581100-0
            32581110-3
            32581120-6
            32581130-9
            32581200-1
            32581210-4
            32582000-6
            32583000-3
            32584000-0
            33000000-0
            33100000-1
            33110000-4
            33111000-1
            33111100-2
            33111200-3
            33111300-4
            33111400-5
            33111500-6
            33111600-7
            33111610-0
            33111620-3
            33111640-9
            33111650-2
            33111660-5
            33111700-8
            33111710-1
            33111720-4
            33111721-1
            33111730-7
            33111740-0
            33111800-9
            33112000-8
            33112100-9
            33112200-0
            33112300-1
            33112310-4
            33112320-7
            33112330-0
            33112340-3
            33113000-5
            33113100-6
            33113110-9
            33114000-2
            33115000-9
            33115100-0
            33115200-1
            33120000-7
            33121000-4
            33121100-5
            33121200-6
            33121300-7
            33121400-8
            33121500-9
            33122000-1
            33123000-8
            33123100-9
            33123200-0
            33123210-3
            33123220-6
            33123230-9
            33124000-5
            33124100-6
            33124110-9
            33124120-2
            33124130-5
            33124131-2
            33124200-7
            33124210-0
            33125000-2
            33126000-9
            33127000-6
            33128000-3
            33130000-0
            33131000-7
            33131100-8
            33131110-1
            33131111-8
            33131112-5
            33131113-2
            33131114-9
            33131120-4
            33131121-1
            33131122-8
            33131123-5
            33131124-2
            33131130-7
            33131131-4
            33131132-1
            33131140-0
            33131141-7
            33131142-4
            33131150-3
            33131151-0
            33131152-7
            33131153-4
            33131160-6
            33131161-3
            33131162-0
            33131170-9
            33131171-6
            33131172-3
            33131173-0
            33131200-9
            33131300-0
            33131400-1
            33131500-2
            33131510-5
            33131600-3
            33132000-4
            33133000-1
            33134000-8
            33135000-5
            33136000-2
            33137000-9
            33138000-6
            33138100-7
            33140000-3
            33141000-0
            33141100-1
            33141110-4
            33141111-1
            33141112-8
            33141113-4
            33141114-2
            33141115-9
            33141116-6
            33141117-3
            33141118-0
            33141119-7
            33141120-7
            33141121-4
            33141122-1
            33141123-8
            33141124-5
            33141125-2
            33141126-9
            33141127-6
            33141128-3
            33141200-2
            33141210-5
            33141220-8
            33141230-1
            33141240-4
            33141300-3
            33141310-6
            33141320-9
            33141321-6
            33141322-3
            33141323-0
            33141324-7
            33141325-4
            33141326-1
            33141327-8
            33141328-5
            33141329-2
            33141400-4
            33141410-7
            33141411-4
            33141420-0
            33141500-5
            33141510-8
            33141520-1
            33141530-4
            33141540-7
            33141550-0
            33141560-3
            33141570-6
            33141580-9
            33141600-6
            33141610-9
            33141613-0
            33141614-7
            33141615-4
            33141620-2
            33141621-9
            33141622-6
            33141623-3
            33141624-0
            33141625-7
            33141626-4
            33141630-5
            33141640-8
            33141641-5
            33141642-2
            33141700-7
            33141710-0
            33141720-3
            33141730-6
            33141740-9
            33141750-2
            33141760-5
            33141770-8
            33141800-8
            33141810-1
            33141820-4
            33141821-1
            33141822-8
            33141830-7
            33141840-0
            33141850-3
            33141900-9
            33150000-6
            33151000-3
            33151100-4
            33151200-5
            33151300-6
            33151400-7
            33152000-0
            33153000-7
            33154000-4
            33155000-1
            33156000-8
            33157000-5
            33157100-6
            33157110-9
            33157200-7
            33157300-8
            33157400-9
            33157500-0
            33157700-2
            33157800-3
            33157810-6
            33158000-2
            33158100-3
            33158200-4
            33158210-7
            33158300-5
            33158400-6
            33158500-7
            33159000-9
            33160000-9
            33161000-6
            33162000-3
            33162100-4
            33162200-5
            33163000-0
            33164000-7
            33164100-8
            33165000-4
            33166000-1
            33167000-8
            33168000-5
            33168100-6
            33169000-2
            33169100-3
            33169200-4
            33169300-5
            33169400-6
            33169500-7
            33170000-2
            33171000-9
            33171100-0
            33171110-3
            33171200-1
            33171210-4
            33171300-2
            33172000-6
            33172100-7
            33172200-8
            33180000-5
            33181000-2
            33181100-3
            33181200-4
            33181300-5
            33181400-6
            33181500-7
            33181510-0
            33181520-3
            33182000-9
            33182100-0
            33182200-1
            33182210-4
            33182220-7
            33182230-0
            33182240-3
            33182241-0
            33182300-2
            33182400-3
            33183000-6
            33183100-7
            33183200-8
            33183300-9
            33184000-3
            33184100-4
            33184200-5
            33184300-6
            33184400-7
            33184410-0
            33184420-3
            33184500-8
            33184600-9
            33185000-0
            33185100-1
            33185200-2
            33185300-3
            33185400-4
            33186000-7
            33186100-8
            33186200-9
            33190000-8
            33191000-5
            33191100-6
            33191110-9
            33192000-2
            33192100-3
            33192110-6
            33192120-9
            33192130-2
            33192140-5
            33192150-8
            33192160-1
            33192200-4
            33192210-7
            33192230-3
            33192300-5
            33192310-8
            33192320-1
            33192330-4
            33192340-7
            33192350-0
            33192400-6
            33192410-9
            33192500-7
            33192600-8
            33193000-9
            33193100-0
            33193110-3
            33193120-6
            33193121-3
            33193200-1
            33193210-4
            33193211-1
            33193212-8
            33193213-5
            33193214-2
            33193220-7
            33193221-4
            33193222-1
            33193223-8
            33193224-5
            33193225-2
            33194000-6
            33194100-7
            33194110-0
            33194120-3
            33194200-8
            33194210-1
            33194220-4
            33195000-3
            33195100-4
            33195110-7
            33195200-5
            33196000-0
            33196100-1
            33196200-2
            33197000-7
            33198000-4
            33198100-5
            33198200-6
            33199000-1
            33600000-6
            33610000-9
            33611000-6
            33612000-3
            33613000-0
            33614000-7
            33615000-4
            33615100-5
            33616000-1
            33616100-2
            33617000-8
            33620000-2
            33621000-9
            33621100-0
            33621200-1
            33621300-2
            33621400-3
            33622000-6
            33622100-7
            33622200-8
            33622300-9
            33622400-0
            33622500-1
            33622600-2
            33622700-3
            33622800-4
            33630000-5
            33631000-2
            33631100-3
            33631110-6
            33631200-4
            33631300-5
            33631400-6
            33631500-7
            33631600-8
            33631700-9
            33632000-9
            33632100-0
            33632200-1
            33632300-2
            33640000-8
            33641000-5
            33641100-6
            33641200-7
            33641300-8
            33641400-9
            33641410-2
            33641420-5
            33642000-2
            33642100-3
            33642200-4
            33642300-5
            33650000-1
            33651000-8
            33651100-9
            33651200-0
            33651300-1
            33651400-2
            33651500-3
            33651510-6
            33651520-9
            33651600-4
            33651610-7
            33651620-0
            33651630-3
            33651640-6
            33651650-9
            33651660-2
            33651670-5
            33651680-8
            33651690-1
            33652000-5
            33652100-6
            33652200-7
            33652300-8
            33660000-4
            33661000-1
            33661100-2
            33661200-3
            33661300-4
            33661400-5
            33661500-6
            33661600-7
            33661700-8
            33662000-8
            33662100-9
            33670000-7
            33673000-8
            33674000-5
            33675000-2
            33680000-0
            33681000-7
            33682000-4
            33683000-1
            33690000-3
            33691000-0
            33691100-1
            33691200-2
            33691300-3
            33692000-7
            33692100-8
            33692200-9
            33692210-2
            33692300-0
            33692400-1
            33692500-2
            33692510-5
            33692600-3
            33692700-4
            33692800-5
            33693000-4
            33693100-5
            33693200-6
            33693300-7
            33694000-1
            33695000-8
            33696000-5
            33696100-6
            33696200-7
            33696300-8
            33696400-9
            33696500-0
            33696600-1
            33696700-2
            33696800-3
            33697000-2
            33697100-3
            33697110-6
            33698000-9
            33698100-0
            33698200-1
            33698300-2
            33700000-7
            33710000-0
            33711000-7
            33711100-8
            33711110-1
            33711120-4
            33711130-7
            33711140-0
            33711150-3
            33711200-9
            33711300-0
            33711400-1
            33711410-4
            33711420-7
            33711430-0
            33711440-3
            33711450-6
            33711500-2
            33711510-5
            33711520-8
            33711530-1
            33711540-4
            33711600-3
            33711610-6
            33711620-9
            33711630-2
            33711640-5
            33711700-4
            33711710-7
            33711720-0
            33711730-3
            33711740-6
            33711750-9
            33711760-2
            33711770-5
            33711780-8
            33711790-1
            33711800-5
            33711810-8
            33711900-6
            33712000-4
            33713000-1
            33720000-3
            33721000-0
            33721100-1
            33721200-2
            33722000-7
            33722100-8
            33722110-1
            33722200-9
            33722210-2
            33722300-0
            33730000-6
            33731000-3
            33731100-4
            33731110-7
            33731120-0
            33732000-0
            33733000-7
            33734000-4
            33734100-5
            33734200-6
            33735000-1
            33735100-2
            33735200-3
            33740000-9
            33741000-6
            33741100-7
            33741200-8
            33741300-9
            33742000-3
            33742100-4
            33742200-5
            33750000-2
            33751000-9
            33752000-6
            33760000-5
            33761000-2
            33762000-9
            33763000-6
            33764000-3
            33770000-8
            33771000-5
            33771100-6
            33771200-7
            33772000-2
            33790000-4
            33791000-1
            33792000-8
            33793000-5
            33900000-9
            33910000-2
            33911000-9
            33912000-6
            33912100-7
            33913000-3
            33914000-0
            33914100-1
            33914200-2
            33914300-3
            33915000-7
            33916000-4
            33916100-5
            33917000-1
            33918000-8
            33919000-5
            33920000-5
            33921000-2
            33922000-9
            33923000-6
            33923100-7
            33923200-8
            33923300-9
            33924000-3
            33925000-0
            33926000-7
            33927000-4
            33928000-1
            33929000-8
            33930000-8
            33931000-5
            33932000-2
            33933000-9
            33933100-0
            33934000-6
            33935000-3
            33936000-0
            33937000-7
            33940000-1
            33941000-8
            33942000-5
            33943000-2
            33944000-9
            33945000-6
            33946000-3
            33947000-0
            33948000-7
            33949000-4
            33950000-4
            33951000-1
            33952000-8
            33953000-5
            33954000-2
            33960000-7
            33961000-4
            33962000-1
            33963000-8
            33964000-5
            33965000-2
            33966000-9
            33967000-6
            33968000-3
            33970000-0
            33971000-7
            33972000-4
            33973000-1
            33974000-8
            33975000-5
            34000000-7
            34100000-8
            34110000-1
            34111000-8
            34111100-9
            34111200-0
            34113000-2
            34113100-3
            34113200-4
            34113300-5
            34114000-9
            34114100-0
            34114110-3
            34114120-6
            34114121-3
            34114122-0
            34114200-1
            34114210-4
            34114300-2
            34114400-3
            34115000-6
            34115200-8
            34115300-9
            34120000-4
            34121000-1
            34121100-2
            34121200-3
            34121300-4
            34121400-5
            34121500-6
            34130000-7
            34131000-4
            34132000-1
            34133000-8
            34133100-9
            34133110-2
            34134000-5
            34134100-6
            34134200-7
            34136000-9
            34136100-0
            34136200-1
            34137000-6
            34138000-3
            34139000-0
            34139100-1
            34139200-2
            34139300-3
            34140000-0
            34142000-4
            34142100-5
            34142200-6
            34142300-7
            34143000-1
            34144000-8
            34144100-9
            34144200-0
            34144210-3
            34144211-0
            34144212-7
            34144213-4
            34144220-6
            34144300-1
            34144400-2
            34144410-5
            34144420-8
            34144430-1
            34144431-8
            34144440-4
            34144450-7
            34144500-3
            34144510-6
            34144511-3
            34144512-0
            34144520-9
            34144700-5
            34144710-8
            34144730-4
            34144740-7
            34144750-0
            34144751-7
            34144760-3
            34144800-6
            34144900-7
            34144910-0
            34150000-3
            34151000-0
            34152000-7
            34200000-9
            34210000-2
            34211000-9
            34211100-9
            34211200-9
            34211300-9
            34220000-5
            34221000-2
            34221100-3
            34221200-4
            34221300-5
            34223000-6
            34223100-7
            34223200-8
            34223300-9
            34223310-2
            34223320-5
            34223330-8
            34223340-1
            34223350-4
            34223360-7
            34223370-0
            34223400-0
            34224000-3
            34224100-4
            34224200-5
            34300000-0
            34310000-3
            34311000-0
            34311100-1
            34311110-4
            34311120-7
            34312000-7
            34312100-8
            34312200-9
            34312300-0
            34312400-1
            34312500-2
            34312600-3
            34312700-4
            34320000-6
            34321000-3
            34321100-4
            34321200-5
            34322000-0
            34322100-1
            34322200-2
            34322300-3
            34322400-4
            34322500-5
            34324000-4
            34324100-5
            34325000-1
            34325100-2
            34325200-3
            34326000-8
            34326100-9
            34326200-0
            34327000-5
            34327100-6
            34327200-7
            34328000-2
            34328100-3
            34328200-4
            34328300-5
            34330000-9
            34350000-5
            34351000-2
            34351100-3
            34352000-9
            34352100-0
            34352200-1
            34352300-2
            34360000-8
            34370000-1
            34390000-7
            34400000-1
            34410000-4
            34411000-1
            34411100-2
            34411110-5
            34411200-3
            34420000-7
            34421000-7
            34422000-7
            34430000-0
            34431000-7
            34432000-4
            34432100-5
            34500000-2
            34510000-5
            34511100-3
            34512000-9
            34512100-0
            34512200-1
            34512300-2
            34512400-3
            34512500-4
            34512600-5
            34512700-6
            34512800-7
            34512900-8
            34512950-3
            34513000-6
            34513100-7
            34513150-2
            34513200-8
            34513250-3
            34513300-9
            34513350-4
            34513400-0
            34513450-5
            34513500-1
            34513550-6
            34513600-2
            34513650-7
            34513700-3
            34513750-8
            34514000-3
            34514100-4
            34514200-5
            34514300-6
            34514400-7
            34514500-8
            34514600-9
            34514700-0
            34514800-1
            34514900-2
            34515000-0
            34515100-1
            34515200-2
            34516000-7
            34520000-8
            34521000-5
            34521100-6
            34521200-7
            34521300-8
            34521400-9
            34522000-2
            34522100-3
            34522150-8
            34522200-4
            34522250-9
            34522300-5
            34522350-0
            34522400-6
            34522450-1
            34522500-7
            34522550-2
            34522600-8
            34522700-9
            34600000-3
            34610000-6
            34611000-3
            34612000-0
            34612100-1
            34612200-2
            34620000-9
            34621000-6
            34621100-7
            34621200-8
            34622000-3
            34622100-4
            34622200-5
            34622300-6
            34622400-7
            34622500-8
            34630000-2
            34631000-9
            34631100-0
            34631200-1
            34631300-2
            34631400-3
            34632000-6
            34632100-7
            34632200-8
            34632300-9
            34640000-5
            34700000-4
            34710000-7
            34711000-4
            34711100-5
            34711110-8
            34711200-6
            34711300-7
            34711400-8
            34711500-9
            34712000-1
            34712100-2
            34712200-3
            34712300-4
            34720000-0
            34721000-7
            34721100-8
            34722000-4
            34722100-5
            34722200-6
            34730000-3
            34731000-0
            34731100-1
            34731200-2
            34731300-3
            34731400-4
            34731500-5
            34731600-6
            34731700-7
            34731800-8
            34740000-6
            34741000-3
            34741100-4
            34741200-5
            34741300-6
            34741400-7
            34741500-8
            34741600-9
            34900000-6
            34910000-9
            34911000-6
            34911100-7
            34912000-3
            34912100-4
            34913000-0
            34913100-1
            34913200-2
            34913300-3
            34913400-4
            34913500-5
            34913510-8
            34913600-6
            34913700-7
            34913800-8
            34920000-2
            34921000-9
            34921100-0
            34921200-1
            34922000-6
            34922100-7
            34922110-0
            34923000-3
            34924000-0
            34926000-4
            34927000-1
            34927100-2
            34928000-8
            34928100-9
            34928110-2
            34928120-5
            34928200-0
            34928210-3
            34928220-6
            34928230-9
            34928300-1
            34928310-4
            34928320-7
            34928330-0
            34928340-3
            34928400-2
            34928410-5
            34928420-8
            34928430-1
            34928440-4
            34928450-7
            34928460-0
            34928470-3
            34928471-0
            34928472-7
            34928480-6
            34928500-3
            34928510-6
            34928520-9
            34928530-2
            34929000-5
            34930000-5
            34931000-2
            34931100-3
            34931200-4
            34931300-5
            34931400-6
            34931500-7
            34932000-9
            34933000-6
            34934000-3
            34940000-8
            34941000-5
            34941100-6
            34941200-7
            34941300-8
            34941500-0
            34941600-1
            34941800-3
            34942000-2
            34942100-3
            34942200-4
            34943000-9
            34944000-6
            34945000-3
            34946000-0
            34946100-1
            34946110-4
            34946120-7
            34946121-4
            34946122-1
            34946200-2
            34946210-5
            34946220-8
            34946221-5
            34946222-2
            34946223-9
            34946224-6
            34946230-1
            34946231-8
            34946232-5
            34946240-4
            34947000-7
            34947100-8
            34947200-9
            34950000-1
            34951000-8
            34951200-0
            34951300-1
            34952000-5
            34953000-2
            34953100-3
            34953300-5
            34954000-9
            34955000-6
            34955100-7
            34960000-4
            34961000-1
            34961100-2
            34962000-8
            34962100-9
            34962200-0
            34962210-3
            34962220-6
            34962230-9
            34963000-5
            34964000-2
            34965000-9
            34966000-6
            34966100-7
            34966200-8
            34967000-3
            34968000-0
            34968100-1
            34968200-2
            34969000-7
            34969100-8
            34969200-9
            34970000-7
            34971000-4
            34972000-1
            34980000-0
            34990000-3
            34991000-0
            34992000-7
            34992100-8
            34992200-9
            34992300-0
            34993000-4
            34993100-5
            34994000-1
            34994100-2
            34995000-8
            34996000-5
            34996100-6
            34996200-7
            34996300-8
            34997000-2
            34997100-3
            34997200-4
            34997210-7
            34998000-9
            34999000-6
            34999100-7
            34999200-8
            34999300-9
            34999400-0
            34999410-3
            34999420-6
            35000000-4
            35100000-5
            35110000-8
            35111000-5
            35111100-6
            35111200-7
            35111300-8
            35111310-1
            35111320-4
            35111400-9
            35111500-0
            35111510-3
            35111520-6
            35112000-2
            35112100-3
            35112200-4
            35112300-5
            35113000-9
            35113100-0
            35113110-0
            35113200-1
            35113210-4
            35113300-2
            35113400-3
            35113410-6
            35113420-9
            35113430-2
            35113440-5
            35113450-8
            35113460-1
            35113470-4
            35113480-7
            35113490-0
            35120000-1
            35121000-8
            35121100-9
            35121200-0
            35121300-1
            35121400-2
            35121500-3
            35121600-4
            35121700-5
            35121800-6
            35121900-7
            35123000-2
            35123100-3
            35123200-4
            35123300-5
            35123400-6
            35123500-7
            35124000-9
            35125000-6
            35125100-7
            35125110-0
            35125200-8
            35125300-2
            35126000-3
            35200000-6
            35210000-9
            35220000-2
            35221000-9
            35230000-5
            35240000-8
            35250000-1
            35260000-4
            35261000-1
            35261100-2
            35262000-8
            35300000-7
            35310000-0
            35311000-7
            35311100-8
            35311200-9
            35311300-0
            35311400-1
            35312000-4
            35320000-3
            35321000-0
            35321100-1
            35321200-2
            35321300-3
            35322000-7
            35322100-8
            35322200-9
            35322300-0
            35322400-1
            35322500-2
            35330000-6
            35331000-3
            35331100-4
            35331200-5
            35331300-3
            35331400-7
            35331500-8
            35332000-0
            35332100-1
            35332200-2
            35333000-7
            35333100-8
            35333200-9
            35340000-9
            35341000-6
            35341100-7
            35342000-3
            35343000-0
            35400000-8
            35410000-1
            35411000-8
            35411100-9
            35411200-0
            35412000-5
            35412100-6
            35412200-7
            35412300-8
            35412400-9
            35412500-0
            35420000-4
            35421000-1
            35421100-2
            35422000-8
            35500000-9
            35510000-2
            35511000-9
            35511100-0
            35511200-1
            35511300-2
            35511400-3
            35512000-6
            35512100-7
            35512200-8
            35512300-9
            35512400-0
            35513000-3
            35513100-4
            35513200-5
            35513300-6
            35513400-7
            35520000-5
            35521000-2
            35521100-3
            35522000-9
            35600000-0
            35610000-3
            35611100-1
            35611200-2
            35611300-3
            35611400-4
            35611500-5
            35611600-6
            35611700-7
            35611800-8
            35612100-8
            35612200-9
            35612300-0
            35612400-1
            35612500-2
            35613000-4
            35613100-5
            35620000-6
            35621000-3
            35621100-4
            35621200-5
            35621300-6
            35621400-7
            35622000-0
            35622100-1
            35622200-2
            35622300-3
            35622400-4
            35622500-5
            35622600-6
            35622700-7
            35623000-7
            35623100-8
            35630000-9
            35631000-6
            35631100-7
            35631200-8
            35631300-9
            35640000-2
            35641000-9
            35641100-0
            35642000-7
            35700000-1
            35710000-4
            35711000-1
            35712000-8
            35720000-7
            35721000-4
            35722000-1
            35723000-8
            35730000-0
            35740000-3
            35800000-2
            35810000-5
            35811100-3
            35811200-4
            35811300-5
            35812000-9
            35812100-0
            35812200-1
            35812300-2
            35813000-6
            35813100-7
            35814000-3
            35815000-0
            35815100-1
            35820000-8
            35821000-5
            35821100-6
            37000000-8
            37300000-1
            37310000-4
            37311000-1
            37311100-2
            37311200-3
            37311300-4
            37311400-5
            37312000-8
            37312100-9
            37312200-0
            37312300-1
            37312400-2
            37312500-3
            37312600-4
            37312700-5
            37312800-6
            37312900-7
            37312910-0
            37312920-3
            37312930-6
            37312940-9
            37313000-5
            37313100-6
            37313200-7
            37313300-8
            37313400-9
            37313500-0
            37313600-1
            37313700-2
            37313800-3
            37313900-4
            37314000-2
            37314100-3
            37314200-4
            37314300-5
            37314310-8
            37314320-1
            37314400-6
            37314500-7
            37314600-8
            37314700-9
            37314800-0
            37314900-1
            37315000-9
            37315100-0
            37316000-6
            37316100-7
            37316200-8
            37316300-9
            37316400-0
            37316500-1
            37316600-2
            37316700-3
            37320000-7
            37321000-4
            37321100-5
            37321200-6
            37321300-7
            37321400-8
            37321500-9
            37321600-0
            37321700-1
            37322000-1
            37322100-2
            37322200-3
            37322300-4
            37322400-5
            37322500-6
            37322600-7
            37322700-8
            37400000-2
            37410000-5
            37411000-2
            37411100-3
            37411110-6
            37411120-9
            37411130-2
            37411140-5
            37411150-8
            37411160-1
            37411200-4
            37411210-7
            37411220-0
            37411230-3
            37411300-5
            37412000-9
            37412100-0
            37412200-1
            37412210-4
            37412220-7
            37412230-0
            37412240-3
            37412241-0
            37412242-7
            37412243-4
            37412250-6
            37412260-9
            37412270-2
            37412300-2
            37412310-5
            37412320-8
            37412330-1
            37412340-4
            37412350-7
            37413000-6
            37413100-7
            37413110-0
            37413120-3
            37413130-6
            37413140-9
            37413150-2
            37413160-5
            37413200-8
            37413210-1
            37413220-4
            37413230-7
            37413240-0
            37414000-3
            37414100-4
            37414200-5
            37414300-6
            37414600-9
            37414700-0
            37414800-1
            37415000-0
            37416000-7
            37420000-8
            37421000-5
            37422000-2
            37422100-3
            37422200-4
            37423000-9
            37423100-0
            37423200-1
            37423300-2
            37424000-6
            37425000-3
            37426000-0
            37430000-1
            37431000-8
            37432000-5
            37433000-2
            37440000-4
            37441000-1
            37441100-2
            37441200-3
            37441300-4
            37441400-5
            37441500-6
            37441600-7
            37441700-8
            37441800-9
            37441900-0
            37442000-8
            37442100-8
            37442200-8
            37442300-8
            37442310-4
            37442320-7
            37442400-8
            37442500-8
            37442600-8
            37442700-8
            37442800-8
            37442810-9
            37442820-2
            37442900-8
            37450000-7
            37451000-4
            37451100-5
            37451110-8
            37451120-1
            37451130-4
            37451140-7
            37451150-0
            37451160-3
            37451200-6
            37451210-9
            37451220-2
            37451300-7
            37451310-0
            37451320-3
            37451330-6
            37451340-9
            37451400-8
            37451500-9
            37451600-0
            37451700-1
            37451710-4
            37451720-7
            37451730-0
            37451800-2
            37451810-5
            37451820-8
            37451900-3
            37451920-9
            37452000-1
            37452100-2
            37452110-5
            37452120-8
            37452200-3
            37452210-6
            37452300-4
            37452400-5
            37452410-8
            37452420-1
            37452430-4
            37452500-6
            37452600-7
            37452610-0
            37452620-3
            37452700-8
            37452710-1
            37452720-4
            37452730-7
            37452740-0
            37452800-9
            37452810-2
            37452820-5
            37452900-0
            37452910-3
            37452920-6
            37453000-8
            37453100-9
            37453200-0
            37453300-1
            37453400-2
            37453500-3
            37453600-4
            37453700-5
            37460000-0
            37461000-7
            37461100-8
            37461200-9
            37461210-2
            37461220-5
            37461300-0
            37461400-1
            37461500-2
            37461510-5
            37461520-8
            37462000-4
            37462100-5
            37462110-8
            37462120-1
            37462130-4
            37462140-7
            37462150-0
            37462160-3
            37462170-6
            37462180-9
            37462200-6
            37462210-9
            37462300-7
            37462400-8
            37470000-3
            37471000-0
            37471100-1
            37471200-2
            37471300-3
            37471400-4
            37471500-5
            37471600-6
            37471700-7
            37471800-8
            37471900-9
            37472000-7
            37480000-6
            37481000-3
            37482000-0
            37500000-3
            37510000-6
            37511000-3
            37512000-0
            37513000-7
            37513100-8
            37520000-9
            37521000-6
            37522000-3
            37523000-0
            37524000-7
            37524100-8
            37524200-9
            37524300-0
            37524400-1
            37524500-2
            37524600-3
            37524700-4
            37524800-5
            37524810-8
            37524900-6
            37525000-4
            37526000-1
            37527000-8
            37527100-9
            37527200-0
            37528000-5
            37529000-2
            37529100-3
            37529200-4
            37530000-2
            37531000-9
            37532000-6
            37533000-3
            37533100-4
            37533200-5
            37533300-6
            37533400-7
            37533500-8
            37534000-0
            37535000-7
            37535100-8
            37535200-9
            37535210-2
            37535220-5
            37535230-8
            37535240-1
            37535250-4
            37535260-7
            37535270-0
            37535280-3
            37535290-6
            37535291-3
            37535292-0
            37540000-5
            37800000-6
            37810000-9
            37820000-2
            37821000-9
            37822000-6
            37822100-7
            37822200-8
            37822300-9
            37822400-0
            37823000-3
            37823100-4
            37823200-5
            37823300-6
            37823400-7
            37823500-8
            37823600-9
            37823700-0
            37823800-1
            37823900-2
            38000000-5
            38100000-6
            38110000-9
            38111000-6
            38111100-7
            38111110-0
            38112000-3
            38112100-4
            38113000-0
            38114000-7
            38115000-4
            38115100-5
            38120000-2
            38121000-9
            38122000-6
            38123000-3
            38124000-0
            38125000-7
            38126000-4
            38126100-5
            38126200-6
            38126300-7
            38126400-8
            38127000-1
            38128000-8
            38200000-7
            38210000-0
            38220000-3
            38221000-0
            38230000-6
            38240000-9
            38250000-2
            38260000-5
            38270000-8
            38280000-1
            38290000-4
            38291000-1
            38292000-8
            38293000-5
            38294000-2
            38295000-9
            38296000-6
            38300000-8
            38310000-1
            38311000-8
            38311100-9
            38311200-0
            38311210-3
            38320000-4
            38321000-1
            38322000-8
            38323000-5
            38330000-7
            38331000-4
            38340000-0
            38341000-7
            38341100-8
            38341200-9
            38341300-0
            38341310-3
            38341320-6
            38341400-1
            38341500-2
            38341600-3
            38342000-4
            38342100-5
            38343000-1
            38344000-8
            38400000-9
            38410000-2
            38411000-9
            38412000-6
            38413000-3
            38414000-0
            38415000-7
            38416000-4
            38417000-1
            38418000-8
            38420000-5
            38421000-2
            38421100-3
            38421110-6
            38422000-9
            38423000-6
            38423100-7
            38424000-3
            38425000-0
            38425100-1
            38425200-2
            38425300-3
            38425400-4
            38425500-5
            38425600-6
            38425700-7
            38425800-8
            38426000-7
            38427000-4
            38428000-1
            38429000-8
            38430000-8
            38431000-5
            38431100-6
            38431200-7
            38431300-8
            38432000-2
            38432100-3
            38432200-4
            38432210-7
            38432300-5
            38433000-9
            38433100-0
            38433200-1
            38433210-4
            38433300-2
            38434000-6
            38434100-7
            38434200-8
            38434210-1
            38434220-4
            38434300-9
            38434310-2
            38434400-0
            38434500-1
            38434510-4
            38434520-7
            38434530-0
            38434540-3
            38434550-6
            38434560-9
            38434570-2
            38434580-5
            38435000-3
            38436000-0
            38436100-1
            38436110-4
            38436120-7
            38436130-0
            38436140-3
            38436150-6
            38436160-9
            38436170-2
            38436200-2
            38436210-5
            38436220-8
            38436230-1
            38436300-3
            38436310-6
            38436320-9
            38436400-4
            38436410-7
            38436500-5
            38436510-8
            38436600-6
            38436610-9
            38436700-7
            38436710-0
            38436720-3
            38436730-6
            38436800-8
            38437000-7
            38437100-8
            38437110-1
            38437120-4
            38500000-0
            38510000-3
            38511000-0
            38511100-1
            38511200-2
            38512000-7
            38512100-8
            38512200-9
            38513000-4
            38513100-5
            38513200-6
            38514000-1
            38514100-2
            38514200-3
            38515000-8
            38515100-9
            38515200-0
            38516000-5
            38517000-2
            38517100-3
            38517200-4
            38518000-9
            38518100-0
            38518200-1
            38519000-6
            38519100-7
            38519200-8
            38519300-9
            38519310-2
            38519320-5
            38519400-0
            38519500-1
            38519600-2
            38519610-5
            38519620-8
            38519630-1
            38519640-4
            38519650-7
            38519660-0
            38520000-6
            38521000-3
            38522000-0
            38527100-6
            38527200-7
            38527300-8
            38527400-9
            38530000-9
            38540000-2
            38541000-9
            38542000-6
            38543000-3
            38544000-0
            38545000-7
            38546000-4
            38546100-5
            38547000-1
            38548000-8
            38550000-5
            38551000-2
            38552000-9
            38553000-6
            38554000-3
            38560000-8
            38561000-5
            38561100-6
            38561110-9
            38561120-2
            38562000-2
            38570000-1
            38571000-8
            38580000-4
            38581000-1
            38582000-8
            38600000-1
            38620000-7
            38621000-4
            38622000-1
            38623000-8
            38624000-5
            38630000-0
            38631000-7
            38632000-4
            38633000-1
            38634000-8
            38635000-5
            38636000-2
            38636100-3
            38636110-6
            38640000-3
            38641000-0
            38650000-6
            38651000-3
            38651100-4
            38651200-5
            38651300-6
            38651400-7
            38651500-8
            38651600-9
            38652000-0
            38652100-1
            38652110-4
            38652120-7
            38652200-2
            38652300-3
            38653000-7
            38653100-8
            38653110-1
            38653111-8
            38653200-9
            38653300-0
            38653400-1
            38654000-4
            38654100-5
            38654110-8
            38654200-6
            38654210-9
            38654300-7
            38654310-0
            38700000-2
            38710000-5
            38720000-8
            38730000-1
            38731000-8
            38740000-4
            38750000-7
            38800000-3
            38810000-6
            38820000-9
            38821000-6
            38822000-3
            38900000-4
            38910000-7
            38911000-4
            38912000-1
            38920000-0
            38921000-7
            38922000-4
            38923000-1
            38930000-3
            38931000-0
            38932000-7
            38940000-6
            38941000-7
            38942000-7
            38943000-7
            38944000-7
            38945000-7
            38946000-7
            38947000-7
            38950000-9
            38951000-6
            38960000-2
            38970000-5
            39000000-2
            39100000-3
            39110000-6
            39111000-3
            39111100-4
            39111200-5
            39111300-6
            39112000-0
            39112100-1
            39113000-7
            39113100-8
            39113200-9
            39113300-0
            39113400-1
            39113500-2
            39113600-3
            39113700-4
            39114000-4
            39114100-5
            39120000-9
            39121000-6
            39121100-7
            39121200-8
            39122000-3
            39122100-4
            39122200-5
            39130000-2
            39131000-9
            39131100-0
            39132000-6
            39132100-7
            39132200-8
            39132300-9
            39132400-0
            39132500-1
            39133000-3
            39134000-0
            39134100-1
            39135000-7
            39135100-8
            39136000-4
            39137000-1
            39140000-5
            39141000-2
            39141100-3
            39141200-4
            39141300-5
            39141400-6
            39141500-7
            39142000-9
            39143000-6
            39143100-7
            39143110-0
            39143111-7
            39143112-4
            39143113-1
            39143114-8
            39143115-5
            39143116-2
            39143120-3
            39143121-0
            39143122-7
            39143123-4
            39143200-8
            39143210-1
            39143300-9
            39143310-2
            39144000-3
            39145000-0
            39150000-8
            39151000-5
            39151100-6
            39151200-7
            39151300-8
            39152000-2
            39153000-9
            39153100-0
            39154000-6
            39154100-7
            39155000-3
            39155100-4
            39156000-0
            39157000-7
            39160000-1
            39161000-8
            39162000-5
            39162100-6
            39162110-9
            39162200-7
            39170000-4
            39171000-1
            39172000-8
            39172100-9
            39173000-5
            39174000-2
            39180000-7
            39181000-4
            39190000-0
            39191000-7
            39191100-8
            39192000-4
            39193000-1
            39200000-4
            39220000-0
            39221000-7
            39221100-8
            39221110-1
            39221120-4
            39221121-1
            39221122-8
            39221123-5
            39221130-7
            39221140-0
            39221150-3
            39221160-6
            39221170-9
            39221180-2
            39221190-5
            39221200-9
            39221210-2
            39221220-5
            39221230-8
            39221240-1
            39221250-4
            39221260-7
            39222000-4
            39222100-5
            39222110-8
            39222120-1
            39222200-6
            39223000-1
            39223100-2
            39223200-3
            39224000-8
            39224100-9
            39224200-0
            39224210-3
            39224300-1
            39224310-4
            39224320-7
            39224330-0
            39224340-3
            39224350-6
            39225000-5
            39225100-6
            39225200-7
            39225300-8
            39225400-9
            39225500-0
            39225600-1
            39225700-2
            39225710-5
            39225720-8
            39225730-1
            39226000-2
            39226100-3
            39226200-4
            39226210-7
            39226220-0
            39226300-5
            39227000-9
            39227100-0
            39227110-3
            39227120-6
            39227200-1
            39230000-3
            39234000-1
            39235000-8
            39236000-5
            39237000-2
            39240000-6
            39241000-3
            39241100-4
            39241110-7
            39241120-0
            39241130-3
            39241200-5
            39254000-7
            39254100-8
            39254110-1
            39254120-4
            39254130-7
            39260000-2
            39261000-9
            39263000-3
            39263100-4
            39264000-0
            39265000-7
            39270000-5
            39290000-1
            39291000-8
            39292000-5
            39292100-6
            39292110-9
            39292200-7
            39292300-8
            39292400-9
            39292500-0
            39293000-2
            39293100-3
            39293200-4
            39293300-5
            39293400-6
            39293500-7
            39294000-9
            39294100-0
            39295000-6
            39295100-7
            39295200-8
            39295300-9
            39295400-0
            39295500-1
            39296000-3
            39296100-4
            39297000-0
            39298000-7
            39298100-8
            39298200-9
            39298300-0
            39298400-1
            39298500-2
            39298600-3
            39298700-4
            39298800-5
            39298900-6
            39298910-9
            39299000-4
            39299100-5
            39299200-6
            39299300-7
            39300000-5
            39310000-8
            39311000-5
            39312000-2
            39312100-3
            39312200-4
            39313000-9
            39314000-6
            39315000-3
            39330000-4
            39340000-7
            39341000-4
            39350000-0
            39360000-3
            39370000-6
            39500000-7
            39510000-0
            39511000-7
            39511100-8
            39511200-9
            39512000-4
            39512100-5
            39512200-6
            39512300-7
            39512400-8
            39512500-9
            39512600-0
            39513000-1
            39513100-2
            39513200-3
            39514000-8
            39514100-9
            39514200-0
            39514300-1
            39514400-2
            39514500-3
            39515000-5
            39515100-6
            39515110-9
            39515200-7
            39515300-8
            39515400-9
            39515410-2
            39515420-5
            39515430-8
            39515440-1
            39516000-2
            39516100-3
            39516110-6
            39516120-9
            39518000-6
            39518100-7
            39518200-8
            39520000-3
            39522000-7
            39522100-8
            39522110-1
            39522120-4
            39522130-7
            39522200-9
            39522400-1
            39522500-2
            39522510-5
            39522520-8
            39522530-1
            39522540-4
            39522541-1
            39523000-4
            39523100-5
            39523200-6
            39525000-8
            39525100-9
            39525200-0
            39525300-1
            39525400-2
            39525500-3
            39525600-4
            39525700-5
            39525800-6
            39525810-9
            39530000-6
            39531000-3
            39531100-4
            39531200-5
            39531300-6
            39531310-9
            39531400-7
            39532000-0
            39533000-7
            39534000-4
            39540000-9
            39541000-6
            39541100-7
            39541110-0
            39541120-3
            39541130-6
            39541140-9
            39541200-8
            39541210-1
            39541220-4
            39542000-3
            39550000-2
            39560000-5
            39561000-2
            39561100-3
            39561110-6
            39561120-9
            39561130-2
            39561131-9
            39561132-6
            39561133-3
            39561140-5
            39561141-2
            39561142-9
            39561200-4
            39562000-9
            39563000-6
            39563100-7
            39563200-8
            39563300-9
            39563400-0
            39563500-1
            39563510-4
            39563520-7
            39563530-0
            39563600-2
            39700000-9
            39710000-2
            39711000-9
            39711100-0
            39711110-3
            39711120-6
            39711121-3
            39711122-0
            39711123-7
            39711124-4
            39711130-9
            39711200-1
            39711210-4
            39711211-1
            39711300-2
            39711310-5
            39711320-8
            39711330-1
            39711340-4
            39711350-7
            39711360-0
            39711361-7
            39711362-4
            39711400-3
            39711410-6
            39711420-9
            39711430-2
            39711440-5
            39711500-4
            39712000-6
            39712100-7
            39712200-8
            39712210-1
            39712300-9
            39713000-3
            39713100-4
            39713200-5
            39713210-8
            39713211-5
            39713300-6
            39713400-7
            39713410-0
            39713420-3
            39713430-6
            39713431-3
            39713500-8
            39713510-1
            39714000-0
            39714100-1
            39714110-4
            39715000-7
            39715100-8
            39715200-9
            39715210-2
            39715220-5
            39715230-8
            39715240-1
            39715300-0
            39716000-4
            39717000-1
            39717100-2
            39717200-3
            39720000-5
            39721000-2
            39721100-3
            39721200-4
            39721300-5
            39721310-8
            39721320-1
            39721321-8
            39721400-6
            39721410-9
            39721411-6
            39722000-9
            39722100-0
            39722200-1
            39722300-2
            39800000-0
            39810000-3
            39811000-0
            39811100-1
            39811110-4
            39811200-2
            39811300-3
            39812000-7
            39812100-8
            39812200-9
            39812300-0
            39812400-1
            39812500-2
            39813000-4
            39820000-6
            39821000-3
            39822000-0
            39830000-9
            39831000-6
            39831100-7
            39831200-8
            39831210-1
            39831220-4
            39831230-7
            39831240-0
            39831250-3
            39831300-9
            39831400-0
            39831500-1
            39831600-2
            39831700-3
            39832000-3
            39832100-4
            39833000-0
            39834000-7
            41000000-9
            41100000-0
            41110000-3
            41120000-6
            42000000-6
            42100000-0
            42110000-3
            42111000-0
            42111100-1
            42112000-7
            42112100-8
            42112200-9
            42112210-2
            42112300-0
            42112400-1
            42112410-4
            42113000-4
            42113100-5
            42113110-8
            42113120-1
            42113130-4
            42113150-0
            42113160-3
            42113161-0
            42113170-6
            42113171-3
            42113172-0
            42113190-2
            42113200-6
            42113300-7
            42113310-0
            42113320-3
            42113390-4
            42113400-8
            42120000-6
            42121000-3
            42121100-4
            42121200-5
            42121300-6
            42121400-7
            42121500-8
            42122000-0
            42122100-1
            42122110-4
            42122120-7
            42122130-0
            42122160-9
            42122161-6
            42122170-2
            42122180-5
            42122190-8
            42122200-2
            42122210-5
            42122220-8
            42122230-1
            42122300-3
            42122400-4
            42122410-7
            42122411-4
            42122419-0
            42122420-0
            42122430-3
            42122440-6
            42122450-9
            42122460-2
            42122480-8
            42122500-5
            42122510-8
            42123000-7
            42123100-8
            42123200-9
            42123300-0
            42123400-1
            42123410-4
            42123500-2
            42123600-3
            42123610-6
            42123700-4
            42123800-5
            42124000-4
            42124100-5
            42124130-4
            42124150-0
            42124170-6
            42124200-6
            42124210-9
            42124211-6
            42124212-3
            42124213-0
            42124220-2
            42124221-9
            42124222-6
            42124230-5
            42124290-3
            42124300-7
            42124310-0
            42124320-3
            42124330-6
            42124340-9
            42130000-9
            42131000-6
            42131100-7
            42131110-0
            42131120-3
            42131130-6
            42131140-9
            42131141-6
            42131142-3
            42131143-0
            42131144-7
            42131145-4
            42131146-1
            42131147-8
            42131148-5
            42131150-2
            42131160-5
            42131170-8
            42131200-8
            42131210-1
            42131220-4
            42131230-7
            42131240-0
            42131250-3
            42131260-6
            42131270-9
            42131280-2
            42131290-5
            42131291-2
            42131292-9
            42131300-9
            42131310-2
            42131320-5
            42131390-6
            42131400-0
            42132000-3
            42132100-4
            42132110-7
            42132120-0
            42132130-3
            42132200-5
            42132300-6
            42140000-2
            42141000-9
            42141100-0
            42141110-3
            42141120-6
            42141130-9
            42141200-1
            42141300-2
            42141400-3
            42141410-6
            42141500-4
            42141600-5
            42141700-6
            42141800-7
            42142000-6
            42142100-7
            42142200-8
            42150000-5
            42151000-2
            42152000-9
            42152100-0
            42152200-1
            42160000-8
            42161000-5
            42162000-2
            42163000-9
            42164000-6
            42165000-3
            42200000-8
            42210000-1
            42211000-8
            42211100-9
            42212000-5
            42213000-2
            42214000-9
            42214100-0
            42214110-3
            42214200-1
            42215000-6
            42215100-7
            42215110-0
            42215120-3
            42215200-8
            42215300-9
            42216000-3
            42220000-4
            42221000-1
            42221100-2
            42221110-5
            42222000-8
            42223000-5
            42300000-9
            42310000-2
            42320000-5
            42330000-8
            42340000-1
            42341000-8
            42350000-4
            42390000-6
            42400000-0
            42410000-3
            42411000-0
            42412000-7
            42412100-8
            42412110-1
            42412120-4
            42412200-9
            42413000-4
            42413100-5
            42413200-6
            42413300-7
            42413400-8
            42413500-9
            42414000-1
            42414100-2
            42414110-5
            42414120-8
            42414130-1
            42414140-4
            42414150-7
            42414200-3
            42414210-6
            42414220-9
            42414300-4
            42414310-7
            42414320-0
            42414400-5
            42414410-8
            42414500-6
            42415000-8
            42415100-9
            42415110-2
            42415200-0
            42415210-3
            42415300-1
            42415310-4
            42415320-7
            42416000-5
            42416100-6
            42416110-9
            42416120-2
            42416130-5
            42416200-7
            42416210-0
            42416300-8
            42416400-9
            42416500-0
            42417000-2
            42417100-3
            42417200-4
            42417210-7
            42417220-0
            42417230-3
            42417300-5
            42417310-8
            42418000-9
            42418100-0
            42418200-1
            42418210-4
            42418220-7
            42418290-8
            42418300-2
            42418400-3
            42418500-4
            42418900-8
            42418910-1
            42418920-4
            42418930-7
            42418940-0
            42419000-6
            42419100-7
            42419200-8
            42419500-1
            42419510-4
            42419520-7
            42419530-0
            42419540-3
            42419800-4
            42419810-7
            42419890-1
            42419900-5
            42420000-6
            42500000-1
            42510000-4
            42511000-1
            42511100-2
            42511110-5
            42511200-3
            42512000-8
            42512100-9
            42512200-0
            42512300-1
            42512400-2
            42512500-3
            42512510-6
            42512520-9
            42513000-5
            42513100-6
            42513200-7
            42513210-0
            42513220-3
            42513290-4
            42514000-2
            42514200-4
            42514300-5
            42514310-8
            42514320-1
            42515000-9
            42520000-7
            42521000-4
            42522000-1
            42522100-2
            42530000-0
            42531000-7
            42532000-4
            42533000-1
            42600000-2
            42610000-5
            42611000-2
            42612000-9
            42612100-0
            42612200-1
            42620000-8
            42621000-5
            42621100-6
            42622000-2
            42623000-9
            42630000-1
            42631000-8
            42632000-5
            42633000-2
            42634000-9
            42635000-6
            42636000-3
            42636100-4
            42637000-0
            42637100-1
            42637200-2
            42637300-3
            42638000-7
            42640000-4
            42641000-1
            42641100-2
            42641200-3
            42641300-4
            42641400-5
            42642000-8
            42642100-9
            42642200-0
            42642300-1
            42642400-2
            42642500-3
            42650000-7
            42651000-4
            42652000-1
            42660000-0
            42661000-7
            42661100-8
            42661200-9
            42662000-4
            42662100-5
            42662200-6
            42663000-1
            42664000-8
            42664100-9
            42665000-5
            42670000-3
            42671000-0
            42671100-1
            42671110-4
            42672000-7
            42673000-4
            42674000-1
            42675000-8
            42675100-9
            42676000-5
            42677000-2
            42700000-3
            42710000-6
            42711000-3
            42712000-0
            42713000-7
            42714000-4
            42715000-1
            42716000-8
            42716100-9
            42716110-2
            42716120-5
            42716130-8
            42716200-0
            42717000-5
            42717100-6
            42718000-2
            42718100-3
            42718200-4
            42720000-9
            42800000-4
            42810000-7
            42900000-5
            42910000-8
            42912000-2
            42912100-3
            42912110-6
            42912120-9
            42912130-2
            42912300-5
            42912310-8
            42912320-1
            42912330-4
            42912340-7
            42912350-0
            42913000-9
            42913300-2
            42913400-3
            42913500-4
            42914000-6
            42920000-1
            42921000-8
            42921100-9
            42921200-0
            42921300-1
            42921310-4
            42921320-7
            42921330-0
            42923000-2
            42923100-3
            42923110-6
            42923200-4
            42923210-7
            42923220-0
            42923230-3
            42924200-1
            42924300-2
            42924310-5
            42924700-6
            42924710-9
            42924720-2
            42924730-5
            42924740-8
            42924790-3
            42930000-4
            42931000-1
            42931100-2
            42931110-5
            42931120-8
            42931130-1
            42931140-4
            42932000-8
            42932100-9
            42933000-5
            42933100-6
            42933200-7
            42933300-8
            42940000-7
            42941000-4
            42942000-1
            42942200-3
            42943000-8
            42943100-9
            42943200-0
            42943210-3
            42943300-1
            42943400-2
            42943500-3
            42943600-4
            42943700-5
            42943710-8
            42950000-0
            42952000-4
            42953000-1
            42954000-8
            42955000-5
            42956000-2
            42957000-9
            42958000-6
            42959000-3
            42960000-3
            42961000-0
            42961100-1
            42961200-2
            42961300-3
            42961400-4
            42962000-7
            42962100-8
            42962200-9
            42962300-0
            42962400-1
            42962500-2
            42963000-4
            42964000-1
            42965000-8
            42965100-9
            42965110-2
            42967000-2
            42967100-3
            42968000-9
            42968100-0
            42968200-1
            42968300-2
            42970000-6
            42971000-3
            42972000-0
            42973000-7
            42974000-4
            42975000-1
            42980000-9
            42981000-6
            42990000-2
            42991000-9
            42991100-0
            42991110-3
            42991200-1
            42991210-4
            42991220-7
            42991230-0
            42991300-2
            42991400-3
            42991500-4
            42992000-6
            42992100-7
            42992200-8
            42992300-9
            42993000-3
            42993100-4
            42993200-5
            42994000-0
            42994100-1
            42994200-2
            42994220-8
            42994230-1
            42995000-7
            42995100-8
            42995200-9
            42996000-4
            42996100-5
            42996110-8
            42996200-6
            42996300-7
            42996400-8
            42996500-9
            42996600-0
            42996700-1
            42996800-2
            42996900-3
            42997000-1
            42997100-2
            42997200-3
            42997300-4
            42998000-8
            42998100-9
            42999000-5
            42999100-6
            42999200-7
            42999300-8
            42999400-9
            43000000-3
            43100000-4
            43120000-0
            43121000-7
            43121100-8
            43121200-9
            43121300-0
            43121400-1
            43121500-2
            43121600-3
            43122000-4
            43123000-1
            43124000-8
            43124100-9
            43124900-7
            43125000-5
            43130000-3
            43131000-0
            43131100-1
            43131200-2
            43132000-7
            43132100-8
            43132200-9
            43132300-0
            43132400-1
            43132500-2
            43133000-4
            43133100-5
            43133200-6
            43134000-1
            43134100-2
            43135000-8
            43135100-9
            43136000-5
            43140000-6
            43200000-5
            43210000-8
            43211000-5
            43212000-2
            43220000-1
            43221000-8
            43230000-4
            43240000-7
            43250000-0
            43251000-7
            43252000-4
            43260000-3
            43261000-0
            43261100-1
            43262000-7
            43262100-8
            43300000-6
            43310000-9
            43311000-6
            43312000-3
            43312100-4
            43312200-5
            43312300-6
            43312400-7
            43312500-8
            43313000-0
            43313100-1
            43313200-2
            43314000-7
            43315000-4
            43316000-1
            43320000-2
            43321000-9
            43322000-6
            43323000-3
            43324000-0
            43324100-1
            43325000-7
            43325100-8
            43327000-1
            43328000-8
            43328100-9
            43329000-5
            43400000-7
            43410000-0
            43411000-7
            43412000-4
            43413000-1
            43413100-2
            43414000-8
            43414100-9
            43415000-5
            43420000-3
            43500000-8
            43600000-9
            43610000-2
            43611000-9
            43611100-0
            43611200-1
            43611300-2
            43611400-3
            43611500-4
            43611600-5
            43611700-6
            43612000-6
            43612100-7
            43612200-8
            43612300-9
            43612400-0
            43612500-1
            43612600-2
            43612700-3
            43612800-4
            43613000-3
            43613100-4
            43613200-5
            43614000-0
            43620000-5
            43630000-8
            43640000-1
            43700000-0
            43710000-3
            43711000-0
            43720000-6
            43721000-3
            43800000-1
            43810000-4
            43811000-1
            43812000-8
            43820000-7
            43830000-0
            43840000-3
            44000000-0
            44100000-1
            44110000-4
            44111000-1
            44111100-2
            44111200-3
            44111210-6
            44111300-4
            44111400-5
            44111500-6
            44111510-9
            44111511-6
            44111520-2
            44111530-5
            44111540-8
            44111600-7
            44111700-8
            44111800-9
            44111900-0
            44112000-8
            44112100-9
            44112110-2
            44112120-5
            44112200-0
            44112210-3
            44112220-6
            44112230-9
            44112240-2
            44112300-1
            44112310-4
            44112400-2
            44112410-5
            44112420-8
            44112430-1
            44112500-3
            44112510-6
            44112600-4
            44112700-5
            44113000-5
            44113100-6
            44113120-2
            44113130-5
            44113140-8
            44113200-7
            44113300-8
            44113310-1
            44113320-4
            44113330-7
            44113500-0
            44113600-1
            44113610-4
            44113620-7
            44113700-2
            44113800-3
            44113810-6
            44113900-4
            44113910-7
            44114000-2
            44114100-3
            44114200-4
            44114210-7
            44114220-0
            44114250-9
            44115000-9
            44115100-0
            44115200-1
            44115210-4
            44115220-7
            44115310-5
            44115400-3
            44115500-4
            44115600-5
            44115700-6
            44115710-9
            44115800-7
            44115810-0
            44115811-7
            44115900-8
            44130000-0
            44131000-7
            44132000-4
            44133000-1
            44134000-8
            44140000-3
            44141000-0
            44141100-1
            44142000-7
            44143000-4
            44144000-1
            44160000-9
            44161000-6
            44161100-7
            44161110-0
            44161200-8
            44161400-0
            44161410-3
            44161500-1
            44161600-2
            44161700-3
            44161710-6
            44161720-9
            44161730-2
            44162000-3
            44162100-4
            44162200-5
            44162300-6
            44162400-7
            44162500-8
            44163000-0
            44163100-1
            44163110-4
            44163111-1
            44163112-8
            44163120-7
            44163121-4
            44163130-0
            44163140-3
            44163150-6
            44163160-9
            44163200-2
            44163210-5
            44163230-1
            44163240-4
            44163241-1
            44164000-7
            44164100-8
            44164200-9
            44164300-0
            44164310-3
            44165000-4
            44165100-5
            44165110-8
            44165200-6
            44165210-9
            44165300-7
            44166000-1
            44167000-8
            44167100-9
            44167110-2
            44167111-9
            44167200-0
            44167300-1
            44167400-2
            44170000-2
            44171000-9
            44172000-6
            44173000-3
            44174000-0
            44175000-7
            44176000-4
            44190000-8
            44191000-5
            44191100-6
            44191200-7
            44191300-8
            44191400-9
            44191500-0
            44191600-1
            44192000-2
            44192100-3
            44192200-4
            44200000-2
            44210000-5
            44211000-2
            44211100-3
            44211110-6
            44211200-4
            44211300-5
            44211400-6
            44211500-7
            44212000-9
            44212100-0
            44212110-3
            44212120-6
            44212200-1
            44212210-4
            44212211-1
            44212212-8
            44212220-7
            44212221-4
            44212222-1
            44212223-8
            44212224-5
            44212225-2
            44212226-9
            44212227-6
            44212230-0
            44212233-1
            44212240-3
            44212250-6
            44212260-9
            44212261-6
            44212262-3
            44212263-0
            44212300-2
            44212310-5
            44212311-2
            44212312-9
            44212313-6
            44212314-3
            44212315-0
            44212316-7
            44212317-4
            44212318-1
            44212320-8
            44212321-5
            44212322-2
            44212329-1
            44212380-6
            44212381-3
            44212382-0
            44212383-7
            44212390-9
            44212391-6
            44212400-3
            44212410-6
            44212500-4
            44212510-7
            44212520-0
            44220000-8
            44221000-5
            44221100-6
            44221110-9
            44221111-6
            44221120-2
            44221200-7
            44221210-0
            44221211-7
            44221212-4
            44221213-1
            44221220-3
            44221230-6
            44221240-9
            44221300-8
            44221310-1
            44221400-9
            44221500-0
            44230000-1
            44231000-8
            44232000-5
            44233000-2
            44300000-3
            44310000-6
            44311000-3
            44312000-0
            44312300-3
            44313000-7
            44313100-8
            44313200-9
            44315000-1
            44315100-2
            44315200-3
            44315300-4
            44315310-7
            44315320-0
            44316000-8
            44316100-9
            44316200-0
            44316300-1
            44316400-2
            44316500-3
            44316510-6
            44317000-5
            44318000-2
            44320000-9
            44321000-6
            44322000-3
            44322100-4
            44322200-5
            44322300-6
            44322400-7
            44330000-2
            44331000-9
            44332000-6
            44333000-3
            44334000-0
            44400000-4
            44410000-7
            44411000-4
            44411100-5
            44411200-6
            44411300-7
            44411400-8
            44411600-0
            44411700-1
            44411710-4
            44411720-7
            44411740-3
            44411750-6
            44411800-2
            44420000-0
            44421000-7
            44421300-0
            44421500-2
            44421600-3
            44421700-4
            44421710-7
            44421720-0
            44421721-7
            44421722-4
            44421780-8
            44421790-1
            44422000-4
            44423000-1
            44423100-2
            44423200-3
            44423220-9
            44423230-2
            44423300-4
            44423330-3
            44423340-6
            44423400-5
            44423450-0
            44423460-3
            44423700-8
            44423710-1
            44423720-4
            44423730-7
            44423740-0
            44423750-3
            44423760-6
            44423790-5
            44423800-9
            44423810-2
            44423850-4
            44423900-0
            44424000-8
            44424100-9
            44424200-0
            44424300-1
            44425000-5
            44425100-6
            44425110-9
            44425200-7
            44425300-8
            44425400-9
            44425500-0
            44430000-3
            44431000-0
            44440000-6
            44441000-3
            44442000-0
            44450000-9
            44451000-6
            44452000-3
            44460000-2
            44461000-9
            44461100-0
            44462000-6
            44464000-0
            44470000-5
            44480000-8
            44481000-5
            44481100-6
            44482000-2
            44482100-3
            44482200-4
            44500000-5
            44510000-8
            44511000-5
            44511100-6
            44511110-9
            44511120-2
            44511200-7
            44511300-8
            44511310-1
            44511320-4
            44511330-7
            44511340-0
            44511341-7
            44511400-9
            44511500-0
            44511510-3
            44512000-2
            44512100-3
            44512200-4
            44512210-7
            44512300-5
            44512400-6
            44512500-7
            44512600-8
            44512610-1
            44512700-9
            44512800-0
            44512900-1
            44512910-4
            44512920-7
            44512930-0
            44512940-3
            44513000-9
            44514000-6
            44514100-7
            44514200-8
            44520000-1
            44521000-8
            44521100-9
            44521110-2
            44521120-5
            44521130-8
            44521140-1
            44521200-0
            44521210-3
            44522000-5
            44522100-6
            44522200-7
            44522300-8
            44522400-9
            44523000-2
            44523100-3
            44523200-4
            44523300-5
            44530000-4
            44531000-1
            44531100-2
            44531200-3
            44531300-4
            44531400-5
            44531500-6
            44531510-9
            44531520-2
            44531600-7
            44531700-8
            44532000-8
            44532100-9
            44532200-0
            44532300-1
            44532400-2
            44533000-5
            44540000-7
            44541000-4
            44542000-1
            44550000-0
            44600000-6
            44610000-9
            44611000-6
            44611100-7
            44611110-0
            44611200-8
            44611400-0
            44611410-3
            44611420-6
            44611500-1
            44611600-2
            44612000-3
            44612100-4
            44612200-5
            44613000-0
            44613110-4
            44613200-2
            44613210-5
            44613300-3
            44613400-4
            44613500-5
            44613600-6
            44613700-7
            44613800-8
            44614000-7
            44614100-8
            44614300-0
            44614310-3
            44615000-4
            44615100-5
            44616000-1
            44616200-3
            44617000-8
            44617100-9
            44617200-0
            44617300-1
            44618000-5
            44618100-6
            44618300-8
            44618310-1
            44618320-4
            44618330-7
            44618340-0
            44618350-3
            44618400-9
            44618420-5
            44618500-0
            44619000-2
            44619100-3
            44619200-4
            44619300-5
            44619400-6
            44619500-7
            44620000-2
            44621000-9
            44621100-0
            44621110-3
            44621111-0
            44621112-7
            44621200-1
            44621210-4
            44621220-7
            44621221-4
            44622000-6
            44622100-7
            44800000-8
            44810000-1
            44811000-8
            44812000-5
            44812100-6
            44812200-7
            44812210-0
            44812220-3
            44812300-8
            44812310-1
            44812320-4
            44812400-9
            44820000-4
            44830000-7
            44831000-4
            44831100-5
            44831200-6
            44831300-7
            44831400-8
            44832000-1
            44832100-2
            44832200-3
            44900000-9
            44910000-2
            44911000-9
            44911100-0
            44911200-1
            44912000-6
            44912100-7
            44912200-8
            44912300-9
            44912400-0
            44920000-5
            44921000-2
            44921100-3
            44921200-4
            44921210-7
            44921300-5
            44922000-9
            44922100-0
            44922200-1
            44930000-8
            45000000-7
            45100000-8
            45110000-1
            45111000-8
            45111100-9
            45111200-0
            45111210-3
            45111211-0
            45111212-7
            45111213-4
            45111214-1
            45111220-6
            45111230-9
            45111240-2
            45111250-5
            45111260-8
            45111290-7
            45111291-4
            45111300-1
            45111310-4
            45111320-7
            45112000-5
            45112100-6
            45112200-7
            45112210-0
            45112300-8
            45112310-1
            45112320-4
            45112330-7
            45112340-0
            45112350-3
            45112360-6
            45112400-9
            45112410-2
            45112420-5
            45112440-1
            45112441-8
            45112450-4
            45112500-0
            45112600-1
            45112700-2
            45112710-5
            45112711-2
            45112712-9
            45112713-6
            45112714-3
            45112720-8
            45112721-5
            45112722-2
            45112723-9
            45112730-1
            45112740-4
            45113000-2
            45120000-4
            45121000-1
            45122000-8
            45200000-9
            45210000-2
            45211000-9
            45211100-0
            45211200-1
            45211300-2
            45211310-5
            45211320-8
            45211340-4
            45211341-1
            45211350-7
            45211360-0
            45211370-3
            45212000-6
            45212100-7
            45212110-0
            45212120-3
            45212130-6
            45212140-9
            45212150-2
            45212160-5
            45212170-8
            45212171-5
            45212172-2
            45212180-1
            45212190-4
            45212200-8
            45212210-1
            45212211-8
            45212212-5
            45212213-2
            45212220-4
            45212221-1
            45212222-8
            45212223-5
            45212224-2
            45212225-9
            45212230-7
            45212290-5
            45212300-9
            45212310-2
            45212311-9
            45212312-6
            45212313-3
            45212314-0
            45212320-5
            45212321-2
            45212322-9
            45212330-8
            45212331-5
            45212340-1
            45212350-4
            45212351-1
            45212352-8
            45212353-5
            45212354-2
            45212360-7
            45212361-4
            45212400-0
            45212410-3
            45212411-0
            45212412-7
            45212413-4
            45212420-6
            45212421-3
            45212422-0
            45212423-7
            45212500-1
            45212600-2
            45213000-3
            45213100-4
            45213110-7
            45213111-4
            45213112-1
            45213120-0
            45213130-3
            45213140-6
            45213141-3
            45213142-0
            45213150-9
            45213200-5
            45213210-8
            45213220-1
            45213221-8
            45213230-4
            45213240-7
            45213241-4
            45213242-1
            45213250-0
            45213251-7
            45213252-4
            45213260-3
            45213270-6
            45213280-9
            45213300-6
            45213310-9
            45213311-6
            45213312-3
            45213313-0
            45213314-7
            45213315-4
            45213316-1
            45213320-2
            45213321-9
            45213322-6
            45213330-5
            45213331-2
            45213332-9
            45213333-6
            45213340-8
            45213341-5
            45213342-2
            45213350-1
            45213351-8
            45213352-5
            45213353-2
            45213400-7
            45214000-0
            45214100-1
            45214200-2
            45214210-5
            45214220-8
            45214230-1
            45214300-3
            45214310-6
            45214320-9
            45214400-4
            45214410-7
            45214420-0
            45214430-3
            45214500-5
            45214600-6
            45214610-9
            45214620-2
            45214630-5
            45214631-2
            45214640-8
            45214700-7
            45214710-0
            45214800-8
            45215000-7
            45215100-8
            45215110-1
            45215120-4
            45215130-7
            45215140-0
            45215141-7
            45215142-4
            45215143-1
            45215144-8
            45215145-5
            45215146-2
            45215147-9
            45215148-6
            45215200-9
            45215210-2
            45215212-6
            45215213-3
            45215214-0
            45215215-7
            45215220-5
            45215221-2
            45215222-9
            45215300-0
            45215400-1
            45215500-2
            45216000-4
            45216100-5
            45216110-8
            45216111-5
            45216112-2
            45216113-9
            45216114-6
            45216120-1
            45216121-8
            45216122-5
            45216123-2
            45216124-9
            45216125-6
            45216126-3
            45216127-0
            45216128-7
            45216129-4
            45216200-6
            45216220-2
            45216230-5
            45216250-1
            45217000-1
            45220000-5
            45221000-2
            45221100-3
            45221110-6
            45221111-3
            45221112-0
            45221113-7
            45221114-4
            45221115-1
            45221117-5
            45221118-2
            45221119-9
            45221120-9
            45221121-6
            45221122-3
            45221200-4
            45221210-7
            45221211-4
            45221213-8
            45221214-5
            45221220-0
            45221230-3
            45221240-6
            45221241-3
            45221242-0
            45221243-7
            45221244-4
            45221245-1
            45221246-8
            45221247-5
            45221248-2
            45221250-9
            45222000-9
            45222100-0
            45222110-3
            45222200-1
            45222300-2
            45223000-6
            45223100-7
            45223110-0
            45223200-8
            45223210-1
            45223220-4
            45223300-9
            45223310-2
            45223320-5
            45223400-0
            45223500-1
            45223600-2
            45223700-3
            45223710-6
            45223720-9
            45223800-4
            45223810-7
            45223820-0
            45223821-7
            45223822-4
            45230000-8
            45231000-5
            45231100-6
            45231110-9
            45231111-6
            45231112-3
            45231113-0
            45231200-7
            45231210-0
            45231220-3
            45231221-0
            45231222-7
            45231223-4
            45231300-8
            45231400-9
            45231500-0
            45231510-3
            45231600-1
            45232000-2
            45232100-3
            45232120-9
            45232121-6
            45232130-2
            45232140-5
            45232141-2
            45232142-9
            45232150-8
            45232151-5
            45232152-2
            45232153-9
            45232154-6
            45232200-4
            45232210-7
            45232220-0
            45232221-7
            45232300-5
            45232310-8
            45232311-5
            45232320-1
            45232330-4
            45232331-1
            45232332-8
            45232340-7
            45232400-6
            45232410-9
            45232411-6
            45232420-2
            45232421-9
            45232422-6
            45232423-3
            45232424-0
            45232430-5
            45232431-2
            45232440-8
            45232450-1
            45232451-8
            45232452-5
            45232453-2
            45232454-9
            45232460-4
            45232470-7
            45233000-9
            45233100-0
            45233110-3
            45233120-6
            45233121-3
            45233122-0
            45233123-7
            45233124-4
            45233125-1
            45233126-8
            45233127-5
            45233128-2
            45233129-9
            45233130-9
            45233131-6
            45233139-3
            45233140-2
            45233141-9
            45233142-6
            45233144-0
            45233150-5
            45233160-8
            45233161-5
            45233162-2
            45233200-1
            45233210-4
            45233220-7
            45233221-4
            45233222-1
            45233223-8
            45233224-5
            45233225-2
            45233226-9
            45233227-6
            45233228-3
            45233229-0
            45233250-6
            45233251-3
            45233252-0
            45233253-7
            45233260-9
            45233261-6
            45233262-3
            45233270-2
            45233280-5
            45233290-8
            45233291-5
            45233292-2
            45233293-9
            45233294-6
            45233300-2
            45233310-5
            45233320-8
            45233330-1
            45233340-4
            45234000-6
            45234100-7
            45234110-0
            45234111-7
            45234112-4
            45234113-1
            45234114-8
            45234115-5
            45234116-2
            45234120-3
            45234121-0
            45234122-7
            45234123-4
            45234124-1
            45234125-8
            45234126-5
            45234127-2
            45234128-9
            45234129-6
            45234130-6
            45234140-9
            45234160-5
            45234170-8
            45234180-1
            45234181-8
            45234200-8
            45234210-1
            45234220-4
            45234230-7
            45234240-0
            45234250-3
            45235000-3
            45235100-4
            45235110-7
            45235111-4
            45235200-5
            45235210-8
            45235300-6
            45235310-9
            45235311-6
            45235320-2
            45236000-0
            45236100-1
            45236110-4
            45236111-1
            45236112-8
            45236113-5
            45236114-2
            45236119-7
            45236200-2
            45236210-5
            45236220-8
            45236230-1
            45236250-7
            45236290-9
            45236300-3
            45237000-7
            45240000-1
            45241000-8
            45241100-9
            45241200-0
            45241300-1
            45241400-2
            45241500-3
            45241600-4
            45242000-5
            45242100-6
            45242110-9
            45242200-7
            45242210-0
            45243000-2
            45243100-3
            45243110-6
            45243200-4
            45243300-5
            45243400-6
            45243500-7
            45243510-0
            45243600-8
            45244000-9
            45244100-0
            45244200-1
            45245000-6
            45246000-3
            45246100-4
            45246200-5
            45246400-7
            45246410-0
            45246500-8
            45246510-1
            45247000-0
            45247100-1
            45247110-4
            45247111-1
            45247112-8
            45247120-7
            45247130-0
            45247200-2
            45247210-5
            45247211-2
            45247212-9
            45247220-8
            45247230-1
            45247240-4
            45247270-3
            45248000-7
            45248100-8
            45248200-9
            45248300-0
            45248400-1
            45248500-2
            45250000-4
            45251000-1
            45251100-2
            45251110-5
            45251111-2
            45251120-8
            45251140-4
            45251141-1
            45251142-8
            45251143-5
            45251150-7
            45251160-0
            45251200-3
            45251220-9
            45251230-2
            45251240-5
            45251250-8
            45252000-8
            45252100-9
            45252110-2
            45252120-5
            45252121-2
            45252122-9
            45252123-6
            45252124-3
            45252125-0
            45252126-7
            45252127-4
            45252130-8
            45252140-1
            45252150-4
            45252200-0
            45252210-3
            45252300-1
            45253000-5
            45253100-6
            45253200-7
            45253300-8
            45253310-1
            45253320-4
            45253400-9
            45253500-0
            45253600-1
            45253700-2
            45253800-3
            45254000-2
            45254100-3
            45254110-6
            45254200-4
            45255000-9
            45255100-0
            45255110-3
            45255120-6
            45255121-3
            45255200-1
            45255210-4
            45255300-2
            45255400-3
            45255410-6
            45255420-9
            45255430-2
            45255500-4
            45255600-5
            45255700-6
            45255800-7
            45259000-7
            45259100-8
            45259200-9
            45259300-0
            45259900-6
            45260000-7
            45261000-4
            45261100-5
            45261200-6
            45261210-9
            45261211-6
            45261212-3
            45261213-0
            45261214-7
            45261215-4
            45261220-2
            45261221-9
            45261222-6
            45261300-7
            45261310-0
            45261320-3
            45261400-8
            45261410-1
            45261420-4
            45261900-3
            45261910-6
            45261920-9
            45262000-1
            45262100-2
            45262110-5
            45262120-8
            45262200-3
            45262210-6
            45262211-3
            45262212-0
            45262213-7
            45262220-9
            45262300-4
            45262310-7
            45262311-4
            45262320-0
            45262321-7
            45262330-3
            45262340-6
            45262350-9
            45262360-2
            45262370-5
            45262400-5
            45262410-8
            45262420-1
            45262421-8
            45262422-5
            45262423-2
            45262424-9
            45262425-6
            45262426-3
            45262500-6
            45262510-9
            45262511-6
            45262512-3
            45262520-2
            45262521-9
            45262522-6
            45262600-7
            45262610-0
            45262620-3
            45262630-6
            45262640-9
            45262650-2
            45262660-5
            45262670-8
            45262680-1
            45262690-4
            45262700-8
            45262710-1
            45262800-9
            45262900-0
            45300000-0
            45310000-3
            45311000-0
            45311100-1
            45311200-2
            45312000-7
            45312100-8
            45312200-9
            45312300-0
            45312310-3
            45312311-0
            45312320-6
            45312330-9
            45313000-4
            45313100-5
            45313200-6
            45313210-9
            45314000-1
            45314100-2
            45314120-8
            45314200-3
            45314300-4
            45314310-7
            45314320-0
            45315000-8
            45315100-9
            45315200-0
            45315300-1
            45315400-2
            45315500-3
            45315600-4
            45315700-5
            45316000-5
            45316100-6
            45316110-9
            45316200-7
            45316210-0
            45316211-7
            45316212-4
            45316213-1
            45316220-3
            45316230-6
            45317000-2
            45317100-3
            45317200-4
            45317300-5
            45317400-6
            45320000-6
            45321000-3
            45323000-7
            45324000-4
            45330000-9
            45331000-6
            45331100-7
            45331110-0
            45331200-8
            45331210-1
            45331211-8
            45331220-4
            45331221-1
            45331230-7
            45331231-4
            45332000-3
            45332200-5
            45332300-6
            45332400-7
            45333000-0
            45333100-1
            45333200-2
            45340000-2
            45341000-9
            45342000-6
            45343000-3
            45343100-4
            45343200-5
            45343210-8
            45343220-1
            45343230-4
            45350000-5
            45351000-2
            45400000-1
            45410000-4
            45420000-7
            45421000-4
            45421100-5
            45421110-8
            45421111-5
            45421112-2
            45421120-1
            45421130-4
            45421131-1
            45421132-8
            45421140-7
            45421141-4
            45421142-1
            45421143-8
            45421144-5
            45421145-2
            45421146-9
            45421147-6
            45421148-3
            45421150-0
            45421151-7
            45421152-4
            45421153-1
            45421160-3
            45422000-1
            45422100-2
            45430000-0
            45431000-7
            45431100-8
            45431200-9
            45432000-4
            45432100-5
            45432110-8
            45432111-5
            45432112-2
            45432113-9
            45432114-6
            45432120-1
            45432121-8
            45432130-4
            45432200-6
            45432210-9
            45432220-2
            45440000-3
            45441000-0
            45442000-7
            45442100-8
            45442110-1
            45442120-4
            45442121-1
            45442180-2
            45442190-5
            45442200-9
            45442210-2
            45442300-0
            45443000-4
            45450000-6
            45451000-3
            45451100-4
            45451200-5
            45451300-6
            45452000-0
            45452100-1
            45453000-7
            45453100-8
            45454000-4
            45454100-5
            45500000-2
            45510000-5
            45520000-8
            48000000-8
            48100000-9
            48110000-2
            48120000-5
            48121000-2
            48130000-8
            48131000-5
            48132000-2
            48140000-1
            48150000-4
            48151000-1
            48160000-7
            48161000-4
            48170000-0
            48180000-3
            48190000-6
            48200000-0
            48210000-3
            48211000-0
            48212000-7
            48213000-4
            48214000-1
            48215000-8
            48216000-5
            48217000-2
            48217100-3
            48217200-4
            48217300-5
            48218000-9
            48219000-6
            48219100-7
            48219200-8
            48219300-9
            48219400-0
            48219500-1
            48219600-2
            48219700-3
            48219800-4
            48220000-6
            48221000-3
            48222000-0
            48223000-7
            48224000-4
            48300000-1
            48310000-4
            48311000-1
            48311100-2
            48312000-8
            48313000-5
            48313100-6
            48314000-2
            48315000-9
            48316000-6
            48317000-3
            48318000-0
            48319000-7
            48320000-7
            48321000-4
            48321100-5
            48322000-1
            48323000-8
            48324000-5
            48325000-2
            48326000-9
            48326100-0
            48327000-6
            48328000-3
            48329000-0
            48330000-0
            48331000-7
            48332000-4
            48333000-1
            48400000-2
            48410000-5
            48411000-2
            48412000-9
            48420000-8
            48421000-5
            48422000-2
            48430000-1
            48440000-4
            48441000-1
            48442000-8
            48443000-5
            48444000-2
            48444100-3
            48445000-9
            48450000-7
            48451000-4
            48460000-0
            48461000-7
            48462000-4
            48463000-1
            48470000-3
            48480000-6
            48481000-3
            48482000-0
            48490000-9
            48500000-3
            48510000-6
            48511000-3
            48512000-0
            48513000-7
            48514000-4
            48515000-1
            48516000-8
            48517000-5
            48518000-2
            48519000-9
            48520000-9
            48521000-6
            48522000-3
            48600000-4
            48610000-7
            48611000-4
            48612000-1
            48613000-8
            48614000-5
            48620000-0
            48621000-7
            48622000-4
            48623000-1
            48624000-8
            48625000-5
            48626000-2
            48627000-9
            48628000-9
            48700000-5
            48710000-8
            48720000-1
            48730000-4
            48731000-1
            48732000-8
            48740000-7
            48750000-0
            48760000-3
            48761000-0
            48770000-6
            48771000-3
            48772000-0
            48773000-7
            48773100-8
            48780000-9
            48781000-6
            48782000-3
            48783000-0
            48790000-2
            48800000-6
            48810000-9
            48811000-6
            48812000-3
            48813000-0
            48813100-1
            48813200-2
            48814000-7
            48814100-8
            48814200-9
            48814300-0
            48814400-1
            48814500-2
            48820000-2
            48821000-9
            48822000-6
            48823000-3
            48824000-0
            48825000-7
            48900000-7
            48910000-0
            48911000-7
            48912000-4
            48913000-1
            48920000-3
            48921000-0
            48930000-6
            48931000-3
            48932000-0
            48940000-9
            48941000-6
            48942000-3
            48950000-2
            48951000-9
            48952000-6
            48960000-5
            48961000-2
            48962000-9
            48970000-8
            48971000-5
            48972000-2
            48980000-1
            48981000-8
            48982000-5
            48983000-2
            48984000-9
            48985000-6
            48986000-3
            48987000-0
            48990000-4
            48991000-1
            50000000-5
            50100000-6
            50110000-9
            50111000-6
            50111100-7
            50111110-0
            50112000-3
            50112100-4
            50112110-7
            50112111-4
            50112120-0
            50112200-5
            50112300-6
            50113000-0
            50113100-1
            50113200-2
            50114000-7
            50114100-8
            50114200-9
            50115000-4
            50115100-5
            50115200-6
            50116000-1
            50116100-2
            50116200-3
            50116300-4
            50116400-5
            50116500-6
            50116510-9
            50116600-7
            50117000-8
            50117100-9
            50117200-0
            50117300-1
            50118000-5
            50118100-6
            50118110-9
            50118200-7
            50118300-8
            50118400-9
            50118500-0
            50190000-3
            50200000-7
            50210000-0
            50211000-7
            50211100-8
            50211200-9
            50211210-2
            50211211-9
            50211212-6
            50211300-0
            50211310-3
            50212000-4
            50220000-3
            50221000-0
            50221100-1
            50221200-2
            50221300-3
            50221400-4
            50222000-7
            50222100-8
            50223000-4
            50224000-1
            50224100-2
            50224200-3
            50225000-8
            50229000-6
            50230000-6
            50232000-0
            50232100-1
            50232110-4
            50232200-2
            50240000-9
            50241000-6
            50241100-7
            50241200-8
            50242000-3
            50243000-0
            50244000-7
            50245000-4
            50246000-1
            50246100-2
            50246200-3
            50246300-4
            50246400-5
            50300000-8
            50310000-1
            50311000-8
            50311400-2
            50312000-5
            50312100-6
            50312110-9
            50312120-2
            50312200-7
            50312210-0
            50312220-3
            50312300-8
            50312310-1
            50312320-4
            50312400-9
            50312410-2
            50312420-5
            50312600-1
            50312610-4
            50312620-7
            50313000-2
            50313100-3
            50313200-4
            50314000-9
            50315000-6
            50316000-3
            50317000-0
            50320000-4
            50321000-1
            50322000-8
            50323000-5
            50323100-6
            50323200-7
            50324000-2
            50324100-3
            50324200-4
            50330000-7
            50331000-4
            50332000-1
            50333000-8
            50333100-9
            50333200-0
            50334000-5
            50334100-6
            50334110-9
            50334120-2
            50334130-5
            50334140-8
            50334200-7
            50334300-8
            50334400-9
            50340000-0
            50341000-7
            50341100-8
            50341200-9
            50342000-4
            50343000-1
            50344000-8
            50344100-9
            50344200-0
            50400000-9
            50410000-2
            50411000-9
            50411100-0
            50411200-1
            50411300-2
            50411400-3
            50411500-4
            50412000-6
            50413000-3
            50413100-4
            50413200-5
            50420000-5
            50421000-2
            50421100-3
            50421200-4
            50422000-9
            50430000-8
            50431000-5
            50432000-2
            50433000-9
            50500000-0
            50510000-3
            50511000-0
            50511100-1
            50511200-2
            50512000-7
            50513000-4
            50514000-1
            50514100-2
            50514200-3
            50514300-4
            50530000-9
            50531000-6
            50531100-7
            50531200-8
            50531300-9
            50531400-0
            50531500-1
            50531510-4
            50532000-3
            50532100-4
            50532200-5
            50532300-6
            50532400-7
            50600000-1
            50610000-4
            50620000-7
            50630000-0
            50640000-3
            50650000-6
            50660000-9
            50700000-2
            50710000-5
            50711000-2
            50712000-9
            50720000-8
            50721000-5
            50730000-1
            50740000-4
            50750000-7
            50760000-0
            50800000-3
            50810000-6
            50820000-9
            50821000-6
            50822000-3
            50830000-2
            50840000-5
            50841000-2
            50842000-9
            50850000-8
            50860000-1
            50870000-4
            50880000-7
            50881000-4
            50882000-1
            50883000-8
            50884000-5
            51000000-9
            51100000-3
            51110000-6
            51111000-3
            51111100-4
            51111200-5
            51111300-6
            51112000-0
            51112100-1
            51112200-2
            51120000-9
            51121000-6
            51122000-3
            51130000-2
            51131000-9
            51133000-3
            51133100-4
            51134000-0
            51135000-7
            51135100-8
            51135110-1
            51140000-5
            51141000-2
            51142000-9
            51143000-6
            51144000-3
            51145000-0
            51146000-7
            51200000-4
            51210000-7
            51211000-4
            51212000-1
            51213000-8
            51214000-5
            51215000-2
            51216000-9
            51220000-0
            51221000-7
            51230000-3
            51240000-6
            51300000-5
            51310000-8
            51311000-5
            51312000-2
            51313000-9
            51314000-6
            51320000-1
            51321000-8
            51322000-5
            51330000-4
            51340000-7
            51350000-0
            51400000-6
            51410000-9
            51411000-6
            51412000-3
            51413000-0
            51414000-7
            51415000-4
            51416000-1
            51420000-2
            51430000-5
            51500000-7
            51510000-0
            51511000-7
            51511100-8
            51511110-1
            51511200-9
            51511300-0
            51511400-1
            51514000-8
            51514100-9
            51514110-2
            51520000-3
            51521000-0
            51522000-7
            51530000-6
            51540000-9
            51541000-6
            51541100-7
            51541200-8
            51541300-9
            51541400-0
            51542000-3
            51542100-4
            51542200-5
            51542300-6
            51543000-0
            51543100-1
            51543200-2
            51543300-3
            51543400-4
            51544000-7
            51544100-8
            51544200-9
            51545000-4
            51550000-2
            51600000-8
            51610000-1
            51611000-8
            51611100-9
            51611110-2
            51611120-5
            51612000-5
            51620000-4
            51700000-9
            51800000-0
            51810000-3
            51820000-6
            51900000-1
            55000000-0
            55100000-1
            55110000-4
            55120000-7
            55130000-0
            55200000-2
            55210000-5
            55220000-8
            55221000-5
            55240000-4
            55241000-1
            55242000-8
            55243000-5
            55250000-7
            55260000-0
            55270000-3
            55300000-3
            55310000-6
            55311000-3
            55312000-0
            55320000-9
            55321000-6
            55322000-3
            55330000-2
            55400000-4
            55410000-7
            55500000-5
            55510000-8
            55511000-5
            55512000-2
            55520000-1
            55521000-8
            55521100-9
            55521200-0
            55522000-5
            55523000-2
            55523100-3
            55524000-9
            55900000-9
            60000000-8
            60100000-9
            60112000-6
            60120000-5
            60130000-8
            60140000-1
            60150000-4
            60160000-7
            60161000-4
            60170000-0
            60171000-7
            60172000-4
            60180000-3
            60181000-0
            60182000-7
            60183000-4
            60200000-0
            60210000-3
            60220000-6
            60300000-1
            60400000-2
            60410000-5
            60411000-2
            60420000-8
            60421000-5
            60423000-9
            60424000-6
            60424100-7
            60424110-0
            60424120-3
            60440000-4
            60441000-1
            60442000-8
            60443000-5
            60443100-6
            60444000-2
            60444100-3
            60445000-9
            60500000-3
            60510000-6
            60520000-9
            60600000-4
            60610000-7
            60620000-0
            60630000-3
            60640000-6
            60650000-9
            60651000-6
            60651100-7
            60651200-8
            60651300-9
            60651400-0
            60651500-1
            60651600-2
            60653000-0
            63000000-9
            63100000-0
            63110000-3
            63111000-0
            63112000-7
            63112100-8
            63112110-1
            63120000-6
            63121000-3
            63121100-4
            63121110-7
            63122000-0
            63500000-4
            63510000-7
            63511000-4
            63512000-1
            63513000-8
            63514000-5
            63515000-2
            63516000-9
            63520000-0
            63521000-7
            63522000-4
            63523000-1
            63524000-8
            63700000-6
            63710000-9
            63711000-6
            63711100-7
            63711200-8
            63712000-3
            63712100-4
            63712200-5
            63712210-8
            63712300-6
            63712310-9
            63712311-6
            63712320-2
            63712321-9
            63712400-7
            63712500-8
            63712600-9
            63712700-0
            63712710-3
            63720000-2
            63721000-9
            63721100-0
            63721200-1
            63721300-2
            63721400-3
            63721500-4
            63722000-6
            63723000-3
            63724000-0
            63724100-1
            63724110-4
            63724200-2
            63724300-3
            63724310-6
            63724400-4
            63725000-7
            63725100-8
            63725200-9
            63725300-0
            63726000-4
            63726100-5
            63726200-6
            63726300-7
            63726400-8
            63726500-9
            63726600-0
            63726610-3
            63726620-6
            63726700-1
            63726800-2
            63726900-3
            63727000-1
            63727100-2
            63727200-3
            63730000-5
            63731000-2
            63731100-3
            63732000-9
            63733000-6
            63734000-3
            64000000-6
            64100000-7
            64110000-0
            64111000-7
            64112000-4
            64113000-1
            64114000-8
            64115000-5
            64116000-2
            64120000-3
            64121000-0
            64121100-1
            64121200-2
            64122000-7
            64200000-8
            64210000-1
            64211000-8
            64211100-9
            64211200-0
            64212000-5
            64212100-6
            64212200-7
            64212300-8
            64212400-9
            64212500-0
            64212600-1
            64212700-2
            64212800-3
            64212900-4
            64213000-2
            64214000-9
            64214100-0
            64214200-1
            64214400-3
            64215000-6
            64216000-3
            64216100-4
            64216110-7
            64216120-0
            64216130-3
            64216140-6
            64216200-5
            64216210-8
            64216300-6
            64220000-4
            64221000-1
            64222000-8
            64223000-5
            64224000-2
            64225000-9
            64226000-6
            64227000-3
            64228000-0
            64228100-1
            64228200-2
            65000000-3
            65100000-4
            65110000-7
            65111000-4
            65120000-0
            65121000-7
            65122000-0
            65123000-3
            65130000-3
            65200000-5
            65210000-8
            65300000-6
            65310000-9
            65320000-2
            65400000-7
            65410000-0
            65500000-8
            66000000-0
            66100000-1
            66110000-4
            66111000-1
            66112000-8
            66113000-5
            66113100-6
            66114000-2
            66115000-9
            66120000-7
            66121000-4
            66122000-1
            66130000-0
            66131000-7
            66131100-8
            66132000-4
            66133000-1
            66140000-3
            66141000-0
            66150000-6
            66151000-3
            66151100-4
            66152000-0
            66160000-9
            66161000-6
            66162000-3
            66170000-2
            66171000-9
            66172000-6
            66180000-5
            66190000-8
            66500000-5
            66510000-8
            66511000-5
            66512000-2
            66512100-3
            66512200-4
            66512210-7
            66512220-0
            66513000-9
            66513100-0
            66513200-1
            66514000-6
            66514100-7
            66514110-0
            66514120-3
            66514130-6
            66514140-9
            66514150-2
            66514200-8
            66515000-3
            66515100-4
            66515200-5
            66515300-6
            66515400-7
            66515410-0
            66515411-7
            66516000-0
            66516100-1
            66516200-2
            66516300-3
            66516400-4
            66516500-5
            66517000-7
            66517100-8
            66517200-9
            66517300-0
            66518000-4
            66518100-5
            66518200-6
            66518300-7
            66519000-1
            66519100-2
            66519200-3
            66519300-4
            66519310-7
            66519400-5
            66519500-6
            66519600-7
            66519700-8
            66520000-1
            66521000-8
            66522000-5
            66523000-2
            66523100-3
            66600000-6
            66700000-7
            66710000-0
            66720000-3
            70000000-1
            70100000-2
            70110000-5
            70111000-2
            70112000-9
            70120000-8
            70121000-5
            70121100-6
            70121200-7
            70122000-2
            70122100-3
            70122110-6
            70122200-4
            70122210-7
            70123000-9
            70123100-0
            70123200-1
            70130000-1
            70200000-3
            70210000-6
            70220000-9
            70300000-4
            70310000-7
            70311000-4
            70320000-0
            70321000-7
            70322000-4
            70330000-3
            70331000-0
            70331100-1
            70332000-7
            70332100-8
            70332200-9
            70332300-0
            70333000-4
            70340000-6
            71000000-8
            71200000-0
            71210000-3
            71220000-6
            71221000-3
            71222000-0
            71222100-1
            71222200-2
            71223000-7
            71230000-9
            71240000-2
            71241000-9
            71242000-6
            71243000-3
            71244000-0
            71245000-7
            71246000-4
            71247000-1
            71248000-8
            71250000-5
            71251000-2
            71300000-1
            71310000-4
            71311000-1
            71311100-2
            71311200-3
            71311210-6
            71311220-9
            71311230-2
            71311240-5
            71311300-4
            71312000-8
            71313000-5
            71313100-6
            71313200-7
            71313400-9
            71313410-2
            71313420-5
            71313430-8
            71313440-1
            71313450-4
            71314000-2
            71314100-3
            71314200-4
            71314300-5
            71314310-8
            71315000-9
            71315100-0
            71315200-1
            71315210-4
            71315300-2
            71315400-3
            71315410-6
            71316000-6
            71317000-3
            71317100-4
            71317200-5
            71317210-8
            71318000-0
            71318100-1
            71319000-7
            71320000-7
            71321000-4
            71321100-5
            71321200-6
            71321300-7
            71321400-8
            71322000-1
            71322100-2
            71322200-3
            71322300-4
            71322400-5
            71322500-6
            71323000-8
            71323100-9
            71323200-0
            71324000-5
            71325000-2
            71326000-9
            71327000-6
            71328000-3
            71330000-0
            71331000-7
            71332000-4
            71333000-1
            71334000-8
            71335000-5
            71336000-2
            71337000-9
            71340000-3
            71350000-6
            71351000-3
            71351100-4
            71351200-5
            71351210-8
            71351220-1
            71351300-6
            71351400-7
            71351500-8
            71351600-9
            71351610-2
            71351611-9
            71351612-6
            71351700-0
            71351710-3
            71351720-6
            71351730-9
            71351800-1
            71351810-4
            71351811-1
            71351820-7
            71351900-2
            71351910-5
            71351911-2
            71351912-9
            71351913-6
            71351914-3
            71351920-2
            71351921-2
            71351922-2
            71351923-2
            71351924-2
            71352000-0
            71352100-1
            71352110-4
            71352120-7
            71352130-0
            71352140-3
            71352300-3
            71353000-7
            71353100-8
            71353200-9
            71354000-4
            71354100-5
            71354200-6
            71354300-7
            71354400-8
            71354500-9
            71355000-1
            71355100-2
            71355200-3
            71356000-8
            71356100-9
            71356200-0
            71356300-1
            71356400-2
            71400000-2
            71410000-5
            71420000-8
            71421000-5
            71500000-3
            71510000-6
            71520000-9
            71521000-6
            71530000-2
            71540000-5
            71541000-2
            71550000-8
            71600000-4
            71610000-7
            71620000-0
            71621000-7
            71630000-3
            71631000-0
            71631100-1
            71631200-2
            71631300-3
            71631400-4
            71631420-0
            71631430-3
            71631440-6
            71631450-9
            71631460-2
            71631470-5
            71631480-8
            71631490-1
            71632000-7
            71632100-8
            71632200-9
            71700000-5
            71730000-4
            71731000-1
            71800000-6
            71900000-7
            72000000-5
            72100000-6
            72110000-9
            72120000-2
            72130000-5
            72140000-8
            72150000-1
            72200000-7
            72210000-0
            72211000-7
            72212000-4
            72212100-0
            72212110-3
            72212120-6
            72212121-3
            72212130-9
            72212131-6
            72212132-3
            72212140-2
            72212150-5
            72212160-8
            72212170-1
            72212180-4
            72212190-7
            72212200-1
            72212210-4
            72212211-1
            72212212-8
            72212213-5
            72212214-2
            72212215-9
            72212216-6
            72212217-3
            72212218-0
            72212219-7
            72212220-7
            72212221-4
            72212222-1
            72212223-8
            72212224-5
            72212300-2
            72212310-5
            72212311-2
            72212312-9
            72212313-6
            72212314-3
            72212315-0
            72212316-7
            72212317-4
            72212318-1
            72212320-8
            72212321-5
            72212322-2
            72212323-9
            72212324-6
            72212325-3
            72212326-0
            72212327-7
            72212328-4
            72212330-1
            72212331-8
            72212332-5
            72212333-2
            72212400-3
            72212410-6
            72212411-3
            72212412-0
            72212420-9
            72212421-6
            72212422-3
            72212430-2
            72212440-5
            72212441-2
            72212442-9
            72212443-6
            72212445-0
            72212450-8
            72212451-5
            72212460-1
            72212461-8
            72212462-5
            72212463-2
            72212470-4
            72212480-7
            72212481-4
            72212482-1
            72212490-0
            72212500-4
            72212510-7
            72212511-4
            72212512-1
            72212513-8
            72212514-5
            72212515-2
            72212516-9
            72212517-6
            72212518-3
            72212519-0
            72212520-0
            72212521-7
            72212522-4
            72212600-5
            72212610-8
            72212620-1
            72212630-4
            72212640-7
            72212650-0
            72212660-3
            72212670-6
            72212700-6
            72212710-9
            72212720-2
            72212730-5
            72212731-2
            72212732-9
            72212740-8
            72212750-1
            72212760-4
            72212761-1
            72212770-7
            72212771-4
            72212772-1
            72212780-0
            72212781-7
            72212782-4
            72212783-1
            72212790-3
            72212900-8
            72212910-1
            72212911-8
            72212920-4
            72212930-7
            72212931-4
            72212932-1
            72212940-0
            72212941-7
            72212942-4
            72212960-6
            72212970-9
            72212971-6
            72212972-3
            72212980-2
            72212981-9
            72212982-6
            72212983-3
            72212984-0
            72212985-7
            72212990-5
            72212991-2
            72220000-3
            72221000-0
            72222000-7
            72222100-8
            72222200-9
            72222300-0
            72223000-4
            72224000-1
            72224100-2
            72224200-3
            72225000-8
            72226000-5
            72227000-2
            72228000-9
            72230000-6
            72231000-3
            72232000-0
            72240000-9
            72241000-6
            72242000-3
            72243000-0
            72244000-7
            72245000-4
            72246000-1
            72250000-2
            72251000-9
            72252000-6
            72253000-3
            72253100-4
            72253200-5
            72254000-0
            72254100-1
            72260000-5
            72261000-2
            72262000-9
            72263000-6
            72264000-3
            72265000-0
            72266000-7
            72267000-4
            72267100-0
            72267200-1
            72268000-1
            72300000-8
            72310000-1
            72311000-8
            72311100-9
            72311200-0
            72311300-1
            72312000-5
            72312100-6
            72312200-7
            72313000-2
            72314000-9
            72315000-6
            72315100-7
            72315200-8
            72316000-3
            72317000-0
            72318000-7
            72319000-4
            72320000-4
            72321000-1
            72322000-8
            72330000-2
            72400000-4
            72410000-7
            72411000-4
            72412000-1
            72413000-8
            72414000-5
            72415000-2
            72416000-9
            72417000-6
            72420000-0
            72421000-7
            72422000-4
            72500000-0
            72510000-3
            72511000-0
            72512000-7
            72513000-4
            72514000-1
            72514100-2
            72514200-3
            72514300-4
            72540000-2
            72541000-9
            72541100-0
            72590000-7
            72591000-4
            72600000-6
            72610000-9
            72611000-6
            72700000-7
            72710000-0
            72720000-3
            72800000-8
            72810000-1
            72820000-4
            72900000-9
            72910000-2
            72920000-5
            73000000-2
            73100000-3
            73110000-6
            73111000-3
            73112000-0
            73120000-9
            73200000-4
            73210000-7
            73220000-0
            73300000-5
            73400000-6
            73410000-9
            73420000-2
            73421000-9
            73422000-6
            73423000-3
            73424000-0
            73425000-7
            73426000-4
            73430000-5
            73431000-2
            73432000-9
            73433000-6
            73434000-3
            73435000-0
            73436000-7
            75000000-6
            75100000-7
            75110000-0
            75111000-7
            75111100-8
            75111200-9
            75112000-4
            75112100-5
            75120000-3
            75121000-0
            75122000-7
            75123000-4
            75124000-1
            75125000-8
            75130000-6
            75131000-3
            75131100-4
            75200000-8
            75210000-1
            75211000-8
            75211100-9
            75211110-2
            75211200-0
            75211300-1
            75220000-4
            75221000-1
            75222000-8
            75230000-7
            75231000-4
            75231100-5
            75231200-6
            75231210-9
            75231220-2
            75231230-5
            75231240-8
            75240000-0
            75241000-7
            75241100-8
            75242000-4
            75242100-5
            75242110-8
            75250000-3
            75251000-0
            75251100-1
            75251110-4
            75251120-7
            75252000-7
            75300000-9
            75310000-2
            75311000-9
            75312000-6
            75313000-3
            75313100-4
            75314000-0
            75320000-5
            75330000-8
            75340000-1
            76000000-3
            76100000-4
            76110000-7
            76111000-4
            76120000-0
            76121000-7
            76200000-5
            76210000-8
            76211000-5
            76211100-6
            76211110-9
            76211120-2
            76211200-7
            76300000-6
            76310000-9
            76320000-2
            76330000-5
            76331000-2
            76340000-8
            76400000-7
            76410000-0
            76411000-7
            76411100-8
            76411200-9
            76411300-0
            76411400-1
            76420000-3
            76421000-0
            76422000-7
            76423000-4
            76430000-6
            76431000-3
            76431100-4
            76431200-5
            76431300-6
            76431400-7
            76431500-8
            76431600-9
            76440000-9
            76441000-6
            76442000-3
            76443000-0
            76450000-2
            76460000-5
            76470000-8
            76471000-5
            76472000-2
            76473000-9
            76480000-1
            76490000-4
            76491000-1
            76492000-8
            76500000-8
            76510000-1
            76520000-4
            76521000-1
            76522000-8
            76530000-7
            76531000-4
            76532000-1
            76533000-8
            76534000-5
            76535000-2
            76536000-9
            76537000-6
            76537100-7
            76600000-9
            77000000-0
            77100000-1
            77110000-4
            77111000-1
            77112000-8
            77120000-7
            77200000-2
            77210000-5
            77211000-2
            77211100-3
            77211200-4
            77211300-5
            77211400-6
            77211500-7
            77211600-8
            77220000-8
            77230000-1
            77231000-8
            77231100-9
            77231200-0
            77231300-1
            77231400-2
            77231500-3
            77231600-4
            77231700-5
            77231800-6
            77231900-7
            77300000-3
            77310000-6
            77311000-3
            77312000-0
            77312100-1
            77313000-7
            77314000-4
            77314100-5
            77315000-1
            77320000-9
            77330000-2
            77340000-5
            77341000-2
            77342000-9
            77400000-4
            77500000-5
            77510000-8
            77600000-6
            77610000-9
            77700000-7
            77800000-8
            77810000-1
            77820000-4
            77830000-7
            77840000-0
            77850000-3
            77900000-9
            79000000-4
            79100000-5
            79110000-8
            79111000-5
            79112000-2
            79112100-3
            79120000-1
            79121000-8
            79121100-9
            79130000-4
            79131000-1
            79132000-8
            79132100-9
            79140000-7
            79200000-6
            79210000-9
            79211000-6
            79211100-7
            79211110-0
            79211120-3
            79211200-8
            79212000-3
            79212100-4
            79212110-7
            79212200-5
            79212300-6
            79212400-7
            79212500-8
            79220000-2
            79221000-9
            79222000-6
            79223000-3
            79300000-7
            79310000-0
            79311000-7
            79311100-8
            79311200-9
            79311210-2
            79311300-0
            79311400-1
            79311410-4
            79312000-4
            79313000-1
            79314000-8
            79315000-5
            79320000-3
            79330000-6
            79340000-9
            79341000-6
            79341100-7
            79341200-8
            79341400-0
            79341500-1
            79342000-3
            79342100-4
            79342200-5
            79342300-6
            79342310-9
            79342311-6
            79342320-2
            79342321-9
            79342400-7
            79342410-4
            79400000-8
            79410000-1
            79411000-8
            79411100-9
            79412000-5
            79413000-2
            79414000-9
            79415000-6
            79415200-8
            79416000-3
            79416100-4
            79416200-5
            79417000-0
            79418000-7
            79419000-4
            79420000-4
            79421000-1
            79421100-2
            79421200-3
            79422000-8
            79430000-7
            79500000-9
            79510000-2
            79511000-9
            79512000-6
            79520000-5
            79521000-2
            79530000-8
            79540000-1
            79550000-4
            79551000-1
            79552000-8
            79553000-5
            79560000-7
            79570000-0
            79571000-7
            79600000-0
            79610000-3
            79611000-0
            79612000-7
            79613000-4
            79620000-6
            79621000-3
            79622000-0
            79623000-7
            79624000-4
            79625000-1
            79630000-9
            79631000-6
            79632000-3
            79633000-0
            79634000-7
            79635000-4
            79700000-1
            79710000-4
            79711000-1
            79713000-5
            79714000-2
            79714100-3
            79714110-6
            79715000-9
            79716000-6
            79720000-7
            79721000-4
            79722000-1
            79723000-8
            79800000-2
            79810000-5
            79811000-2
            79812000-9
            79820000-8
            79821000-5
            79821100-6
            79822000-2
            79822100-3
            79822200-4
            79822300-5
            79822400-6
            79822500-7
            79823000-9
            79824000-6
            79900000-3
            79910000-6
            79920000-9
            79921000-6
            79930000-2
            79931000-9
            79932000-6
            79933000-3
            79934000-0
            79940000-5
            79941000-2
            79950000-8
            79951000-5
            79952000-2
            79952100-3
            79953000-9
            79954000-6
            79955000-3
            79956000-0
            79957000-7
            79960000-1
            79961000-8
            79961100-9
            79961200-0
            79961300-1
            79961310-4
            79961320-7
            79961330-0
            79961340-3
            79961350-6
            79962000-5
            79963000-2
            79970000-4
            79971000-1
            79971100-2
            79971200-3
            79972000-8
            79972100-9
            79980000-7
            79990000-0
            79991000-7
            79992000-4
            79993000-1
            79993100-2
            79994000-8
            79995000-5
            79995100-6
            79995200-7
            79996000-2
            79996100-3
            79997000-9
            79998000-6
            79999000-3
            79999100-4
            79999200-5
            80000000-4
            80100000-5
            80110000-8
            80200000-6
            80210000-9
            80211000-6
            80212000-3
            80300000-7
            80310000-0
            80320000-3
            80330000-6
            80340000-9
            80400000-8
            80410000-1
            80411000-8
            80411100-9
            80411200-0
            80412000-5
            80413000-2
            80414000-9
            80415000-6
            80420000-4
            80430000-7
            80490000-5
            80500000-9
            80510000-2
            80511000-9
            80512000-6
            80513000-3
            80520000-5
            80521000-2
            80522000-9
            80530000-8
            80531000-5
            80531100-6
            80531200-7
            80532000-2
            80533000-9
            80533100-0
            80533200-1
            80540000-1
            80550000-4
            80560000-7
            80561000-4
            80562000-1
            80570000-0
            80580000-3
            80590000-6
            80600000-0
            80610000-3
            80620000-6
            80630000-9
            80640000-2
            80650000-5
            80660000-8
            85000000-9
            85100000-0
            85110000-3
            85111000-0
            85111100-1
            85111200-2
            85111300-3
            85111310-6
            85111320-9
            85111400-4
            85111500-5
            85111600-6
            85111700-7
            85111800-8
            85111810-1
            85111820-4
            85111900-9
            85112000-7
            85112100-8
            85112200-9
            85120000-6
            85121000-3
            85121100-4
            85121200-5
            85121210-8
            85121220-1
            85121230-4
            85121231-1
            85121232-8
            85121240-7
            85121250-0
            85121251-7
            85121252-4
            85121270-6
            85121271-3
            85121280-9
            85121281-6
            85121282-3
            85121283-0
            85121290-2
            85121291-9
            85121292-6
            85121300-6
            85130000-9
            85131000-6
            85131100-7
            85131110-0
            85140000-2
            85141000-9
            85141100-0
            85141200-1
            85141210-4
            85141211-1
            85141220-7
            85142000-6
            85142100-7
            85142200-8
            85142300-9
            85142400-0
            85143000-3
            85144000-0
            85144100-1
            85145000-7
            85146000-4
            85146100-5
            85146200-6
            85147000-1
            85148000-8
            85149000-5
            85150000-5
            85160000-8
            85170000-1
            85171000-8
            85172000-5
            85200000-1
            85210000-3
            85300000-2
            85310000-5
            85311000-2
            85311100-3
            85311200-4
            85311300-5
            85312000-9
            85312100-0
            85312110-3
            85312120-6
            85312200-1
            85312300-2
            85312310-5
            85312320-8
            85312330-1
            85312400-3
            85312500-4
            85312510-7
            85320000-8
            85321000-5
            85322000-2
            85323000-9
            90000000-7
            90400000-1
            90410000-4
            90420000-7
            90430000-0
            90440000-3
            90450000-6
            90460000-9
            90470000-2
            90480000-5
            90481000-2
            90490000-8
            90491000-5
            90492000-2
            90500000-2
            90510000-5
            90511000-2
            90511100-3
            90511200-4
            90511300-5
            90511400-6
            90512000-9
            90513000-6
            90513100-7
            90513200-8
            90513300-9
            90513400-0
            90513500-1
            90513600-2
            90513700-3
            90513800-4
            90513900-5
            90514000-3
            90520000-8
            90521000-5
            90521100-6
            90521200-7
            90521300-8
            90521400-9
            90521410-2
            90521420-5
            90521500-0
            90521510-3
            90521520-6
            90522000-2
            90522100-3
            90522200-4
            90522300-5
            90522400-6
            90523000-9
            90523100-0
            90523200-1
            90523300-2
            90524000-6
            90524100-7
            90524200-8
            90524300-9
            90524400-0
            90530000-1
            90531000-8
            90532000-5
            90533000-2
            90600000-3
            90610000-6
            90611000-3
            90612000-0
            90620000-9
            90630000-2
            90640000-5
            90641000-2
            90642000-9
            90650000-8
            90660000-1
            90670000-4
            90680000-7
            90690000-0
            90700000-4
            90710000-7
            90711000-4
            90711100-5
            90711200-6
            90711300-7
            90711400-8
            90711500-9
            90712000-1
            90712100-2
            90712200-3
            90712300-4
            90712400-5
            90712500-6
            90713000-8
            90713100-9
            90714000-5
            90714100-6
            90714200-7
            90714300-8
            90714400-9
            90714500-0
            90714600-1
            90715000-2
            90715100-3
            90715110-6
            90715120-9
            90715200-4
            90715210-7
            90715220-0
            90715230-3
            90715240-6
            90715250-9
            90715260-2
            90715270-5
            90715280-8
            90720000-0
            90721000-7
            90721100-8
            90721200-9
            90721300-0
            90721400-1
            90721500-2
            90721600-3
            90721700-4
            90721800-5
            90722000-4
            90722100-5
            90722200-6
            90722300-7
            90730000-3
            90731000-0
            90731100-1
            90731200-2
            90731210-5
            90731300-3
            90731400-4
            90731500-5
            90731600-6
            90731700-7
            90731800-8
            90731900-9
            90732000-7
            90732100-8
            90732200-9
            90732300-0
            90732400-1
            90732500-2
            90732600-3
            90732700-4
            90732800-5
            90732900-6
            90732910-9
            90732920-2
            90733000-4
            90733100-5
            90733200-6
            90733300-7
            90733400-8
            90733500-9
            90733600-0
            90733700-1
            90733800-2
            90733900-3
            90740000-6
            90741000-3
            90741100-4
            90741200-5
            90741300-6
            90742000-0
            90742100-1
            90742200-2
            90742300-3
            90742400-4
            90743000-7
            90743100-8
            90743200-9
            90900000-6
            90910000-9
            90911000-6
            90911100-7
            90911200-8
            90911300-9
            90912000-3
            90913000-0
            90913100-1
            90913200-2
            90914000-7
            90915000-4
            90916000-1
            90917000-8
            90918000-5
            90919000-2
            90919100-3
            90919200-4
            90919300-5
            90920000-2
            90921000-9
            90922000-6
            90923000-3
            90924000-0
            92000000-1
            92100000-2
            92110000-5
            92111000-2
            92111100-3
            92111200-4
            92111210-7
            92111220-0
            92111230-3
            92111240-6
            92111250-9
            92111260-2
            92111300-5
            92111310-8
            92111320-1
            92112000-9
            92120000-8
            92121000-5
            92122000-2
            92130000-1
            92140000-4
            92200000-3
            92210000-6
            92211000-3
            92213000-7
            92214000-4
            92215000-1
            92216000-8
            92217000-5
            92220000-9
            92221000-6
            92222000-3
            92224000-7
            92225000-4
            92225100-7
            92226000-1
            92230000-2
            92231000-9
            92232000-6
            92300000-4
            92310000-7
            92311000-4
            92312000-1
            92312100-2
            92312110-5
            92312120-8
            92312130-1
            92312140-4
            92312200-3
            92312210-6
            92312211-3
            92312212-0
            92312213-7
            92312220-9
            92312230-2
            92312240-5
            92312250-8
            92312251-5
            92320000-0
            92330000-3
            92331000-0
            92331100-1
            92331200-2
            92331210-5
            92332000-7
            92340000-6
            92341000-3
            92342000-0
            92342100-1
            92342200-2
            92350000-9
            92351000-6
            92351100-7
            92351200-8
            92352000-3
            92352100-4
            92352200-5
            92360000-2
            92370000-5
            92400000-5
            92500000-6
            92510000-9
            92511000-6
            92512000-3
            92512100-4
            92520000-2
            92521000-9
            92521100-0
            92521200-1
            92521210-4
            92521220-7
            92522000-6
            92522100-7
            92522200-8
            92530000-5
            92531000-2
            92532000-9
            92533000-6
            92534000-3
            92600000-7
            92610000-0
            92620000-3
            92621000-0
            92622000-7
            92700000-8
            98000000-3
            98100000-4
            98110000-7
            98111000-4
            98112000-1
            98113000-8
            98113100-9
            98120000-0
            98130000-3
            98131000-0
            98132000-7
            98133000-4
            98133100-5
            98133110-8
            98200000-5
            98300000-6
            98310000-9
            98311000-6
            98311100-7
            98311200-8
            98312000-3
            98312100-4
            98313000-0
            98314000-7
            98315000-4
            98316000-1
            98320000-2
            98321000-9
            98321100-0
            98322000-6
            98322100-7
            98322110-0
            98322120-3
            98322130-6
            98322140-9
            98330000-5
            98331000-2
            98332000-9
            98333000-6
            98334000-3
            98336000-7
            98340000-8
            98341000-5
            98341100-6
            98341110-9
            98341120-2
            98341130-5
            98341140-8
            98342000-2
            98350000-1
            98351000-8
            98351100-9
            98351110-2
            98360000-4
            98361000-1
            98362000-8
            98362100-9
            98363000-5
            98370000-7
            98371000-4
            98371100-5
            98371110-8
            98371111-5
            98371120-1
            98371200-6
            98380000-0
            98390000-3
            98391000-0
            98392000-7
            98393000-4
            98394000-1
            98395000-8
            98396000-5
            98500000-8
            98510000-1
            98511000-8
            98512000-5
            98513000-2
            98513100-3
            98513200-4
            98513300-5
            98513310-8
            98514000-9
            98900000-2
            98910000-5  
        "; 
        
        $cpvs = explode("\n", trim($cpvs)); 
        $codes = explode("\n", trim($codes)); 
        
        foreach($cpvs as $k => $cpv) {
            $cpv = trim($cpv); 
            $code = trim($codes[$k]);
            \App\Models\Cpv::create([
                'name' => $cpv,
                'code' => $code
            ]); 
        }
    }
}
