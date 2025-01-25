<?php
// Hibakezelés bekapcsolása
error_reporting(E_ALL);
ini_set('display_errors', 1);

$apiKey = getenv('BREVO_API_KEY'); // Brevo API kulcs

// Ellenőrizze, hogy az űrlap elküldése POST kéréssel történt-e
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ellenőrizze, hogy az e-mail cím meg van-e adva
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email']; // Űrlapból érkező e-mail cím

        // cURL inicializálása
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.brevo.com/v3/contacts",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'email' => $email,
            'listIds' => [2], // Lista azonosítók
            'updateEnabled' => false
          ]),
          CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "api-key: $apiKey",
            "content-type: application/json"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            // Hiba esetén hibaüzenet küldése
            http_response_code(400);
            echo json_encode(['message' => 'cURL Error: ' . $err]);
        } else {
            // Sikeres válasz küldése
            http_response_code(200);
            echo json_encode(['message' => 'Sikeres feliratkozás! ERROR: ' . $response]);
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