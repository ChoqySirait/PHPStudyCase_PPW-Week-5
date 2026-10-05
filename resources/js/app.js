import './bootstrap';

// Skrip interaktif sederhana saat halaman selesai dimuat
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const submitBtn = form?.querySelector('button[type="submit"]');

    // Menampilkan efek loading pada tombol saat form dikirim
    if (form && submitBtn) {
        form.addEventListener('submit', () => {
            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>Menyimpan...`;
        });
    }
});
