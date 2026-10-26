document.addEventListener('DOMContentLoaded', function () {
    // Toggle navbar (mobile)
    var toggle = document.getElementById('nav-toggle');
    var navbar = document.getElementById('navbar');
    if (toggle && navbar) {
        toggle.addEventListener('click', function () {
            navbar.classList.toggle('open');
        });
    }

    // Preview status deteksi di form input
    var score = document.getElementById('confidence_score');
    var preview = document.getElementById('preview-status');
    function updatePreview() {
        if (!score || !preview || score.value === '') return;
        var v = parseInt(score.value, 10);
        preview.className = 'preview';
        if (v < 50) {
            preview.textContent = '⚠️ Tidak Pasti – Perlu verifikasi manual oleh petugas';
            preview.classList.add('gray');
        } else if (v <= 80) {
            preview.textContent = '🔍 Indikasi Hama – Lakukan pemantauan intensif';
            preview.classList.add('yellow');
        } else {
            preview.textContent = '🚨 Hama Terkonfirmasi – Segera lakukan pengendalian hama';
            preview.classList.add('red');
        }
    }
    if (score) {
        score.addEventListener('input', updatePreview);
        updatePreview();
    }

    // Filter pencarian tabel riwayat
    var cari = document.getElementById('cari');
    if (cari) {
        cari.addEventListener('input', function () {
            var q = cari.value.toLowerCase();
            document.querySelectorAll('#tabel-riwayat tbody tr').forEach(function (tr) {
                tr.style.display = tr.textContent.toLowerCase().includes(q) ? '' : 'none';
            });
        });
    }
});
