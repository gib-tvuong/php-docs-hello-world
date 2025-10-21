<?php

echo "Hello Azure!";

// **********

$webhookUrl = 'https://default39259deab6fa4fc7bc64d5e00a9670.76.environment.api.powerplatform.com:443/powerautomate/automations/direct/workflows/d060a5c07b5243068f80c6e69a506626/triggers/manual/paths/invoke?api-version=1&sp=/triggers/manual/run&sv=1.0&sig=IarSkmIM-bpE0PreDYlePuN7afwNrPjf8u55U4LDiNU'; // Replace with your actual URL

$message = [
    'message' => 'Hello from your Azure Web App!',
    'user' => 'azure User'
];

$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode === 200) {
    echo "Notification sent successfully!";
} else {
    echo "Failed to send notification. HTTP Code: " . $httpCode . " Response: " . $response;
}

curl_close($ch);