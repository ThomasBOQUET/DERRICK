<?php

$titre1array = array(
'Le Chemin',
'La Mort',
'Une Affaire',
'Le Crime',
'Attentat',
'Une Visite',
'Le Sang',
'Parfum',
'L\'Homme',
'La Peur',
'Tandem',
'Piège',
'Le Mystère',

);
$keytitre1 = array_rand($titre1array);
$titre1 = array_rand($titre1array, 1);


$titre2array = array(
    ' sur la Voie Férée',
    ' à Berlin',
    ' d\'un Artiste',
    ' du Trans Orient Express',
    ' de Derrick',
    ' de la Mort',
    ' du Crime',
    ' de Kiel',
    ' en Nuisette',
    ' inutile',
    ' du Parc',
    ' au Pirée',
    ' d\'un Italien',
    
    );
    $keytitre2 = array_rand($titre2array);
    $titre2 = array_rand($titre2array, 1);


    $part1array = array(
        'En rentrant d\'une soirée, les Stettner demandent assistance dans une maison où la porte est restée ouverte. Ils trouvent un homme mort.',
        'Martin Gericke, courtier en finances, est régulièrement menacé de mort par téléphone. Cette fois-ci, les auteurs des appels anonymes passent à l\'acte.',
        'Bennecke, l\'intendant de Heinrich Gruga, propriétaire de nombreuses brasseries et restaurants, est tué, le crâne fracassé par des voleurs qu\'il a imprudemment voulu poursuivre et mettre en fuite.',
        'Une femme est assassinée dans sa maison de campagne. Son mari, de 15 ans son cadet, a une amante très jeune, Johanna.',
        'Helga attend un enfant, mais son fiancé Erich veut absolument qu\'elle avorte. La jeune femme veut le garder à tout prix, et jure de le dire à tous. Dans un accès de rage, il la noie.',
        'Anita Wenger, se sentant grandement menacée, et appelle la police depuis un bar, le Flamingo. A l\'arrivée des agents, la femme est retrouvée morte, écrasée par une voiture.',
        'Alwin Merz, un photographe, est poursuivi par 3 hommes dans le Métro. Après avoir récupéré une pellicule dans son appareil photo, ils le jettent sous le train.',
        'Egon Sebald, dit \'Blacky\', se fait abattre dans le parking souterrain d\'une discothèque. Il a été attiré sous un faux prétexte par une fille au téléphone, Manuela.',
        'Ewald Bienert appelle sa femme depuis un bar, il entend des bruits de lutte et les hurlements de sa femme. Il se précipite chez lui et la trouve morte, assassinée.',
        'Durant ses vacances, Derrick rencontre Albert Grosser et sa nouvelle jeune fiancée, Gabriele Voss. Grosser est retrouvé abattu dans sa chambre d\'hôtel.',
        'Achim Moldau, qui veut entrer dans une bande de cambrioleurs chevronnés, brûle la priorité à la voiture des Hofstetter, qui finit sa course contre un arbre. La passagère est tuée sur le coup.',
        'Ingo Rolfs se présente au bureau de Derrick et réfère les menaces de mort proférées contre son beau-père, Rudolf Voss, remarié depuis 2 ans avec sa mère, Nadine. Ingo déteste ouvertement son beau-père. Klein l\'accompagne chez lui et découvre Voss abattu.',
        'Rudolf Wiegand est repêché in extremis alors que son bateau coule sur le lac. Selon ses dires, sa femme, Ursula, s\'est noyée lors du naufrage.',
        
        );
        $keypart1 = array_rand($part1array);
        $part1 = array_rand($part1array, 1);

        $part2array = array(
            ' Tour à tour, plusieurs hommes sont soupçonnés,',
            ' Son père, Oskar Holler, le tenancier du bistrot où travaille aussi Helga, l\'aide à faire disparaitre les preuves, et profite de l’intérêt un peu maladroit de Bruno, le simplet du village, pour dévier les soupçons sur le pauvre jeune homme sans défense,',
            ' Seule erreur, pendant l\'agression, le coupable perd son stylo vert que Seibach avait remarqué la veille lors d\'une partie de cartes qu\'ils ont joué ensemble,',
            ' Ce dernier profite de la situation pour s\'installer dans la somptueuse maison de Karusska, avec la compagne de la victime, pour avoir enfin la belle vie.',
            ' L\'agent de sécurité qui à tout vu, semble évasif et distrait,',
            ' Malheureusement, le temps de l\'amener chez un médecin, la victime ne respire plus. Le père de Horst, avec l\'aide de son ex-femme, va tout faire pour dévier les soupçons et monter de toutes pièces un faux témoignage,',
            ' Malgré les soupçons qui pèsent sur lui, Kamrau nie le crime,',
            ' Derrick réussit à communiquer avec le témoin, mais son témoignage n\'est pas valable,',
            ' Trop tard pour le sauver,',
            ' Sa mère cherche absolument à savoir qui a pu vouloir sa mort. Elle se heurte néanmoins aux réticences de Paul et Gabriele, ses 2 autres enfants, avec qui vivait la victime,',
            ' L\'inspecteur met un point d\'honneur à régler la question lui-même, contre l\'avis de tous ses collègues, à commencer par son ami de toujours,',
            ' Derrick et Klein arrêtent Arnold Leskow, déjà fiché par la police, grâce au portrait robot établi par un témoin,',
            ' Quatre semaines plus tard, le témoin est retrouvé poignardé dans le hall d\'entrée de son immeuble,',
            
            );
            $keypart2 = array_rand($part2array);
            $part2 = array_rand($part2array, 1);

            $part3array = array(
                ' mais Derrick n\'a pas dis son dernier mot.',
                ' mais Derrick va mettre la pression sur l\'entourage de la victime.',
                ' mais Derrick et Klein vont s\'occuper de lui remettre les pendules à l\'heure.',
                ' mais Derrick veut faire tomber le vrai meurtrier.',
                ' même Derrick en est troublé...Est-ce la clé de l\'énigme?',
                ' et Derrick et Klein commencent à comprendre tous ceux qui avaient un mobile pour éliminer le victime.',
                ' Derrick comprend que la résistance sera farouche.',
                ' Derrick commence à s\'intéresser de près à la nièce de la victime, Vera.',
                ' et pour Derrick et Klein, le fautif est tout désigné.',
                ' le coupable se confesse à Derrick...mais n\'admet pas son crime pour autant...Klein arrivera t\'il à faire craquer le responsable?' ,
                ' mais Derrick, aidé de la psychologue Sophie Lauer, n\'est pas dupe.',
                ' mais le légiste n\'est pas convaincu, et le réfère à Derrick et Klein.',
                ' et le Dr Fasold aide Derrick et Klein dans leur enquête, en les emmenant dans tous les lieux où cela peut être utile.',
                
                );
                $keypart3 = array_rand($part3array);
                $part3 = array_rand($part3array, 1);

?>