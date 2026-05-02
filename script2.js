$(document).ready(function () {

    var ratingStore = {};
    var selectedRatings = {};

    var books = {
        1: { title: "Tan Malaka - Menuju Republik Indonesia", img: "https://covers.openlibrary.org/b/id/8739161-S.jpg" },
        2: { title: "Jalaluddin Rumi - Fihi Ma Fihi", img: "https://covers.openlibrary.org/b/id/12547413-S.jpg" },
        3: { title: "Pramoedya A. Toer - Bumi Manusia", img: "https://covers.openlibrary.org/b/id/8231856-S.jpg" },
        4: { title: "Andrea Hirata - Laskar Pelangi", img: "https://covers.openlibrary.org/b/id/8945509-S.jpg" }
    };

    $(".star-input .star").on("mouseenter", function () {
        var val = parseInt($(this).data("value"));
        var bookId = $(this).closest(".star-input").data("book-id");
        $(".star-input[data-book-id='" + bookId + "'] .star").each(function () {
            if (parseInt($(this).data("value")) <= val) {
                $(this).addClass("hovered");
            } else {
                $(this).removeClass("hovered");
            }
        });
    });

    $(".star-input").on("mouseleave", function () {
        var bookId = $(this).data("book-id");
        var current = selectedRatings[bookId] || 0;
        $(this).find(".star").each(function () {
            $(this).removeClass("hovered");
            if (parseInt($(this).data("value")) <= current) {
                $(this).addClass("selected");
            } else {
                $(this).removeClass("selected");
            }
        });
    });

    $(".star-input .star").on("click", function () {
        var val = parseInt($(this).data("value"));
        var bookId = $(this).closest(".star-input").data("book-id");
        selectedRatings[bookId] = val;
        $(".star-input[data-book-id='" + bookId + "'] .star").each(function () {
            if (parseInt($(this).data("value")) <= val) {
                $(this).addClass("selected");
            } else {
                $(this).removeClass("selected");
            }
        });
    });

    $(".btn-submit-rating").on("click", function () {
        var bookId = $(this).data("book-id");
        var rating = selectedRatings[bookId];

        if (!rating) {
            showToast("Pilih bintang terlebih dahulu!");
            return;
        }

        if (!ratingStore[bookId]) {
            ratingStore[bookId] = [];
        }
        ratingStore[bookId].push(rating);

        selectedRatings[bookId] = null;
        $(".star-input[data-book-id='" + bookId + "'] .star").removeClass("selected hovered");

        $("#success-" + bookId).show();
        setTimeout(function () {
            $("#success-" + bookId).hide();
        }, 3000);

        updateOverallRatingSidebar();
        showToast("Rating berhasil disimpan!");
    });

    function updateOverallRatingSidebar() {
        var $container = $("#overallRatingList");
        var hasAny = false;

        $.each(ratingStore, function (id, ratings) {
            if (ratings && ratings.length > 0) hasAny = true;
        });

        if (!hasAny) {
            $container.html('<div style="font-size:13px;color:#888;">Belum ada rating.</div>');
            return;
        }

        var html = "";
        $.each(books, function (bookId, book) {
            var ratings = ratingStore[bookId];
            if (!ratings || ratings.length === 0) return;

            var sum = 0;
            for (var i = 0; i < ratings.length; i++) sum += ratings[i];
            var avg = (sum / ratings.length).toFixed(1);
            var avgInt = Math.round(parseFloat(avg));

            var starsHtml = "";
            for (var s = 1; s <= 5; s++) {
                starsHtml += '<span class="' + (s <= avgInt ? "filled" : "") + '">★</span>';
            }

            html += '<div class="overall-book">';
            html += '<img class="overall-book-img" src="' + book.img + '" alt="' + book.title + '"/>';
            html += '<div class="overall-book-info">';
            html += '<div class="overall-book-title">' + book.title + '</div>';
            html += '<div class="overall-stars">' + starsHtml + '</div>';
            html += '<div class="overall-score">' + avg + ' / 5 &bull; ' + ratings.length + ' ulasan</div>';
            html += '</div></div>';
        });

        $container.empty().html(html);
    }

    function showToast(message) {
        $("#toast").text(message).show();
        setTimeout(function () {
            $("#toast").hide();
        }, 2500);
    }

    $(".tab-bar a").on("click", function (e) {
        e.preventDefault();
        $(".tab-bar a").removeClass("active");
        $(this).addClass("active");
    });

});