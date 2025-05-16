<?php
// Bao gồm lớp Database
require_once 'Database.php';

// Lấy mã game từ URL
if (isset($_GET['game_id'])) {
    $gameId = $_GET['game_id'];

    // Sử dụng Singleton để lấy kết nối
    $db = new Database;
    $conn = $db->getConnection();

    // Truy vấn game theo game_id
    $sql = "SELECT g.game_id, g.title, g.description, g.price, g.cover_image, g.platform, g.release_date, d.name as developer
            FROM games g
            LEFT JOIN developers d ON g.developer_id = d.developer_id
            WHERE g.game_id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $gameId);  // "i" là kiểu dữ liệu integer
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $game = $result->fetch_assoc();
            // Trả về dữ liệu game dưới dạng JSON
            echo json_encode([
                'success' => true,
                'game' => $game
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Game không tồn tại.'
            ]);
        }
        
        $stmt->close();
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Lỗi khi chuẩn bị truy vấn.'
        ]);
    }

    // Đóng kết nối
    $db->closeConnection();
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Không có mã game được cung cấp.'
    ]);
}
?>
