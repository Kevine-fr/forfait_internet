<?php

namespace Database\Seeders;

use DateInterval;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Forfait;
use Nette\Utils\DateTime;

class baseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function calculerDateExpiration($dureeEnSecondes) {
            $dateAujourdhui = new DateTime(); // Obtient la date et l'heure actuelles
        
            // Ajoute la durée en secondes à la date d'aujourd'hui
            $dateExpiration = $dateAujourdhui->add(new DateInterval('PT' . $dureeEnSecondes . 'S'));
        
            return $dateExpiration->format('Y-m-d H:i:s'); // Formatte la date d'expiration selon le format souhaité
        }

        $forfait = new Forfait;
        $forfait->nomF = 'Passe Jour';
        $forfait->dureeF = '1 jour';
        $forfait->dateF = calculerDateExpiration(86000);
        $forfait->prixF = 500;
        $forfait->save();

        $passe = new Forfait;
        $passe->nomF = 'Passe hebdomadaire';
        $passe->dureeF = '7 jour';
        $passe->dateF = calculerDateExpiration(604800);
        $passe->prixF = 1500;
        $passe->save();
        
        $internet = new Forfait;
        $internet->nomF = 'Passe Mensuel';
        $internet->dureeF = '30 jour';
        $internet->dateF = calculerDateExpiration(2592000);
        $internet->prixF = 4500;
        $internet->save();


    }
}
