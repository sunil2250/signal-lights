<?php
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
 
    if (isset($input['sequence']) && isset($input['greenInterval']) && isset($input['yellowInterval'])) {
        $sequence = $input['sequence'];
        $greenInterval = $input['greenInterval'];
        $yellowInterval = $input['yellowInterval'];

       
        if (count($sequence) === 4 && is_numeric($greenInterval) && is_numeric($yellowInterval)) {
            
            echo json_encode([
                'success' => true,
                'sequence' => $sequence,
                'greenInterval' => $greenInterval,
                'yellowInterval' => $yellowInterval
            ]);
            exit();
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid data received.'
            ]);
            exit();
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Missing required fields.'
        ]);
        exit();
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
    exit();
}
?>
