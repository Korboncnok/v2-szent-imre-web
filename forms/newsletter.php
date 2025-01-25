<?php
// Autoload beillesztése (Composer esetén)
require __DIR__ . '/../vendor/autoload.php';

use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\CreateContact;

// Hibakezelés bekapcsolása
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ellenőrizze, hogy az űrlap elküldése POST kéréssel történt-e
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ellenőrizze, hogy az e-mail cím meg van-e adva
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];

        // API kulcs beállítása
        $apiKey = getenv('BREVO_API_KEY');
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', $apiKey);

        // ContactsApi példányosítása
        $apiInstance = new ContactsApi(
            new GuzzleHttp\Client(),
            $config
        );

        // Új kapcsolat létrehozása
        $createContact = new CreateContact();
        $createContact['email'] = $email;
        $createContact['listIds'] = [2]; // Helyettesítsd a valós lista azonosítóval

        try {
            // Kapcsolat hozzáadása a Brevo-hoz
            $result = $apiInstance->createContact($createContact);

            // Sikeres válasz küldése
            http_response_code(200);
            echo json_encode(['message' => 'Sikeres feliratkozás!']);
        } catch (Exception $e) {
            // Hiba esetén hibaüzenet küldése
            http_response_code(400);
            echo json_encode(['message' => 'Sikertelen feliratkozás: ' . $e->getMessage()]);
        }
    } else {
        // Ha az e-mail cím hiányzik
        http_response_code(400);
        echo json_encode(['message' => 'Kérjük, adja meg az e-mail címét!']);
    }
} else {
    // Ha a kérés nem POST
    http_response_code(405);
    echo json_encode(['message' => 'Érvénytelen kérés!']);
}
?>