$(document).ready(function () {
    // Lấy ID game từ URL
    function getGameIdFromURL() {
        const params = new URLSearchParams(window.location.search);
        return params.get("id");
    }

    const gameId = getGameIdFromURL();
    console.log(gameId)

    if (!gameId) {
        $('#game-detail').html("<p style='color:red;'>Không có mã game được cung cấp.</p>");
        return;
    }

    $.ajax({
        url: "./php/getGame.php",
        method: "GET",
        data: {game_id: gameId},
        dataType: "json",
        success: function (response) {
            console.log(response)
            if (response.success) {
                const game = response.game;

                $(".game-title").text(game.title);
                $(".game-platform").text("Nền tảng: " + game.platform);
                $(".game-release").text("Ngày phát hành: " + game.release_date);
                $(".game-price").text("Giá: " + Number(game.price).toLocaleString() + "đ");
                $(".game-developer").text("Nhà phát triển: " + game.developer);
                $(".game-description p").text(game.description);

                const coverPath = game.cover_image ? `${game.cover_image}` : './assets/images/GTA6_wallpaper.jpg';
                $(".game-cover").attr("src", coverPath);
            } else {
                $('#game-detail').html(`<p style='color:red;'>${response.message || "Không tìm thấy game."}</p>`);
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
            console.error("Response Text:", xhr.responseText);
            $('#game-detail').html("<p style='color:red;'>Lỗi khi tải dữ liệu game. Kiểm tra console để biết thêm chi tiết.</p>");
        }
    });
});
